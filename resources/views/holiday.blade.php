<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <section class="container">
            @foreach ($holidays as $item)
                <div class="card">
                    <h2>{{ $item->name }}</h2>
                    <h3>Viaggia con {{$item->holiday_agency}}</h3>
                    <p>Paese: {{$item->country}}</p>
                    <h4>Arriverai a {{$item->city}} e soggiornerai presso l'hotel {{$item->hotel}}</h4>
                    <p>{{$item->description}}</p>
                    <small>La data di partenza è prevista per il {{$item->departure}}</small>
                    <small>La data di ritorno è prevista per il {{$item->return}}</small>
                    <p>Il prezzo del soggiorno è di {{$item->price}} &euro;</p>
                </div>
                
            @endforeach
        </section>
    </body>
</html>
