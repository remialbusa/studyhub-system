<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desk List</title>
    @vite('resources/css/app.css')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

</head>

<body>
    <!-- pre-loader -->
    <div id="preloader"
        class="hidden sm:block fixed inset-0 z-50  justify-center items-center w-screen h-screen object-cover">
        <img src="/images/preloader.png" alt="">
    </div>
    <!-- Navbar -->
    <nav class=" p-4 bg-[#1C6B32] shadow">
        <div class="flex justify-center">
            <a href=""><img class="ml-5 pt-2 h-[50px] w-[190px]" src="/images/content.png" alt=""></a>
        </div>
    </nav>

    {{-- change fixed class --}}
    <aside id="sidebar-multi-level-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="dashboard"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class="ml-3">Admin Dashboard</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Assign</span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="student-list"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Student
                                List</a>
                        </li>
                        <li>
                            <a href="desk-list"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Desk
                                List</a>
                        </li>
                        <li>
                            {{-- <a href="history"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">History</a>
                        </li> --}}
                    </ul>
                </li>
                <a href="users"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd"></path>
                    </svg>
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

    {{-- start of content --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search-users"
                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for users">
            </div>

            {{-- FIX HERE --}}
            {{-- <div class="mt-2 mb-1">
                <button type="button" data-modal-target="deskListModal" data-modal-show="deskListModal"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">New Desk</button>
            </div> --}}
            <div class="mt-2 mb-2 top-0 right-0 ">
                <button id="addDeskBtn" 
                     class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    New Desk
                </button>
            </div>
        </div>

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <th>ID</th>
                <th>Desk Code</th>
                <th>Description</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($list as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->desk_code }}</td>
                        <td>{{ $data->desc }}</td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->created_at }}</td>
                        {{-- for update button --}}
                        <td>
                            <button type="button" data-modal-target="deskListModal" data-modal-show="deskListModal"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" 
                                onclick="openDeskList('{{ $data->id }}')">Edit</button>

                            {{-- WORKS BUT WITH ERROR --}}
                            <button type="button" button data-modal-target="deleteConfirmationModal"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                onclick="openDeleteConfirmation('{{ $data->id }}')">Delete</button>

                                {{-- <button type="button" button data-modal-target="deleteConfirmationModal"
                                data-modal-toggle="deleteConfirmationModal"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                onclick="openDeleteConfirmation('{{ $data->id }}')">Delete</button> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <!-- Modal For New Desk -->
    <div id="addDeskModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white w-1/2 mx-auto p-6 rounded shadow">
                <!-- Modal content -->
                <h2 class="text-lg font-bold mb-4">New Desk</h2>
                <form action="{{ route('desklist-page-add') }}" method="POST" class="flex flex-col gap-4">
                    @if (Session::has('success'))
                        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                            role="alert">
                            You have now added desk successfully!
                        </div>
                    @endif
                    @if (Session::has('fail'))
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                            role="alert">
                            Please fill up necessary input and try again
                        </div>
                    @endif
                    @csrf

                    <!-- Add Desk form fields -->
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="desk_code">
                            Desk Code
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="desk_code" type="text" name="desk_code" placeholder="Enter Desk Code" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email_address">
                            Desc
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="desc" type="text" name="desc" placeholder="Enter description"
                            required>
                    </div>   
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email_address">
                            Status
                        </label>
                        <input
                            class="shadow appea rance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="status" type="text" name="status" placeholder="Enter status"
                            required>
                    </div>   
                    <!-- Add more form fields as needed -->

                    <!-- Modal footer -->
                    <div class="flex justify-end">
                        <button type="button"
                            class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded mr-2"
                            id="cancelBtn">Cancel</button>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    
    <!-- Edit user modal -->
    {{-- <div id="editUserModal" tabindex="-1" aria-hidden="true" --}}
    <div id="deskListModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="bg-white w-1/2 mx-auto p-6 rounded shadow">
            <!-- Modal content -->
            <form method="POST" class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                <!-- Modal header -->
                {{-- <div id="editUserModal" class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600"> --}}
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">

                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Edit Desk
                    </h3>
                    <form action="{{ route('desklist-page-add') }}" method="POST" class="flex flex-col gap-4">
                        @if (Session::has('success'))
                            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                                role="alert">
                                Edited successfully!
                            </div>
                        @endif
                        @if (Session::has('fail'))
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                Please fill up necessary input and try again
                            </div>
                        @endif
                        @csrf
                        {{-- <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="editUserModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button> --}}

                        
                </div>
                <!-- end of Modal header -->
   
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="Desk"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desk
                                Code</label>
                            <input type="text" name="desk_code" id="desk_code"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="Status"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            <input type="text" name="status" id="status"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="Description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="desc" name="desc" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                valuer=""></textarea>
                        </div>
                    </div>
                </div>
                <!-- end of Modal body -->

                <!-- Modal footer -->
                {{-- <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                </div> --}}

                <div class="flex justify-end">
                    <button type="button"
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded mr-2"
                        id="cancelBtn">Cancel</button>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add</button>
                </div>

            </form>
        </div>
    </div>
    {{-- end of content --}}


    <div id="deleteConfirmationModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white w-1/2 mx-auto p-6 rounded shadow">
                <h2 class="text-lg font-bold mb-4">Delete Confirmation</h2>
                <p>Are you sure you want to delete this Desk?</p>
                <div class="flex justify-end mt-4">
                    <button type="button"
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded mr-2"
                        onclick="closeDeleteConfirmation()">Cancel</button>
                    <form id="deleteForm">
                        <button id="deleteDesk" type="button"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('login') }}"><button type="button"
            class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300">logout</button></a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

<script>
    function openDeskList($id) {
        // Show the modal
        document.getElementById('deskListModal').classList.remove('hidden');
        // getDeskCodes();
        document.getElementById('desk_code').value = $id;
      //   document.getElementById('status').value = $status;
      //   document.getElementById('desc').value = $desc;
    }
    

    function openDeleteConfirmation(id) {
        // Show the delete confirmation modal
        document.getElementById('deleteConfirmationModal').classList.remove('hidden');

        var button = document.getElementById('deleteDesk');
        button.addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "/desk-delete/" + id, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {

                        console.log("Desk deleted successfully.");
                        window.location.reload();
                    } else {
                        console.error("Error deleting Desk. Status code: " + xhr.status);
                    }
                }
            };
            xhr.send();
        });
    }

    function closeDeleteConfirmation() {
        // Hide the delete confirmation modal
        document.getElementById('deleteConfirmationModal').classList.add('hidden');
    }


    const addDeskBtn = document.getElementById('addDeskBtn');

    const addDeskModal = document.getElementById('addDeskModal');
    const cancelBtn = document.getElementById('cancelBtn');


    // Show the modal when the button is clicked
    addDeskBtn.addEventListener('click', () => {
        addDeskModal.classList.remove('hidden');
    });

    // Hide the modal when the cancel button is clicked
    cancelBtn.addEventListener('click', () => {
        addDeskModal.classList.add('hidden');
    });
</script>
</html>
