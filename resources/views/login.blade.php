<!DOCTYPE html>
<html lang="en" class="h-full bg-[#F0F3F7]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full">
    <div class="flex min-h-full flex-col items-center justify-center px-6 py-12 lg:px-8">


        <div class="flex h-[525px] w-[500px] flex-col justify-between rounded-2xl bg-white p-10 shadow-md">


            <div>
                <img src="img/jjjlogoblack.png" alt="Your Company" class="mx-auto h-12 w-auto" />
                <h2 class="mt-6 text-center text-2xl font-bold tracking-tight text-gray-900">
                    Sign in to your account
                </h2>
            </div>


            <div class="flex flex-1 flex-col justify-center">
                <form action="#" method="POST" class="mt-8 space-y-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                        <div class="mt-2">
                            <input id="email" type="email" name="email" required autocomplete="email"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#1E88E5] sm:text-sm" />
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-[#1E88E5] hover:text-[#2D53A9]">
                                    Forgot password?
                                </a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input id="password" type="password" name="password" required
                                autocomplete="current-password"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#1E88E5] sm:text-sm" />
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="shadow-2xs flex w-full justify-center rounded-md bg-[#1E88E5] px-3 py-1.5 text-sm font-semibold text-white hover:bg-[#2D53A9] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#2D53A9]">
                            Sign in
                        </button>
                    </div>
                </form>
            </div>


            <p class="mt-6 text-center text-sm text-gray-500">
                Not a member?
                <a href="/register" class="font-semibold text-[#1E88E5] hover:text-[#2D53A9]">
                    Sign Up Now!
                </a>
            </p>
        </div>
    </div>
</body>

</html>
