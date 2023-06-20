<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    @vite('resources/css/app.css')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="jquery-3.6.4.min.js"></script>


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
                            <a href="history"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">History</a>
                        </li>
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
                    <a href="login"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                clip-rule="evenodd"></path>
                        </svg>
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
        </div>

        {{-- add desk button --}}
        <button type="button" data-modal-target="addUserModal" data-modal-show="addUserModal"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-80">Add
            Student</button>

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                {{-- <th>ID</th> --}}
                <th>Student ID</th>
                <th>Desk ID</th>
                <th>Remarks</th>
                <th>Status</th>
                <th>Date Created</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($list2 as $data)
                    <tr>
                        {{-- <td>{{ $data->id }}</td> --}}
                        <td>{{ $data->student_id }}</td>
                        <td>{{ $data->desk_id }}</td>
                        <td>{{ $data->remarks }}</td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td> <button type="button" onclick="edituser({{ json_encode($data) }})"
                                data-modal-target="editUserModal" data-modal-show="editUserModal"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-80">Edit</button>
                            <button data-modal-target="popup-modal" onclick="deleteuser({{ json_encode($data) }})"
                                data-modal-toggle="popup-modal"
                                class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                type="button">Delete</button>
                        </td>
                    </tr @endforeach
            </tbody>
        </table>

        <!-- Add student modal -->
        <div id="addUserModal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                {{-- <ebion="" method="POST" class="relative bg-white rounded-lg shadow dark:bg-gray-700"> --}}
                <form action="{{ route('studentlist-add') }}" method="POST"
                    class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    @csrf

                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Add Student
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="addUserModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- end of Modal header -->

                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="Student ID"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student
                                    ID</label>
                                <input type="text" name="Student ID" id="add_student_id"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="Desk ID"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desk
                                    ID</label>
                                <input type="text" name="Desk ID" id="add_desk_number"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="Remarks"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Remarks</label>
                                <input type="text" name="remarks" id="add_remarks"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="Status"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                <input type="text" name="Status" id="add_status"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>

                            {{-- DESK --}}
                            <div class="modal-body px-4 py-3" >
                                <table class="table-auto w-full" id="deskDiagram">
                                        <tr>
                                            <td class="py-2 px-4 w-8 h-8 bg-gray-300 rounded-lg" data-name="A1">
                                                A1
                                            <td class="py-2 px-4 w-8 h-8 bg-gray-300 rounded-lg" data-name="A2">
                                                A2
                                            </td>
                                            <td class="py-2 px-4 w-8 h-8 bg-gray-300 rounded-lg" data-name="A3">
                                                A3
                                            </td>
                                            <td class="py-2 px-4 w-8 h-8 bg-gray-300 rounded-lg" data-name="A4">
                                                A4
                                            </td>
                                            <td class="py-2 px-4 w-8 h-8 bg-gray-300 rounded-lg" data-name="A5">
                                                A5
                                            </td>
                                            <td class="py-2 px-4 w-8 h-8 bg-gray-300 rounded-lg" data-name="A6"> 
                                                A6
                                            </td>
                                            <td class="py-2 px-4 w-8 h-8 bg-gray-300 rounded-lg"data-name="A7">
                                                A7
                                            </td>
                                            <td class="py-2 px-4 w-8 h-8 bg-gray-300 rounded-lg"data-name="A8">
                                                A8
                                            </td>
                                            <!-- Add more seat cells here -->
                                        </tr>

                                        <td class="py-2 px-4 w-8 h-8 bg-gray-300 rounded-lg" data-name="B1">
                                            B1
                                        </td>
                                        <td class="py-2 px-4 w-8 h-8 bg-gray-300 rounded-lg" data-name="B2">
                                            B2
                                        </td>
                                        <td class="py-2 px-4 w-8 h-8 bg-gray-300 rounded-lg"data-name="B3">
                                            B3
                                        </td>
                                        <td class="py-2 px-4 w-8 h-8 bg-gray-300 rounded-lg" data-name="B4">
                                            B4
                                        </td>
                                        <td class="py-2 px-4 w-8 h-8 bg-gray-300 rounded-lg" data-name="B5">
                                             B5
                                        </td>
                                        <td class="py-2 px-4 w-8 h-8 bg-gray-300 rounded-lg" data-name="B6">
                                             B6
                                        </td>
                                        <!-- Add more rows of seat cells here -->
                                </table>
                            </div>
                            {{-- end of desk --}}

                        </div>
                    </div>
                    <!-- end of Modal body -->

                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="button" button id="btn-add" onclick="addUser()"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end of add student modal -->

        <!-- Edit user modal -->
        <div id="editUserModal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                {{-- <form action="{{ route('register-user', $data->id) }}" method="POST" class="relative bg-white rounded-lg shadow dark:bg-gray-700"> --}}
                <form class="relative bg-white rounded-lg shadow dark:bg-gray-700" id="userform">
                    @csrf
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Edit Student
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="editUserModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-6 gap-6">

                            <input type="hidden" name="id" id="id" value=""
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="example@company.com" required="">

                            <div class="col-span-6 sm:col-span-3">
                                <label for="Student ID"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student
                                    ID</label>
                                <input type="text" name="student_id" id="student_id"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="example@company.com" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="Desk ID"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desk
                                    ID</label>
                                <input type="text" name="desk_id" id="desk_id"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Green" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="Remarks"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Remarks</label>
                                <input type="text" name="remarks" id="remarks"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Bonie" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="Status"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                <input type="text" name="status" id="status"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Bonie" required="">
                            </div>

                            {{-- add another desk diagram here for edit --}}

                        </div>
                    </div>

                    <!-- Modal footer -->
                    {{-- save button modal --}}
                    <div
                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button id="btn-update" type="button" onclick="updateUser()"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- end of edit user modal --}}

        {{-- start of delete button modal --}}
        <div id="popup-modal" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-hide="popup-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6 text-center">
                        <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 id="deletelabel" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400"></h3>
                        <button id="btn-delete" data-modal-hide="popup-modal" type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                            cancel</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end of delete button modal --}}

        <script>
            function addUser() {

                // Send the AJAX request to the Laravel backend
                var student_id = document.getElementById('add_student_id').value
                var desk_id = document.getElementById('add_desk_number').value
                var remarks = document.getElementById('add_remarks').value
                var status = document.getElementById('add_status').value
                //   var desk_number = document.getElementById('add_desk_number').value
                console.log(student_id)

                var xhr = new XMLHttpRequest();
                xhr.open("POST", '/student-list-add/');
                xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            console.log('User added successfully.');
                            window.location.reload();
                        } else {
                            console.error('Error saving data. Status code: ' + xhr.status);
                        }
                    }
                };
                var formData = new FormData();
                formData.append('add_student_id', student_id);
                formData.append('add_desk_number', desk_id);
                formData.append('add_remarks', remarks);
                formData.append('add_status', status);
                //   formData.append('add_desk_number', status);

                xhr.send(formData);
            }

            function edituser(data) {
                // document.getElementById('id').value = data.id;         
                document.getElementById('student_id').value = data.student_id;
                document.getElementById('desk_id').value = data.desk_id;
                document.getElementById('remarks').value = data.remarks;
                document.getElementById('status').value = data.status;
                // var button = document.getElementById('btn-update');
            };

            function updateUser() {
                // Send the AJAX request to the Laravel backend
                var id = document.getElementById('id').value
                var student_id = document.getElementById('student_id').value
                var desk_id = document.getElementById('desk_id').value
                var remarks = document.getElementById('remarks').value
                var status = document.getElementById('status').value
                console.log(student_id)

                var xhr = new XMLHttpRequest();
                xhr.open("POST", '/studentlist-update/' + id, true);
                xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            console.log('Data saved successfully.');
                            window.location.reload();
                        } else {
                            console.error('Error saving data. Status code: ' + xhr.status);
                        }
                    }
                };
                var formData = new FormData();
                // formData.append('id', id);
                formData.append('student_id', student_id);
                formData.append('desk_id', desk_id);
                formData.append('remarks', remarks);
                formData.append('status', status);
                xhr.send(formData);
            };

            function deleteuser(data) {
                console.log(data);

                document.getElementById('deletelabel').textContent = "Are you sure you want to delete " + data.student_id +
                    "?";

                var button = document.getElementById('btn-delete');
                button.addEventListener('click', function() {

                    var xhr = new XMLHttpRequest();
                    xhr.open("GET", "/student-list-delete/" + data.id, true);
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {

                                console.log("User deleted successfully.");
                                window.location.reload();
                            } else {
                                console.error("Error deleting user. Status code: " + xhr.status);
                            }
                        }
                    };
                    xhr.send();
                });
            };

            // START OF Desk
            // Selecting Seats
            const desk= document.querySelector("#deskDiagram");
            const deskNumber = document.querySelector("#add_desk_number");
            desk.addEventListener("click", clickDesk);
            let selected_id;

            function clickDesk(evt) {
                if (evt.target.nodeName == "TD") {
                    if (!selected_id || evt.target.dataset.name === selected_id) {
                        selected_id = evt.target.dataset.name;
                        evt.target.classList.toggle("selected");

                        if (!evt.target.className.includes("selected")) {
                            selected_id = "";
                        }
                        deskNumber.value = selected_id;
                    }

                }
            };
            // JavaScript code to handle seat click and toggle input field visibility
            const deskCells = document.querySelectorAll('.modal-body .deskDiagram');

            deskCells.forEach((cell) => {
                const deskDiagram = cell.getAttribute('data-desk-id');
                const desk_code = cell.nextElementSibling;

                cell.addEventListener('click', (clickDesk) => {
                    desk_code.classList.toggle('hidden');
                });

                cell.style.cursor = 'pointer'; // Add cursor style to indicate it's clickable
            });

            deskCells.forEach((cell) => {
                const desk_code = cell.getAttribute('data-seat-id');
                console.log('Seat ID:', desk_code);
                // You can perform further actions with the seat ID here
            });
        </script>
    </div>
    {{-- end of content section --}}

    {{-- <a href="{{ route('login') }}"><button type="button" class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300">logout</button></a> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
