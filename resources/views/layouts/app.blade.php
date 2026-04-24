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

        .site-title-link {
            color: inherit;
            text-decoration: none;
            transition: opacity 0.2s;
        }

        .site-title-link:hover {
            opacity: 0.8;
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
            margin-bottom: 18px;
            color: #1f2f7a;
            font-size: 34px;
        }

        p {
            line-height: 1.6;
            font-size: 18px;
            margin: 0 0 12px;
        }

        .article-list {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .article-card {
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 16px;
            background: #ffffff;
            box-shadow: 0 4px 14px rgba(15, 23, 42, 0.05);
            display: flex;
            flex-direction: column;
            transition: opacity 0.2s, box-shadow 0.2s, border-color 0.2s;
        }

        .article-card:hover {
            opacity: 0.92;
            box-shadow: 0 10px 22px rgba(15, 23, 42, 0.1);
            border-color: #d8deea;
        }

        .article-card h3 {
            margin: 0 0 8px;
            color: #1f2f7a;
            font-size: 24px;
            line-height: 1.2;
        }

        .article-card p {
            margin-bottom: 14px;
            font-size: 17px;
            color: #374151;
        }

        .preview-link {
            display: block;
            text-decoration: none;
            margin-top: auto;
        }

        .preview-image {
            width: 100%;
            height: 240px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            display: block;
            object-fit: cover;
        }

        .full-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            border: 1px solid #cfd8e3;
            margin: 0;
            display: block;
        }

        .gallery-date {
            margin: -4px 0 12px;
            color: #6b7280;
            font-size: 15px;
        }

        .gallery-image-box {
            background: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 10px;
            margin-bottom: 14px;
        }

        .back-link {
            display: inline-block;
            margin-top: 10px;
            color: #ffffff;
            text-decoration: none;
            background: #1f2f7a;
            border: 1px solid #1f2f7a;
            border-radius: 8px;
            padding: 8px 12px;
            transition: background 0.2s, transform 0.2s;
        }

        .back-link:hover {
            background: #27399a;
            transform: translateY(-1px);
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

        .signin-form {
            max-width: 420px;
            display: grid;
            gap: 10px;
        }

        .signin-form label {
            font-weight: 600;
            color: #1f2f7a;
        }

        .signin-form input {
            padding: 9px 10px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 16px;
        }

        .signin-form button {
            margin-top: 4px;
            background: #1f2f7a;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 10px 12px;
            cursor: pointer;
            font-size: 16px;
        }

        .signin-form button:hover {
            opacity: 0.9;
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

            .article-card h3 {
                font-size: 20px;
            }

            .article-card p {
                font-size: 16px;
            }

            .preview-image {
                height: 200px;
            }

            .article-list {
                grid-template-columns: 1fr;
            }

            .gallery-image-box {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-inner">
            <h1>
                <a href="{{ route('home') }}" class="site-title-link">Курсовой проект</a>
            </h1>

            <nav>
                <div class="menu">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Главная</a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">О нас</a>
                    <a href="{{ route('contacts') }}" class="{{ request()->routeIs('contacts') ? 'active' : '' }}">Контакты</a>
                    <a href="{{ route('signin.create') }}" class="{{ request()->routeIs('signin.*') ? 'active' : '' }}">Sign In</a>
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
