<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <h1>Mailing List</h1>

    <p>Pour savoir si vous êtes inscrit à la Mailing Liste, veuillez entrer votre Email ci-dessous</p>
    <form method="POST" action="/contact">
        @csrf
        <div>
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