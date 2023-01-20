<x-mail::message>
# Mail From {{ $name }}
## Reply To: {{ $email }}

{{ $body }}.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
