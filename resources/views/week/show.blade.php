<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Giornata</title>
</head>
<body>
    <br>
    <br>
    <div class="container">
        <div class="container-sm border border-info border-3 rounded-3">
            <h2>{{ $week->giorno }}</h2>
            <h4>{{ $week->rifiuto }}</h4>
            <p>{{ mb_substr($week->orario , 0, -3) }}</p>
        </div>
    <div class="d-flex p-2 bd-highlight flex-row-reverse">

        <form method="POST" action="/week/{{ $week->id }}">
            @method('DELETE')
            @csrf
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-dark me-md-2">Elimina</button>
            </div>
        </form>

        <a href="/week/{{ $week->id }}/edit"><div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-success me-md-2">Aggiorna</button>
        </div></a>


    </div>
    </div>



</body>
</html>
