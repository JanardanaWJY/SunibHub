<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/authentication.js') }}" defer></script>
    <title>@yield('title')</title>
</head>
<body class="bg-white">
    <div class="flex items-center justify-center h-screen flex-col relative">
        <div class="block w-[15vw] mb-[2vh]"><img src="{{ asset('assets/logo/sunib_logo.png') }}" alt="SunibHub"></div>
        <div class="bg-[#0075BF] z-[2] py-4 flex justify-center flex-col items-center w-[25vw] shadow-xl rounded-3xl relative">
            @yield('content')
        </div>
        <button class="bg-[#FFC533] top-[-1.5vh] py-[1.5vh] w-[20vw] items-center flex justify-center rounded-b-2xl shadow-xl hover:bg-[#FFF0CF] hover:top-0 relative ease-in-out duration-300">
            @yield('content2')
        </button>
    </div>
</body>
</html>