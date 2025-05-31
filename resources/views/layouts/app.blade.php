<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ApoTrack - {{ $title ?? 'Sistem Apotek' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fd;
            color: #333;
        }

        header {
            background-color: #6c63ff; /* Ungu solid */
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        header a,
        header span {
            color: white;
            text-decoration: none;
            font-weight: 500;
            margin-left: 1rem;
            font-size: 0.95rem;
        }

        header a:hover,
        header button:hover {
            color: #e0e0ff;
        }

        header form {
            display: inline;
        }

        header button {
            background-color: #ef4444;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background 0.3s ease;
        }

        header button:hover {
            background-color: #dc2626;
        }

        main {
            padding: 2rem;
        }

        footer {
            background: {{ (Request::is('login') || Request::is('register')) ? 'linear-gradient(135deg, #d8b4fe, #f0abfc)' : '#0d6efd' }};
            color: white;
            padding: 1rem;
            text-align: center;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <div style="font-size: 1.5rem; font-weight: bold;">ApoTrack</div>
        <nav>
            @auth
                <span>Halo, {{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} ApoTrack. All rights reserved.
    </footer>
</body>
</html>
