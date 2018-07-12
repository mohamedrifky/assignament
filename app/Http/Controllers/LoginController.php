<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;
use Cookie;
use DB;


class LoginController extends Controller
{
    
   
    protected $username = 'username';
    protected $redirectTo = '/dashboard';
    protected $guard = 'web';

    public function getLogin(){
    	if(Auth::guard('web')->check()){
    		return redirect()->route('dashboard');
    	}
			$count=0;
   			//session(['login_count' => $count]);	
			
    	return view('login');
    }
    public function postLogin(Request $request)
	{
		$count=0;
		
		
		
    	$auth=Auth::guard('web')->attempt(['username'=>$request->username,'password'=>$request->password,'active'=>1]);

    	if($auth){
			
			
			
		
			
			Session::forget('login_count');	
			
    		//return redirect()->route('dashboard');
			
    	}
		
		
			
   		
            

             return redirect()->route('/')->with('loginmessage', 'Username or Password Is Incorrect');
			
    		//	return redirect()->route('/')->with('loginmessage', 'Username or Password Is Incorrect');
    
	}
	
	
	
    public function getLogout()
	
	{
		
    	Auth::guard('web')->logout();
		
		
    	return redirect()->route('/');
		
		
    }

}
