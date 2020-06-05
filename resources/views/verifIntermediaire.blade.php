@extends ('layout')
<body>
    <section class="verifIntermediaire">
    <h1>Demande d'inscription</h1>
    <p>Vous n'êtes pas présent dans notre White-Liste et vous souhaitez vous inscrire ?</p>
    <p>Veuillez remplir ce formulaire afin d'en faire la demande.</p>
    <form method="POST" action="/inscription" enctype="multipart/form-data">
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
            <label>Photo du Permis de Conduire</label><br>
            <input type="file" name="permis" id="permis">
            @error('permis')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <div>
                <button type="submit">Envoyer</button>
           
            <button> <a href="/">Cancel</a></button>
            </div>
        </div>
    </form>
    </section>
</body>
</html>