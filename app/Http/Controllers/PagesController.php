<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
      $title = 'Welcome to my Portfolio Website';
      return view('pages.index')->with('title', $title);
    }
  
    public function about() {
      $title = 'About me';
      return view('pages.about')->with('title', $title);

    }
  
    public function craft() {
      $data = array(
        'title' => 'My work',
        'crafts' => ['PHP', 'Android Dev', 'Back-End', 'MVC Dev', 'C#', 'Laravel']
      );
      return view('pages.craft')->with($data);
    }
}
