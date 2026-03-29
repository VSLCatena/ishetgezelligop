<html>
<!-- Alleen nerds komen op deze pagina, klik maar gauw weer weg -->
<head>
    <title>Catena</title>
    <link href="./style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<!-- DE SM-KELDER BESTAAT -->
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 col-xl-4 col-xl-offset-4 privacy-stuff">
                <p>Deze site is gemaakt ter indicatie van de drukte. Hier kunnen geen rechten uit ontleend worden.</p>
                <p>
                    Van de fysieke server op Catena wordt technische metadata gehaald van het aantal apparaten op WiFi. De zogenoemde DHCP-leases. De server (fysiek op Catena) telt het aantal apparaten op het gastennetwerk met: 
                    <span class="quote">netsh dhcp server scope 192.168.1.0 show clients | find /i "255.255.255.0" /c</span>
                    en schrijft dit aantal (bijvoorbeeld letterlijk: "34") weg in een bestand. Dit bestand (met enkel een getal) wordt geupload naar deze webserver (buiten Catena, wel van Catena) en door een filter gehaald, op basis van dit aantal wordt er een label aangeplakt. Nergens worden gegevens bewaard of zijn deze gegevens terug te leiden naar personen. Tevens is deze "telling" inaccuraat en zijn dit geen actuele waarden.
                </p>
                <p>
                    De openingstijden worden berekend door de huidige tijd door een filter te halen met de openingstijden. Het kader kan eventueel een extra tekst (zoals "lange rij in steeg") bij de hoofdpagina plaatsen.
                </p>
                <p>Bij vragen kan men contact opnemen met Martie.</p>
            </div>
        </div>
<!-- Jij dacht hier wat interessants te vinden of niet? -->
    </div>
</body>
</html>
