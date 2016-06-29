<?php

define("BASIS_URL","");		// Verlinkungen können relativ zu / sein
define("CONF_URL","http://frab.fossgis-konferenz.de/de/2016/public/schedule.json");
define("JSON_SPEAKERS","http://frab.fossgis-konferenz.de/de/2016/public/speakers.json");
define("YT_URL","https://tracker.c3voc.de/api/v1/fossgis16/tickets/released.json");
//define("YT_URL","https://tracker.c3voc.de/api/v1/gpn16/tickets/released.json");		// eine andere Konferenz
define("VID_URL","http://ftp5.gwdg.de/pub/misc/openstreetmap/FOSSGIS2016/");
//define("VID_URL","http://ftp5.gwdg.de/pub/misc/openstreetmap/FOSSGIS2015/");		// FOSSGIS letztes Jahr
define("FRAB_EVENT_URL", "/de/2016/public/events/");
define("FRAB_PERSON_URL","/de/2016/public/speakers/");

define("ID_LEN", 6);
define("TIT_LEN", 60);
define("SUB_LEN", 60);
define("DESC_LEN", 200);
define("TIT_SHORT", 20);
define("SUB_SHORT", 20);
define("DESC_SHORT", 20);
define("PERS_LEN", 20);
define("YT_LEN", 11);
define("RAUM_LEN", 10);

define("HIDDEN_IDS", "||5105|");	// 5105 ist der Sektempfang
define("HIDDEN_ROOMS", "||HS432|HS3004|EXPO Forum|");
  // ||, damit die matches immer >0


?>
