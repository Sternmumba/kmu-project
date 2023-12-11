<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function login(Request $request){
        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt($credentials)){
            $user_role=Auth::user()->role;
         switch($user_role){
            case 0:
                return redirect('super_admin');
                break;
                case 1:
                    return redirect('student_coordinator');
                    break; 
                    case 2:
                        return redirect('hall_warden');
                        break;
                        case 3:
                            return redirect('ict_center');
                            break;
                            case 4:
                                return redirect('dean');
                                break;
                                default:
                                Auth::logout();
                                return redirect('/login')->with('error','oops! you are not allowed to login');
                            }
        }else{
            return redirect('/login');      
         }
    }
}
