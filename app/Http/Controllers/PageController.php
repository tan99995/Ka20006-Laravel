<?php

namespace App\Http\Controllers;

use App\Registrationtable;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
    return view('welcome');
    }

    public function login(){
    return view('login');
    }

    public function register(){
    return view('register');
    }

    public function index(){

    $register = Registrationtable::all();

    return $register;

    return view('index');

    }
    
    public function store(){

    $registers = new Registrationtable();

    $registers->username = request('username');
    $registers->email = request('email');
    $registers->institution = request('institution');
    $registers->password = request('password');

    $registers->save();

    return redirect('/register');
    }

}
