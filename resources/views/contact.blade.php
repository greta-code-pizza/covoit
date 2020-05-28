@extends ('layout')


<body>
    <section class="mailing">
    <h1>Mailing List</h1>
    <p>Pour être tenu informé des derniers trajets ajouté, veuillez entrer votre Email</p>
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
           
                <button>Cancel</button>
            </div>
        </div>
    </form>
    </section>
</body>

</html>