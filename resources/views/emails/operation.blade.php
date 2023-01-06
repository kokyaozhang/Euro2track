@component('mail::message')
# Operation report
{{--retrieve details from mailcontroller--}}

{{ $data['eqnm'] }} for {{ $data['dep'] }} at premise {{ $data['loc'] }} is currently Out of Order<br>
Expected back to operation date  to be advice soon.<br>
Any concern, do contact the Departmental Incharge.<br>
Your patience is very much appreciated.



Best Regards,<br>
Eurofins
@endcomponent
