<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Workassign;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Email;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;

class StaffController extends Controller
{
  
    private $from = "mannujha433@gmail.com";
    private $password = "ajzjcsofrxhoiwms";
    private $mailer;
    function sendMail($to, $subject, $html)

    {
        $MAILER_DSN = "gmail://{$this->from}:{$this->password}@default?verify_peer=0";
        $transport = Transport::fromDsn($MAILER_DSN);
        $this->mailer = new Mailer($transport);
        // dd($to);
        $email = (new Email())
            ->from($this->from)
            ->to($to)
            ->subject($subject)
            ->html($html);

        $this->mailer->send($email);
    }


    public function index(Request $request)

    {     

      $user = auth()->user();

    //  $survey = Survey::where('user_id', $user->id)->latest()->get();

      $user = User::where('user_id', $user->id)->latest()->get();

      return view('backend.staff.user-list', ['users' => $user]);

    }

    public function create()

    {     
        $roles = Role::get();
   
        return view('backend.staff.add',['roles' => $roles]);
    }


    public function store(Request $request)

    {
       
        $time = time();
        $unique_id = ($time);
        $nrRand = uniqid('Mipl');


        if($request->hasFile('image'))
        {
          $file = $request->file('image');
          $extension = $file->getClientOriginalExtension();
          $filename = time().'.'.$extension;
          $file->move('public/images',$filename );
        }

        if($request->hasFile('aadhar_front'))
        {
          $file = $request->file('aadhar_front');
          $extension = $file->getClientOriginalExtension();
          $aadhar_front = time().'.'.$extension;
          $file->move('public/images/aaddhar',$aadhar_front );
        }


        if($request->hasFile('aadhar_back'))
        {
          $file = $request->file('aadhar_back');
          $extension = $file->getClientOriginalExtension();
          $aadhar_back = time().'.'.$extension;
          $file->move('public/images/aaddhar',$aadhar_back );
        }


      //  dd($filename);

        $request->validate([
           
            'name' => 'required|max:50 ',
            'last_name' => 'required',
            'father_name' => 'required',
            'dob' => 'required',
            'phone' => 'required|max:12| unique:users',
            'email' => 'required|email|unique:users',
            'aadhar_no' => 'required',
            'remark',
            'address',
            'profile',
            'city_id',
            'ward_id',
            'upbtype_id'
        ]);

 
        $user = User::create([
            'user_id' =>   Auth::user()->id,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'father_name' => $request->father_name,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'email' => $request->email,
            'aadhar_no' => $request->aadhar_no,
            'statces' => 0,
            'city_id' => $request->city_id,
            'remark' => $request->remark,
            'address' => $request->address,
            'upbtype_id' => $request->upbtype_id,
            'ward_id' => $request->ward_id,
            'unique_id' => $unique_id,
            'password' => bcrypt($nrRand),
            'profile'=>$filename,
            'aadhar_front'=>$aadhar_front,
            'aadhar_back'=>$aadhar_back,
             

        ]);

        $this->sendMail($request->email, "Registration successful!", '  <!DOCTYPE html>

        <html>
        <head>
        <style>

table, th, td {

  border: 1px solid black;
}

</style>
            <meta charset="utf-8">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Form</title>
                </head> 
                <body>
                <div><h2 >Hello, ' . $request->name . '</h2>
                    <p>Your account has been created. Below are your login details. </p>
                    <table>
  <tr>
    <th><b>Unique Id</b></th>
    <td>' . $unique_id . '</td>
  </tr>
  <tr>
    <th><b>Password</b></th>
    <td>' . $nrRand . '</td>
  </tr>
</table>  
<p> You will be asked to change your password the first time you log in. </p>      
            </div>               
        </body>
        </html>');


        $user->syncRoles($request->roles);

      //  return redirect()->back()->withSuccess('User Staff created !!!');

        return back()->with('success', 'User created successfully.');
    }



    public function edit($id)

    {
    $user= User::find($id);
        return view('backend.staff.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
    
        $user->update($request->all());
        return redirect()->back()->withSuccess('Staff updated !!!');
    }




    public function destroy(User $user)
    {
 

     $id= $user->id;

     $list = Workassign::where('user_id', '=', $user->id)->first();

        if($list === null)
        {
            $user->delete();
            return redirect()->back()->withSuccess('User deleted !!!');           
        }

        return redirect()->back()->withSuccess('Something went really wrong!');
    }



}
