<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/d4d17f412d.js" crossorigin="anonymous"></script>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/welcome.css', 'resources/js/app.js'])

    @else
    <style>

    </style>
    @endif
</head>

<body>
    <!-- <body class="text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col"> -->
    <div class="box1">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
            <div class="flex justify-between items-center w-full">
                <span class="diaryText"></span>
                <nav class="flex gap-4" style="margin-left:200px;">
                    @auth
                    <a href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#000000] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}"
                        class="inline-block px-2 py-1.5 dark:text-[#000000] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                        Log in
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#000000] text-[#1b1b18] border border-transparent hover:border-[#1915014a] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                        Register
                    </a>
                    @endif
                    @endauth
                </nav>
            </div>
            @endif
        </header>
        <div class="TextMain flex flex-col justify-center items-center text-center ">
            <h1>Your Safe Space</h1>
            <h1>to Reflect</h1>
            <p>Write.Heal.Grow</p>

            <!-- From Uiverse.io by adamgiebl -->
            <button class="WCbtn">
                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
                        fill="currentColor"></path>
                </svg>
                <span><a href="{{ route('login') }}"></a>Get Started</span>
            </button>


            <div class="WcBtmText flex items-center gap-9 ">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-lock"></i>
                    <p>Secure & Privacy</p>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-calendar-week"></i>
                    <p>Daily Prompts</p>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-clock"></i>
                    <p>Mood Tracker</p>
                </div>
            </div>

        </div>


        @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
        @endif

</body>

</html>