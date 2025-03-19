<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 ">
            
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 gap-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

        
    <div class="container17 max-w-7xl mx-auto sm:col-6 lg:col-8 grid grid-flow-col grid-rows-3 gap-4 bg-gray-700" style="border-radius: 10%; margin-top: 0%;" id="img">
            
            
            <div class="row-span-3"><img class="img" src="{{ asset('images/image.png') }}" alt=""></div>
            <div class="col-span-2 row-span-2"><h3 class="text-6xl text-white"></h3></div>
            
  
        
        </div>


   
</x-app-layout>
