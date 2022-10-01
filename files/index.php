<!doctype html>
<html class="no-js" lang="DE">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="css/main.css">
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
        <form action="html/process.php" method="post">
            <div class="column">
                <p class="info"><span class="number">1</span>Meine Infos</p>
                <div class="gender-select">
                    <h2>Geschlecht</h2>
                    <div class="input">
                        <input required type="radio" id="male" name="gender" value="male">
                        <label for="male">Männlich</label><br>
                    </div>
                    <div class="input">
                        <input required type="radio" id="female" name="gender" value="female">
                        <label for="female">Weiblich</label><br>
                    </div>
                </div>
                <input type="text" name="firstname" placeholder="Name und Vorname">
                <input type="text" name="pfadiName" placeholder="Pfadiname">
                <input type="tel" name="phone" placeholder="Telefonnummer">
                <input type="email" name="mail" placeholder="E-Mail-Adresse">
                <input type="text" name="street" placeholder="Strasse">
                <input type="text" name="plz" placeholder="PLZ">
                <input type="text" name="city" placeholder="Ort">
            </div>
            <div class="column">
                <p class="info"><span class="number">2</span>Meine Funktion</p>
                <select required name="role" id="role">
                    <option value="">Rolle</option>
                    <option value="Ausbildung">Ausbildung</option>
                    <option value="Betreuung">Betreuung</option>
                    <option value="Finanzen">Finanzen</option>
                    <option value="Kantonsleiter">Kantonsleiter:in</option>
                    <option value="Medien">Medien Verantwortliche:r</option>
                    <option value="Piostufe">Piostufe</option>
                    <option value="Roverstufe">Roverstufe</option>
                    <option value="Sekretariat">Sekretariat</option>
                    <option value="Wölfli & Biberstufe">Wölfli & Biberstufe</option>
                </select>
            </div>
            <div class="button-container">
                <input class="button" type="submit" value="Senden">
            </div>
        </form>
    </div>
</body>

</html>