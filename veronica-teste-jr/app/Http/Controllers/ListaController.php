<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListaRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Resources\Contact as ContactResource;
use Illuminate\Support\Facades\Redirect;

class ListaController extends Controller
{
    //
    public function index(){
        $contacts = Contact::all();
        $contacts = Contact::paginate(10);
        return view('lista', [
            'contacts' => $contacts
        ]);
    }
    public function apiIndex(){
        $contacts = Contact::paginate(10);
        return ContactResource::collection($contacts);
    }

    public function create()
    {

        return view('create');
    }
    public function store(ListaRequest $request)
    {
        $input = $request->validated();
       Contact::create($input);

       return Redirect::route('list');

    }

    public function show(Contact $contact){
        return view('edit', [
            'contact' => $contact
        ]);
    }
    //PUT
    public function update(Contact $contact, ListaRequest $request){

        $input = $request->validated();
        $contact->fill($input);
        $contact->save();
        return Redirect::route('list');
    }

    public function delete(Contact $contact){

        $contact->delete();
        return Redirect::route('list');
    }

}
