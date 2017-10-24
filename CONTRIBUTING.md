# Anleitung zum Mitmachen
## Einrichten der Entwicklungsumgebung
### IDE
Es ist egal was fuer eine IDE sie benutzten.
Empfehlung: [Visual Studio Code](https://code.visualstudio.com/) kurz VSC, gibt es fuer die verschiedensten OS und hat die besten Plugins.
Alternativ [ATOM] (]https://atom.io/)

Fuer Visual Studio Code sollten folgende Plugins installieren werden
- EditorConfig for VS Code
- Sass
- ESLint
- stylint


# Entwicklung

folgende Task sollten waehrend der Entwicklung staendig im Hintergrund laufen.
- gulp watchDev
  es werden bei Aeanderungen an scss oder javascript Dateien diese erst kompiliert (nur bei scss) und anschliessend auf das Testsytem kopiert.
  Muessen Anschliessend noch als Hauptversion freigeben werden.

- gulp watch
  es werden bei Aenderungen an scss oder javascript Dateien diese erst kompiliert (nur bei scss) und anschliessend auf das Livesystem kopiert.
  Muessen Anschliessend noch als Hauptversion freigeben werden.

Die endgueltige Version wird mit den 2 Befehlen auf das Livesystem uebertragen
- gulp prod
- gulp copyToSharePoint

Hierbei wird nochmal eine Codeanayle ausgefuhrt ('/build/reports'), die Css-Dokumentation ('/build/sassdoc') erstellt und alle Datein minimiert.


# Uploads
Alle Dateien (Javascript und Css) werden mit folgenden Befehl auf den Sharepoint-Server hochgeladen:
- gulp copyToSharePoint
