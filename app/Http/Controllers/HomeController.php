<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class HomeController extends Controller
{

    public function __construct()
    {
        
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function faq()
    {
        return view('faq');
    }

    public function how()
    {
        return view('howItworks');
    }

    public function getContact()
    {
        return view('contacts/contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'full_name' => 'min:3',
            'subject' => 'min:5',
            'message' => 'min:10']);
        
        $data = array(
            'email' => $request->email,
            'full_name' => $request->full_name,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );
        
        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->from('bdoud2017@gmail.com');
            $message->to('bdous2017@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your message was sent!');

        // return redirect()->url('/');
    }

    public function form()
    {
        return view('auth/register');
    }
}
