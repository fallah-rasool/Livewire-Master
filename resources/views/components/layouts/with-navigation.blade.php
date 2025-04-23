<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>


        {{-- @livewireStyles --}}
        @vite(['resources/js/app.js'])
        
    </head>
    <body>
        <div class="max-w-lm mx-auto p-5 m-5 text-white bg-green-700">
            <h1>livewire navigation </h1>
            <nav  class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">
                <ul style="display: flex; align-items: center; justify-content: center; gap:64px ; align-content: center;list-style: none;padding: 0 ;margin: 0;">
                   <li style="padding: 7px ;margin: 0 5px;">
                        <a href="{{ route('counter.page') }}">Counter</a>
                    </li>
                    <li style="padding: 7px ;margin: 0 5px;">
                        <a href="{{ route('index.page') }}">index</a>
                    </li>
                    <li style="padding: 7px ;margin: 0 5px;">
                        <a href="#">Todo</a>
                    </li>
                </ul>
            </nav>
        </div>
   
        
        {{ $slot }}
        
        {{-- @livewireScripts      --}}
        <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>