<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demande de Trajet</title>
</head>
<body>
    <h1>Demande de trajet</h1>
    <p>Vous êtes interessé par le trajet ("id") de ("ville") au GRETA de Vannes</p>
    <p>Veuillez renseigner les champs ci dessous fin de prendre contact avec le conducteur.</p>
    <form method="POST" action="/demande-trajet">
        @csrf
        <div>
            <label>Nom</label><br>
            <input type="text" name="nom" id="nom">
            @error('nom')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Prénom</label><br>
            <input type="text" name="prenom" id="prenom">
            @error('prenom')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email" id="email">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <div>
                <button type="submit">Envoyer</button>
            </div>
            <div>
                <button>Cancel</button>
            </div>
        </div>
    </form>
</body>
</html>