<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class PagesController extends Controller
{
    public function __construct()
    {
        //note: the following requires authentication for the index page. 
        //$this->middleware('auth',['index']); 
    }
    public function index(){
        if (Auth::check())
        {
           return redirect()->to('/posts');
        }
        $title = 'Welcome To Laravel';
        // return view('pages.index', compact('title'));
         
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
        'title' => 'Services',
        'services' => ['Web Design', 'Programming', 'SEO']
        );
       
        return view('pages.services')->with($data);
    }
}
