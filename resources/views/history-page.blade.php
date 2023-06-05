<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
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
         <a href="{{ route('landing-page') }}"><img class="ml-5 pt-2 h-[50px] w-[190px]" src="/images/content.png" alt=""></a>
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
                          <a href="history" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">History</a>
                       </li>
                 </ul>
              </li>
                 <a href="users" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                 </a>
              </li>
              <li>
                 <a href="login" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
                 </a>
              </li>
           </ul>
        </div>
     </aside>

     {{-- content section --}}
     <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4 sm:ml-64">
      <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700">
          <label for="table-search" class="sr-only">Search</label>
          <div class="relative">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
              </div>
              <input type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
          </div>
      </div>
sample

<form action="/action_page.php">
   <label for="birthday">Birthday:</label>
   <input type="date" id="birthday" name="birthday">
   <input type="submit">
 </form>

 <body onload="onLoaderFunc()">

   <div class="inputForm">
   <center>
     Name *: <input type="text" id="Username" required>
     Number of Seats *: <input type="number" id="Numseats" required>
     <br/><br/>
     <button onclick="takeData()">Start Selecting</button>
   </center>
   </div>
     
   
   <div class="seatStructure">
   <center>
     
   <table id="seatsBlock">
    <p id="notification"></p>
     <tr>
       <td colspan="14"><div class="screen">SCREEN</div></td>
       <td rowspan="20">
         <div class="smallBox greenBox">Selected Seat</div> <br/>
         <div class="smallBox redBox">Reserved Seat</div><br/>
         <div class="smallBox emptyBox">Empty Seat</div><br/>
       </td>
       
       <br/>
     </tr>
     
     <tr>
       <td></td>
       <td>1</td>
       <td>2</td>
       <td>3</td>
       <td>4</td>
       <td>5</td>
       <td></td>
       <td>6</td>
       <td>7</td>
       <td>8</td>
       <td>9</td>
       <td>10</td>
       <td>11</td>
       <td>12</td>
   </tr>
     
   <tr>
       <td>A</td>
       <td><input type="checkbox" class="seats" value="A1"></td>
       <td><input type="checkbox" class="seats" value="A2"></td>
       <td><input type="checkbox" class="seats" value="A3"></td>
       <td><input type="checkbox" class="seats" value="A4"></td>
       <td><input type="checkbox" class="seats" value="A5"></td>
       <td class="seatGap"></td>
       <td><input type="checkbox" class="seats" value="A6"></td>
       <td><input type="checkbox" class="seats" value="A7"></td>
       <td><input type="checkbox" class="seats" value="A8"></td>
       <td><input type="checkbox" class="seats" value="A9"></td>
       <td><input type="checkbox" class="seats" value="A10"></td>
       <td><input type="checkbox" class="seats" value="A11"></td>
       <td><input type="checkbox" class="seats" value="A12"></td>
     </tr>
     
     <tr>
       <td>B</td>
       <td><input type="checkbox" class="seats" value="B1"></td>
       <td><input type="checkbox" class="seats" value="B2"></td>
       <td><input type="checkbox" class="seats" value="B3"></td>
       <td><input type="checkbox" class="seats" value="B4"></td>
       <td><input type="checkbox" class="seats" value="B5"></td>
       <td></td>
       <td><input type="checkbox" class="seats" value="B6"></td>
       <td><input type="checkbox" class="seats" value="B7"></td>
       <td><input type="checkbox" class="seats" value="B8"></td>
       <td><input type="checkbox" class="seats" value="B9"></td>
       <td><input type="checkbox" class="seats" value="B10"></td>
       <td><input type="checkbox" class="seats" value="B11"></td>
       <td><input type="checkbox" class="seats" value="B12"></td>
     </tr>
     
     <tr>
       <td>C</td>
       <td><input type="checkbox" class="seats" value="C1"></td>
       <td><input type="checkbox" class="seats" value="C2"></td>
       <td><input type="checkbox" class="seats" value="C3"></td>
       <td><input type="checkbox" class="seats" value="C4"></td>
       <td><input type="checkbox" class="seats" value="C5"></td>
       <td></td>
       <td><input type="checkbox" class="seats" value="C6"></td>
       <td><input type="checkbox" class="seats" value="C7"></td>
       <td><input type="checkbox" class="seats" value="C8"></td>
       <td><input type="checkbox" class="seats" value="C9"></td>
       <td><input type="checkbox" class="seats" value="C10"></td>
       <td><input type="checkbox" class="seats" value="C11"></td>
       <td><input type="checkbox" class="seats" value="C12"></td>
   </tr>
     
   <tr>
       <td>D</td>
       <td><input type="checkbox" class="seats" value="D1"></td>
       <td><input type="checkbox" class="seats" value="D2"></td>
       <td><input type="checkbox" class="seats" value="D3"></td>
       <td><input type="checkbox" class="seats" value="D4"></td>
       <td><input type="checkbox" class="seats" value="D5"></td>
       <td></td>
       <td><input type="checkbox" class="seats" value="D6"></td>
       <td><input type="checkbox" class="seats" value="D7"></td>
       <td><input type="checkbox" class="seats" value="D8"></td>
       <td><input type="checkbox" class="seats" value="D9"></td>
       <td><input type="checkbox" class="seats" value="D10"></td>
       <td><input type="checkbox" class="seats" value="D11"></td>
       <td><input type="checkbox" class="seats" value="D12"></td>
   </tr>
     
   <tr>
       <td>E</td>
       <td><input type="checkbox" class="seats" value="E1"></td>
       <td><input type="checkbox" class="seats" value="E2"></td>
       <td><input type="checkbox" class="seats" value="E3"></td>
       <td><input type="checkbox" class="seats" value="E4"></td>
       <td><input type="checkbox" class="seats" value="E5"></td>
       <td></td>
       <td><input type="checkbox" class="seats" value="E6"></td>
       <td><input type="checkbox" class="seats" value="E7"></td>
       <td><input type="checkbox" class="seats" value="E8"></td>
       <td><input type="checkbox" class="seats" value="E9"></td>
       <td><input type="checkbox" class="seats" value="E10"></td>
       <td><input type="checkbox" class="seats" value="E11"></td>
       <td><input type="checkbox" class="seats" value="E12"></td>
   </tr>
     
   <tr class="seatVGap"></tr>
     
   <tr>
       <td>F</td>
       <td><input type="checkbox" class="seats" value="F1"></td>
       <td><input type="checkbox" class="seats" value="F2"></td>
       <td><input type="checkbox" class="seats" value="F3"></td>
       <td><input type="checkbox" class="seats" value="F4"></td>
       <td><input type="checkbox" class="seats" value="F5"></td>
       <td></td>
       <td><input type="checkbox" class="seats" value="F6"></td>
       <td><input type="checkbox" class="seats" value="F7"></td>
       <td><input type="checkbox" class="seats" value="F8"></td>
       <td><input type="checkbox" class="seats" value="F9"></td>
       <td><input type="checkbox" class="seats" value="F10"></td>
       <td><input type="checkbox" class="seats" value="F11"></td>
       <td><input type="checkbox" class="seats" value="F12"></td>
   </tr>
     
   <tr>
       <td>G</td>
       <td><input type="checkbox" class="seats" value="G1"></td>
       <td><input type="checkbox" class="seats" value="G2"></td>
       <td><input type="checkbox" class="seats" value="G3"></td>
       <td><input type="checkbox" class="seats" value="G4"></td>
       <td><input type="checkbox" class="seats" value="G5"></td>
       <td></td>
       <td><input type="checkbox" class="seats" value="G6"></td>
       <td><input type="checkbox" class="seats" value="G7"></td>
       <td><input type="checkbox" class="seats" value="G8"></td>
       <td><input type="checkbox" class="seats" value="G9"></td>
       <td><input type="checkbox" class="seats" value="G10"></td>
       <td><input type="checkbox" class="seats" value="G11"></td>
       <td><input type="checkbox" class="seats" value="G12"></td>
   </tr>
     
   <tr>
       <td>H</td>
       <td><input type="checkbox" class="seats" value="H1"></td>
       <td><input type="checkbox" class="seats" value="H2"></td>
       <td><input type="checkbox" class="seats" value="H3"></td>
       <td><input type="checkbox" class="seats" value="H4"></td>
       <td><input type="checkbox" class="seats" value="H5"></td>
       <td></td>
       <td><input type="checkbox" class="seats" value="H6"></td>
       <td><input type="checkbox" class="seats" value="H7"></td>
       <td><input type="checkbox" class="seats" value="H8"></td>
       <td><input type="checkbox" class="seats" value="H9"></td>
       <td><input type="checkbox" class="seats" value="H10"></td>
       <td><input type="checkbox" class="seats" value="H11"></td>
       <td><input type="checkbox" class="seats" value="H12"></td>
   </tr>
     
   <tr>
       <td>I</td>
       <td><input type="checkbox" class="seats" value="I1"></td>
       <td><input type="checkbox" class="seats" value="I2"></td>
       <td><input type="checkbox" class="seats" value="I3"></td>
       <td><input type="checkbox" class="seats" value="I4"></td>
       <td><input type="checkbox" class="seats" value="I5"></td>
       <td></td>
       <td><input type="checkbox" class="seats" value="I6"></td>
       <td><input type="checkbox" class="seats" value="I7"></td>
       <td><input type="checkbox" class="seats" value="I8"></td>
       <td><input type="checkbox" class="seats" value="I9"></td>
       <td><input type="checkbox" class="seats" value="I10"></td>
       <td><input type="checkbox" class="seats" value="I11"></td>
       <td><input type="checkbox" class="seats" value="I12"></td>
   </tr>
     
   <tr>
       <td>J</td>
       <td><input type="checkbox" class="seats" value="J1"></td>
       <td><input type="checkbox" class="seats" value="J2"></td>
       <td><input type="checkbox" class="seats" value="J3"></td>
       <td><input type="checkbox" class="seats" value="J4"></td>
       <td><input type="checkbox" class="seats" value="J5"></td>
       <td></td>
       <td><input type="checkbox" class="seats" value="J6"></td>
       <td><input type="checkbox" class="seats" value="J7"></td>
       <td><input type="checkbox" class="seats" value="J8"></td>
       <td><input type="checkbox" class="seats" value="J9"></td>
       <td><input type="checkbox" class="seats" value="J10"></td>
       <td><input type="checkbox" class="seats" value="J11"></td>
       <td><input type="checkbox" class="seats" value="J12"></td>
   </tr>
     
     
   </table>

 
     
   <br/><button onclick="updateTextArea()">Confirm Selection</button>
   </center>
   </div>
         
   <br/><br/>
   
   <div class="displayerBoxes">
   <center>
     <table class="Displaytable">
     <tr>
       <th>Name</th>
       <th>Number of Seats</th>
       <th>Seats</th>
     </tr>
     <tr>
       <td><textarea id="nameDisplay"></textarea></td>
       <td><textarea id="NumberDisplay"></textarea></td>
       <td><textarea id="seatsDisplay"></textarea></td>
     </tr>
   </table>
   </center>
   </div>
   
    

  </div>

  
     {{-- <a href="{{ route('login') }}"><button type="button" class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300">logout</button></a> --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
     <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>


</html>