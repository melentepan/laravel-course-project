<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Курсовой проект')</title>
    <style>
        :root {
            --primary: #1f2f7a;
            --text: #1f2937;
            --muted: #6b7280;
            --bg: #f3f5f9;
            --card: #ffffff;
            --border: #e5e7eb;
            --border-strong: #d1d5db;
            --radius: 10px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, sans-serif;
            color: var(--text);
            background: var(--bg);
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
            background: var(--card);
            border-bottom: 1px solid var(--border);
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
            color: var(--primary);
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
            color: var(--primary);
            border-bottom-color: #1f2f7a;
        }

        main {
            flex: 1;
        }

        .page-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 28px;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.05);
        }

        h2 {
            margin-top: 0;
            margin-bottom: 18px;
            color: var(--primary);
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

        .article-card,
        .news-item {
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 16px;
            background: var(--card);
            box-shadow: 0 4px 14px rgba(15, 23, 42, 0.05);
            display: flex;
            flex-direction: column;
            transition: opacity 0.2s, box-shadow 0.2s, border-color 0.2s;
        }

        .article-card:hover,
        .news-item:hover {
            opacity: 0.92;
            box-shadow: 0 10px 22px rgba(15, 23, 42, 0.1);
            border-color: #d8deea;
        }

        .article-card h3,
        .news-item h3 {
            margin: 0 0 8px;
            color: var(--primary);
            font-size: 22px;
            line-height: 1.2;
        }

        .article-card p,
        .news-item p {
            margin-bottom: 14px;
            font-size: 16px;
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
            border-radius: var(--radius);
            border: 1px solid var(--border-strong);
            display: block;
            object-fit: cover;
        }

        .full-image {
            width: 100%;
            height: auto;
            border-radius: 12px;
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

        .back-link,
        .signin-form button,
        .article-form button {
            display: inline-block;
            margin-top: 10px;
            color: #ffffff;
            text-decoration: none;
            background: var(--primary);
            border: 1px solid var(--primary);
            border-radius: 8px;
            padding: 9px 14px;
            transition: opacity 0.2s;
            cursor: pointer;
            font-size: 15px;
            font-family: inherit;
        }

        .add-news-link {
            margin-bottom: 16px;
        }

        .back-link:hover,
        .signin-form button:hover,
        .article-form button:hover {
            opacity: 0.9;
        }

        .contact-item {
            background: #fafafa;
            border: 1px solid #e2e2e2;
            border-radius: 6px;
            padding: 10px 12px;
        }

        .contact-item strong {
            color: var(--primary);
        }

        .signin-form,
        .article-form {
            max-width: 420px;
            display: grid;
            gap: 10px;
        }

        .article-form {
            max-width: 700px;
        }

        .signin-form label,
        .article-form label {
            font-weight: 600;
            color: var(--primary);
            font-size: 15px;
        }

        .signin-form input,
        .article-form input,
        .article-form textarea {
            padding: 10px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 15px;
            font-family: inherit;
        }

        .news-list {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .news-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border: 1px solid var(--border-strong);
            border-radius: var(--radius);
            display: block;
        }

        .article-full-image {
            height: 420px;
            object-fit: cover;
            object-position: center;
        }

        .article-actions {
            margin-top: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .article-actions a {
            display: inline-block;
            background: #ffffff;
            border: 1px solid var(--border-strong);
            border-radius: 6px;
            padding: 4px 8px;
            color: var(--text);
            text-decoration: none;
            font-size: 14px;
        }

        .article-actions form {
            margin: 0;
        }

        .article-actions button {
            background: #ffffff;
            border: 1px solid var(--border-strong);
            border-radius: 6px;
            padding: 4px 8px;
            cursor: pointer;
            font-size: 14px;
            color: var(--text);
        }

        .article-actions a:hover,
        .article-actions button:hover {
            opacity: 0.9;
        }

        .alert-success {
            background: #ecfdf3;
            border: 1px solid #86efac;
            color: #166534;
            border-radius: 8px;
            padding: 10px 12px;
            margin-bottom: 12px;
        }

        .alert-error {
            background: #fef2f2;
            border: 1px solid #fca5a5;
            color: #991b1b;
            border-radius: 8px;
            padding: 10px 12px;
            margin-bottom: 12px;
        }

        .alert-error ul {
            margin: 0;
            padding-left: 18px;
        }

        .pagination-wrap {
            margin-top: 18px;
            display: flex;
            justify-content: center;
        }

        .pagination-wrap nav {
            width: 100%;
        }

        .pagination-wrap .d-sm-flex {
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
            flex-direction: column;
        }

        .pagination-wrap .d-sm-flex > div {
            width: 100%;
        }

        .d-flex {
            display: flex;
        }

        .d-none {
            display: none;
        }

        .flex-fill {
            flex: 1 1 auto;
        }

        .justify-content-between {
            justify-content: space-between;
        }

        .justify-content-center {
            justify-content: center;
        }

        .align-items-center {
            align-items: center;
        }

        .small {
            font-size: 14px;
        }

        .text-muted {
            color: var(--muted);
        }

        .fw-semibold {
            font-weight: 600;
        }

        .d-sm-none {
            display: block;
        }

        .d-sm-flex {
            display: none;
        }

        .pagination {
            display: flex;
            gap: 6px;
            align-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .pagination .page-item {
            margin: 0;
        }

        .pagination .page-link {
            display: inline-block;
            padding: 6px 10px;
            border: 1px solid var(--border-strong);
            border-radius: 6px;
            background: #fff;
            color: var(--primary);
            text-decoration: none;
            font-size: 14px;
            line-height: 1.2;
        }

        .pagination .page-item.active .page-link {
            background: var(--primary);
            border-color: var(--primary);
            color: #fff;
        }

        .pagination .page-item.disabled .page-link {
            color: var(--muted);
            border-color: var(--border);
            cursor: not-allowed;
        }

        .pagination .page-link:hover {
            opacity: 0.9;
        }

        .pagination-wrap p {
            margin: 0;
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

            .article-card h3,
            .news-item h3 {
                font-size: 20px;
            }

            .article-card p,
            .news-item p {
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

            .news-list {
                grid-template-columns: 1fr;
            }

            .article-full-image {
                height: 260px;
            }
        }

        @media (min-width: 576px) {
            .d-sm-none {
                display: none;
            }

            .d-sm-flex {
                display: flex;
            }

            .flex-sm-fill {
                flex: 1 1 auto;
            }

            .align-items-sm-center {
                align-items: center;
            }

            .justify-content-sm-between {
                justify-content: space-between;
            }
        }

        @media (min-width: 900px) {
            .pagination-wrap .d-sm-flex {
                flex-wrap: nowrap;
                flex-direction: row-reverse;
            }

            .pagination-wrap .d-sm-flex > div {
                width: auto;
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
                    <a href="{{ route('articles.index') }}" class="{{ request()->routeIs('articles.*') || request()->routeIs('news') ? 'active' : '' }}">Новости</a>
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
