<?php

namespace App\Http\Controllers;

use App\Mail\servicemail;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Session\Session;

class Mail6Controller extends Controller
{
    //email body
    public function sendEmail6(Request $request)
    {
        $session = new Session();
        $eqnm = $request->session()->get('eqnm');
        $loc = $request->session()->get('loc');
        $dep = $request->session()->get('dep');


        Log::info($eqnm);

        $data = [
            'eqnm' => $eqnm,
            'loc' => $loc,
            'dep' => $dep,

        ];
        //try catch send mail
        $vendor = Vendor::where('Premain', 1)->get();
        try {
            foreach ($vendor as $vendors) {
                $email = $vendors->vendor_email;

                \Mail::to($email)->send(new \App\Mail\service3mail($data));
                Log::info('Sending Mail to ' . $email);
            }

            return back()->with('success', 'Email successfully sent!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
