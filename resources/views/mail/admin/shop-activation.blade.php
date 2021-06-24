@component('mail::message')
# Introduction

{{-- The body of your message. --}}
Please activate your shop . below is shop details.
{{-- Shop Name: {{$shop->name}}
Shop owner: {{$shop->owner->name}} --}}

@component('mail::button', ['url' => url('/admin/shops')])
Manage Shops

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
