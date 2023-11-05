<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\AvailableCats;
use App\Models\About;
use App\Models\Contact;
use App\Models\ContactInfo;

class FrontendController extends Controller
{
    public function index(){
        $gallery = Gallery::all();
        $data = compact('gallery');
        return view('frontend.index')->with($data);
    }

    public function about(){
        $about = About::find(2);
        $data = compact('about');
        return view('frontend.about')->with($data);
    }

    public function available_cats(){
        $availableCats = AvailableCats::all();
        $data = compact('availableCats');
        return view('frontend.available-cats')->with($data);
    }

    public function contact(){
        $info = ContactInfo::find(1);
        $success = '';
        $data = compact('success','info');
        return view('frontend.contact')->with($data);
    }

    public function message(Request $request){

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
            ]
        );

        $message = new Contact;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();

        $success = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Message envoyé!</strong> Merci pour votre message vous serez recontacté prochainement.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
      $data = compact('success');
      return redirect('/contact')->with($data);
    }
}
