@component('mail::message')
# Need for Approved

<p>hello Admin!!!
The New Application needed for Approved!!
New Applicant'  {{$userName}} 'need to approve.
To Check  the Application click view button

@component('mail::button',[url:"{{ route('SCapplicantinfo.index2') }}"])
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
