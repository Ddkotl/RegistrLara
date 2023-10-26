<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Регистрация</title>
</head>

<body class="bg-gray-50 min-h-screen  bg-no-repeat bg-bottom bg-fixed">
    <header class="flex justify-between p-3 sm:p-6 items-center">
        <a class="flex items-center gap-2" href="{{ route('welcome') }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="text-green-600 h-6 sm:h-10">
                <path fill-rule="evenodd"
                    d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                    clip-rule="evenodd" />
            </svg>

            <span class="text-2sm sm:text-xl font-black">Регистрация</span>
        </a>
        <div>
            <a class="rounded-md bg-green-600 py-2 px-4 text-xs sm:text-xl text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200 ease-in-out"
                href="">Войти</a>
        </div>
    </header>
    <main class="flex flex-col justify-center p-3 sm:p-6">
        <div class="max-w-md mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="text-green-600 h-8 sm:h-12 mx-auto">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>

            <h2 class="mt-2 sm:mt-6 text-xl sm:text-3xl font-bold text-gray-900">
                Создайте ваш аккаунт
            </h2>
        </div>
        <div
            class="border border-green-700 bg-white/40 backdrop-blur-xl mt-3 sm:mt-6 mx-auto rounded-xl shadow-xl p-5 sm:p-10 max-w-md w-full">

            <form action="{{ route('register') }}" method="post" autocomplete="off"
                class="space-y-2 sm:space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Имя</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 pl-3 inset-y-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="{{ $errors->has('name') ? 'text-red-400' : 'text-gray-400' }} w-5 h-5 ">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </div>
                        <input type="text" id="name" name="name" required autofocus placeholder="ваше имя"
                            value="{{old('name')}}"
                            class=" {{ $errors->has('name') ? 'focus:border-red-500 focus:ring-red-500 border-red-300 text-red-900 placeholder-red-300' : 'focus:border-green-500 focus:ring-green-500 border-gray-300' }} rounded-md pl-10  text-sm w-full" />
                        @error('name')
                            <div class="absolute right-0 pr-3 inset-y-0 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286zm0 13.036h.008v.008H12v-.008z" />
                                </svg>
                            </div>
                        @enderror
                    </div>

                    @error('name')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror

                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">email</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 pl-3 inset-y-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="{{ $errors->has('email') ? 'text-red-400' : 'text-gray-400' }} w-5 h-5 ">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>


                        </div>
                        <input type="text" id="email" name="email" required placeholder="ваш email"
                        value="{{old('email')}}"
                            class=" {{ $errors->has('email') ? 'focus:border-red-500 focus:ring-red-500 border-red-300 text-red-900 placeholder-red-300' : 'focus:border-green-500 focus:ring-green-500 border-gray-300' }} rounded-md pl-10  text-sm w-full" />
                        @error('email')
                            <div class="absolute right-0 pr-3 inset-y-0 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286zm0 13.036h.008v.008H12v-.008z" />
                                </svg>
                            </div>
                        @enderror
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror

                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Пароль</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 pl-3 inset-y-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="{{ $errors->has('password') ? 'text-red-400' : 'text-gray-400' }} w-5 h-5 ">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <input type="password" id="password" name="password" required placeholder="ваш пароль"
                            class=" {{ $errors->has('password') ? 'focus:border-red-500 focus:ring-red-500 border-red-300 text-red-900 placeholder-red-300' : 'focus:border-green-500 focus:ring-green-500 border-gray-300' }} rounded-md pl-10  text-sm w-full" />
                        @error('password')
                            <div class="absolute right-0 pr-3 inset-y-0 flex items-center">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286zm0 13.036h.008v.008H12v-.008z" />
                                </svg>
                            </div>
                        @enderror
                    </div>

                    @error('password')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror

                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Пароль</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 pl-3 inset-y-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="{{ $errors->has('password') ? 'text-red-400' : 'text-gray-400' }} w-5 h-5 ">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>


                        </div>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            placeholder="Подтвердите пароль"
                            class=" {{ $errors->has('password') ? 'focus:border-red-500 focus:ring-red-500 border-red-300 text-red-900 placeholder-red-300' : 'focus:border-green-500 focus:ring-green-500 border-gray-300' }} rounded-md pl-10  text-sm w-full" />
                        @error('password')
                            <div class="absolute right-0 pr-3 inset-y-0 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286zm0 13.036h.008v.008H12v-.008z" />
                                </svg>
                            </div>
                        @enderror
                    </div>

                </div>



                <div>
                    <button type="submit"
                        class="flex justify-center items-center w-full rounded-md bg-green-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200 ease-in-out"
                        href="#">Зарегестрироваться</button>
                </div>
            </form>
            <div class="flex justify-center items-center mt-6">
                <a href="login.html" class="font-medium text-sm text-green-600 hover:text-green-400">
                    Уже есть аккаунт?
                </a>
            </div>
        </div>
    </main>
</body>

</html>
