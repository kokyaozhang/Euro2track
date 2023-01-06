@component('mail::message')
# Calibration report
{{--retrieve details from mailcontroller--}}

Annual Calibration for {{ $data['eqnm'] }} for {{ $data['dep'] }} at premise {{ $data['loc'] }} is completed.<br>
{{ $data['eqnm'] }} is now ready for operation.<br>
Any concern, do contact the Departmental Incharge.
Your patience is very much appreciated.



Best Regards,<br>
Eurofins
@endcomponent
