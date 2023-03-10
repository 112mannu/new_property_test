<?php

namespace App\Http\Controllers\Admin;

use DB;
use Exception;
use App\Models\User;
use App\Models\Ulbtype;
use App\Models\Ulbward;
use App\Models\Ulbbodies;
use App\Models\Workassign;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Email;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Spatie\Permission\Models\Permission;


class UserController extends Controller

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


    function __construct()

    {

        $this->middleware('role_or_permission:User access|User create|User edit|User delete', ['only' => ['index', 'show']]);

        $this->middleware('role_or_permission:User create', ['only' => ['create', 'store']]);

        $this->middleware('role_or_permission:User edit', ['only' => ['edit', 'update']]);

        $this->middleware('role_or_permission:User delete', ['only' => ['destroy']]);
    }


    public function index()
    
    {

        $ulb = Ulbtype::with('ulbward')->get();
        $ulbtype = Ulbward::with('ulbtype')->get();
        $ulbboder = Ulbbodies::with('ulbward')->get();
        $ulbward = Ulbward::with('ulbboder')->get();
        $user = User::latest()->get();



        return view('backend.user.index', ['users' => $user]);
    }


    public function create()

    {
        $roles = Role::get();

        return view('backend.user.add', ['roles' => $roles]);
    }




    public function store(Request $request)

    {

        //   $number = substr($request->phone, -5);

        $username = strtoupper(substr($request->name, -5));

        $i = 100001;

        $time = time();

        $unique_id = ('MCD' . $time);

        //dd($unique_id);

        $nrRand = uniqid('Mipl');


        $request->validate([

            'name' => 'required|max:50 ',
            'last_name' => 'required',
            'phone' => 'required|max:12| unique:users',
            'email' => 'required|email|unique:users',
            'city_id',
            'ward_id',
            'upbtype_id'
        ]);

        //  dd($nrRand);

        $user = User::create([

            'name' => $request->name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'statces' => 0,
            'upbtype_id' => $request->upbtype_id,
            'city_id' => $request->city_id,
            'ward_id' => $request->ward_id,
            'unique_id' => $unique_id,
            'password' => bcrypt($nrRand),

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

        return redirect()->back()->withSuccess('User created !!!');
    }

    public function show($id)

    {

        //

    }


    public function edit(User $user)

    {

        $role = Role::get();
        $user->roles;
        return view('setting.user.edit', ['user' => $user, 'roles' => $role]);
    }


    public function update(Request $request, User $user)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required' . $user->id . ',id',
        ]);



        if ($request->password != null) {
            $request->validate([
                'password' => 'required|confirmed'
            ]);

            $validated['password'] = bcrypt($request->password);
        }

        $user->update($validated);
        $user->syncRoles($request->roles);
        return redirect()->back()->withSuccess('User updated !!!');
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


    
    public function getward(Request $request)

    {
        $id = $request->selectedVal;
        $data = DB::table('ulbwards')->where('city_id', $id)->get();
        $option = "";
        foreach ($data as $d) {
            $option .= "<li><input type= 'checkbox'    name='ward_no[]'   value='" . $d->id . "'> <span>" . $d->ward_no . "<span></li>";

        }

        return $option;
    }

    public function serach(Request $request)

    {
        $users   =  user::where('name', 'LIKE', '%'.$request->name."%")
        ->where("unique_id","LIKE","%".$request->unique_id. "%" )
        ->latest()->get();
        return view('backend.user.user-list', compact('users'));        
   }

}
