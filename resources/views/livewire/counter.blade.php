<div class="max-w-sm mx-auto p-5 m-5">

    <h1>{{ $count }}</h1>
 
   <hr><br>
    <button 
    wire:click="increment"
    
    type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium  text-sm px-5 py-2.5 text-center me-2 mb-2 ">+</button>

    <button 
    wire:click="decrement"
    type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium  text-sm px-5 py-2.5 text-center me-2 mb-2 ">-</button>


    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>
