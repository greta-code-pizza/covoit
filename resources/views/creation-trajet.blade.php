@extends ('layout')

<body>
    <section class="tripCreate">
    <h1>Nouveau Trajet</h1>
    <p>Pour créer un nouveau trajet, veuillez renseigner les champs ci-dessous</p>
    <form method="POST" action="/creation-trajet">
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
            <label>Ville de Départ</label><br>
            <input type="text" name="ville" id="ville">
            @error('ville')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <div>
                <button type="submit">Envoyer</button>
            </div>
            <div>
                <a href="/">Cancel</a>
            </div>
        </div>
    </form>
    </section>
</body>
</html>