<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\AvailableCats;
use App\Models\About;
use App\Models\Contact;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.index');
    }

    public function gallery()
    {

        $gallery = Gallery::all();
        $data = compact('gallery');
        return view('backend.gallery')->with($data);
    }

    public function addgallery()
    {
        return view('backend.addgallery');
    }

    public function uploadgallery(Request $request)
    {
        $request->validate(
            [
                'image' => 'required',
            ]
        );

        $gallery = new Gallery;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $request->file('image')->store('public/images');
            $gallery->image = str_replace('public/', '', $imagePath);;
        }
        $gallery->save();
        return redirect('/gallery');
    }

    public function delgallery($id)
    {
        $gallery = Gallery::find($id);
        if (!is_null($gallery)) {
            if ($gallery->image) {
                Storage::delete('public/' . $gallery->image);
            }
            $gallery->delete();
            return redirect('/gallery');
        }
        return redirect('/gallery');
    }

    public function availableCats()
    {
        $availableCats = AvailableCats::all();
        $data = compact('availableCats');
        return view('backend.available_cats')->with($data);
    }

    public function addCats()
    {
        return view('backend.add_available_cats');
    }

    public function storeCats(Request $request)
    {
        $request->validate(
            [
                'image' => 'required',
                'name' => 'required',
                'age' => 'required',
                'weight' => 'required',
                'price' => 'required',
            ]
        );

        $newCat = new AvailableCats;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $request->file('image')->store('public/availableCats');
            $newCat->image = str_replace('public/', '', $imagePath);;
        }
        $newCat->name = $request->name;
        $newCat->age = $request->age;
        $newCat->weight = $request->weight;
        $newCat->price = $request->price;
        $newCat->save();
        return redirect('/availableCats');
    }

    public function updateCat($id){
        $updateCat = AvailableCats::find($id);
        $data = compact('updateCat');
        return view('backend.update_available_cats')->with($data);
    }

    public function editCat(Request $request, $id)
    {
        $cat = AvailableCats::findOrFail($id);

        $cat->name = $request->name;
        $cat->age = $request->age;
        $cat->weight = $request->weight;
        $cat->price = $request->price;

        if ($request->hasFile('image')) {
            if ($cat->image) {
                Storage::delete('public/' . $cat->image);
            }
            $imagePath = $request->file('image')->store('public/availableCats');
            $cat->image = str_replace('public/', '', $imagePath);
        }

        $cat->save();
        return redirect('/availableCats');
    }


    public function deleteCat($id)
    {
        $cat = AvailableCats::find($id);
        if (!is_null($cat)) {
            if ($cat->image) {
                Storage::delete('public/' . $cat->image);
            }
            $cat->delete();
        }
        return redirect('/availableCats');
    }

    public function about(){
        $about = About::find(2);
        $data = compact('about');
        return view('backend.about')->with($data);
    }

    public function editAbout(){
        $about = About::find(2);
        $data = compact('about');
        return view('backend.edit_about')->with($data);
    }

    public function updateAbout(Request $request, $id){
        $updateAbout = About::find($id);

        $updateAbout->heading = $request->heading;
        $updateAbout->para_one = $request->para_one;
        $updateAbout->para_two = $request->para_two;
        $updateAbout->para_three = $request->para_three;
        $updateAbout->para_four = $request->para_four;

        if ($request->hasFile('image')) {
            if ($updateAbout->image) {
                Storage::delete('public/' . $updateAbout->image);
            }
            $imagePath = $request->file('image')->store('public/about');
            $updateAbout->image = str_replace('public/', '', $imagePath);
        }
        $updateAbout->save();
        return redirect('/admin/about');
    }

    public function viewMessages(){
        $messages = Contact::all();
        $data = compact('messages');
        return view('backend.contact')->with($data);
    }

    public function delMessages($id){
        $del = Contact::find($id);
        if(!is_null($del)){
            $del->delete();
            return redirect('/admin/contact');
        }
        return redirect('/admin/contact');
    }

    public function editContact(){
        $contact = ContactInfo::find(1);
        $data = compact('contact');
        return view('backend.update_info')->with($data);
    }

    public function updateContact(Request $request, $id){
        $request->validate(
            [
                'number' => 'required',
                'email' => 'required|email',
                'address' => 'required',
            ]
        );
        $info = ContactInfo::find($id);
        $info->phone = $request->number;
        $info->email = $request->email;
        $info->address = $request->address;
        $info->save();
        return redirect('/admin/contact');
    }

    public function editPassword(){
        $user = User::find(1);
        $data = compact('user');
        return view('backend.update_password')->with($data);
    }

    public function updatePassword(Request $request, $id){
        $request->validate(
            [
                'password' => 'required'
            ]
        );
        $userUpdate = User::find($id);
        $userUpdate->password = $request->password;
        $userUpdate->save();
        return view('backend.index');
    }
}
