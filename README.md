# Wordpress-Theme


# Ueberblick
- Projekt zusammenbauen
- Allgemeines


# Projekt zusammenbauen
## Voraussetzungen ##
+ Node.js mit npm package manager muss auf dieser Maschine installiert sein.
+ Node (minimum Version: v7.2.0) ([Link zum download](https://nodejs.org/en/download/))
+ Npm minimum Version: 3.10.9

## Build Schritte ##
+ Kommandokonsole Oeffnen
+ In das 'Web' Verzeichnis wechseln
+ 'npm install' (ohne Anfuehrungszeichen) ausfuehren - dies laedt und installiert die benoetigten Build-Module in das lokale Verzeichnis.
+ 'npm run build' ausfuehren: Erstellt ein Build-Verzeichnis unter './build'
+ das Build-Verzeichnis wird anschliessend auf den Server in das entsprechende Wordpress Template Verzeichnis kopiert


## Zusammengefasst ##
Der Buildprozess erstellt die tatsaechliche Ausgabestruktur im build Ordner. Die dort abgelegten Dateien sind diese, welche schliesslich in Wordpress hochgeladen werden.

# Allgemeines
## Wichtige Verzeichnisse und Dateien

**lokale Master SCSS Datei**
1. Sass Dateien
```sh
/src/sass/style.scss
```
Hinweis: aus dieser Master-SCSS-Datei wird eine Master-CSS-Datei gebaut 'style.css' (enthaelt bootstrap, font-awesome, eigener Code)

2. PHP Dateien
```sh
/src/php
```
Hinweis: hier befinden sich alle php Dateien

3. JavaScript Dateien
```sh
/src/js
```
Hinweis: hier befinden sich alle JavaScript Dateien

## Erweiterte Informationen
### Node.js und npm
Node.js: ([Link zu Wikipedia](https://de.wikipedia.org/wiki/Node.js))

npm (Node Package Manager): Paketmanager fuer die JavaScript-Laufzeitumgebung Node.js ([Link zu Wikipedia](https://de.wikipedia.org/wiki/Node_Package_Manager))

### npm install
mit dem Befehl **'npm install'** werden folgende Pakete heruntergeladen
```sh
"node-sass": "^3.8.0",              # konvertiert sass dateien zu css dateien
"cpx": "1.5.0",                     # kopiert Dateien und Verzeichnisse
"rimraf": "latest",                 # zum loeschen von dateien und Verzeichnissen
"bootstrap-sass": "^3.3.7",         # bootstrap als sass
"jquery": "1.12.4",                 # jquere lib
"font-awesome": "4.7.0",  	        # font-awesome

```
