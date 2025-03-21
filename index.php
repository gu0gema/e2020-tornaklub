<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVTK Miskolc</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0c0c0c;
            color: #fff;
            overflow-x: hidden;
        }

        
        * {
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

       
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 0, 0, 0.7);
            padding: 20px 50px;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(178, 34, 34, 0);
            transition: background-color 0.3s ease-in-out;
        }

        header.scrolled {
            background-color:black;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 60px;
            margin-right: 20px;
            transition: transform 0.3s ease;
        }

        header h1 {
            font-family: 'Oswald', sans-serif;
            font-size: 36px;
            color: #fff;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        nav ul {
            display: flex;
            justify-content: flex-end;
            list-style-type: none;
            margin: 0;
            padding: 0;
            gap: 30px;
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            font-size: 18px;
            color: #fff;
            font-weight: 500;
            padding: 10px 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: color 0.3s ease, transform 0.3s ease, padding 0.3s ease;
        }

        nav ul li a:hover {
            color: #ffd700;
            transform: translateY(-5px);
            padding-bottom: 5px;
        }

        nav ul li::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #ffd700;
            transition: width 0.3s ease;
        }

        nav ul li:hover::after {
            width: 100%;
        }

        
        .hero {
            position: relative;
            height: 99vh;
            background: url("kep.jpg") no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            flex-direction: column;
            padding: 0 20px;
            animation: heroAnimation 2s ease-in-out;
            
        }

        @keyframes heroAnimation {
            0% { transform: scale(1.1); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        .hero h2 {
            font-family: 'Oswald', sans-serif;
            font-size: 4rem;
            font-weight: 700;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);
            margin: 0;
            letter-spacing: 2px;
            opacity: 0;
            animation: fadeIn 1.5s ease forwards;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .hero p {
            font-size: 1.5rem;
            margin-top: 15px;
            font-weight: 500;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            opacity: 0;
            animation: fadeIn 2s ease 0.5s forwards;
        }

        
        section {
            padding: 60px 20px;
            text-align: center;
            background-color: #111;
            animation: fadeIn 1s ease;
        }

        section h2 {
            font-size: 32px;
            color:white;
            margin-bottom: 40px;
            font-weight: 700;
            text-transform: uppercase;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.6);
        }

        .hirek-es-esemenyek {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 40px;
            transition: transform 0.4s ease;
        }

        .hirek-item {
            background-color: #222;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .hirek-item:hover {
            background-color: #c8102e;
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        .hirek-item h3 {
            color: #ffd700;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .hirek-item p {
            font-size: 16px;
            line-height: 1.6;
            color: #ddd;
        }

        .hirek-item time {
            display: block;
            margin-top: 15px;
            font-size: 14px;
            color: #aaa;
        }

        
        footer {
            background-color: #111;
            text-align: center;
            padding: 30px 20px;
            color: #fff;
            font-size: 14px;
            margin-top: 50px;
            border-top: 1px solid #333;
        }

        footer p {
            margin: 0;
        }

       
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .hirek-es-esemenyek {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>
<body>
    <header id="header">
        <div class="logo">
            <img src="cimer.jfif" alt="DVTK Logo">
            <h1>DVTK Miskolc</h1>
        </div>
        <nav>
            <ul>
            <li><a href="index.html">Főoldal</a></li>
            <li><a href="csapat.html">Csapat</a></li>
            <li><a href="meccsek.html">Közelgő Meccsek</a></li>
            <li><a href="#hirek">Hírek</a></li>
            <li><a href="galeria.htm">Galéria</a></li>
            <li><a href="kapcsolat.html">Kapcsolat</a></li>
        </ul>
        </nav>
    </header>

    <section class="hero">
        <h2>Üdvözöljük a DVTK Miskolc hivatalos oldalán!</h2>

        <p>Friss hírek, események és információk a csapatról</p>
    </section>

     <section id="hirek">
        <h2>Friss Hírek és Események</h2>
        <div class="hirek-es-esemenyek">
            <div class="hirek-item">
                <h3>Új Szponzori Megállapodás!</h3>
                <p>A DVTK Miskolc új szponzori megállapodást kötött a HELL Energy-vel.</p>
                <time>2024. november 5.</time>
            </div>
            <div class="hirek-item">
                <h3>Játékosok Év Végi Felkészülése</h3>
                <p>A csapat felkészül a tavaszi szezonra, hogy a legjobb formájukat érjék el!</p>
                <time>2024. november 4.</time>
            </div>
            <div class="hirek-item">
			
                <h3>Szurkolói Támogatás</h3>
                <p>A DVTK szurkolói elképesztő támogatást nyújtanak a csapatnak!</p>
                <time>2024. november 3.</time>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 DVTK Miskolc. Minden jog fenntartva.</p>
    </footer>

    <script>
        // Scroll effect for header
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
