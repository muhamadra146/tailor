<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function galerryindex (){
        return view('pages.pages-galerry');
    }
}
