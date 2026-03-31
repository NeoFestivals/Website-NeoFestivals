<?php
// Prüfen, ob das Formular über POST abgeschickt wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Daten aus dem Formular abfangen und bereinigen (Sicherheit gegen XSS)
    $firstName = htmlspecialchars(trim($_POST["firstName"]));
    $lastName  = htmlspecialchars(trim($_POST["lastName"]));
    $email     = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject   = htmlspecialchars(trim($_POST["subject"]));
    $message   = htmlspecialchars(trim($_POST["message"]));

    // 2. Einfache Validierung: Prüfen, ob Pflichtfelder ausgefüllt sind
    if (empty($firstName) || empty($lastName) || empty($email) || empty($message)) {
        // Zurückleiten mit Fehlermeldung
        header("Location: contact.php?status=error");
        exit;
    }

    // 3. E-Mail-Einstellungen konfigurieren
    $to = "nico.volz@neofestivals.de"; // Deine Empfänger-Adresse
    $email_subject = "Neue Kontaktanfrage: " . ucfirst($subject);
    
    // Aufbau des E-Mail-Inhalts
    $email_body = "Du hast eine neue Nachricht über das Kontaktformular erhalten.\n\n".
                  "Hier sind die Details:\n".
                  "Name: $firstName $lastName\n".
                  "Email: $email\n".
                  "Thema: $subject\n\n".
                  "Nachricht:\n$message";

    // Header für die E-Mail (Wer ist der Absender?)
    $headers = "From: noreply@neofestivals.de\n";
    $headers .= "Reply-To: $email";

    // 4. E-Mail senden und den User zurück zur Kontaktseite leiten
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Erfolg: E-Mail wurde gesendet
        header("Location: contact.php?status=success");
    } else {
        // Fehler: E-Mail konnte vom Server nicht gesendet werden
        header("Location: contact.php?status=server_error");
    }
    exit;
} else {
    // Falls jemand die Datei direkt aufruft, ohne das Formular zu nutzen
    header("Location: contact.php");
    exit;
}
?>