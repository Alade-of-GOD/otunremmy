<?php

namespace otunremmywrites\Http\Controllers;

use Illuminate\Http\Request;
use otunremmywrites\Http\Requests;
use otunremmywrites\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('second');
    }

    public function showPath(Request $request)
    {
        $uri = $request->path();
        echo '<br>URI: '.$uri;
        $url = $request->url();
        echo '<br>';
        echo 'URL: '.$url;
        $method = $request->method();
        echo '<br>';
        echo 'Method: '.$method;
    }
}
