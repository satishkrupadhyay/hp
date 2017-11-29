<?php

namespace Jivoni\Http\Controllers\Auth;

use Jivoni\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use Auth;
use Hash;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    
    //protected $redirectAfterLogout = '/welcome';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
       
    }


    protected function guard()
    {
        return Auth::guard('admin');
    } 




    public function validateCredentials(Request $request) {

        $checkFlag = false;

        $email = $request->email;
        $password = $request->password;

        $userDetails = DB::table('users')
                            ->where('email', '=', $email)
                            ->first();

        if( count($userDetails) == 0 ) {
            echo 1;
        } else {
            $username = $userDetails->name;
            if( !Hash::check($password, $userDetails->password) ) {
                $checkFlag = true;
                echo 2;
            } else {
                $inputs = array(
                    'email' => $request->email,
                    'password' => $request->password,
                );
                if( Auth::attempt($inputs) ) {
                    Session::flash('welcome_message' , "Welcome $username");
                    echo "passed";
                } else {
                    echo "fail";
                }
            }    
        }

    }



        public function validatePharmCredentials(Request $request) {

        $checkFlag = false;

        $email = $request->email;
        $password = $request->password;

        $pharmDetails = DB::table('admins')
                            ->where('store_email', '=', $email)
                            ->first();

        if( count($pharmDetails) == 0 ) {
            echo 1;
        } else {
            $username = $pharmDetails->owner_name;
            if( !Hash::check($password, $pharmDetails->password) ) {
                $checkFlag = true;
                echo 2;
            } else {
                $inputs = array(
                    'store_email' => $request->email,
                    'password' => $request->password,
                );
                if( $this->guard()->attempt($inputs) ) {
                    Session::flash('welcome_message' , "Welcome $username");
                    echo "passed";
                } else {
                    echo "fail";
                }
            }    
        }

    }

    
}
