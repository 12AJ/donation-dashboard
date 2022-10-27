<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    public function index()
    {
        $firebase = (new Factory)
            ->withServiceAccount(__DIR__.'/donationdata-firebase-adminsdk-a0irl-70eff20ff9.json')
            ->withDatabaseUri('https://donationdata-default-rtdb.firebaseio.com');
 
        $database = $firebase->createDatabase();
 
        $details = $database->getReference('/');
        // $details=$details->getvalue();

         $details=$details->getvalue() ;
        //  array($details);
        // print_r($details1[0]);

         return view('dashboard', ['details1'=>$details]);
        // return view('dashboard')->withaaa($aaa);
        // return view('dashboard');
    }
}
