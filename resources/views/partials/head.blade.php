<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BAKD') }} | {{ config('app.tagline', 'ICO Management & Networking Platform') }}</title>

    <script src="{{ asset('js/bakd.js') }}" defer></script>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    {{--  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">  --}}

    <link href="{{ asset('css/bakd.css') }}" rel="stylesheet">
</head>
