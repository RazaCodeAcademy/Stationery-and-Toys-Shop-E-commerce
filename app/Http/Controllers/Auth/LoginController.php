<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider(){
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(){
        $user = Socialite::driver('google')->user();

        $user = User::firstOrCreate([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'provider_id' => $user->getId(),
            'image' => $user->getAvatar(),
        ]);

        $user->roles()->attach(3);

        Auth::Login($user, true);
        return redirect('/user/profile');

    }

    public function redirectTo() {
        $role = Auth::user()->roles;
        // dd($role[0]->name); 
        switch ($role[0]->name) {
            case 'Admin':
                return '/admin/dashboard';
                break;
            case 'Manager':
                return '/manager/dashboard';
                break; 
            
            default:
                return '/user/profile'; 
                break;
        }
    }
    


}
