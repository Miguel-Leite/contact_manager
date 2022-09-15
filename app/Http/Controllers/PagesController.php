<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function addContact()
    {
        return view('pages.add');
    }

    public function updateContact()
    {
        return view('pages.edit');
    }
}
