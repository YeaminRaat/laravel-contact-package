@component('mail::message')
# New Message

Your have a new message from
<br>
Name: {{ $data['name'] }}
<br>
Email: {{ $data['email'] }}
<br>
Message: {{ $data['message'] }}

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
