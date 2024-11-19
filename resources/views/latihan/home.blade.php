<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-montserrat overflow-x-hidden">

    <!-- Navigation -->
    <div class="container mx-auto">
        <nav class="flex justify-between items-center py-4">
            <div class="flex items-center space-x-4">
                <img src="Asset/Logo.png" alt="Logo" class="h-10">
            </div>
            <ul class="flex space-x-6 text-lg font-medium">
                <li><a href="#" class="hover:text-green-600">Home</a></li>
                <li><a href="#" class="hover:text-green-600">Service</a></li>
                <li><a href="#" class="hover:text-green-600">Feature</a></li>
                <li><a href="#" class="hover:text-green-600">Product</a></li>
                <li><a href="#" class="hover:text-green-600">Testimonial</a></li>
                <li><a href="#" class="hover:text-green-600">FAQ</a></li>
            </ul>
            <div class="flex space-x-4">
                <button class="border border-green-500 text-green-500 px-4 py-2 rounded-md">Login</button>
                <button class="bg-green-500 text-white px-4 py-2 rounded-md">Sign Up</button>
            </div>
        </nav>
    </div>

    <!-- Main Section -->
    <main>
        <div class="bg-gray-50 text-center py-16">
            <h1 class="text-4xl font-bold text-gray-800">Lesson and Insight</h1>
            <h2 class="text-3xl text-green-600 mt-2">from 8 years</h2>
            <p class="text-gray-600 mt-4">Where to grow your business as a photographer: site or social media?</p>
            <button class="bg-green-500 text-white px-6 py-2 rounded-md mt-6">Register</button>
            <div class="mt-8">
                <img src="Asset/Illustration.png" alt="Illustration" class="mx-auto w-2/5">
            </div>
        </div>

        <!-- Our Clients -->
        <div class="text-center py-16">
            <h1 class="text-3xl font-bold text-gray-800">Our Clients</h1>
            <p class="text-gray-600 mt-2">We have been working with some Fortune 500+ clients</p>
            <div class="flex justify-center items-center space-x-8 mt-8">
                <img src="Asset/icon tengah.png" alt="Client Icon" class="h-12">
                <img src="Asset/Logo-1.png" alt="Logo 1" class="h-12">
                <img src="Asset/Logo-2.png" alt="Logo 2" class="h-12">
                <img src="Asset/Logo-3.png" alt="Logo 3" class="h-12">
                <img src="Asset/Logo-4.png" alt="Logo 4" class="h-12">
                <img src="Asset/Logo-5.png" alt="Logo 5" class="h-12">
                <img src="Asset/Logo-6.png" alt="Logo 6" class="h-12">
            </div>
        </div>

        <!-- Community Management -->
        <div class="text-center py-16 bg-gray-50">
            <h1 class="text-3xl font-bold text-gray-800">Manage your entire community</h1>
            <h2 class="text-3xl text-green-600 mt-2">in a single system</h2>
            <p class="text-gray-600 mt-2">Who is Nexcent suitable for?</p>
            <div class="flex justify-center space-x-8 mt-8">
                <img src="Asset/Iconn (1).png" alt="Icon 1" class="h-16">
                <img src="Asset/Iconn (2).png" alt="Icon 2" class="h-16">
                <img src="Asset/Iconn (3).png" alt="Icon 3" class="h-16">
            </div>
            <div class="grid grid-cols-3 gap-4 mt-8">
                <div>
                    <h3 class="font-bold text-lg text-gray-800">Membership</h3>
                    <p class="text-gray-600 mt-2">Our membership management software provides full automation of membership renewals and payments.</p>
                </div>
                <div>
                    <h3 class="font-bold text-lg text-gray-800">Clubs and Organizations</h3>
                    <p class="text-gray-600 mt-2">Our membership management software provides full automation of membership renewals and payments.</p>
                </div>
                <div>
                    <h3 class="font-bold text-lg text-gray-800">Associations and Groups</h3>
                    <p class="text-gray-600 mt-2">Our membership management software provides full automation of membership renewals and payments.</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-12">
            <div class="container mx-auto flex justify-between items-center">
                <div>
                    <img src="Asset/Icon.png" alt="Logo" class="h-10">
                    <h1 class="text-xl font-bold mt-4">Nexcent</h1>
                    <p class="text-gray-400">Copyright © 2020 Nexcent ltd.<br>All rights reserved</p>
                </div>
                <div class="space-x-8">
                    <div>
                        <h3 class="font-bold text-lg">Company</h3>
                        <ul class="mt-2 space-y-1">
                            <li>About us</li>
                            <li>Blog</li>
                            <li>Contact us</li>
                            <li>Pricing</li>
                            <li>Testimonials</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg">Support</h3>
                        <ul class="mt-2 space-y-1">
                            <li>Help center</li>
                            <li>Terms of Service</li>
                            <li>Legal</li>
                            <li>Privacy policy</li>
                            <li>Status</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <h3 class="font-bold text-lg">Stay up to date</h3>
                    <input type="text" placeholder="Your email address" class="mt-2 px-4 py-2 rounded-md">
                </div>
            </div>
        </footer>
    </main>

</body>
</html>
