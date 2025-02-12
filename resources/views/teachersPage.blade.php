<x-app-layout>
<div class="flex">
<x-sideBar />
</div>
 

<div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-flow-col grid-rows-3 gap-4 " id="img">
            
            
            <div class="row-span-3"><img class="img" src="{{ asset('images/image.png') }}" alt=""></div>
            <div class="col-span-2 row-span-2"><h3 class="text-6xl text-white">WELCOME TEACHERS  !</h3></div>
            <div class="col-span-2">
            
<button onclick="window.location.href='/addTeachers'" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >
Register now !
<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
</svg>
</button>

<a href="" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> submit</a>
  
          </div>
  
        
        </div>


</x-app-layout>

