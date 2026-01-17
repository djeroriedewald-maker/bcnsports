<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Under Construction - BCN Sports</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #0a0a0a;
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        /* Animated background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
        }

        .bg-animation::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at center, rgba(196, 255, 0, 0.03) 0%, transparent 50%);
            animation: pulse 8s ease-in-out infinite;
        }

        .bg-animation::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, rgba(196, 255, 0, 0.02) 0%, transparent 40%);
            transform: translate(-50%, -50%);
            animation: pulse 12s ease-in-out infinite reverse;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.8;
            }
        }

        /* Grid pattern overlay */
        .grid-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
            background-size: 50px 50px;
            z-index: 1;
        }

        .container {
            position: relative;
            z-index: 10;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            text-align: center;
        }

        .logo {
            height: 60px;
            margin-bottom: 3rem;
            animation: fadeInDown 1s ease-out;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(196, 255, 0, 0.1);
            border: 1px solid rgba(196, 255, 0, 0.3);
            color: #c4ff00;
            padding: 0.5rem 1.25rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-bottom: 2rem;
            animation: fadeIn 1s ease-out 0.2s both;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .badge-dot {
            width: 8px;
            height: 8px;
            background: #c4ff00;
            border-radius: 50%;
            animation: blink 2s ease-in-out infinite;
        }

        @keyframes blink {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.3;
            }
        }

        h1 {
            font-size: clamp(2.5rem, 8vw, 5rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            animation: fadeIn 1s ease-out 0.4s both;
        }

        h1 span {
            color: #c4ff00;
            position: relative;
        }

        h1 span::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: #c4ff00;
            transform: scaleX(0);
            animation: lineGrow 1s ease-out 1.2s forwards;
        }

        @keyframes lineGrow {
            to {
                transform: scaleX(1);
            }
        }

        .subtitle {
            font-size: 1.125rem;
            color: #a0a0a0;
            max-width: 500px;
            line-height: 1.7;
            margin-bottom: 3rem;
            animation: fadeIn 1s ease-out 0.6s both;
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 3rem;
            animation: fadeIn 1s ease-out 0.8s both;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: #6b6b6b;
            font-size: 0.875rem;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            background: rgba(196, 255, 0, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .feature-icon svg {
            width: 20px;
            height: 20px;
            color: #c4ff00;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
            animation: fadeIn 1s ease-out 1s both;
        }

        .social-link {
            width: 48px;
            height: 48px;
            background: #141414;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #a0a0a0;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: #c4ff00;
            border-color: #c4ff00;
            color: #0a0a0a;
            transform: translateY(-3px);
        }

        .social-link svg {
            width: 20px;
            height: 20px;
        }

        .contact-info {
            color: #6b6b6b;
            font-size: 0.875rem;
            animation: fadeIn 1s ease-out 1.2s both;
        }

        .contact-info a {
            color: #c4ff00;
            text-decoration: none;
            transition: opacity 0.3s ease;
        }

        .contact-info a:hover {
            opacity: 0.8;
        }

        /* Floating elements */
        .floating-element {
            position: fixed;
            border-radius: 50%;
            background: rgba(196, 255, 0, 0.05);
            z-index: 2;
        }

        .floating-element.el-1 {
            width: 300px;
            height: 300px;
            top: 10%;
            right: -100px;
            animation: float 20s ease-in-out infinite;
        }

        .floating-element.el-2 {
            width: 200px;
            height: 200px;
            bottom: 20%;
            left: -50px;
            animation: float 15s ease-in-out infinite reverse;
        }

        .floating-element.el-3 {
            width: 150px;
            height: 150px;
            top: 50%;
            right: 20%;
            animation: float 18s ease-in-out infinite 2s;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) rotate(0deg);
            }
            25% {
                transform: translate(20px, -20px) rotate(5deg);
            }
            50% {
                transform: translate(0, -30px) rotate(0deg);
            }
            75% {
                transform: translate(-20px, -10px) rotate(-5deg);
            }
        }

        /* Footer */
        footer {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 2rem;
            color: #4a4a4a;
            font-size: 0.75rem;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        footer a {
            color: #c4ff00;
            text-decoration: none;
        }

        /* Responsive */
        @media (max-width: 640px) {
            .features {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="bg-animation"></div>
    <div class="grid-overlay"></div>

    <div class="floating-element el-1"></div>
    <div class="floating-element el-2"></div>
    <div class="floating-element el-3"></div>

    <div class="container">
        <img src="/images/BCN_LOGO_2024_WHITE.png" alt="BCN Sports" class="logo">

        <div class="badge">
            <span class="badge-dot"></span>
            Under Construction
        </div>

        <h1>Wij werken aan<br>iets <span>nieuws</span></h1>

        <p class="subtitle">
            Onze website wordt momenteel vernieuwd om je een nog betere ervaring te bieden.
            We zijn snel terug met een frisse look!
        </p>

        <div class="features">
            <div class="feature">
                <div class="feature-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <span>Sneller & Beter</span>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                </div>
                <span>Mobile Friendly</span>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                </div>
                <span>Nieuwe Features</span>
            </div>
        </div>

        <div class="social-links">
            <a href="https://www.instagram.com/bootcamp_nation/" target="_blank" rel="noopener noreferrer" class="social-link">
                <svg fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>
            <a href="https://www.facebook.com/bootcampnationalmere/" target="_blank" rel="noopener noreferrer" class="social-link">
                <svg fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
            </a>
        </div>

        <p class="contact-info">
            Vragen? Neem contact op via <a href="mailto:info@bcnsports.nl">info@bcnsports.nl</a>
        </p>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} BCN Sports. Alle rechten voorbehouden.</p>
        <p style="margin-top: 0.5rem;">Website gemaakt door <a href="https://budgetpixels.nl" target="_blank">BudgetPixels</a></p>
    </footer>
</body>
</html>
