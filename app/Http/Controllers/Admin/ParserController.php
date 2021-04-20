<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParserController extends Controller
{
//    public $type;
//    public $message;

    public function categories()
    {

        return view('admin.parser.categories',
            [
                'meta_title' =>'',
            ]);
    }
}
