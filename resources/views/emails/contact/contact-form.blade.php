@component('mail::message')
# Welcome {{ $data['name'] }}

<strong>Name:</strong>
{{$data['name']}}.
<br>
<strong>E-mail:</strong>
{{$data['email']}}.
<br>
<hr>
<strong>Message:</strong>
{{$data['message']}}.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
