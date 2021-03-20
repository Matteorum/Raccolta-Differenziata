<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Imposta giornata</title>
</head>
<body>
    <div class="container">
    <h1 class="text-success">Organizza la giornata</h1>
    <br>
    <br>
    <form action="{{ route('week.store') }}" method="POST">
        @csrf
        <div>
           <label for="Giorno" class="form-label">Seleziona giorno:</label>
           <select name="giorno" id="" class="form-select" aria-label="Default select example">
           <option value="Lunedi">Lunedì</option>
           <option value="Martedi">Martedì</option>
           <option value="Mercoledi">Mercoledì</option>
           <option value="Giovedi">Giovedì</option>
           <option value="Venerdi">Venerdì</option>
           <option value="Sabato">Sabato</option>
           <option value="Domenica">Domenica</option>
        </select>
        </div><br>

        <p>Seleziona il tipo di rifiuto:</p>
        <div class="form-check">

            <input type="radio" class="form-check-input" id="" name="rifiuto" value="Organico">
            <label for="Organico" class="form-check-label" >Organico</label><br>
            <input type="radio" class="form-check-input" id="" name="rifiuto" value="Plastica">
            <label for="Plastica">Plastica</label><br>
            <input type="radio" class="form-check-input" id="" name="rifiuto" value="Carta">
            <label for="Carta">Carta e Cartone</label><br>
            <input type="radio" class="form-check-input" id="" name="rifiuto" value="Vetro">
            <label for="Vetro">Vetro</label><br>
            <input type="radio" class="form-check-input" id="" name="rifiuto" value="Indifferenziato">
            <label for="Indifferenziato">Indifferenziato</label><br>
            <input type="radio" class="form-check-input" id="" name="rifiuto" value="Alluminio">
            <label for="Alluminio">Alluminio e metalli</label>
        </div><br><br>

        <div>
            <label for="orario" class="form-label">Seleziona orario:</label>
            <input type="time" name="orario" class="form-control">
        </div><br>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-success me-md-2">Aggiungi</button>
        </div>

        </div>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
