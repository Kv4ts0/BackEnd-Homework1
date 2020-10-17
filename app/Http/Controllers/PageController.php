<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHomePage()
    {
        $title = "Home";

        return view("Index")
        ->with('title', $title)
        ->with('text', 'This is Home page')
        ->with('Theme', 'lightgray')
        ->with('textcolor', 'white')
        ->with('showFooter', true);
        
    }
    public function getContactPage()
    {
        $title = " ";

        return view("Index")
        ->with('title', $title)
        ->with('title', "No title")
        ->with('text', 'This is Contact page')
        ->with('Theme', 'white')
        ->with('textcolor', 'black')
        ->with('showFooter', true); 
    }
    public function getAboutUsPage()
    {
        $title = "About Us";

        return view("Index")
        ->with('title', $title)
        ->with('text', 'This is About us page')
        ->with('Theme', 'white')
        ->with('textcolor', 'black')
        ->with('showFooter', false);
    }
}
