<?php

namespace App\Http\Controllers;

use App\Rules\WordCount;
use Illuminate\Support\Facades\Validator;
use LDAP\Result;


use Illuminate\Http\Request;

class StartController extends Controller
{

    function sign_in()
    {
        return view('sign_in');
    }
    function sign_in_data(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30|min:3',
            'email' => 'required|ends_with:@gmail.com',
            'password' => 'required',
            'image' => 'required'
        ]);
        // dd($request->all());

        $name    = $request->name;
        $email   = $request->email;
        $password   = $request->password;
        $imgname = rand() . time() . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $imgname);

        return view('info', compact('name', 'email', 'password', 'imgname'));
    }
    function conact()
    {
        return view('conact');
    }

    function conact_data(Request $request)
    {
        $request->validate([
            'fname' => 'required|min:3|max:30',
            'lname' => 'required|min:3|max:30',
            'phone' => 'required',
            'subject' => 'required|min:5|max:15',
            'company' => 'required|min:2|max:10',
            'email' => 'required|ends_with:@gmail.com',
            'description' => ['required', new WordCount(50)],
        ]);

        // dd($request->all());

        $fname = $request->fname;
        $lname = $request->lname;
        $phone = $request->phone;
        $subject = $request->subject;
        $company = $request->company;
        $email = $request->email;
        $description = $request->description;
        return view('con_info', compact('fname',   'lname',  'phone',  'subject',   'company',  'email',  'description'));
    }

    function home()
    {
        return view('home');
    }
    function item()
    {
        return view('item');
    }
    function category()
    {
        return view('category');
    }
    function layout()
    {
        return view('layout');
    }
}
