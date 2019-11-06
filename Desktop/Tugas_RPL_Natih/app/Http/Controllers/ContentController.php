<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    function contact(Request $request) { //request input
      
        $Name = $request ->input('Name');
        $Name2 = $request->input('Name2');
        $Number = $request->input('Number');
        $Number2 = $request->input('Number2');
        $job = $request->input('job');
        $mail = $request->input('mail');
        $Address = $request->input('Address');
        $Birthday = $request->input('Birthday');

        $buka = fopen('../resources/views/natih.blade.php','a');
        fwrite($buka,"<pre>Nama              : ${Name} ${Name2} </pre>\n");
        fwrite($buka,"<pre>Phone Number      : ${Number} </pre>\n");
        fwrite($buka,"<pre>Work Number       : ${Number2} </pre>\n");
        fwrite($buka,"<pre>Email             : ${mail} </pre>\n");
        fwrite($buka,"<pre>Occupation        : ${job} </pre>\n");
        fwrite($buka,"<pre>Address           : ${Address} </pre>\n");
        fwrite($buka,"<pre>Birthday          : ${Birthday} </pre>\n");
        fwrite($buka,"<hr> \n\n");
        fclose($buka);

        return view('natih'); 
    }
}
