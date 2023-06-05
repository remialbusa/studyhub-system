<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Hub Management System</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div id="preloader" class="hidden sm:block fixed inset-0 z-50 justify-center items-center w-screen h-screen object-cover">
        <img src="/images/preloader.png" alt="">
    </div>

    <!-- Navbar -->
    <nav class="p-4 bg-[#1C6B32] shadow">
        <div class="flex justify-center">
            <a href="{{ route('landing-page') }}"><img class="ml-5 pt-2 h-[50px] w-[190px]" src="/images/content.png" alt=""></a>
        </div>
    </nav>

    <section class="bg-gray-50 min-h-screen flex items-center justify-center">
        <!-- login container -->
        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
            <!-- form -->
            <div class="md:w-1/2 px-16">
                <h2 class="font-bold text-2xl text-[#002D74] flex justify-center items-center">Create your Account</h2>
                <p class="text-sm mt-4 text-[#002D74]">Start studying now. Already have an account? 
                    <a href="{{ route('login') }}" class="font-bold">Login here.</a> </p>
                <br>
                
                <form action="{{route('register-user')}}" method="POST" class="flex flex-col gap-4">
                    @if(Session::has('success'))
                    {{-- <div class="alert alert-success">{{Session::get('success')}}</div> --}}
                      <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        You have now registered successfully! Click <a href="login" class="font-semibold underline hover:no-underline">Login</a> to continue.
                      </div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                       Please fill up necessary input and try again
                      </div>
                    {{-- <div class="alert alert-danger">{{Session::get('fail')}}</div> --}}
                    @endif
                    @csrf
                    <div class="relative">
                        {{-- <input class="p-2 rounded-xl border w-full" type="text" name="username" id="username" placeholder="Username"> --}}
                        <input name="username" input id="username" value="{{old('username')}}" 
                        class="p-2 rounded-xl border w-full" type="text" name="username" id="username" placeholder="Username" />
                        <span class= "text-red-500">@error('username') {{$message}} @enderror</span>
                    </div> 

                    <div class="relative">
                        {{-- <input class="p-2 rounded-xl border w-full" type="text" name="first_name" id="first_name" placeholder="First Name"> --}}
                        <input name="email_address" input id="email_address" value="{{old('email_address')}}" 
                            class="p-2 rounded-xl border w-full" type="text" name="email_address" id="email_address" placeholder="Email Address" />
                        <span class= "text-red-500">@error('email_address') {{$message}} @enderror</span>
                    </div>

                    <div class="relative">
                        {{-- <input class="p-2 rounded-xl border w-full" type="text" name="first_name" id="first_name" placeholder="First Name"> --}}
                        <input name="first_name" input id="first_name" value="{{old('first_name')}}" 
                            class="p-2 rounded-xl border w-full" type="text" name="first_name" id="first_name" placeholder="First Name" />
                        <span class= "text-red-500">@error('first_name') {{$message}} @enderror</span>
                    </div>

                    <div class="relative">
                        {{-- <input class="p-2 rounded-xl border w-full" type="text" name="last_name" id="last_name" placeholder="Last Name"> --}}
                        <input name="last_name" input id="last_name" value="{{old('last_name')}}" 
                            class="p-2 rounded-xl border w-full" type="text" name="last_name" id="last_name" placeholder="Last Name" />
                        <span class= "text-red-500">@error('last_name') {{$message}} @enderror</span>
                    </div>

                    <div class="relative">
                        {{-- <input class="p-2 rounded-xl border w-full" type="text" name="address" id="address" placeholder="Address"> --}}
                        <input name="address" input id="address" value="{{old('address')}}" 
                            class="p-2 rounded-xl border w-full" type="text" name="address" id="address" placeholder="Address" />
                        <span class= "text-red-500">@error('address') {{$message}} @enderror</span>
                    </div>

                    <div class="relative"> 
                        {{-- <input class="p-2 rounded-xl border w-full" type="" name="gender" id="gender" placeholder="Gender"> --}}
                        {{-- fix --}}
                        <select name="gender" id="gender" 
                        class="p-2 rounded-xl border w-full">
                        <option selected>Select one:</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                        <span class= "text-red-500">@error('gender') {{$message}} @enderror</span>
                    </div>    

                    <div class="relative">
                        {{-- <input class="p-2 rounded-xl border w-full" type="text" name="phone_number" id="phone_number" placeholder="Phone Number"> --}}
                        <input name="phone_number" input id="phone_number" value="{{old('phone_number')}}" 
                            class="p-2 rounded-xl border w-full" type="tel" name="phone_number" id="phone_number" placeholder="Phone Number" />
                        <span class= "text-red-500">@error('phone_number') {{$message}} @enderror</span>
                    </div>

                    <div class="relative">
                        {{-- <input class="p-2 rounded-xl border w-full" type="password" name="password" id="password" placeholder="Password"> --}}
                        <input name="password" input id="password" value="{{old('password')}}" 
                            class="p-2 rounded-xl border w-full" type="password" name="password" id="password" placeholder="Password" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                        <span class= "text-red-500">@error('password') {{$message}} @enderror</span>
                    </div>

                    <div class="relative">
                        {{-- <input class="p-2 rounded-xl border w-full" type="password" name="r_password" id="" placeholder="Confirm Password"> --}}
                        <input name="r_password" input id="r_password" value="{{old('password')}}" 
                            class="p-2 rounded-xl border w-full" type="password" name="r_password" id="r_password" placeholder="Confirm Password" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                        <span class= "text-red-500">@error('r_password') {{$message}} @enderror</span>
                    </div>

                    <button class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300" 
                        type="submit" >Create an Account
                    </button>       
                </form>

                <div class="mt-10 grid grid-cols-3 items-center text-gray-500">
                    <hr class="border-gray-500">
                    <p class="text-center">OR</p>
                    <hr class="border-gray-500">
                </div>

                <button class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-105 duration-300"><svg class="mr-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" width="20px" height="25px">
                        <defs>
                            <path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                        </defs>
                        <clipPath id="b">
                            <use xlink:href="#a" overflow="visible" />
                        </clipPath>
                        <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
                        <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z" />
                        <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z" />
                        <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z" />
                    </svg>Signup with Google</button>

            </div>

            <!-- image -->
            <div class="md:block hidden w-1/2">
                <img class=" rounded-2xl" src="studyhub-bg.jpg" alt="">
            </div>
            
         </div>


    </section>
    <script src="app.js"></script>
</body>

</html>