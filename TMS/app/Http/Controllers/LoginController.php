<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\logo;
use App\Models\User;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(Navbar $navbar, logo $logo)
    {
        $navbars = $navbar::all();
        $logos = $logo::all();
        return view('layouts.login',compact('navbars','logos'));
    }

    public function validate_login(Request $request)
    {
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            $credentials = $request->only('email','password');

            if(Auth::attempt($credentials))
            {
                
                return redirect('facultydashboard');
            }
            session()->regenerate();

            Session::put('key', 'value');

            return redirect('login')->with('success','login details are not valid');
    }
    public function register(Navbar $navbar, logo $logo)
    {
        $navbars = $navbar::all();
        $logos = $logo::all();
        return view('layouts.registration',compact('navbars','logos'));
    }

    public function validate_registration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $data = $request->all();
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
        return redirect('login')->with('success','Registration completed successfully');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('home');
    }
}




/*

<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Footer;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {

        $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);

        return view('login',compact('navbars','logos','footer'));
    }

    public function validate_login(Request $request)
    {
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            $credentials = $request->only('email','password');
            // $user = Auth::getProvider()->retrieveByCredentials($credentials);
            $remember = $request->has('remember_me');
//    Auth::login($user, $request->get('remember_me'));
//    return $this->authenticated(, $user);

//             $remember_me = $request->has('remember_me') ? true : false;
// // dd($remember_me);
// if($request->get('remember')):
//     $this->setRememberMeExpiration($user);
// endif;
            if(Auth::attempt($credentials, $remember))
            {
                return redirect('courses');

            }

            return redirect('login')->with('success','login details are not valid');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('');
    }
}

*/
