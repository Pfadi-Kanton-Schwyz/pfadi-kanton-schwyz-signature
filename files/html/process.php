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
        $sector = $_POST["Comission"];
        $title = $_POST["role"];
        $subSector = $_POST["subSector"];
        $phone = $_POST["phone"];
        $mail = $_POST["mail"];
        $test = false;
        $space = ", ";
        
        if($gender == "male"){
            if($title == "Responsable de commission"){
                $titleFR = "Responsable de ressort";
                $titleDE = "Ressortleiter";
                $titleIT = "Responsabile del ressort";
                $space ="";
                $subSector="";
            } elseif($title == "Responsable de sous commission"){
                $titleFR = "Responsable de secteur";
                $titleDE = "Bereichsleiter";
                $titleIT = "Responsabile del settore";
            } elseif($title == "Responsable de sous sous commission"){
                $titleFR = "Responsable de sous-secteur";
                $titleDE = "Teilbereichsleiter";
                $titleIT = "Responsabile del sottosettore";
            } elseif($title == "Colaborateur"){
                $titleFR = "Collaborateur";
                $titleDE = "Mitarbeiter";
                $titleIT = "Collaboratore";
            } elseif($title == "Responsable de camp"){
                $titleFR = "Co-responsable de camp";
                $titleDE = "Co-Lagerleiter";
                $titleIT = "Co-capicampo";
            } elseif($title == "none"){
                $titleFR = "";
                $titleDE = "";
                $titleIT = "";
                $space ="";
            }
        
        } 
        
        if($gender == "female"){
            if($title == "Responsable de commission"){
                $titleFR = "Responsable de ressort";
                $titleDE = "Ressortleiterin";
                $titleIT = "Responsabile del ressort";
                $space ="";
                $subSector="";
            } elseif($title == "Responsable de sous commission"){
                $titleFR = "Resposable de secteur";
                $titleDE = "Bereichsleiterin";
                $titleIT = "Responsabile del settore";
            } elseif($title == "Responsable de sous sous commission"){
                $titleFR = "Responsable de sous-secteur";
                $titleDE = "Teilbereichsleiterin";
                $titleIT = "Responsabile del sottosettore";
            } elseif($title == "Colaborateur"){
                $titleFR = "Collaboratrice";
                $titleDE = "Mitarbeiterin";
                $titleIT = "Collaboratrice";
            } elseif($title == "Responsable de camp"){
                $titleFR = "Co-responsable de camp";
                $titleDE = "Co-Lagerleiterin";
                $titleIT = "Co-capicampo";
            } elseif($title == "none"){
                $titleFR = "";
                $titleDE = "";
                $titleIT = "";
                $space ="";
            }
        } 
        
        if($sector== "Communikation"){
            $sectorFR = "Communication";
            $sectorDE = "Kommunikation";
            $sectorIT = "Comunicazione";
        } elseif($sector== "Finance"){
            $sectorFR = "Finance";
            $sectorDE = "Finanzen";
            $sectorIT = "Finanze";
        } elseif($sector== "Logistic"){
            $sectorFR = "Logistique";
            $sectorDE = "Logistik";
            $sectorIT = "Logistica";
        } elseif($sector== "Staff"){
            $sectorFR = "Staff";
            $sectorDE = "Staff";
            $sectorIT = "Staff";
        } elseif($sector== "SanSi"){
            $sectorFR = "Santé et sécurité";
            $sectorDE = "Sanität und Sicherheit";
            $sectorIT = "Sanità e sicurezza";
        } elseif($sector== "Support"){
            $sectorFR = "Support";
            $sectorDE = "Support";
            $sectorIT = "Supporto";
        } elseif($sector== "Programme"){
            $sectorFR = "Programme";
            $sectorDE = "Programm";
            $sectorIT = "Programma";
        }
        elseif($sector== "Comite"){
            $sectorFR = "Comité";
            $sectorDE = "Vorstand";
            $sectorIT = "Comitato";
        }
        elseif($sector== "Secretariat"){
            $sectorFR = "Sécrétariat général";
            $sectorDE = "Geschäftsstelle";
            $sectorIT = "Segretariato generale";
        }
        
        
    ?>
        <table id="t01">
            <tr>
                <th>
                    <img src="../img/Mova_Logo_black_rgb_Mailsignatur_marginright_big.png" alt="Mova logo" height="150px">

                </th>
                <th style="margin: 0; padding: 0; line-height: 15px">
                    <p style="font-weight: 700; margin: 0; text-align: left; font-family: 'arial', sans-serif; font-size: 12.5px"><?php echo $name . " / "  . $surname ?></p>
                    <br>
                    <p style="margin: 0; text-align: left; font-family: 'arial', sans-serif; font-size: 12.5px; font-weight: 300"><?php echo $titleFR . " " . $subSector . $space . $sectorFR ?></p>
                    <p style="margin: 0; text-align: left; font-family: 'arial', sans-serif; font-size: 12.5px; font-weight: 300"><?php echo $titleDE . " " . $subSector. $space . $sectorDE ?></p>
                    <p style="margin: 0; text-align: left; font-family: 'arial', sans-serif; font-size: 12.5px; font-weight: 300"><?php echo $titleIT . " " . $subSector . $space . $sectorIT ?></p>
                    <br>
                    <p style="margin: 0; text-align: left; font-family: 'arial', sans-serif; font-size: 12.5px; font-weight: 300"><?php echo $phone ?></p>
                    <p style="margin: 0; text-align: left; font-family: 'arial', sans-serif; font-size: 12.5px; font-weight: 300"><?php echo $mail ?></p>
                    <p style="margin: 0; text-align: left; font-family: 'arial', sans-serif; font-size: 12.5px; font-weight: 300">www.mova.ch</p>
                </th>
            </tr>
        </table>
    </div>
</body>

</html>
