<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
       <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Home</title>
</head>
<body>
<nav class="navigation">
    <div class="nav-items">
        <ul>
            <li class="home_tab"><a href="/" class="{{ Request::path() === 'welcome' ? 'active' : '' }}">Home</a></li>
            <li class="home_tab"><a href="/profile" class="{{ Request::path() === 'profile' ? 'active' : '' }}">Profile</a></li>
            <li class="home_tab"><a href="/dashboard" class="{{ Request::path() === 'dashboard' ? 'active' : '' }}">Dashboard</a></li>
            <li class="home_tab"><a href="/blog" class="{{ Request::path() === 'blog' ? 'active' : '' }}">Blog</a></li>
            <li class="home_tab"><a href="/faq" class="{{ Request::path() === 'faq' ? 'active' : '' }}">FAQ</a></li>
        </ul>
    </div>
    <a href="https://hz.nl/en">
        <img class="logo" src="../public/images1/images/university-of-applied-sciences-300x0-c-default.webp" alt= "know more about hz university">
    </a>
</nav>


{{-- contents go here --}}
@yield('content')
<div class="sidemenu3">
    <ul>
        <li>
            <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/OER-HZ-Bacheloropleidingen-voltijd-2023-2024-DEF-versie-20230720.pdf">Course
                and Examination Regulations</a>
        </li>

        <li>
            <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/TWE/IR-B-HBO-ICT-full-time-2023-2024-DEF.pdf">The
                IR Regulations HBO-ICT</a>
        </li>

        <li>
            <a href="https://learn.hz.nl/my/"> Learn environment</a>
        </li>

        <li>
            <a href="https://teams.microsoft.com/_#/school/teams-grid/General?ctx=teamsGrid">Teams
                environment </a>
        </li>

        <li>
            <a href="https://hz.osiris-student.nl/#code=kK9w1e">Study progress</a>
        </li>

        <li>
            <a href="https://github.com/HZ-HBO-ICT">Github environment</a>
        </li>
    </ul>
</div>
</body>
</html>
