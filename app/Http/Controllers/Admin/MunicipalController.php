<?php

namespace App\Http\Controllers\Admin;

use DB;
use PDF;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Survey;
use App\Models\Municipal;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tax;
use Maatwebsite\Excel\Facades\Excel;



class MunicipalController extends Controller
{

    function __construct()
    {
        $this->middleware('role_or_permission:Municipal access|Municipal create|Municipal edit|Municipal delete|Municipal report', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Municipal create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Municipal edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Municipal delete', ['only' => ['destroy']]);
        $this->middleware('role_or_permission:Municipal report', ['only' => ['report']]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

//         $frondate= $request->state_date;
//         $todate = $request->end_date;

//         if($frondate != ""){

//             $municipal = Survey::whereBetween('created_at', [$frondate, Carbon::parse($todate)->endOfDay(),])->get();

//              $user= User::with('form')->paginate(15);  
            
//         }else{

//       $municipal = Survey::latest()->get();



//       $tax= Tax::with('survey')->get();  
//       $municipal = Survey::with('tax')->get(); 


//   $user= User::with('form')->get();  
//   $municipal = Survey::with('username')->latest()->paginate(15); 
  
//         }





$municipal =    DB::table('surveys')

         ->select('*','surveys.unique_id', 'texes.house_tax', 'texes.water_tax', 'texes.other_tax', 'texes.total_tax' )
           ->join('users','surveys.user_id','=','users.id')
        ->join('texes','surveys.id','=','texes.survay_id')->get();

        //  ->where('user_id', $user->id)


// dd($municipal);


        return view('backend.survey-form.index', compact('municipal'));        
    } 


    public function Excel()
    {
        return  Excel::download(new UsersExport, 'municipal.index.xlsx');


    }

    public function exportpdf(Request $request, $id)
    {


   $id= $request->id;

        $municipal = Survey::where('id', $id)->get(); 
        $municipal  = PDF::loadView ('municipal.test',array('municipal'=>$municipal), );
        return $municipal ->download( 'file-pdf.pdf');      
    }



    public function create()
    {
        return view('municipal.new');
    }

    

    public function store(Request $request)
   
    {
        $data= $request->all();
        $forms = Survey::create($data);
        return redirect()->back()->withSuccess('municipality created !!!');
    }


    public function show(Survey $municipal)

    {
        
        return view('backend.survey-form.show', ['municipal' => $municipal]);
    }



    public function edit(Municipal $municipal)
    {
        return view('municipal.edit', ['municipal' => $municipal]);
    }



    public function update(Request $request, Municipal $municipal)
    {
        $municipal->update($request->all());
        return redirect()->back()->withSuccess('Form updated !!!');
    }

    public function destroy(Municipal  $municipal)
    {
        $municipal->delete();
        return redirect()->back()->withSuccess('Data deleted !!!');     
        
    }

    public function search(Request $request)

    {

        if($request->name != "")
        {    
    $municipal =  Survey::where('property_owner_name', 'LIKE', '%'.$request->name."%")->latest()->get();
    return view('backend.survey-form.index', compact('municipal'));   
    
    return Excel::download(new UsersExport ($municipal), 'search.xlsx');
} 

   elseif($request->unique_id != "")

     { 
         $municipal =  Survey::where("unique_id","LIKE","%".$request->unique_id. "%" )->latest()->get();
         return view('backend.survey-form.index', compact('municipal'));
    }
    elseif($request->mobile != "")

  {
         $municipal =  Survey::where("mobile_number","LIKE","%".$request->mobile. "%" )->latest()->get();
         return view('backend.survey-form.index', compact('municipal'));

    }
    elseif($request->aadhaar != "")
    {
    $municipal =  Survey::where("aadhar_card_no",$request->aadhaar )->latest()->get();
    return view('backend.survey-form.index', compact('municipal'));
     } 


     elseif($request->state_date != "")
     {
     $municipal =  Survey::whereBetween("surveys.created_at",[$request->state_date, $request->end_date] )->latest()->get();
     return view('backend.survey-form.index', compact('municipal'));
     

      } 
            
        elseif($request->Staff_unique != "")

        {
            $municipal = user::where("unique_id","=", $request->Staff_unique )
          ->latest()->get();
            foreach ($municipal as $municipal)

      $municipal =  Survey::where('user_id', '=', $municipal->id)->latest()->get();
            return view('backend.survey-form.index', compact('municipal'));     
    
       }

    }

}




