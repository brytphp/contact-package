@component('mail::message')
# Introduction

Hey! You have a message from {{$name}}


{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
