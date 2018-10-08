<!DOCTYPE html>
<html lang="de">
<head>
    <title>FOSSGIS 2019 Anreise + Unterkunft</title>
    <meta name="description"
          content="Die FOSSGIS-Konferenz ist im D-A-CH Raum die führende Konferenz für Freie und Open Source Software für Geoinformationssysteme OpenStreetMap.">
    <meta name="author" content="Oliver Roick. http://oliverroick.de/">
    <meta name="keywords"
          content="FOSSGIS, FOSSGIS-Konferenz, 2019, FOSSGIS-Konferenz 2019, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, HTW Dresden">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.4/leaflet.css"/>
    <link href="../css/screen.css" type="text/css" rel="stylesheet" media="screen">

    <script src="../../static/leaflet/1.3.4/leaflet.js"></script>
    <script src="script/leaflet.addons.js"></script>
    <script src="data/buildings.js"></script>
    <script src="data/hotels.js"></script>
    <script src="script/map.js"></script>
</head>

<body id="anreise">
<div id="wrap">
    <?php include('../inc/head.inc'); ?>

    <div id="content">

        <?php include('../inc/nav.inc'); ?>
        <figure>
            <img src="../img/dresden.jpg" width="880" height="241" alt="Dresden Panorama">
            <figcaption>Photo: Kolossos</figcaption>
        </figure>

        <h2>Anreise und Unterkunft</h2>

        <div class="dynamic-map-container">
            <div id="map" class="map"></div>
        </div>

        <h3>Allgemeines</h3>
        <p>Die FOSSGIS-Konferenz findet vom 13.-16. März 2019 an der Hochschule für Technik und Wirtschaft in Dresden -
            und damit im Herzen der Landeshauptstadt Sachsens statt
            (<a href="https://www.openstreetmap.org/relation/7918360#map=14/51.0401/13.7418" target="_blank">Standort
                auf
                openstreetmap.org</a>).
        </p>

        <img src="https://www.fossgis.de/w/images/3/3a/Campus_Plan_HTWDD.jpg" height="390" class="city">

        <p>Im Foyer des Hauptgebäudes (Z-Gebäude) der Hochschule finden Sie den <i>Welcome Desk</i>, die
            <i>Aussteller</i> sowie die Pausenversorgung.
            Die <i>Vorträge</i> finden in Hörsälen des Z- und S-Gebäudes (Seminargebäude) im 1. Stock statt. Diese sind
            durch einen Durchgang miteinander verbunden.
            Die <i>Workshops</i> werden an der Fakultät Geoinformation im M-Gebäude durchgeführt. Dieses ist etwa 3
            Gehminuten vom Haupteingang entfernt.
        </p>

        <p>Der Zugang zu den Hochschulräumlichkeiten ist behindertengerecht gestaltet.</p>

        <p>
            <img src="https://www.fossgis.de/w/images/c/cb/Zentralgebauede_HTWDD.jpg" height="200" class="city"
                 title="HTW Dresden - Perspektive vom Hauptbahnhof">
            <img src="https://www.fossgis.de/w/images/2/29/Uebergang_Zentral_zu_Seminargebaeude_HTWDD.jpg" height="200"
                 class="city" title="Verbindung Zentralgebäude (Z) und Seminargebäude (S) HTW Dresden">
        </p>

        <h3>Anschrift des Konferenzstandortes</h3>
        <p>
            <b>Hochschule für Technik und Wirtschaft Dresden</b><br>
            Friedrich-List-Platz 1<br>
            D-01069 Dresden
        </p>


        <h3>Anreise mit öffentlichen Verkehrsmitteln</h3>
        <p>Die <a href="https://www.openstreetmap.org/relation/7918360#map=14/51.0401/13.7418" target="_blank">Hochschule für Technik
                und Wirtschaft</a> ist günstig am Hauptbahnhof Dresden gelegen. Dieser wird durch die Deutsche Bahn und
            trilex bedient.
        </p>

        <p><b>Fernverkehrsverbindungen</b>: (Stand 2018)</p>
        <ul class="list">
            <li>per ICE direkt ab Wiesbaden über Frankfurt/Main, Erfurt und Leipzig im 2h-Takt</li>
            <li>per Eurocity (EC) ab Hamburg über Berlin im 2h-Takt (Gegenrichtung von Prag kommend)</li>
            <li>weitere ICE-/IC-/Regionalverbindungen ab Leipzig</li>
        </ul>

        <h3>Anreise mit dem Flugzeug</h3>
        <p>Derzeit bestehen neben vielen weiteren Städten Direktverbindungen nach
            <b>"Dresden International" (DRS)</b> aus Amsterdam, Düsseldorf, Köln/Bonn, Frankfurt, Stuttgart, München,
            Basel und
            Zürich. (Stand: Sommerflugplan 2018).<br>
            Der Anschluss in die Innenstadt gelingt per Bus und Straßenbahn (Bus 77 direkt ab Flughafen, Umstieg in die
            Tram
            7 ab "Infineon Nord") und S-Bahn. Insbesondere die Anbindung per S-Bahn Linie S2 (Einstieg im Untergeschoss
            des Flughafens) ist mit 20 Minuten Fahrtzeit bis Hauptbahnhof Dresden und einem halbstündigen Takt sehr gut
            organisiert. Der Flughafen liegt im innerstädtischen Tarifgebiet (Tarifzone 1), so dass hier die regulären
            Fahrtkosten von
            derzeit 2,40€ anfallen. </p>

        <h3>Anreise mit dem Auto</h3>
        <p>Auf dem Campus stehen für Konferenzbesucher eine beschränkte Anzahl an kostenlosen Parkplätzen zur
            Verfügung.</p>

        <ul class="list">
            <li><b>Aus Richtung Norden (Berlin, Brandenburg, Mecklenburg-Vorpommern, Schleswig-Holstein):</b> ab
                Berlin über die A13 Richtung Dresden; am Dreieck Dresden-Nord Wechsel auf die A4 Richtung Chemnitz;
                Abfahrt Dresden-Hellerau, Beschilderung Richtung Zentrum und später Hauptbahnhof folgen
            </li>
            <li><b>Aus Richtung Nordwesten (Hamburg, Bremen, Niedersachen, Sachsen-Anhalt, NRW-Nord):</b> ab Magdeburg
                über A14 Richtung Dresden, am Dreieck Nossen Wechsel auf A4 Richtung Dresden, am Dreieck Dresden-West
                Wechsel auf die A17 Richtung Prag, Abfahrt Dresden-Südvorstadt, Beschilderung Richtung
                Zentrum/Hauptbahnhof folgen
            </li>
            <li><b>Aus Richtung Westen (NRW-Süd, Hessen, Rheinland-Pfalz-Nord, Thüringen):</b> aus Richtung
                Frankfurt/Main A5 Richtung Nordost, ab Kirchheimer Dreieck (A7, A4, nahe A5) Wechsel auf A4 Richtung
                Dresden, am Dreieck Dresden-West Wechsel auf die A17 Richtung Prag, Abfahrt Dresden-Südvorstadt,
                Beschilderung Richtung Zentrum/Hauptbahnhof folgen
            </li>
            <li><b>Aus Richtung Süden / Südwesten (Rheinland-Pfalz-Süd, Saarland, Baden-Württemberg, Bayern):</b> aus
                Richtung München/Nürnberg A9 Richtung Norden, ab Dreieck Bayerisches Vogtland Wechsel auf A72 Richtung
                Chemnitz, am Kreuz Chemnitz Wechsel auf A4 Richtung Dresden, am Dreieck Dresden-West Wechsel auf die A17
                Richtung Prag, Abfahrt Dresden-Südvorstadt, Beschilderung Richtung Zentrum/Hauptbahnhof folgen
            </li>
            <li><b>Aus Richtung Osten (Ostsachsen / Polen / Osteuropa):</b> A4 Richtung Dresden, Abfahrt
                Dresden-Hellerau, Beschilderung Richtung Zentrum und später Hauptbahnhof folgen
            </li>
            <li><b>Aus Richtung Südosten (Tschechien / Südosteuropa):</b> ab Prag A17 Richtung Dresden, Abfahrt
                Dresden-Südvorstadt, Beschilderung Richtung Zentrum/Hauptbahnhof folgen
            </li>
        </ul>


        <p>Denken Sie an die Möglichkeit des Carsharing, oder nutzen oder organisieren Sie eine Mitfahrgelegenheit bei
            Diensten wie <a
                    href="https://www.blablacar.de/ride-sharing/to-dresden/?fn=&tn=Dresden%2C+Deutschland&tc=51.050409%7C13.737262&tcc=DE&tp=0&is_without_date_end=0&sort=trip_date&order=asc&limit=10&page=1&s_uuid=7ff529a3-e27c-42c1-9681-095b7b73d90d"
                    title="https://www.blablacar.de/" rel="nofollow" target="_blank">BlaBlaCar</a>. Die Umwelt und nicht zuletzt Ihr
            Geldbeutel
            werden sich freuen.</p>

        <h3>Unterkunft</h3>
        <p>In Dresden steht eine Vielzahl an Unterkünften zur Verfügung. Durch die Lage der HTW Dresden nahe dem
            Hauptbahnhof und der Altstadt sind auch in unmittelbarer Nähe einige Hotels und Hostels vorhanden.

        <p><i>IntercityHotel Dresden</i></p>
        <ul class="list">
            <li> Web: <a
                        href="https://www.intercityhotel.com/hotels/alle-hotels/deutschland/dresden/intercityhotel-dresden/zimmer"
                        rel="nofollow" target="_blank">https://www.intercityhotel.com/</a></li>
            <li> Adresse: Wiener Platz 8, 01069 Dresden</li>
            <li> Telefon: 0351 / 263550</li>
        </ul>

        <p><i>Hotel Pullman Dresden Newa</i></p>
        <ul class="list">
            <li> Web: <a href="https://www.pullman-hotel-dresden.de/" rel="nofollow" target="_blank">https://www.pullman-hotel-dresden.de/</a>
            </li>
            <li> Adresse: Prager Str. 2C, 01069 Dresden</li>
            <li> Telefon: 0351 / 48140</li>
        </ul>

        <p><i> Hotel ibis Dresden</i></p>
        <ul class="list">
            <li> Web: <a href="https://www.ibis-dresden.de/" rel="nofollow" target="_blank">https://www.ibis-dresden.de/</a></li>
            <li> Adresse: Wilsdruffer Str. 25, 01067 Dresden</li>
            <li> Telefon: 0351 / 83393820</li>
        </ul>

        <p><i> The Student Hotel Dresden</i>
        <ul class="list">
            <li> Web: <a href="https://www.thestudenthotel.com/dresden" rel="nofollow" target="_blank">https://www.thestudenthotel.com/dresden</a>
            </li>
            <li> Adresse: Prager Str. 13, 01069 Dresden</li>
            <li> E-Mail: dresden@thestudenthotel.com</li>
        </ul>

        <p><i> A&O Dresden Hauptbahnhof</i></p>
        <ul class="list">
            <li> Web: <a href="https://www.aohostels.com/de/dresden/" rel="nofollow" target="_blank">https://www.aohostels.com/de/dresden/</a>
            </li>
            <li> Adresse: Strehlener Str. 10, 01069 Dresden</li>
        </ul>

        <p><i>Internationales Gästehaus (über Studentenwerk Dresden)</i></p>
        <ul class="list">
            <li> Web: <a href="https://www.studentenwerk-dresden.de/wohnen/gaestehaus.html" rel="nofollow" target="_blank">https://www.studentenwerk-dresden.de/wohnen/gaestehaus.html</a>
            </li>
            <li> Adresse: Hochschulstraße 50, 01069 Dresden</li>
            <li> Telefon: 0351 / 4692-781 /-780</li>
            <li>E-Mail: igh@studentenwerk-dresden.de</li>
        </ul>

        <p><i> DJH Jugendherberge Dresden "Rudi Arndt"</i></p>
        <ul class="list">
            <li> Web: <a href="https://www.jh-rudiarndt.de/" rel="nofollow" target="_blank">https://www.jh-rudiarndt.de/</a></li>
            <li> Adresse: Hübnerstraße 11, 01069 Dresden</li>
            <li> Telefon: 0351 4710667</li>
            <li>E-Mail: dresden.rudiarndt@jugendherberge.de</li>
        </ul>

        <h3>Öffentlicher Nahverkehr</h3>
        <p>Der öffentliche Nahverkehr wird durch die Dresdner Verkehrsbetriebe (DVB) organisiert. Der Ticketkauf kann
            an den meisten Haltestellen an Automaten erfolgen (teilweise nur Bargeld, größere Haltestellen per EC/VISA).
            Alternativ kann die Fahrt direkt beim Busfahrer, oder aber in der Tram am Kleingeldautomaten gelöst werden.
            Für Fahrten im Stadtgebiet (inkl. S-Bahn und Fahrten zum Flughafen) genügt ein Fahrschein der Preisstufe 1
            bzw. für eine Tarifzone (Einzelfahrt derzeit 2,40€). Bei einem längeren Aufenthalt in Dresden sind entweder
            4er-Streifen (8,60€), Tageskarten (6,00€ - gültig bis 4:00 Uhr des Folgetages) oder eine Wochenkarte
            (21,90€) sinnvoll.
        </p>

        <p>Die nächsten Haltestellen zum HTW-Campus sind Hauptbahnhof (Tram 3 & 8), bzw. Hauptbahnhof Nord
            (Tram 3, 7, 8, 9 & 11), Reichenbachstraße (Bus 66) und Uhlandstraße (ebenfalls Bus 66).
        </p>

        <p><b>Hilfreiche Informationen</b></p>
        <ul class="list">
            <li><a href="https://www.dvb.de/de-de/" rel="nofollow" target="_blank"> Fahrplan im Web</a></li>
            <li><a href="https://www.dvb.de/de-de/tickets/ticketuebersicht/" rel="nofollow" target="_blank"> Ticketübersicht</a></li>
            <li>
                <a href="https://www.dvb.de/-/media/files/liniennetz/lnp_09042018/stadtplan_top_090418_bau%20augbr_web.pdf" rel="nofollow" target="_blank">
                    Stadtplan der DVB</a></li>
            <li> App-Empfehlung für Android: <a href="https://play.google.com/store/apps/details?id=de.faplino&hl=de" rel="nofollow" target="_blank">Faplino
                    - DVB Info Dresden</a></li>
            <li>App-Empfehlung für iOS: <a href="https://itunes.apple.com/de/app/fahrinfo-dresden/id314790387?mt=8" rel="nofollow" target="_blank">FahrInfo
                    Dresden</a></li>

            <li><b>Fahrradverleih:</b> <a href="https://www.sz-bike.de/de/dresden/information/" rel="nofollow" target="_blank">sz-bike</a></li>
        </ul>

        <h3>Taxi</h3>
        <ul class="list">
            <li>FunkTAXI Dresden: 0351 / 211 211</li>
            <li><a href="https://www.gelbeseiten.de/taxi/dresden" rel="nofollow" target="_blank"> weitere Taxibetriebe</a></li>
        </ul>
    </div>

    <?php include('../inc/footer.inc'); ?>
</div>
</body>
</html>
