<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      // pass the value to view
      $title = "Welcome to the Course";
      // return view('pages.index', compact('title'));
      return view('pages.index')->with('title', $title);
    }

    public function about(){
      // $data = array(
      //   'title' => 'Welcome to the About Us page'
      // );
      // return view('pages.about')->with($data);

      $data = array(
        'title' => 'Welcome To the About Us Page',
        'skills' => ['Web Design', 'Graphic Design', 'PHP Developer','React and Vue Developer']
      );
      return view('pages.about')->with($data);
    }
}
