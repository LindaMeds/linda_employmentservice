@component('mail::message')
# Introduction


<p>hello {{$userName}}
<br>
Your Application form has successfully approved!!
Your Registration ID :{{$single_record->registration_id}}.
{{$single_record->forwaderRemarks}}<br>


Thanks
@endcomponent
