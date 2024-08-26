<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ContactController extends Controller
{
    public function index() { 
        $contacts = Contact::all();

        foreach ($contacts as $contact) { 
            $contact->name = Crypt::decryptString($contact->name);
            $contact->email = Crypt::decryptString($contact->email);
        }
        
        return view('contact', compact('contacts'));
    }

    public function store() { 
        $contact = new Contact();
        $contact->name = Crypt::encryptString('Gustavo Kley');
        $contact->email = Crypt::encryptString('gustavok2@gmail.com');
        $contact->telefone = '(42) 99999-0000';
        $contact->data_nascimento = "2005-08-31";
        $contact->save();
    }

    public function update() { 
        $contact = Contact::where('name', 'Gustavo Kley')->first();
        $contact->name = "Joao";
        $contact->email ="joao@gmail.com";
        $contact->save();
    }

    public function destroy($id) { 
        $contact = Contact::find($id);
        $contact->delete();
    }
}
