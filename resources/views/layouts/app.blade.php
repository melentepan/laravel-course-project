<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Курсовой проект')</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, sans-serif;
            color: #1f2937;
            background: #f3f5f9;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            width: 100%;
            max-width: 980px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            margin-bottom: 28px;
        }

        .header-inner {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        header h1 {
            margin: 0;
            font-size: 31px;
            font-weight: 700;
            color: #1f2f7a;
            letter-spacing: 0.2px;
        }

        .menu {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .menu a {
            color: #374151;
            text-decoration: none;
            padding: 6px 0;
            border-bottom: 2px solid transparent;
            font-size: 18px;
            transition: color 0.2s, border-color 0.2s;
        }

        .menu a:hover {
            color: #1f2f7a;
            border-bottom-color: #b7c0e8;
        }

        .menu a.active {
            font-weight: 700;
            color: #1f2f7a;
            border-bottom-color: #1f2f7a;
        }

        main {
            flex: 1;
        }

        .page-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 28px;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.05);
        }

        h2 {
            margin-top: 0;
            margin-bottom: 14px;
            color: #1f2f7a;
            font-size: 36px;
        }

        p {
            line-height: 1.6;
            font-size: 18px;
            margin: 0 0 12px;
        }

        .contact-item {
            background: #fafafa;
            border: 1px solid #e2e2e2;
            border-radius: 6px;
            padding: 10px 12px;
        }

        .contact-item strong {
            color: #2d3a8c;
        }

        footer {
            margin-top: 18px;
            color: #666;
            text-align: center;
            padding: 12px 0 22px;
            font-size: 14px;
        }

        @media (max-width: 600px) {
            header {
                margin-bottom: 20px;
            }

            .header-inner {
                min-height: unset;
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
                padding: 14px 0;
            }

            header h1 {
                font-size: 24px;
                margin-bottom: 0;
            }

            h2 {
                font-size: 24px;
            }

            .page-card {
                padding: 16px;
            }

            p {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-inner">
            <h1>Сайт курсового проекта</h1>

            <nav>
                <div class="menu">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Главная</a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">О нас</a>
                    <a href="{{ route('contacts') }}" class="{{ request()->routeIs('contacts') ? 'active' : '' }}">Контакты</a>
                </div>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="page-card">
            @yield('content')
        </section>
    </main>

    <footer>
        <p>Мелентьев Степан Алексеевич 243-321</p>
    </footer>
</body>
</html>
