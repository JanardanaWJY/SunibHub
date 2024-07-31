<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Routing\Controller;
class PageController extends Controller{
    public function login(){
        return view('login');
    }
    public function signup(){
        return view('signup');
    }
    public function home(){
        return view('thread.show');
    }
}