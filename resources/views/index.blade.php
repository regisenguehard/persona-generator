<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Info Generator</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Persona Generator</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="https://enguehard.info" target="_blank">Plus d'infos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <h1 class="text-center">Persona Generator</h1>
            </div>
        </div>
        <div class="col-12 text-center mb-3">
            <input type="submit" value="Générer un nouveau persona" class="btn btn-primary">
        </div>
        <form action="{{ route('home') }}" method="get" class="row">
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Photo</h5>
                        <p class="card-text"><img class="img-fluid copypaste" value="https://thispersondoesnotexist.com/image" src="https://thispersondoesnotexist.com/image" alt="thispersondoesnotexist"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gentillé</h5>
                        <p class="card-text"><input type="text" class="copypaste" value="{{ $faker->title($genre) }}"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nom</h5>
                        <p class="card-text"><input type="text" class="copypaste" value="{{ $faker->name($genre) }}"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adresse</h5>
                        <textarea class="copypaste">{{ $faker->address() }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Téléphone</h5>
                        <p class="card-text"><input type="text" class="copypaste" value="{{ $faker->phoneNumber() }}"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Entreprise</h5>
                        <p class="card-text"><input type="text" class="copypaste" value="{{ $faker->company() }}"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Métier</h5>
                        <p class="card-text"><input type="text" class="copypaste" value="{{ $faker->jobTitle() }}"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Email</h5>
                        <p class="card-text"><input type="text" class="copypaste" value="{{ $faker->email() }}"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nom d'utilisateur</h5>
                        <p class="card-text"><input type="text" class="copypaste" value="{{ $faker->userName() }}"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mot de passe</h5>
                        <p class="card-text"><input type="text" class="copypaste" value="{{ $faker->password() }}"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nom de domaine</h5>
                        <p class="card-text"><input type="text" class="copypaste" value="{{ $faker->domainName() }}"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">IPv4</h5>
                        <p class="card-text"><input type="text" class="copypaste" value="{{ $faker->localIpv4() }}"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Carte de crédit</h5>
                        <p class="card-text">
                            Numéro : <input type="text" class="copypaste" value="{{ $faker->creditCardNumber() }}"><br>
                            Expire : <input type="text" class="copypaste" value="{{ $faker->date('d/m/Y', $faker->creditCardExpirationDate()) }}"><br>
                            Code : <input type="text" class="copypaste" value="{{ sprintf("%'03d\n", $faker->numberBetween(0, 999)) }}">
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Latitude / Longitude</h5>
                        <p class="card-text"><input type="text" class="copypaste" value="{{ $faker->latitude() }} / {{ $faker->longitude() }}"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Chiffre préféré</h5>
                        <p class="card-text"><input type="text" class="copypaste" value="{{ $faker->randomDigit() }}"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Date de naissance</h5>
                        <p class="card-text"><input type="text" class="copypaste" value="{{ $faker->date('d/m/Y', $faker->dateTimeBetween('-100 years', '-10 weeks')) }}"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">EAN13</h5>
                        <p class="card-text"><input type="text" class="copypaste" value="{{ $faker->ean13() }}"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Couleur</h5>
                        <p class="card-text">
                            <input type="text" class="copypaste" value="{{ $color = $faker->hexColor() }}">
                            <span class="hexColor" style="background-color: {{ $color }}"></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Texte</h5>
                        <p class="card-text"><textarea class="copypaste">{{ $faker->realText() }}</textarea></p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <input type="submit" value="Générer un nouveau persona" class="btn btn-primary">
            </div>
        </form>
    </main>
    <footer class="text-center mt-3">
        © <?php echo date("Y"); ?> - <a href="https://enguehard.info" target="_blank">Plus d'infos</a>
    </footer>

    <script src="js/app.js" defer></script>
</body>
</html>