@extends ('layout')


<body>
    <section class="mailing">
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
            
            <button> <a href="/">Cancel</a></button>
            </div>
        </div>
    </form>
    </section>
</body>

</html>