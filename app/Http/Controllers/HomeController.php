<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['sendContact']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function affiche()
    {
         return view('admin.candidat');
    }
    public function sendContact(Request $request){
        $user=array();
        $user['nom']=$request->nom;
        $user['email']=$request->email;
        $user['phone']=$request->phone;
        $user['message']=$request->message;
        Mail::send('emailing.email', ['user' => $user], function ($message) use ($user) {
            $message->from($user['email']);
            $message->to('evalnet.test@ovh.com');
            $message->subject('Message à partie formulaire de contact');
        });
        return response()->json('email sent with success');

    }
}
