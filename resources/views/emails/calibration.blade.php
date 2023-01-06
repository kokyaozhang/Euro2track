@component('mail::message')
# Calibration report
{{--retrieve details from mailcontroller--}}


Annual Calibration for {{ $data->Equipment_Name }}, {{ $teamname }}, {{ $data->Identification_No }} at premise {{ $location }} will soon reach its maturity - {{ $nextduedate}}<br>
Please send your latest quote and estimate date of visit for the calibration to be perform.<br>
Any concern, do contact the Departmental Incharge.<br>


Best Regards,<br>
Eurofins
@endcomponent
