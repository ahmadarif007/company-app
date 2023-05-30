<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function saveContactInfo(Request $request){
        $contact  = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email; 
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        
        return redirect()->back()->with('message','Your message has been sent. Thank you!');
    }
    
    public function manageContactInfo(){
        $allContactInfo = Contact::paginate(5);
        return view('admin.contact.manageContactInfo',['allContactInfo' => $allContactInfo]);
    }
    
    public function deleteContactInfo($id){
        $deleteContactInfoById = Contact::where('id',$id)->first();
        $deleteContactInfoById->delete();
         
        return redirect('/manage/contactInfo')->with('message','Contact Info Delete Successfully');
    }
}
