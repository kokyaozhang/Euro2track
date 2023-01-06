@component('mail::message')
# Maintenance report
{{--retrieve details from mailcontroller--}}

Annual preventive maintenance for {{ $eqnm }}, {{ $teamname }}, {{ $data }} at {{ $location }} will soon reach its maturity at {{$nextduedate}}<br>
Please send your latest quote and estimate date of visit for the calibration to be perform.<br>
Any concern, do contact the Departmental Incharge.<br>

Your patience is very much appreciated.



Best Regards,<br>
Eurofins
@endcomponent
