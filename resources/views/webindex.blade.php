<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        দোকান খুঁজি
    </title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('/assets/css/frontside.css') }}">
</head>

<body>

    <div class="main-content">
        <div class="pt-4 pb-4">
            <header class="flex justify-center items-center">
                <div class="text-2xl"><img src="{{ asset('../../logo/logo.png') }}" alt="logo" class="logo"></div>
            </header>
        </div>
        <div class="p-4">
            <div class="flex justify-center items-center">
                <form class=" w-11/12 lg:w-7/12 sm:w-10/12 flex md:w-9/12">
                    <input type="text" name="search"
                        class="search-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search items, brands, locations etc." required>
                    <button
                        class="py-2.5 px-3 ms-2 text-sm font-medium bg-blue-700 text-white rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 search-btn"
                        type="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="p-4 flex justify-center items-center">
            <div class=" w-11/12 lg:w-7/12 sm:w-10/12 md:w-9/12">
                <div class=" bg-white p-4 content-sec">
                    <div>
                        <div class="text-2xl text-blue-500">Micro shop</div>
                        <div>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ea ab voluptate incidunt minus
                            sequi, autem possimus molestias id debitis harum impedit error voluptas facere alias
                            cupiditate
                            voluptates eius. Reiciendis?
                        </div>
                        <a class="text-blue-500" href="#">
                            See more......
                        </a>
                    </div>
                </div>
                <div class=" bg-white p-4  content-sec">
                    <div>
                        <div class="text-2xl text-blue-500">Micro shop</div>
                        <div>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ea ab voluptate incidunt minus
                            sequi, autem possimus molestias id debitis harum impedit error voluptas facere alias
                            cupiditate
                            voluptates eius. Reiciendis?
                        </div>
                        <a class="text-blue-500" href="#">
                            See more......
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <footer class="footer">
        <div class="footer-sec">
            <div class="discover">
                <div class="text-2xl font-bold text-white">
                    Discover
                </div>
                <ul class="pt-4">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="discover-sub">
                <ul>
                    <li><a href="#">Refund Policy</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="contact">
                <div class="text-2xl font-bold text-white">
                    Contact
                </div>
                <div class="pt-4 text-white">
                    <div>Email: 0mKQ8@example.com</div>
                    <div class="py-1">Phone: 01627962866</div>
                    <div class="py-1 social-link">
                        <a href="#"><img class="w-[40px] h-[40px]" src="{{ asset('../../logo/facebook.png') }}"
                                alt="facebook"></a>
                        <a href="#"><img class="w-[40px] h-[40px] mx-2" src="{{ asset('../../logo/insta.webp') }}"
                                alt="instagram"></a>
                    </div>
                    <div>If you want register your shop, then <a class="font-bold"
                            href="{{ route('register') }}">Register?</a></div>
                </div>
            </div>
        </div>

        <div class="footer-end">
            &copy; {{ date('Y') }}. All rights reserved. <i class="fa fa-heart" aria-hidden="true"></i>
        </div>
    </footer>
    @vite('resources/js/app.js')
</body>

</html>
