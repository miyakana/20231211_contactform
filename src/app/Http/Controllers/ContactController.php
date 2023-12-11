<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)

    {
        $contact = $request->only(['last_name','first_name', 'gender','email', 'tell','address','building','detail']);
        return view('confirm', compact('contact'));
    }


    public function store(ContactRequest $request)

    {
        $contact = $request->only(['last_name','first_name', 'gender','email', 'tell','address','building','content','detail']);
                Contact::create($contact);
                return view('thanks');
    }

    public function register()
    {
    return view('register');
    }

}