<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study-Hub Management System</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#D9D9D9]">

    <!-- Navbar -->
    <nav class="p-4 bg-[#1C6B32] shadow">
        <div class="flex justify-between font-poppins">
            <a href="#"><img class="ml-5 pt-2 h-[50px] w-[190px]" src="/images/content.png" alt=""></a>

            <!-- Navbar Links -->
            <div class="ml-[690px] pt-4">
                <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-base font-extrabold">About</a>
                <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-base font-extrabold">Contacts</a>
            </div>
            <!-- Navbar Links SignUp|LogIn -->
            <div class="mr-[15px] pt-3">
                <a href="{{ route('register') }}" class="text-gray-300 hover:bg-white hover:text-[#1C6B32] px-3 py-2 rounded-md text-lg font-extrabold">Sign up</a>
                <a href="{{ route('login') }}" class="text-gray-300 hover:bg-white hover:text-[#1C6B32] px-3 py-2 rounded-md text-lg font-extrabold">Log in</a>
            </div>


        </div>
    </nav>


    <section>


        <div class="flex flex-row place-items-center justify-center font-Rampart">
            <div class="w-full h-full">
                <img class="" src="/images/landingpagebg.png" alt="">
            </div>

            <!-- Info -->
            <div class="pr-20">
                <!-- Study Hub MS div class -->
                <div class="flex justify-center pr-7">
                    <h1 class="font-extrabold text-4xl text-[#1C6B32]">Study Hub Management System</h1>
                </div>
                <!-- Info/s about SHMS -->
                <div class="pt-7">
                    <p class="text-[#1C6B32]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, obcaecati corrupti repellat at sit vel, ex distinctio sint, praesentium nihil earum! Itaque, soluta quae quod rerum accusantium placeat beatae doloribus.</p>
                </div>
            </div>


        </div>


    </section>

    <section class="pt-[60px] pb-[100px]">
        <div class="grid grid-cols-4 gap-4">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="/images/firstcard.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="text-[#1C6B32] font-bold text-xl mb-2">The Coldest Sunset</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>

            </div>



            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="/images/seccard.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="text-[#1C6B32] font-bold text-xl mb-2">The Coldest Sunset</div>
                    <p class="text-[#1C6B32]">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>

            </div>

            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="/images/thirdcard.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="text-[#1C6B32] font-bold text-xl mb-2">The Coldest Sunset</div>
                    <p class="text-[#1C6B32]">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>

            </div>

            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="/images/fourthcard.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="text-[#1C6B32] font-bold text-xl mb-2">The Coldest Sunset</div>
                    <p class="text-[#1C6B32]">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>

            </div>


        </div>


    </section>

    <footer class="bg-[#1C6B32] text-gray-300 py-10">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <span class="mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M16.6 2.6H3.4C2.6 2.6 2 3.2 2 4v8c0 .8.6 1.4 1.4 1.4h2.2v2.8c0 .8.6 1.4 1.4 1.4h2.8c.8 0 1.4-.6 1.4-1.4v-2.8h4.4v2.8c0 .8.6 1.4 1.4 1.4h2.8c.8 0 1.4-.6 1.4-1.4v-2.8h2.2c.8 0 1.4-.6 1.4-1.4v-8c0-.8-.6-1.4-1.4-1.4zm-3.4 12.2h-2.8v-2.8c0-.8-.6-1.4-1.4-1.4H7.6c-.8 0-1.4.6-1.4 1.4v2.8H3.4V4h13.2v10.8z" />
                    </svg>
                </span>
                <span>123-456-7890</span>
            </div>
            <div class="flex items-center mb-4 md:mb-0">
                <span class="mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 5v10c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2zm2 0h12v2.5L10 11 4 7.5V5zm0 10v-3.5l6 3.5 6-3.5V15H4z" />
                    </svg>
                </span>
                <span>info@example.com</span>
            </div>
            <div>
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Chat Now
                </button>
            </div>
        </div>
    </footer>




</body>

</html>