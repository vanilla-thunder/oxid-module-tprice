## [___VENDOR___] ___NAME___ - Module for OXID eShop v6
version: ___VERSION___

Mit diesem Modul können Sie für jedem Artikel die Überschrift beim UVP Preis ändern.
* UVP des Herstellers
* ehem. UVP
* unser alter Preis
* regulärer Preis
* regulärer Preis + der aktuelle Preis wird als "Einführungspreis" hervorgehoben
 
Sie können ebenfalls prezentuale als auch absolute Ersparnis gegenüber dem UVP Preis anzeigen lassen.  
Zusätzlich dazu wird der UVP Preis vom Vaterartikel genommen, sofern dieser über dem Preis der Variante liegt.

### Installation v4 / v5
* [___URL___/archive/master.zip](___URL___/archive/v4.zip) herunterladen und entpacken
* Inhalt von "copy_this" in den Shop hochladen
* Modul aktivieren und Moduleinstellungen konfigurieren
* tmp/ leeren + Views aktualisieren

### Installation v6
* meine private repository in composer.json eintragen/ergänzen:
````
"repositories": [
   {
      "type": "composer",
      "url": "https://raw.githubusercontent.com/vanilla-thunder/composer/master/"
   }
],
````
* Dependency eintragen:
````
"require": {
   ...
   "vt/tprice":"dev-module"
},
```` 
* bzw: ``$ composer require vt/tprice:dev-module --no-update && composer update vt/tprice --``

### LICENSE AGREEMENT
   [___VENDOR___] ___NAME___ - Module for OXID eShop 4.9+  
   Copyright (C) ___YEAR___ ___COMPANY___  
   info:  ___EMAIL___  
  
   This program is free software;  
   you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
   either version 3 of the License, or (at your option) any later version.
  
   This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;  
   without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
   You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
