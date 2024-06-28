<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Concert+One&display=swap" rel="stylesheet">

    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
            color: #ffffff;
        }

        *:focus {

            outline: none;
        }

        html,
        body {
            color: rgba(33, 37, 41, 1);
            font-family: 'Oswald', sans-serif;
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
            background-image: url('images/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            /* Mengatur tinggi minimum viewport */
            position: relative;

        }



        .menu {
            padding: .4rem 2rem;
        }

        header ul {

            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }

        header li {
            display: inline-block;
        }

        header li a {
            color: #ffffff;
            display: block;
            height: 44px;
            text-decoration: none;
        }

        header li.menu-item a {

            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }

        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: #ffffff;
            color: #000000;
        }

        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }

        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }

        header .menu-toggle button {
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }

        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: #ffffff;
            color: #000000;
        }

        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;

        }

        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }

        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }

        .download-button {
            display: inline-block;
            padding: 15px 60px;
            background-color: #ffffff;
            color: #000;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 8px;
            border: 2px solid #007bff;
            transition: all 0.3s ease;

        }

        .download-button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }


        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }

        section h1 {
            margin-bottom: 2.5rem;
        }

        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }

        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }

        section code {
            display: block;
        }

        section a {
            color: rgba(221, 72, 20, 1);
        }

        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }





        footer {
            position: absolute;
            bottom: 0;
            width: 100%;

            text-align: center;

        }

        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }

        footer .copyrights {
            background-color: #000;
            color: #000000;
            padding: .25rem 1.75rem;
        }

        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }

            header .menu-toggle {
                padding: 0 1rem;
            }

            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }

            header .menu-toggle {
                display: block;
            }

            header .hidden {
                display: none;
            }

            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }

            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>
</head>

<body>


    <!-- HEADER: MENU + HEROE SECTION -->
    <header>

        <div class="menu">
            <ul>
                <li class="logo">
                    <a href="https://codeigniter.com" target="_blank">
                        <img src="<?= base_url('images/Rsim.png') ?>" alt="Icon" style="width: 100%;
    height: 50px;
    max-width: 100%;">
                    </a>
                </li>
                <li class="menu-toggle">
                    <button id="menuToggle">&#9776;</button>
                </li>
                <li class="menu-item hidden"><a href="#">Home</a></li>
                <li class="menu-item hidden"><a href="https://codeigniter.com/user_guide/" target="_blank">Docs</a>
                </li>
                <li class="menu-item hidden"><a href="https://forum.codeigniter.com/" target="_blank">Community</a></li>
                <li class="menu-item hidden"><a href="https://codeigniter.com/contribute" target="_blank">Contribute</a>
                </li>
            </ul>
        </div>

        <div class="heroe" style="text-align: center;">

            <img src="<?= base_url('images/Rsim.png') ?>" alt="Logo" style="width: 30%; height: auto; max-width: 100%;">

            <h1 style="font-size: 60px;  font-weight:700; margin: 0px 0; ">Multiplatform Rankine Cycle</h1>
            <h1 style="font-size: 60px; font-weight:700;  margin: 0px 0;">Power Calculation</h1>


        </div>
        <div class="download_button" style="text-align: center;">
            <a href="<?= base_url('path_to_your_download_file') ?>" download class="download-button">Download</a>
        </div>




    </header>

    <!-- CONTENT -->




    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

    <footer>

        <div class="copyrights">

            <p style="color: #fff;">&copy; <?= date('Y') ?> Informatics Studi Program. Indonesia Defense University</p>

        </div>

    </footer>

    <!-- SCRIPTS -->



    <!-- -->

</body>

</html>