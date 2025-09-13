<!DOCTYPE html>
<html lang="en" class="h-full bg-[#F0F3F7]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full">
    <div class="flex min-h-screen flex-col items-center justify-center px-6 py-12 lg:px-8">


        <div class="flex h-[750px] w-[500px] flex-col justify-between rounded-2xl bg-white p-10 shadow-md">


            <div>
                <img src="img/jjjlogoblack.png" alt="Your Company" class="mx-auto h-12 w-auto" />
                <h2 class="mt-6 text-center text-2xl font-bold tracking-tight text-gray-900">
                    Register to your account
                </h2>
            </div>


            <div class="flex flex-1 flex-col justify-center">
                <form id="registerForm" action="#" method="POST" class="mt-8 space-y-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-900">Email / Number</label>
                        <div class="mt-2">
                            <input id="email" type="email" name="email" required autocomplete="email"
                                class="block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-base text-gray-900 placeholder:text-gray-400 focus:border-[#1E88E5] focus:ring-[#1E88E5] sm:text-sm" />
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                        <div class="mt-2">
                            <input id="password" type="password" name="password" required autocomplete="new-password"
                                class="block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-base text-gray-900 placeholder:text-gray-400 focus:border-[#1E88E5] focus:ring-[#1E88E5] sm:text-sm" />
                        </div>
                    </div>

                    <div>
                        <label for="confirm_password" class="block text-sm font-medium text-gray-900">Confirm
                            Password</label>
                        <div class="mt-2">
                            <input id="confirm_password" type="password" name="confirm_password" required
                                class="block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-base text-gray-900 placeholder:text-gray-400 focus:border-[#1E88E5] focus:ring-[#1E88E5] sm:text-sm" />
                        </div>
                        <p id="passwordError" class="mt-1 hidden text-sm text-red-500">Passwords do not match</p>
                    </div>

                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-900">Username</label>
                        <div class="mt-2">
                            <input id="username" type="text" name="username" required
                                class="block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-base text-gray-900 placeholder:text-gray-400 focus:border-[#1E88E5] focus:ring-[#1E88E5] sm:text-sm" />
                        </div>
                    </div>

                    <div>
                        <label for="birthday" class="block text-sm font-medium text-gray-900">Birthday</label>
                        <div class="mt-2">
                            <input id="birthday" type="date" name="birthday" required
                                class="block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-base text-gray-900 placeholder:text-gray-400 focus:border-[#1E88E5] focus:ring-[#1E88E5] sm:text-sm" />
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="shadow-2xs flex w-full justify-center rounded-md bg-[#1E88E5] px-3 py-2 text-sm font-semibold text-white hover:bg-[#2D53A9] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#2D53A9]">
                            Submit
                        </button>
                    </div>
                </form>
            </div>


            <p class="mt-6 text-center text-sm text-gray-500">
                Already have an account?
                <a href="/login" class="font-semibold text-[#1E88E5] hover:text-[#2D53A9]">Log in</a>
            </p>
        </div>
    </div>


    <script>
        const form = document.getElementById('registerForm');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirm_password');
        const errorText = document.getElementById('passwordError');

        form.addEventListener('submit', function(e) {
            if (password.value !== confirmPassword.value) {
                e.preventDefault();
                errorText.classList.remove('hidden');
            } else {
                errorText.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
