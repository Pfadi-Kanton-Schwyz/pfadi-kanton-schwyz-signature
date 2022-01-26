<!doctype html>
<html class="no-js" lang="IT">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="../css/main.css">

    <meta name="theme-color" content="#fafafa">
</head>

<body>

    <header>
        <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 1080" style="enable-background:new 0 0 1920 1080;" xml:space="preserve">
            <path class="st0" d="M0.5-0.5v450c0,74.1,97.8,173.4,210.3,171.9c121.3-1.6,260.5-106.9,335.7-106.9c145,0,65,236,296,236
	s299-200,452-200s284,149,437,149s187-82,188-109s0-591,0-591H0.5z" />
        </svg>
    </header>
    <div class="container">
        <ul class="langue">
            <li><a href="index_FR.php">Fr</a></li>
            <li><a href="../index.php">De</a></li>
            <li class="active"><a href="index_IT.php">It</a></li>
        </ul>
        <form action="process.php" method="post">
            <div class="column">
                <p class="info"><span class="number">1</span>I miei dati</p>
                <div class="gender-select">
                    <h2>Sesso</h2>
                    <div class="input">
                        <input required type="radio" id="male" name="gender" value="male">
                        <label for="male">Uomo</label><br>
                    </div>
                    <div class="input">
                        <input required type="radio" id="female" name="gender" value="female">
                        <label for="female">Donna</label><br>
                    </div>
                </div>
                <input type="text" name="firstname" placeholder="Nome e Cognome">
                <input type="text" name="pfadiName" placeholder="Totem">
                <input type="tel" name="phone" placeholder="Numero di telefono">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="column">
                <p class="info"><span class="number">2</span>La mia funzione</p>
                <select required name="role" id="role">
                    <option value="">Ruolo</option>
                    <option value="Responsables de camp">capo campo</option>
                    <option value="Responsable de commission">Responsabile del ressort</option>
                    <option value="Responsable de sous commission">Responsabile del settore</option>
                    <option value="Responsable de sous sous commission">Responsabile del sottosettore</option>
                    <option value="Colaborateur">Collaboratore</option>
                    <option value="none">-</option>
                </select>
                <select required name="Comission">
                    <option value="">Ressort</option>
                    <option value="Finance">Finanze</option>
                    <option value="Logistic">Logistica</option>
                    <option value="Communikation">Comunicazione</option>
                    <option value="Staff">Staff</option>
                    <option value="SanSi">Sanità e sicurezza</option>
                    <option value="Support">Supporto</option>
                    <option value="Programme">Programma</option>
                    <option value="Comite">Comitato</option>
                    <option value="Secretariat">Segretariato generale</option>
                </select>
                <input type="text" name="subSector" placeholder="Settore">
            </div>
            <div class="button-container">
                <input class="button" type="submit" value="Invia">
            </div>
        </form>
    </div>
</body>

</html>
