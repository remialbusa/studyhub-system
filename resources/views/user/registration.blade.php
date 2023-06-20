<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Hub Management System</title>
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/app.css')
</head>

<body>

    <div id="preloader" class="fixed inset-0 z-50">
        <img src="/images/preloader.png" alt="" class="w-full h-full object-cover">
    </div>



    <section class="bg-green-900 min-h-screen flex items-center justify-center">
        <!-- login container -->
        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-screen-xl mx-auto px-[100px] p-5 pt-[50px] items-center">
            <!-- form -->
            <div class="">
                <h2 class="font-bold text-2xl text-[#002D74] flex justify-center items-center">Create your Account</h2>
                <p class="text-sm mt-4 text-[#002D74]">Already have an account?
                    <a href="{{ route('login') }}" class="font-bold">Login here.</a>
                </p>
                <br>

                <form action="{{route('register-user')}}" method="POST" class="flex flex-col gap-4">
                    @if(Session::has('success'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        You have now registered successfully! Click <a href="{{ route('login') }}" class="font-semibold underline hover:no-underline">Login</a> to continue.
                    </div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        Please fill up necessary input and try again
                    </div>
                    <div class="alert alert-danger">{{Session::get('fail')}}
                    </div>
                    @endif
                    @csrf
                    <div class="relative">
                        <input name="username" input id="username" value="{{old('username')}}" class="p-2 rounded-xl border w-full" type="text" placeholder="Email" />
                        <span class="text-red-500">@error('username') {{$message}} @enderror</span>
                    </div>

                    <div class="relative">
                        <input name="password" input id="password" value="{{old('password')}}" class="p-2 rounded-xl border w-full" type="password" placeholder="Password" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                        <span class="text-red-500">@error('password') {{$message}} @enderror</span>
                    </div>

                    <!-- <div class="relative">
                        <input name="r_password" input id="r_password" value="{{old('password')}}" class="p-2 rounded-xl border w-full" type="password" name="r_password" id="r_password" placeholder="Confirm Password" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                        <span class="text-red-500">@error('r_password') {{$message}} @enderror</span>
                    </div> -->

                    <button class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300 mt-3" type="submit">Create an Account
                    </button>
                </form>
            </div>



        </div>


    </section>
    <script src="app.js"></script>
</body>

</html>