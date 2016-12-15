<?php

namespace otunremmywrites\Http\Controllers;

use Illuminate\Http\Request;
use otunremmywrites\Http\Requests;
use otunremmywrites\Http\Controllers\Controller;

class UserContact extends Controller
{
    //
    public function postContact(Request $request)
    {
        $name = $request->input('name');
        echo $name.'<br>';
        $email = $request->input('email');
        echo $email.'<br>';
        $subject = $request->input('subject');
        echo $subject.'<br>';
        $message = $request->message;
        echo $message.'<br>';
    }
}
