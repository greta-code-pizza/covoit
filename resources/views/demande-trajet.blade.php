@extends ('layout')

<body>
    <section class="tripRequest">
    <h1>Demande de trajet</h1>
    <p>Veuillez renseigner les champs ci dessous fin de prendre contact avec le conducteur.</p>
    <form method="POST" action="{{route('demande-trajet')}}">
        @csrf
        <input type="hidden" name="token" value="{{request()->route('token')}}">
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
            
            <button> <a href="/">Cancel</a></button>
            </div>
        </div>
    </form>
    </section>
</body>
</html>