<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use \Kreait\Firebase\Exception\Auth\InvalidPassword;
use Auth;
class FirebaseController extends Controller
{

    function index1(){
        return view('login');
    }


    public function index()
    {
        $firebase = (new Factory)
            ->withServiceAccount(__DIR__.'/donationdata-firebase-adminsdk-a0irl-70eff20ff9.json')
            ->withDatabaseUri('https://donationdata-default-rtdb.firebaseio.com/donorData');
 
        $database = $firebase->createDatabase();
 
        $details = $database->getReference('/');
        // $details=$details->getvalue();

         $details=$details->getvalue() ;
         

         return view('dashboard', ['details1'=>$details]);
    }


    // ---------validate email and password--------------
    function checklogin(Request $request){
 
        $this->validate($request , [

           'email'  => 'required|email',
           'password' => 'required|alphaNum|min:7'
        ]);


        $user_data = array(
           'email'  => $request->get('email'),
           'password' => $request->get('password')

        );

//    ----------Connect with database-----------------
    $firebase = (new Factory)
    ->withServiceAccount(__DIR__.'/donationdata-firebase-adminsdk-a0irl-70eff20ff9.json')
    ->withDatabaseUri('https://donationdata-default-rtdb.firebaseio.com/login');


    // $this->auth = $factory->createAuth();
$database = $firebase->createDatabase();

// ----------fetching data from database------------------------
$details = $database->getReference('/');
// $details=$details->getvalue();

// ------------convert fetched data into an array---------------
 $details=$details->getvalue() ;


for($i=0;$i<sizeOf($details);$i++){
   if( $details[$i]['username']==($user_data['email'])){
    if($details[$i]['password']==($user_data['password'])){
     return $this->index();
    }else{
        return back()->withErrors(['Credentials are incorrect']);  
    }
   }else{
    return back()->withErrors(['Credentials are incorrect']);  
   }
}










   

    // public $auth;

//     public function adminlogin()
//     {
       
//         $firebase = (new Factory)
//             ->withServiceAccount(__DIR__.'/donationdata-firebase-adminsdk-a0irl-70eff20ff9.json')
//             ->withDatabaseUri('https://donationdata-default-rtdb.firebaseio.com/login');
 
 
//             // $this->auth = $factory->createAuth();
//         $database = $firebase->createDatabase();
 
//         $details = $database->getReference('/');
//         // $details=$details->getvalue();

//          $details=$details->getvalue() ;
//         //  try{

//             // print_r($details);
// //         //  if($details->email == $user_data ->email )
// // // {
// //         //  return view('dashboard', ['details1'=>$details]);
  
// if(Auth::attempt($user_data)){
//     return redirect('/dashboard');  
// }else{
//     return back()->withErrors(['Credentials are incorrect']);  
// }

//         // try {  
//         //     $details = app('firebase.auth')->verifyPassword($request ->email, $request->password);  
//         //     //Credentials are correct 
//         //     return redirect('/dashboard'); 
        
//         //  } catch (\Kreait\Firebase\Exception\Auth\InvalidPassword $ex) {  
//         //     return back()->withErrors(['Credentials are incorrect']);  
//         //  }  
//         }
// }
    }
}
