<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class WelcomeController extends Controller{
    public function hello(){
        return 'Hello Word';
    }
    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Brilli']);
    //     }

    public function greeting(){
            return view('blog.hello')
            ->with('name','Brilli')
            ->with('occupation','Astronaut');
            }
            
}
