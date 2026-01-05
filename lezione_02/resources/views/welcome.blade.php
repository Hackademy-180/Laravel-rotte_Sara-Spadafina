<!-- Traccia 1:
Replicare il progetto visto a lezione con tanto di pagina dei prodotti e pagina di dettaglio

Traccia 2:
Realizzare un nuovo progetto in Laravel. Questa pagina dovrà avere una vista dedicata a dei libri. 
Ciascun libro dovrà avere i seguenti parametri:
    Titolo
    Autore
    Genere
    Descrizione
Creare una pagina in cui sia possibile visualizzare una card per ogni libro che 
mostri soltanto il titolo. Queste card dovranno avere anche un link che permetta
di accedere alla pagina di dettaglio del singolo libro che mostrerà tutti i dati.
Utilizzare il PublicController per gestire la logica.

Traccia 3:
Clonare il progetto di un buddy a vostra scelta e fare in modo che funzioni sul vostro PC  -->
<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Laravel 2</title>
            <link rel="stylesheet" href="/style.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('homepage_')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('chisiamo_')}}">chi siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('prodotti_')}}">prodotti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('lavoraconnoi_')}}">lavora con noi</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <header class="container-fluid">
            <section class="row header align-items-center vh-100">
                <article class="col-12 text-white text-center">
                <h1 class="display-1">Hello, world!</h1>
                </article>
            </section>
        </header>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>