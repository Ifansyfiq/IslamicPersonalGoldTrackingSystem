<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myGoldTrace</title>
    <link href="ip/ip/https://fonts.googleapis.com/css?family=Lato:400,400i|PT+Serif:700" rel="stylesheet">
    <link rel="stylesheet" href="ip/ip/dist/css/style.css">
    <script src="ip/ip/https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <!-- system logo -->
                            <a href="#">
                                <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <title>myGoldTrace</title>
                                    <defs>
                                        <radialGradient cy="0%" fx="50%" fy="0%" r="100%" id="logo-gradient">
                                            <stop stop-color="#FFF" offset="0%" />
                                            <stop stop-color="#FFF" stop-opacity=".24" offset="100%" />
                                        </radialGradient>
                                    </defs>
                                    <path d="M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zm0-10a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" fill="url(#logo-gradient)" fill-rule="evenodd" />
                                </svg>
                            </a>
                        </h1>
                    </div>
                    <ul class="header-links list-reset m-0">
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                            <a class="button button-sm button-shadow" href="{{ route('register') }}">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <main>
            <section class="hero text-light text-center">
                <div class="container-sm">
                    <div class="hero-inner">
                        <h1 class="hero-title h2-mobile mt-0 is-revealing">Welcome to myGoldTrace</h1>
                        <p class="hero-paragraph is-revealing">Your personalized, secure companion for tracking and managing precious gold assets. </p>
                        <p class="hero-cta is-revealing"><a class="button button-secondary button-shadow" href="{{ route('login') }}">Get started now</a></p>
                        <div class="hero-media">
                        </div>
                    </div>
                </div>
            </section>

            <section class="features section text-center">
                <div class="container">
                    <div class="features-inner section-inner has-top-divider">
                        <h2 class="section-title mt-0">Product features</h2>
                        <div class="features-wrap">
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path fill="#84E482" d="M48 16v32H16z" />
                                                <path fill="#0EB3CE" d="M0 0h32v32H0z" />
                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="feature-title h3-mobile">Manage Personal Gold Record</h4>
                                    <p class="text-sm">User should be able to manage their gold asset by adding record, view record, update and even delete the record</p>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path fill="#84E482" d="M48 16v32H16z" />
                                                <path fill="#0EB3CE" d="M0 0v32h32z" />
                                                <circle fill="#02C6A4" cx="29" cy="9" r="4" />
                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="feature-title h3-mobile">Gold Zakat Calculator</h4>
                                    <p class="text-sm">User should be able to calculate the gold zakat by inputting the information about the gold for the calculation</p>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path fill="#0EB3CE" d="M0 0h32v32H0z" />
                                                <path fill="#84E482" d="M16 16h32L16 48z" />
                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="feature-title h3-mobile">Manage Pawnshop</h4>
                                    <p class="text-sm">Pawnbroking Owner (Ar-Rahnu) should be able to add, view, update and record the pawnshop record. </p>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M32 40H0c0-8.837 7.163-16 16-16s16 7.163 16 16z" fill="#84E482" style="mix-blend-mode:multiply" />
                                                <path fill="#03C5A4" d="M12 8h8v8h-8z" />
                                                <path fill="#0EB3CE" d="M32 0h16v48H32z" />
                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="feature-title h3-mobile">Manage Profile</h4>
                                    <p class="text-sm">User should be able to view and update their profile</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="footer-copyright">&copy; 2023 myGoldTrace</div>
                </div>
            </div>
        </footer>
    </div>
    <script src="ip/ip/dist/js/main.min.js"></script>
</body>

</html>