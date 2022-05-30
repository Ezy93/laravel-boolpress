<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail da boolpress</title>
</head>
<body>
    <h1> Ciao {{$author}}, grazie per aver contattao Boolpress</h1>
    <h3>Ricontatta l'utente a questa mail: {{$authorMail}}</h3>
    <p>
        Questo è il messaggio inviato dall'utente:
        {{$mailContent}}
    </p>
</body>
</html>
