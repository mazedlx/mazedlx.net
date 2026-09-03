@component('mail::message')
# Neue Kontaktanfrage

Hallo! Es liegt eine neue Kontaktanfrage vor!

**Von** {{ $name }}

**E-Mail**: {{ $email }}

**Nachricht**: {{ $message }}
@endcomponent
