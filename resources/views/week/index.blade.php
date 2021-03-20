<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./css/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>La tua settimana</title>

</head>
<body>


<!-- Creazione nav bar a sezioni -->
    <nav>
        <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Oggi</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Settimana</button>
        </div>
      </nav>

      <br>

      <!-- contenuto delle sezioni -->
      <div class="container-sm">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <!-- Oggi -->
        @switch(date('N'))
            @case(1)
                @foreach ($weeks as $week )
                    @if ($week->giorno=='Lunedi')
                        <a href="/week/{{ $week->id }}" class="text-decoration-none"><div class="container-sm border border-info border-2 rounded-3">
                            <h1>{{ $week->rifiuto }}</h1>
                            <p>{{ mb_substr($week->orario , 0, -3) }}</p>
                        </div></a>
                <br>

                    @endif

                @endforeach
            @break
            @case(2)
                @foreach ($weeks as $week )
                    @if ($week->giorno=='Martedi')
                        <a href="/week/{{ $week->id }}" class="text-decoration-none"><div class="container-sm border border-info border-2 rounded-3">

                            <h1>{{ $week->rifiuto }}</h1>
                            <p>{{ mb_substr($week->orario , 0, -3) }}</p>
                        </div></a>
                <br>

                     @endif

                @endforeach
            @break
            @case(3)
                @foreach ($weeks as $week )
                    @if ($week->giorno=='Mercoledi')
                        <a href="/week/{{ $week->id }}" class="text-decoration-none"><div class="container-sm border border-info border-2 rounded-3">

                            <h1>{{ $week->rifiuto }}</h1>
                            <p>{{ mb_substr($week->orario , 0, -3) }}</p>

                        </div></a>
                <br>

                    @endif

                @endforeach
            @break
            @case(4)
                @foreach ($weeks as $week )
                    @if ($week->giorno=='Giovedi')
                        <a href="/week/{{ $week->id }}" class="text-decoration-none"><div class="container-sm border border-info border-2 rounded-3">

                            <h1>{{ $week->rifiuto }}</h1>
                            <p>{{ mb_substr($week->orario , 0, -3) }}</p>

                        </div></a>
                <br>
                    @endif

                @endforeach
            @break
            @case(5)
                @foreach ($weeks as $week )
                    @if ($week->giorno=='Venerdi')
                        <a href="/week/{{ $week->id }}" class="text-decoration-none"><div class="container-sm border border-info border-2 rounded-3">

                            <h2>{{ $week->rifiuto }}</h2>
                            <p>{{ mb_substr($week->orario , 0, -3) }}</p>

                        </div></a>
                <br>
                    @endif

                @endforeach
            @break
            @case(6)
                @foreach ($weeks as $week )
                    @if ($week->giorno=='Sabato')
                        <a href="/week/{{ $week->id }}" class="text-decoration-none"><div class="container-sm border border-info border-2 rounded-3">

                            <h1>{{ $week->rifiuto }}</h1>
                            <p>{{ mb_substr($week->orario , 0, -3) }}</p>

                        </div></a>
                <br>
                    @endif

                @endforeach
            @break
            @case(7)
                @foreach ($weeks as $week )
                    @if ($week->giorno=='Domenica')
                        <a href="/week/{{ $week->id }}" class="text-decoration-none"><div class="container-sm border border-info border-2 rounded-3">

                            <h1>{{ $week->rifiuto }}</h1>
                            <p>{{ mb_substr($week->orario , 0, -3) }}</p>

                        </div></a>
                <br>
                    @endif

                @endforeach
            @break

        @default
            <p>Nessun ritiro</p>

        @endswitch

        </div>

        <!-- Settimana -->
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="container-sm border border-info border-2 rounded-3">
            <h2>Lunedi</h2>
            @foreach ($weeks as $week )
                @if ($week->giorno=="Lunedi")
                <a href="/week/{{ $week->id }}" class="text-decoration-none link-success"><div >

                    <h4>{{ $week->rifiuto }}</h4>
                    <p>{{ mb_substr($week->orario , 0, -3) }}</p>
                </div></a>
                @endif

            @endforeach
        </div><br>

            <div class="container-sm border border-info border-2 rounded-3">
            <h2>Martedi</h2>
            @foreach ($weeks as $week )
                @if ($week->giorno=="Martedi")
                <a href="/week/{{ $week->id }}" class="text-decoration-none link-success"><div>

                    <h4>{{ $week->rifiuto }}</h4>
                    <p>{{ mb_substr($week->orario , 0, -3) }}</p>
                </div></a>

                @endif

            @endforeach
            </div><br>

            <div class="container-sm border border-info border-2 rounded-3">
            <h2>Mercoledi</h2>
            @foreach ($weeks as $week )
                @if ($week->giorno=="Mercoledi")
                <a href="/week/{{ $week->id }}" class="text-decoration-none link-success"><div>

                    <h4>{{ $week->rifiuto }}</h4>
                    <p>{{ mb_substr($week->orario , 0, -3) }}</p>
                </div></a>

                @endif

            @endforeach
            </div><br>


            <div class="container-sm border border-info border-2 rounded-3">
            <h2>Giovedi</h2>
            @foreach ($weeks as $week )
                @if ($week->giorno=="Giovedi")
                <a href="/week/{{ $week->id }}" class="text-decoration-none link-success"><div>

                    <h4>{{ $week->rifiuto }}</h4>
                    <p>{{ mb_substr($week->orario , 0, -3) }}</p>
                </div></a>

                @endif

            @endforeach
            </div><br>


            <div class="container-sm border border-info border-2 rounded-3">
            <h2>Venerdi</h2>
            @foreach ($weeks as $week )
                @if ($week->giorno=="Venerdi")
                <a href="/week/{{ $week->id }}" class="text-decoration-none link-success"><div>

                    <h4>{{ $week->rifiuto }}</h4>
                    <p>{{ mb_substr($week->orario , 0, -3) }}</p>
                </div></a>

                @endif

            @endforeach
            </div><br>


            <div class="container-sm border border-info border-2 rounded-3">
            <h2>Sabato</h2>
            @foreach ($weeks as $week )
                @if ($week->giorno=="Sabato")
                <a href="/week/{{ $week->id }}" class="text-decoration-none link-success"><div>

                    <h4>{{ $week->rifiuto }}</h4>
                    <p>{{ mb_substr($week->orario , 0, -3) }}</p>
                </div></a>

                @endif

            @endforeach
            </div><br>

            <div class="container-sm border border-info border-2 rounded-3">
            <h2>Domenica</h2>
            @foreach ($weeks as $week )
                @if ($week->giorno=="Domenica")
                <a href="/week/{{ $week->id }}" class="text-decoration-none link-success"><div>

                    <h4>{{ $week->rifiuto }}</h4>
                    <p>{{ mb_substr($week->orario , 0, -3) }}</p>
                </div></a>

                @endif

            @endforeach
            </div><br>
        </div>
      </div>

      <br>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="/week/create"><button type="button" class="btn btn-success me-md-2">Aggiungi ritiro</button></a>
    </div><br>
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>







</body>
</html>
