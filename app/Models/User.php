<?php
namespace App\Models;

use App\Models\Workassign;
use App\Models\Survey;
use App\Models\Wallet;
use App\Models\Tax;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    /**

     * The attributes that are mass assignable.

     *

     * @var string[]

     */

     protected $guard = 'admin';

    protected $fillable = [

        'user_id',
        'name',
        'last_name',
        'father_name',
        'dob',
        'aadhar_no',
        'remark',
        'phone',
        'email',
        'statces',
        'unique_id',
        'upbtype_id',
        'city_id',
        'ward_id',
        'password',
        'address',
        'uploade_aadhar',
        'uploade_back',
        'profile',
        'aadhar_front',
        'aadhar_back'
    ];



    /**

     * The attributes that should be hidden for serialization.

     *

     * @var array

     */

    protected $hidden = [

        'password',

        'remember_token',

    ];



    /**

     * The attributes that should be cast.

     *

     * @var array

     */

    // protected $casts = [

    //     'email_verified_at' => 'datetime',

    // ];

    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }

    
    public function ulbtype()

    {
        return $this->belongsTo(Ulbtype::class, 'upbtype_id', 'id');
    }



    public function workbod()

    {
        return $this->hasMany(Workassign::class, 'user_id', 'id');
    }


    public function wellate()

    {
        return $this->hasMany(Wallet::class, 'user_id', 'id');
    }

    public function adminName()

    {
        return $this->hasMany(Wallet::class, 'admin_id', 'id');
    }



         // $checkemail = User::where('email',$request->email)->first();
        // if($checkemail){
        //     if(Hash::check($request->password,$checkemail->password)){
        //         $token = $checkemail->createToken('name')->plainTextToken;
        //         dd($token);
        //     }
        //     else{
        //         echo"false";
        //     }
        // }
        //dd($checkemail); 


        public function form()

    {
        return $this->hasMany(Survey::class, 'user_id', 'id');
    }

   
    public function tax()

    {
        return $this->belongsTo(Tax::class, 'survay_id', 'id');
    }
    


}

