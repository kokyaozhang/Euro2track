@component('mail::message')
# Preventive Maintenance report
{{--retrieve details from mailcontroller--}}

Annual Preventive Maintenance for {{ $data['eqnm'] }} for {{ $data['dep'] }} at premise {{ $data['loc'] }} is in progress.
@if($data['bodate'] == "")
    Expected back to operation date is not yet determined.
@else
Expected back to operation date is {{ $data['bodate'] }}.
@endif
Any concern, do contact the Departmental  Incharge.
Your patience is very much appreciated.



Best Regards,<br>
Eurofins
@endcomponent
