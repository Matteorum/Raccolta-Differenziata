<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Modifica</title>
</head>
<body>

    <div class="container">
        <br>
        <h1 class="text-success">Modifica giornata</h1>
        <br><br>
    <form action="/week/{{ $week->id }}" method="POST">
        @method('PATCH')
        @csrf
        <div>
           <label for="Giorno" lass="form-label">Seleziona giorno:</label>
           <select name="giorno" id="" class="form-select " aria-label="Default select example" >

                @if ($week->id_giorno==1)
                    <option value="Lunedi" selected>Lunedì</option>
               @else
                    <option value="Lunedi">Lunedì</option>
               @endif

                @if ($week->id_giorno==2)
                    <option value="Martedi" selected>Martedì</option>
                @else
                    <option value="Martedi">Martedì</option>
                @endif

                @if ($week->id_giorno==3)
                    <option value="Mercoledi" selected>Mercoledì</option>
                @else
                    <option value="Mercoledi">Mercoledì</option>
                @endif

                @if ($week->id_giorno==4)
                    <option value="Giovedi" selected>Giovedì</option>
                @else
                    <option value="Giovedi">Giovedì</option>
                @endif

                @if ($week->id_giorno==5)
                    <option value="Venerdi" selected>Venerdì</option>
                @else
                    <option value="Venerdi">Venerdì</option>
                @endif

                @if ($week->id_giorno==6)
                    <option value="Sabato" selected>Sabato</option>
                @else
                    <option value="Sabato">Sabato</option>
                @endif

                @if ($week->id_giorno==7)
                    <option value="Domenica" selected>Domenica</option>
                @else
                    <option value="Domenica">Domenica</option>
                @endif
        </select>
        </div><br>

        <div>
            <p>Seleziona il tipo di rifiuto:</p>
            @if ($week->rifiuto=='Organico')
                <input type="radio" class="form-check-input" id="" name="rifiuto" value="Organico" checked>
                <label for="Organico" class="form-check-label">Organico</label><br>
            @else
                <input type="radio" class="form-check-input" id="" name="rifiuto" value="Organico" checked>
                <label for="Organico" class="form-check-label">Organico</label><br>
            @endif

            @if ($week->rifiuto=='Plastica')
                <input type="radio" class="form-check-input" id="" name="rifiuto" value="Plastica" checked>
                <label for="Plastica">Plastica</label><br>
            @else
                <input type="radio" class="form-check-input" id="" name="rifiuto" value="Plastica">
                <label for="Plastica">Plastica</label><br>
            @endif

            @if ($week->rifiuto=='Carta')
                <input type="radio" class="form-check-input" id="" name="rifiuto" value="Carta" checked>
                <label for="Carta">Carta e Cartone</label><br>
            @else
                <input type="radio" class="form-check-input" id="" name="rifiuto" value="Carta">
                <label for="Carta">Carta e Cartone</label><br>
            @endif

            @if ($week->rifiuto=='Vetro')
                <input type="radio" class="form-check-input" id="" name="rifiuto" value="Vetro" checked>
                <label for="Vetro">Vetro</label><br>
            @else
                <input type="radio" id="" name="rifiuto" value="Vetro">
                <label for="Vetro">Vetro</label><br>
            @endif

            @if ($week->rifiuto=='Indifferenziato')
                <input type="radio" class="form-check-input" id="" name="rifiuto" value="Indifferenziato" checked>
                <label for="Indifferenziato">Indifferenziato</label><br>
            @else
                <input type="radio" class="form-check-input" id="" name="rifiuto" value="Indifferenziato">
                <label for="Indifferenziato">Indifferenziato</label><br>
            @endif

            @if ($week->rifiuto=='Alluminio')
                <input type="radio" class="form-check-input" id="" name="rifiuto" value="Alluminio" checked>
                <label for="Alluminio">Alluminio e metalli</label>
            @else
                <input type="radio" class="form-check-input" id="" name="rifiuto" value="Alluminio">
                <label for="Alluminio">Alluminio e metalli</label>
            @endif

        </div><br><br>

        <div>
            <label for="orario">Seleziona orario:</label>
            <input type="time" name="orario" class="form-control" value="$week->orario">
        </div><br>

        <div>
            <button type="submit" class="btn btn-success">Aggiorna</button>
        </div>



    </form>
</div>
</body>
</html>
