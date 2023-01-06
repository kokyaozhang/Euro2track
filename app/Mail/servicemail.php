<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class servicemail extends Mailable
{
    use Queueable, SerializesModels;
    public $data,$date,$location,$eqnm;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $date, $location,$eqnm,$teamname,$nextduedate)
    {
        $this->data = $data;
        $this->date = $date;
        $this->location = $location;
        $this->eqnm = $eqnm;
        $this->teamname = $teamname;
        $this->nextduedate = $nextduedate;
    }




    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return this to email service markdown with data anda date
        return $this->markdown('emails.service')->subject("Service Incoming mail")->with('data', $this->data)->with('date', $this->date)->with('location', $this->location)->with('eqnm', $this->eqnm)->with('teamname', $this->teamname)->with('nextduedate', $this->nextduedate);


        }

}
