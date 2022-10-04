<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="../css/process.css">

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
        <?php
        $gender = $_POST["gender"];
        $name = $_POST["firstname"];
        $surname = $_POST["pfadiName"];
        $phone = $_POST["phone"];
        $mail = $_POST["mail"];
        $street = $_POST["street"];
        $plz = $_POST["plz"];
        $city = $_POST["city"];
        $role = $_POST["role"];
        $space = ", ";
        
        if($role == "Ausbildung"){
            $roleDE = "Ausbildung";
            $space ="";
        } elseif($role == "Betreuung"){
            $roleDE = "Betreuung";
        } elseif($role == "Finanzen"){
            $roleDE = "Finanzen";
        } elseif($role == "Kantonsleiter"){
            if($gender == "male"){
                $roleDE = "Kantonsleiter";
            } else {
                $roleDE = "Kantonsleiterin";
            }
        } elseif($role == "Medien"){            
            if($gender == "male"){
                $roleDE = "Medien Verantwortlicher";
            } else {
                $roleDE = "Medien Verantwortliche";
            }
        } elseif($role == "Piostufe"){
            $roleDE = "Piostufe";
        } elseif($role == "Roverstufe"){
            $roleDE = "Roverstufe";
        } elseif($role == "Sekretariat"){
            $roleDE = "Sekretariat";
        } elseif($role == "Wölfli & Biberstufe"){
            $roleDE = "Wölfli & Biberstufe";
        } elseif($role == "none"){
            $roleDE = "";
            $space ="";
        }       
    ?>
        <table id="t01">
            <tr>
                <th style="margin: 0; padding: 0; line-height: 11pt">
                    <p style="font-weight: 700; margin: 0; text-align: left; font-family: 'Trebuchet MS', sans-serif; font-size: 11pt"><?php echo $name . " / "  . $surname ?></p>
                    <p style="margin: 0; text-align: left; font-family: 'Trebuchet MS', sans-serif; font-size: 8pt; font-weight: 300"><?php echo $roleDE . " Pfadi Kt. Schwyz" ?></p>
                    <p style="margin: 0; text-align: left; font-family: 'Trebuchet MS', sans-serif; font-size: 8pt; font-weight: 300"><?php echo $street ?></p>
                    <p style="margin: 0; text-align: left; font-family: 'Trebuchet MS', sans-serif; font-size: 8pt; font-weight: 300"><?php echo $city . " " . $plz ?></p>
                    <p style="margin: 0; text-align: left; font-family: 'Trebuchet MS', sans-serif; font-size: 8pt; font-weight: 300"><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></p>
                    <p style="margin: 0; text-align: left; font-family: 'Trebuchet MS', sans-serif; font-size: 8pt; font-weight: 300"><a href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a></p>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="https://www.pfadischwyz.ch"><img src="../img/PfadiSZ_Logo.png" alt="Pfadi SZ logo" height="30px"></a>
                </th>
            </tr>
        </table>
    </div>
</body>

</html>
