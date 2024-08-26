<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Crypt;

class ContactController extends Controller
{
    public function index(){
        $contacts=Contact::all();

        foreach ($contacts as $contact){
            $contact->name=Crypt::decryptString($contact->name);
            $contact->email=Crypt::decryptString($contact->email);
        }
        
        return view('contact',compact('contacts'));
    }

    public function store() {
        $contact = new Contact();
        $contact->name=Crypt::encryptString('Matheus Souto');
        $contact->email=Crypt::encryptString("matheus@exemplo.com");
        $contact->telefone="(42) 9999-9999";
        $contact->data_nascimento="1997-10-18";
        $contact->save();
    }

    public function update() {
        // Update por ID
        $contact = Contact::find(3);
        $contact->name = "Math Souto";
        $contact->save();

        $contact = Contact::where('name', 'Maria Souza')-> first();
        $contact->name="Mariana";
        $contact->save();
    }

    public function destroy($id) {
        $contact = Contact::find($id);
        $contact->delete();
    }
}
