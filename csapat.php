<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVTK Miskolc - Csapat</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #111;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #c8102e;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .logo img {
            height: 70px;
        }

        h1 {
            margin: 0;
            font-size: 24px;
            color: #fff;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #ffd700;
        }

        section {
            padding: 40px;
            text-align: center;
        }

        h2 {
            color: #c8102e;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .csapat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            justify-items: center;
            padding: 20px;
        }

        .jatekos-kartya {
            background-color: #1a1a1a;
            padding: 20px;
            border-radius: 12px;
            width: 230px;
            height: 350px;
            text-align: center;
            color: #fff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
            position: relative;
            perspective: 1000px;
        }

        .jatekos-kartya:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }

        .jatekos-kartya-inner {
            position: absolute;
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease-in-out;
            transform-style: preserve-3d;
        }

        .jatekos-kartya:hover .jatekos-kartya-inner {
            transform: rotateY(180deg);
        }

        .jatekos-kartya-front, .jatekos-kartya-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 12px;
        }

        .jatekos-kartya-front {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #1a1a1a;
            transition: background-color 0.3s;
        }

        .jatekos-kartya-back {
            background: linear-gradient(135deg, rgba(200, 16, 46, 0.9), rgba(200, 16, 46, 0.6));
            transform: rotateY(180deg);
            padding: 20px;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: left;
            box-sizing: border-box;
        }

        .jatekos-kartya img {
            width: 150px; 
            height: 150px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 4px solid #c8102e;
            box-sizing: border-box;
            transition: transform 0.3s ease-in-out;
        }

        .jatekos-kartya h3 {
            font-size: 20px;
            margin: 10px 0;
            transition: color 0.3s ease;
        }

        .jatekos-kartya-front:hover img {
            transform: scale(1.1);
        }

        .jatekos-kartya-back h3 {
            font-size: 24px;
            color: #ffd700;
        }

        .jatekos-kartya p {
            font-size: 14px;
            color: #ddd;
        }

        .footer {
            background-color: #111;
            text-align: center;
            padding: 20px;
            color: #fff;
        }

        .vissza-link {
            color: #c8102e;
            font-weight: bold;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .csapat-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }

            .jatekos-kartya {
                width: 220px;
                height: 330px;
            }

            .jatekos-kartya img {
                width: 130px;
                height: 130px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <img src="dvtk.jfif" alt="DVTK Logo">
            <h1>DVTK Miskolc - Csapat</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Főoldal</a></li>
                <li><a href="csapat.html">Csapat</a></li>
                <li><a href="meccsek.html">Közelgő Meccsek</a></li>          
                <li><a href="index.html">Hírek</a></li>
                <li><a href="galeria.htm">Galéria</a></li>
                <li><a href="kapcsolat.html">Kapcsolat</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>DVTK Miskolc Csapata</h2>
        <p>Ismerje meg csapatunk játékosait!</p>

        <div class="csapat-grid">
            <?php
            $servername = "localhost"; 
            $username = "root";        
            $password = "";           
            $dbname = "gyasz";        

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Kapcsolat sikertelen: " . $conn->connect_error);
            }

            $sql = "SELECT id, nev, pozicio, mezszam, magassag, szuletesi_datum, utlevel, kep FROM jatekosok";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='jatekos-kartya'>
                            <div class='jatekos-kartya-inner'>
                                <div class='jatekos-kartya-front'>";
                 
                    if (!empty($row["kep"])) {
                       
                        echo "<img src='/xampp/htdocs/dashboard/szakd/kepek/" . $row["kep"] . "' alt='" . $row["nev"] . "'>";
                    } else {
                       
                        echo "<img src='/path/to/default_image.png' alt='" . $row["nev"] . "'>";
                    }

                    echo "<h3>" . $row["nev"] . "</h3>
                          <p>Pozíció: " . $row["pozicio"] . "</p>
                    </div>
                    <div class='jatekos-kartya-back'>
                        <h3>" . $row["nev"] . "</h3>
                        <p>Mezszám: " . $row["mezszam"] . "</p>
                        <p>Magasság: " . $row["magassag"] . "</p>
                        <p>Születési dátum: " . $row["szuletesi_datum"] . "</p>
                        <p>Útlevél: " . $row["utlevel"] . "</p>
                    </div>
                </div>
            </div>";
                }
            } else {
                echo "Nincsenek adatok a táblában.";
            }

            $conn->close();
            ?>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 DVTK Miskolc. Minden jog fenntartva.</p>
    </footer>

</body>
</html>
