<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>
      
        <link rel="stylesheet" href='style.css'  />




        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
                
        @endif
    </head>
    <body>
    <body>
  <div class="relative min-h-screen bg-cover bg-no-repeat bg-center contrast-[400]" style=" background-image: url('images/cover3.jpg'); filter: contrast(60%);">
    <!-- Overlay to darken image slightly -->
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>

    <!-- Content Container -->
    <div class="relative z-10 flex flex-col items-center justify-center min-h-screen text-white px-6">
      
      <!-- Navbar -->
      <nav class="w-full bg-white contrast-[250] dark:bg-blue-600 py-4 fixed top-0 backdrop-blur-md shadow-lg">
        <div class="max-w-screen-xl mx-auto flex justify-between items-center px-6">
          <a href="#" class="flex items-center space-x-3">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 drop-shadow-lg" alt="Flowbite Logo" />
            <span class="text-2xl font-semibold text-blue-900 dark:text-white drop-shadow-lg">EduVista Academy</span>
          </a>
          <div class="hidden md:flex space-x-6">
            <a href="#" class="text-blue-900 font-semibold hover:text-blue-700 dark:text-white dark:hover:text-gray-300">About</a>
            <a href="#" class="text-blue-900 font-semibold hover:text-blue-700 dark:text-white dark:hover:text-gray-300">Services</a>
            <a href="#" class="text-blue-900 font-semibold hover:text-blue-700 dark:text-white dark:hover:text-gray-300">Contact</a>
            <a href="{{ route('login') }}" class="text-blue-900 font-semibold hover:text-blue-700 dark:text-white dark:hover:text-gray-300">Login</a>
            <a href="{{ route('register') }}" class="text-blue-900 font-semibold hover:text-blue-700 dark:text-white dark:hover:text-gray-300">Register</a>
          </div>
        </div>
      </nav>

      <!-- Grid Content -->
      <div class="grid grid-cols-1 md:grid-cols-5 gap-6 text-center md:text-left mt-20">
        
        <!-- Left Side: Text -->
        <div class="md:col-span-3 flex flex-col justify-center">
          <h1 class="text-4xl md:text-5xl font-bold leading-snug" style="text-shadow: 2px 2px 10px rgba(255,255,255,0.6);">
            "Our vision is to create a dynamic learning environment that nurtures curiosity, fosters critical thinking, and prepares individuals for a future of limitless possibilities"
          </h1>
        </div>

        <!-- Right Side: Image -->
        <div class="md:col-span-2 flex justify-center">
          <img src="images/hone4.png" class="w-60 md:w-96 drop-shadow-2xl contrast-200" alt="Illustration">
        </div>

      </div>

      <!-- Buttons -->
      <div class="flex space-x-6 mt-8">
   
      <button class="px-8 py-4 bg-blue-600 text-white rounded-md font-semibold hover:bg-blue-700 transition contrast-200"
        onclick="window.location.href='/login'">
      
      
 Get Start-> 
</button>
      </div>

      <!-- Footer -->
      <footer class="w-full text-center py-6 mt-10 text-sm text-blue-200">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
      </footer>
    </div>
  </div>  
</body>

</body>

</html>
