@component('mail::message')
# Breakdown report
{{--retrieve details from mailcontroller--}}

{{ $data['eqnm'] }} for {{ $data['dep'] }} at premise {{ $data['loc'] }} is currently Out of Order
Expected back to operation date  to be advice soon.
Any concern, do contact the Departmental  Incharge.
Your patience is very much appreciated.



Best Regards,<br>
Eurofins
@endcomponent
