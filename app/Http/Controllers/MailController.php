<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Session\Session;

class MailController extends Controller
{
    //email body
    public function sendEmail(Request $request)
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
            \Mail::to('qriotseph@gmail.com')->send(new \App\Mail\breakdown($data));
            return back()->with('success', 'Email successfully sent!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
