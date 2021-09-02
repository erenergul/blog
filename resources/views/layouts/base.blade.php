<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
     <x-partials.head />
    </head>
    <body>

    <x-partials.nav />

    <x-ui.alert />

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>


        <footer>
        <x-partials.footer />
        
        </footer>   

        <livewire:scripts>

    </body>

    
</html>
