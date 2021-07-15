<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset ("css/app.css")}}">

        <title>Laravel</title>

    </head>
    <body>
        <h1>Scegli il pacchetto vacanze che preferisci!</h1>
        <section class="container">
                @foreach ($holidays as $item)
                
                <div class="card">
                    <div class="transparency">
                    <h2>{{ $item->name }}</h2>
                    <h3>Viaggia con {{$item->holiday_agency}}</h3>
                    <p>Paese: {{$item->country}}</p>
                    <h4>Arriverai a {{$item->city}} e soggiornerai presso l'hotel {{$item->hotel}}</h4>
                    <p class="description"> <em>{{$item->description}}</em> </p>
                    <small>La data di partenza è prevista per il <strong>{{$item->departure}}</strong></small>
                    <small>La data di ritorno è prevista per il <strong>{{$item->return}}</strong></small>
                    <p>Il prezzo del soggiorno è di <strong>{{$item->price}} &euro;</strong></p>
                </div>
                </div>   
            @endforeach
            
        </section>
    </body>
</html>
