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
    $data = [
      'title' => 'Kanya Kila',
      'bio' => 'My name is Kanya Kila, I’m a 30-year-old male, 
                I have been studying I.T since high school. 
                My enthusiasm has helped me to meet some experts in the I.T industry, 
                and gain learning experience from them. 
                I was taught web design by a web expert working for Rhodes University, 
                then I had a follow up at college of programming in Web Development and Desktop Application Development.',
      'skills' => ['SQL','Bootstrap','Laravel','ASP.Net MVC','C#','PHP','HTML/5','CSS/3','JavaScript'],
      'level' => [60,70,50,80,75,60]
    ];
    return view('pages.about')->with($data);

  }

  public function craft() {
    $data = [
      'title' => 'My work',
      'crafts' => ['karsareus','Dreamshare','Back-End','ASP.Net MVC','C#','portfolio']
    ];
    return view('pages.craft')->with($data);
  }
}