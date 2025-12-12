<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DemoController extends Controller
{
   public function demo()
   {
       return response()->json(['message' => 'This is a demo response']);
   }

   public function test(Request $request)
   {
       $name = $request->name;
       return View('demo', ['name' => $name]);
   }
}
