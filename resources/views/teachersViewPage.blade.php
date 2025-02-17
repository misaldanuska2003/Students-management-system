<x-app-layout>
    <h1>hello teachers.......</h1>
<div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-1 gap-3">

@foreach ($teachers as $teacher)



  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-white dark:border-gray-700">
    <a href="#">
    </a>
    <div class="p-5">
        
        <a href="#">
        <img class="rounded-t-lg" src="{{ asset('storage/' . $teacher->image) }}" alt="">
        </a>
                <h3 class="text:py-2">{{ $teacher->name }}</h3>

        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>


     


   
@endforeach
</div>
</x-app-layout>