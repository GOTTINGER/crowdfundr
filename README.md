**Version: 0.1**

Vad är Crowdfundr?
==============
Det här är ett utkast till en öppen och fri plattform för Crowdfunding. Licenserat under AGPLv3 (Se LICENSE)
Plattformen är utvecklad åt Stockholm Makerspace (http://www.makerspace.se) för att kunna köra egna crowdfunding-kampanjer.

Men då det saknas en open source-plattform för syftet som fungerar bra och effektivt valde jag att släppa den helt fritt och open source.

Vad är Crowdfunding?
====================
Läs mer på http://www.crowd1337.se/omvarlden/crowdfunding-faq/


Om systemet
============
Plattformen är skrivet i PHP mot MySQL - baserat på endast öppen källkod.
PHP frameworket som används är CodeIgniter och frontend är baserat på Twitters Bootstrap.

* CodeIgniter: http://ellislab.com/codeigniter/user-guide/
* Bootstrap: http://twitter.github.com/bootstrap/
* jQuery: http://jquery.com/
* mfl...

Ursprungligen utvecklat av Jim Nelin <jim at jine.se> - http://JimNelin.com.

Installation
=============
* Importera databasen exporten i MySQL som ligger i docs/database.sql
* Ändra databasinställningar i application/config/production/database.sample.php till passande
* ... och byt namn på filen till database.php
* Ladda upp alla filerna till din server/webbhotell, var noga med att public_html är den mappen som används som "webroot"
* Beroende på webbserver så kan du behöva skapa rewrites för att skicka alla förfrågningar till index.php.

Klart! Du bör nu se en startsida med demo-innehåll.
Detta kan du ändra genom att surfa in på http://www.dindoman.com/admin eller motsvarande.

Har du önskemål, problem eller hittat en bugg?
==============================================
Vänligen använd Issue-systemet här på github för att rapportera det.

Behöver du hjälp utöver det finns jag tillgänglig på konsultbasis, skicka ett mail till jim (at) jine.se så kan vi nog lösa det.
