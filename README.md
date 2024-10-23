# TeeMomente

## Inhaltsverzeichnis
- [TeeMomente](#teemomente)
  - [Inhaltsverzeichnis](#inhaltsverzeichnis)
  - [Einführung](#einführung)
  - [Installation](#installation)
  - [Verwendung](#verwendung)
    - [Beispiel für eine Anfrage im Chatbot:](#beispiel-für-eine-anfrage-im-chatbot)
  - [E-Mail-Versand](#e-mail-versand)
  - [Technologien](#technologien)

## Einführung
TeeMomente ist eine Webseite für einen Teeladen, der eine Vielzahl von Teesorten und Teezubehör anbietet. Die Webseite enthält einen Chatbot, der den Kunden bei der Produktsuche unterstützt. Der Chatbot kann auf Anfragen wie "Kamille" reagieren und die entsprechenden Produkte mit ihren Eigenschaften und Bildern anzeigen.

## Installation
Anweisungen zur Installation des Projekts:
1. Klonen Sie das Repository: `git clone https://github.com/minelica/TeeMomente.git`
2. Navigieren Sie zum Projektverzeichnis: `cd TeeMomente`
3. Installieren Sie die Abhängigkeiten: `npm install`

## Verwendung
Um die Webseite zu nutzen, folgen Sie diesen Schritten:
1. Öffnen Sie die Webseite in Ihrem Browser.
2. Verwenden Sie das Menü, um durch die verschiedenen Kategorien von Tees und Teezubehör zu navigieren.
3. Geben Sie im Chatbot-Fenster eine Anfrage ein, z.B. "Kamille", um Informationen über das entsprechende Produkt zu erhalten.

### Beispiel für eine Anfrage im Chatbot:
Kamille

Der Chatbot zeigt dann die Eigenschaften und das Bild des Kamillentees an.

## E-Mail-Versand
Die Webseite verwendet PHPMailer zum Versenden von E-Mails. Wenn ein Nutzer der Webseite eine Bestellung aufgibt, muss er seine Daten eingeben und das gewünschte Produkt sowie die Menge auswählen. Danach erhält er eine E-Mail als Bestellbestätigung von TeeMomente Team.

## Technologien
In diesem Projekt wurden folgende Technologien verwendet:
- **PHP**: Die serverseitige Programmiersprache, die in XAMPP verwendet wird.
- **XAMPP**: Eine Entwicklungsumgebung, die Apache, MySQL, PHP und Perl enthält.
- **Flowbite**: Eine UI-Bibliothek, die auf Tailwind CSS basiert und für die Gestaltung der Benutzeroberfläche verwendet wird.
- **PHPMailer**: Eine Bibliothek zum Versenden von E-Mails.
- **Node.js und npm**: Für die Verwaltung von Abhängigkeiten und das Erstellen von Frontend-Assets.