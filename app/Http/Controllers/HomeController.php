<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Kreait\Firebase\Firestore;
use Google\Cloud\Firestore\FirestoreClient;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Firestore $firestore){
        $this->dbfirestore = $firestore;
        $this->firestoredatabase = $firestore->database();

    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    function index(){

        $experienceDocuments = $this->firestoredatabase->collection('ACHIEVEMENTS')->limit(3)->documents();
        $educationDocuments = $this->firestoredatabase->collection('EDUCATION')->limit(3)->documents();
        $experienceDocuments = $this->firestoredatabase->collection('EXPERIENCES')->limit(3)->documents();
        $skillsDocuments = $this->firestoredatabase->collection('SKILLS')->limit(3)->documents();
       // dd($experienceDocuments);
//        $recent_users = $collectionReference->orderBy('createdDate', 'desc')->limit(10)->documents();


        return view ('home');
    }

    function mail(Request $request){


        //dd($request->except('_token'));
        $contact = $request->except('_token');

        if($request->ajax()){
            Mail::to("lemotiobedel@gmail.com")->send(new MailNotify($contact));
            if (Mail::failures()) {
                return response()->Fail('Sorry! Please try again later');
            }else{
                return response()->json([
                    'success'=> true,
                    'type' => "success",
                    'message' => "Great! Successfully send in your mail",
                    'data' => null,
                ]);
            }
        }

        Mail::to("lemotiobedel@gmail.com")->send(new MailNotify($contact));
        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again later');
        }else{
            return response()->json([
                'success'=> true,
                'type' => "success",
                'message' => "Great! Successfully send in your mail",
                'data' => null,
            ]);
        }

    }


}
