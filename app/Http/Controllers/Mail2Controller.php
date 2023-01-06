<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Session\Session;

class Mail2Controller extends Controller
{
    //email body
    public function sendEmail2(Request $request)
    {
        $session = new Session();
        $eqnm = $request->session()->get('eqnm');
        $loc = $request->session()->get('loc');
        $dep = $request->session()->get('dep');

        Log::info($eqnm);

        $data = [
            'eqnm' => $eqnm,
            'loc' => $loc,
            'dep' => $dep
        ];
        //try catch send mail
        try {
            \Mail::to('qriotseph@gmail.com')->send(new \App\Mail\operation($data));
            return back()->with('success', 'Email successfully sent! Item back to operation');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
