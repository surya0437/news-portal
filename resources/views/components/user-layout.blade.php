<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/frontend/style.css">
</head>

<body>
    <section class="sticky top-0 z-20 bg-white shadow-md">
        <header class="">
            <div>
                <div class="container py-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <img src="https://jawaaf.com/storage/01HTH9VH34J6JGHNX9EE0TK0EP.png" alt="logo"
                                class="w-auto h-20 md:h-16 lg:h-12 xl:h-8">
                        </div>
                        <div>
                            <p>{{ nepalidate(now()) }}</p>
                            <img src="https://jawaaf.com/frontend/images/redline.png" alt="logo"
                                class="w-auto h-5 md:h-4 lg:h-3 xl:h-5">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <nav class="bg-green-500 border-gray-200 px-4 py-2.5 w-full">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <!-- Hamburger Icon for Small Devices -->
                <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation"
                    aria-controls="drawer-navigation" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <!-- Navbar Links for Larger Screens -->
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                        <li><a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-gray-100 active">Home</a></li>
                        <li><a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-gray-100">About</a></li>
                        <li><a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-gray-100">Services</a>
                        </li>
                        <li><a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-gray-100">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Drawer Navigation for Small Devices -->
        <div id="drawer-navigation"
            class="fixed z-40 w-64 h-screen p-4 overflow-y-auto transition-transform duration-300 transform -translate-x-full bg-green-500"
            tabindex="-1" aria-labelledby="drawer-navigation-label">
            <h5 id="drawer-navigation-label" class="text-base font-semibold text-white uppercase">Menu</h5>
            <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
                class="text-white bg-transparent hover:bg-green-600 hover:text-white rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <ul class="mt-6 space-y-6">
                <li><a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-gray-100">Home</a></li>
                <li><a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-gray-100">About</a></li>
                <li><a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-gray-100">Services</a></li>
                <li><a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-gray-100">Contact</a></li>
            </ul>
        </div>
    </section>

    <main>

        {{ $slot }}

    </main>
    <footer class="text-white bg-green-500">
        <div class="max-w-screen-xl px-4 py-6 mx-auto lg:py-8">
            <div class="md:flex md:justify-between">
                <!-- Brand Section -->
                <div class="mb-6 md:mb-0">
                    <a href="#" class="flex items-center">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="Brand Logo" />
                        <span class="text-2xl font-semibold">Brand Name</span>
                    </a>
                </div>

                <!-- Resources Section -->
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase">Resources</h2>
                        <ul class="text-gray-200">
                            <li class="mb-4"><a href="#" class="hover:underline">Resource 1</a></li>
                            <li><a href="#" class="hover:underline">Resource 2</a></li>
                        </ul>
                    </div>

                    <!-- Follow Us Section -->
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase">Follow Us</h2>
                        <ul class="text-gray-200">
                            <li class="mb-4"><a href="#" class="hover:underline">Facebook</a></li>
                            <li><a href="#" class="hover:underline">Twitter</a></li>
                        </ul>
                    </div>

                    <!-- Legal Section -->
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase">Legal</h2>
                        <ul class="text-gray-200">
                            <li class="mb-4"><a href="#" class="hover:underline">Privacy Policy</a></li>
                            <li><a href="#" class="hover:underline">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <hr class="my-6 border-gray-200 dark:border-gray-700" />

            <!-- Bottom Section -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <span class="text-sm">© 2024 <a href="#" class="hover:underline">Your Company</a>. All Rights
                    Reserved.</span>
                <div class="flex mt-4 sm:mt-0">
                    <!-- Facebook -->
                    <a href="#" class="text-gray-200 hover:text-white me-5">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24h21.351C23.407 24 24 23.407 24 22.675V1.325C24 .593 23.407 0 22.675 0zM20.49 7.946c-.075 1.337-.145 2.7-.216 4.082-.097 1.952-.212 3.834-.428 5.673-.186 1.457-1.186 2.432-2.604 2.628-2.076.28-4.16.447-6.255.423-2.095-.024-4.174-.172-6.256-.429-1.421-.195-2.429-1.171-2.621-2.63-.278-2.082-.444-4.164-.423-6.254.021-2.09.165-4.171.429-6.254.192-1.461 1.201-2.439 2.622-2.63 2.08-.276 4.16-.442 6.255-.424 2.095.018 4.175.167 6.255.424 1.417.191 2.427 1.17 2.623 2.631.268 2.084.43 4.167.424 6.255z" />
                            <path
                                d="M9.543 8.998c-.152.044-.34.004-.446-.087-.27-.228-.271-.663-.002-.882.374-.318.788-.495 1.232-.494.646.003 1.297.158 1.792.501.384.26.397.785.022 1.03-.17.108-.414.08-.538-.047-.645-.668-1.653-.661-2.198-.021-.197.231-.328.54-.404.787.322-.157.664-.187.989-.183 2.436.032 4.451 1.808 4.571 4.243.107 2.201-1.767 4.238-3.944 4.286-2.187.045-4.287-1.99-4.283-4.37-.004-.336.059-.679.182-1.001.07-.187.306-.178.365-.015.18.497.487.936.895 1.288.533.457 1.245.66 1.973.657.816-.003 1.598-.317 2.157-.867.548-.542.866-1.336.867-2.148 0-1.403-1.298-2.498-2.674-2.515-1.345-.017-2.46 1.12-2.489 2.52-.029 1.428 1.285 2.588 2.702 2.588.554 0 1.074-.192 1.514-.52-.16-.024-.314-.045-.462-.083z" />
                        </svg>
                        <span class="sr-only">Facebook</span>
                    </a>

                    <!-- Twitter -->
                    <a href="#" class="text-gray-200 hover:text-white me-5">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24h21.351C23.407 24 24 23.407 24 22.675V1.325C24 .593 23.407 0 22.675 0zM20.49 7.946c-.075 1.337-.145 2.7-.216 4.082-.097 1.952-.212 3.834-.428 5.673-.186 1.457-1.186 2.432-2.604 2.628-2.076.28-4.16.447-6.255.423-2.095-.024-4.174-.172-6.256-.429-1.421-.195-2.429-1.171-2.621-2.63-.278-2.082-.444-4.164-.423-6.254.021-2.09.165-4.171.429-6.254.192-1.461 1.201-2.439 2.622-2.63 2.08-.276 4.16-.442 6.255-.424 2.095.018 4.175.167 6.255.424 1.417.191 2.427 1.17 2.623 2.631.268 2.084.43 4.167.424 6.255z" />
                            <path
                                d="M9.543 8.998c-.152.044-.34.004-.446-.087-.27-.228-.271-.663-.002-.882.374-.318.788-.495 1.232-.494.646.003 1.297.158 1.792.501.384.26.397.785.022 1.03-.17.108-.414.08-.538-.047-.645-.668-1.653-.661-2.198-.021-.197.231-.328.54-.404.787.322-.157.664-.187.989-.183 2.436.032 4.451 1.808 4.571 4.243.107 2.201-1.767 4.238-3.944 4.286-2.187.045-4.287-1.99-4.283-4.37-.004-.336.059-.679.182-1.001.07-.187.306-.178.365-.015.18.497.487.936.895 1.288.533.457 1.245.66 1.973.657.816-.003 1.598-.317 2.157-.867.548-.542.866-1.336.867-2.148 0-1.403-1.298-2.498-2.674-2.515-1.345-.017-2.46 1.12-2.489 2.52-.029 1.428 1.285 2.588 2.702 2.588.554 0 1.074-.192 1.514-.52-.16-.024-.314-.045-.462-.083z" />
                        </svg>
                        <span class="sr-only">Twitter</span>
                    </a>

                    <!-- GitHub -->
                    <a href="#" class="text-gray-200 hover:text-white me-5">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0C5.373 0 0 5.373 0 12c0 5.301 3.438 9.8 8.206 11.38.6.111.82-.261.82-.579v-2.169c-3.338.728-4.045-1.606-4.045-1.606-.545-1.4-1.332-1.772-1.332-1.772-1.085-.743.083-.729.083-.729 1.205.085 1.835 1.236 1.835 1.236 1.072 1.93 2.809 1.371 3.497 1.05.107-.775.418-1.371.762-1.684-2.665-.306-5.467-1.332-5.467-5.932 0-1.309.469-2.376 1.236-3.22-.124-.306-.536-1.545.118-3.22 0 0 1.027-.329 3.36 1.256.977-.272 2.02-.409 3.062-.413 1.042.004 2.083.141 3.06.414 2.32-1.585 3.343-1.256 3.343-1.256.653 1.675.245 2.916.12 3.22.774.844 1.237 1.91 1.237 3.22 0 4.602-2.808 5.624-5.468 5.927.428.377.81 1.13.81 2.285v3.348c0 .319.221.692.825.578A11.973 11.973 0 0 0 24 12c0-6.627-5.373-12-12-12z" />
                        </svg>
                        <span class="sr-only">GitHub</span>
                    </a>

                    <!-- LinkedIn -->
                    <a href="#" class="text-gray-200 hover:text-white me-5">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M0 1.325C0 .593.593 0 1.325 0h21.351C23.407 0 24 .593 24 1.325v21.351C24 23.407 23.407 24 22.675 24H1.325C.593 24 0 23.407 0 22.675V1.325ZM22.675 22.675H1.325V1.325h21.351V22.675Zm-9.387-8.723v-6.25h2.759v6.25h-2.759Zm1.36-7.832c-.85 0-1.534-.698-1.534-1.558s.684-1.558 1.534-1.558c.849 0 1.533.698 1.533 1.558s-.684 1.558-1.533 1.558Zm-8.083 7.832h2.754v-3.501c0-1.118.323-1.88 1.144-1.88.636 0 1.014.426 1.181.839.058.136.072.325.072.518v3.024h2.759v-3.253c0-1.663-.576-2.827-1.732-3.303-.951-.436-2.062-.38-2.838-.066a2.538 2.538 0 0 0-1.164 2.344v3.311Zm9.387 0h-2.756v-4.908c0-.953-.382-1.586-1.09-1.586-.614 0-.98.425-1.14.837-.07.145-.086.35-.086.556v5.074h-2.76v-6.248h2.759v.8c.573-.889 1.625-1.525 3.017-1.525 2.155 0 3.705 1.452 3.705 4.05v6.43Zm-9.387-1.214v-5.604h2.759v5.604h-2.759ZM3.72 8.337c-.845 0-1.53-.682-1.53-1.532s.685-1.533 1.53-1.533 1.533.682 1.533 1.533c0 .85-.688 1.532-1.533 1.532Zm1.362 6.844v-5.773h2.759v5.773h-2.759Z" />
                        </svg>
                        <span class="sr-only">LinkedIn</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
