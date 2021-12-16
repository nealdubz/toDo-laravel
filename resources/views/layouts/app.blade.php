<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
        @livewireStyles

    </head>
    <body>
        <livewire:components.navbar />
         {{
             $slot
         }}
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    </body>
</html>
