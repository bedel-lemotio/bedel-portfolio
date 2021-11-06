<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Firestore;
use Google\Cloud\Firestore\FirestoreClient;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
//        static::$db = self::firestoreDatabaseInstance();
//        $this->dbfirestore = $firestore;
//        $this->firestoredatabase = $firestore->database();

    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    function index(){

//        $collectionReference = $this->firestoredatabase->collection('USERS');
//        dd($collectionReference);
//        $recent_users = $collectionReference->orderBy('createdDate', 'desc')->limit(10)->documents();


        return view ('home');
    }


}
