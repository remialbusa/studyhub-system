<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />

</head>
<body>
    <!-- pre-loader -->
    <div id="preloader" class="hidden sm:block fixed inset-0 z-50  justify-center items-center w-screen h-screen object-cover">
        <img src="/images/preloader.png" alt="">
    </div>
    <!-- Navbar -->
    <nav class=" p-4 bg-[#1C6B32] shadow">
        <div class="flex justify-center">
            <a href="{{ route('login') }}"><img class="ml-5 pt-2 h-[50px] w-[190px]" src="/images/content.png" alt=""></a>
        </div>
    </nav>
   
     {{-- change fixed class --}}
     <aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
           <ul class="space-y-2 font-medium">
              <li>
                 <a href="dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                    <span class="ml-3">Admin Dashboard</span>
                 </a>
              </li>
              <li>
                 <button type="button" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                       <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                       <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Assign</span>
                       <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                 </button>
                 <ul id="dropdown-example" class="hidden py-2 space-y-2">
                       <li>
                          <a href="student-list" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Student List</a>
                       </li>
                       <li>
                          <a href="desk-list" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Desk List</a>
                       </li>
                       <li>
                          {{-- <a href="history" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">History</a> --}}
                       </li>
                 </ul>
              </li>
                 <a href="users" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                 </a>
              </li>
              <li>
                 <a href="{{ route('logout') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
                 </a>
              </li>
           </ul>
        </div>
     </aside>

     {{-- content section --}}
     <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4 sm:ml-64">
      <section id="about" class="pt-[60px] pb-[100px]">
         <div class="grid grid-cols-1 mx-auto lg:grid-cols-4 gap-4">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
               <img class="w-full" src="/images/seccard.jpg" alt="Sunset in the mountains">
               <div class="px-6 py-4">
                  <div class="text-[#1C6B32] font-bold text-xl mb-2">Desk Available</div>
                  <p class="text-[#1C6B32]">
                     <h1> {{ $desklistAvail }} </h1>
                  </p>
               </div>
            </div>

            <div class="max-w-sm rounded overflow-hidden shadow-lg">
               <img class="w-full" src="/images/seccard.jpg" alt="Sunset in the mountains">
               <div class="px-6 py-4">
                  <div class="text-[#1C6B32] font-bold text-xl mb-2">Desk Occupied</div>
                  <p class="text-[#1C6B32]">
                     <h1> {{ $countDeskOccu }} </h1>  
                  </p>
               </div>
            </div>

            <div class="max-w-sm rounded overflow-hidden shadow-lg">
               <img class="w-full" src="/images/seccard.jpg" alt="Sunset in the mountains">
               <div class="px-6 py-4">
                  <div class="text-[#1C6B32] font-bold text-xl mb-2">Registered</div>
                  <p class="text-[#1C6B32]">
                     <h1> {{ $userCount }} </h1>
                  </p>
               </div>
            </div>
         </div>
      </section>
      </div>
      {{-- end of content section --}}
      
     <a href="{{ route('logout') }}"><button type="button" class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300">logout</button></a> 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
     <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>


</html>