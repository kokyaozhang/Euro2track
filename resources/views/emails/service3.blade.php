@component('mail::message')
# Preventive Maintenance report
{{--retrieve details from mailcontroller--}}

Annual Preventive Maintenance for {{ $data['eqnm'] }} for {{ $data['dep'] }} at premise {{ $data['loc'] }} is completed.<br>
{{ $data['eqnm'] }} is now ready for operation.<br>
Any concern, do contact the Departmental Incharge.
Your patience is very much appreciated.



Best Regards,<br>
Eurofins
@endcomponent
