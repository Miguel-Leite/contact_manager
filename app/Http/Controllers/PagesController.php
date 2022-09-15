<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class PagesController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('pages.index', compact('contacts'));
    }

    public function login()
    {
        return view('pages.login');
    }

    public function addContact()
    {
        return view('pages.add');
    }

    public function updateContact($id)
    {
        $contact = Contact::find($id);

        return view('pages.edit', compact('contact'));
    }
}
