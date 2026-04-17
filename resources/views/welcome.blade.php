<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Website')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            overflow-x: hidden;
        }

        nav {
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            background: rgba(0,0,0,0.3);
            backdrop-filter: blur(10px);
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #00f2ff;
        }

        .hero {
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
        }

        .hero h1 {
            font-size: 50px;
            margin-bottom: 20px;
            animation: slideDown 1s ease forwards;
        }

        .hero p {
            font-size: 18px;
            opacity: 0;
            animation: fadeUp 1.5s ease forwards;
            animation-delay: 0.5s;
        }

        .btn {
            margin-top: 30px;
            padding: 12px 25px;
            border: none;
            background: #00f2ff;
            color: black;
            border-radius: 30px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: white;
            transform: scale(1.1);
        }

        footer {
            text-align: center;
            padding: 20px;
            background: rgba(0,0,0,0.3);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0 }
            to { opacity: 1 }
        }

        @keyframes slideDown {
            from { transform: translateY(-50px); opacity: 0 }
            to { transform: translateY(0); opacity: 1 }
        }

        @keyframes fadeUp {
            from { transform: translateY(40px); opacity: 0 }
            to { transform: translateY(0); opacity: 1 }
        }
    </style>
</head>
<body>

    <nav>
        <h2>MyLaravel</h2>
        <div>
            <a href="/">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </nav>

    @yield('content')

    <footer>
        © {{ date('Y') }} MyLaravel - All Rights Reserved
    </footer>

</body>
</html>