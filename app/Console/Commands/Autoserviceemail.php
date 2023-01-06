<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Mail;
use App\Mail\servicemail;
use App\Models\Service;
use App\Models\Fieldequip;
use App\Models\vendor;
class Autoserviceemail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:servicemail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //If seervice record next due date is within 7 days, get data

        $datas = Service::where('Next_Due_Date', '>=', date('Y-m-d'))
            ->where('Next_Due_Date', '<=', date('Y-m-d', strtotime('+7 days')))
            ->get();

        $vendor = Vendor::where('Premain', 1)->get();


        if ($datas->count() > 0) {
            foreach ($datas as $data) {

                // get Identification number from data
                $id = $data->Identification_No;
                // get record from fieldequip table using id
                $fieldequip = Fieldequip::where('Identification_No', $id)->first();
                // get Int_date from fieldequip
                $int_date = $fieldequip->Int_date;
                $eqnm = $fieldequip->Equipment_Name;

                $team = $fieldequip->type;
                $nextduedate = $data->Next_Due_Date;
                //if type = 1 to 3, teamname = fieldwork
                if ($team == 1 || $team == 2 || $team == 3) {
                    $teamname = 'Fieldwork';
                }
                else if ($team == 4 || $team == 5 || $team == 6) {
                    $teamname = 'Labs';}
                //get location from fieldequip
                $location = $fieldequip->Location;
                //if int_date is yearly, Date_Performed from data is 1 year from now
                if ($int_date == 'Yearly') {
                    $date = date('Y-m-d', strtotime('+1 year', strtotime($data->Date_Performed)));
                }
                //if int_date is monthly, Date_Performed from data is 1 month from now
                else if ($int_date == 'Monthly') {
                    $date = date('Y-m-d', strtotime('+1 month', strtotime($data->Date_Performed)));
                }
                //if int_date is weekly, Date_Performed from data is 1 week from now
                else if ($int_date == 'Weekly') {
                    $date = date('Y-m-d', strtotime('+1 week', strtotime($data->Date_Performed)));
                }
                //if int_date is daily, Date_Performed from data is 1 day from now
                else if ($int_date == 'Daily') {
                    $date = date('Y-m-d', strtotime('+1 day', strtotime($data->Date_Performed)));
                }
                //if int_date is half yearly, Date_Performed from data is 6 months from now
                else if ($int_date == 'Half Yearly') {
                    $date = date('Y-m-d', strtotime('+6 months', strtotime($data->Date_Performed)));
                }
                //if int_date is quarterly, Date_Performed from data is 3 months from now
                else if ($int_date == 'Quarterly') {
                    $date = date('Y-m-d', strtotime('+3 months', strtotime($data->Date_Performed)));
                }
                //if int_date is biennial, Date_Performed from data is 2 years from now
                else if ($int_date == 'Biennial') {
                    $date = date('Y-m-d', strtotime('+2 years', strtotime($data->Date_Performed)));
                }
                //else date = 0
                else {
                    $date = 0;
                }
                foreach ($vendor as $vendors) {
                    $email = $vendors->vendor_email;
                    Mail::to($email)->send(new servicemail($id,$date,$location,$eqnm,$teamname,$nextduedate));
                    Log::info('Sending Mail to ' . $email);
                }
                Log::info('Email already sent');
                echo "Email already sent";
            }
        }
Log::info('Email sent');
        echo "Email sent";
        return 0;
    }
}
