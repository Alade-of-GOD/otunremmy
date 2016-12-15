<?php

namespace otunremmywrites\Http\Controllers;

use Illuminate\Http\Request;
use otunremmywrites\Http\Controllers\Controller;

class UriController extends Controller
{
    //
    public function index(Request $request)
    {
        //usage of path method
        $path = $request->path();
        echo 'Path Method: '.$path;
        echo '<br>';

        // Usage of is method
        $pattern = $request->is('foo/*');
        echo 'is Method: '.$pattern;
        echo '<br>';
        // Usage of url method
        $url = $request->url();
        echo 'URL method: '.$url;
    }
}
