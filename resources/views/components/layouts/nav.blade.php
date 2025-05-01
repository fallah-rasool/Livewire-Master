{{-- <div class="max-w-lm mx-auto p-5 m-5 text-white bg-green-700">
    <h1 class="px-5 py-3">laravel_12_Livewire_Master</h1>
    <nav  class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">
        <ul style="display: flex; align-items: center; justify-content: center; gap:64px ; align-content: center;list-style: none;padding: 0 ;margin: 0;">
           <li class="py-2 px-1 mx-1 ">
                <a href="{{ route('home') }}">home</a>
            </li>
           <li class="py-2 px-1 mx-1 ">
                <a href="{{ route('counter.page') }}">Counter</a>
            </li>
            <li class="py-2 px-1 mx-1 ">
                <a href="{{ route('index.page') }}">index</a>
            </li>
            <li class="py-2 px-1 mx-1 " >
                <a href="{{ route('post.crate') }}">post.crate</a>
            </li>
            <li class="py-2 px-1 mx-1 ">
                <a href="{{ route('page.calendar.component')}}">calendar</a>
            </li>
            <li class="py-2 px-1 mx-1 ">
                <a href="{{ route('Page.Welcom',['email'=>'rasool@gmail.com']) }}">post.Welcom</a>
            </li>
            <li class="py-2 px-1 mx-1 ">
                <a href="{{ route('page.user-profile',['user'=>1])}}">user</a>
            </li>
            <li class="py-2 px-1 mx-1 " >
                <a href="{{ route('Page.Show-Customer')}}">Show-Customer</a>
            </li>
          
        </ul>
    </nav>
</div> --}}



<div class="px-2">    
    <nav class="bg-white border-red-200 dark:bg-red-900 ">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">laravel_12_Livewire_Master</span>
            </a>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <a href="tel:5541251234" class="text-sm  text-gray-500 dark:text-white hover:underline">(555) 412-1234</a>
                <a href="#" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Login</a>
            </div>
        </div>
    </nav>
    <nav class="bg-red-50 dark:bg-red-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('counter.page') }}" class="text-gray-900 dark:text-white hover:underline">counter</a>
                    </li>
                    <li>
                        <a href="{{ route('index.page') }}" class="text-gray-900 dark:text-white hover:underline">task</a>
                    </li>
                    <li>
                        <a href="{{ route('page.calendar.component') }}" class="text-gray-900 dark:text-white hover:underline">calendar</a>
                    </li>
                    <li>
                      
                        <a 
                        class="text-gray-900 dark:text-white hover:underline"                        
                        href="{{ route('Page.Welcom',['email'=>'rasool@gmail.com'])}}">Page.Welcom</a>
                    </li>

                    <li>
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="{{ route('page.user-profile',['user'=>1])}}">profile</a>
                    </li>
                    <li>
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="{{ route('Page.Show-Customer')}}">Show-Customer</a>
                    </li>
                    {{-- <li>
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="{{ route('page.counter.alpine')}}">counterAlpine</a>
                    </li> --}}
                    {{-- <li>
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="{{ route('page.security.concerns')}}">securityConcerns</a>
                    </li> --}}
                    <li>
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="{{ route('all.post')}}">همه  پست</a>
                    </li>
                   
                  
                </ul>
            </div>
        </div>
    </nav>

</div>