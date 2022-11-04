<?php
namespace Lucidly\Inspire\Controllers;

use Illuminate\Http\Request;

use Lucidly\Inspire\Inspire ;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();
       return view('Inspire::index', compact('quote'));
    }
    
    // public function index(Inspire $inspire){
    //     $quote = $inspire->justDoIt();

    //          return view('Inspire::index', compact('quote'));
    // }
}