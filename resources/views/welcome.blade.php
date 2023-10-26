<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 @vite('resources/css/app.css')
    <title>Главная</title>
  </head>

  <body
    class="bg-gray-50 min-h-screen  bg-no-repeat bg-bottom bg-fixed"
  >
    <header class="flex justify-between p-3 sm:p-6 items-center">
      <a class="flex items-center gap-2" href="{{route('welcome')}}">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="text-green-600 h-6 sm:h-10"
        >
          <path
            fill-rule="evenodd"
            d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
            clip-rule="evenodd"
          />
        </svg>

        <span class="text-2sm sm:text-xl font-black">Главная</span>
      </a>
      <div>
        <a
          class="rounded-md bg-green-600 py-2 px-4 text-xs sm:text-xl text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200 ease-in-out"
          href="{{route('dashbord')}}"
          >Дашборд</a
        >
        <a
          class="rounded-md bg-green-600 py-2 px-4 text-xs sm:text-xl text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200 ease-in-out"
          href=""
          >Войти</a
        >
        <a
        class="rounded-md bg-green-600 py-2 px-4 text-xs sm:text-xl text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200 ease-in-out"
        href="{{route('register')}}"
        >Регистрация</a
      >
      </div>

    </header>
    <main class="flex flex-col justify-center p-3 sm:p-6">
      
    </main>
  </body>
</html>
