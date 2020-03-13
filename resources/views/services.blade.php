<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Servicios</title>
    </head>
    <body>
        <h1>Servicios</h1>
        <ul>
            @foreach($services as $service)
                <li><a href="servicio/{{$service->id}}">{{$service->getNombre()}}</a></li>
                {{-- <li><a href="{{ url('service/'.$service->getIdService().'/') }}>{{$service->getNombreCompleto()}}</a></li> --}}
                {{-- <li>{{$actor->showPelicula()}}</li> --}}

                {{-- <h2>{{$service->getAlta()}}</h2> --}}

            @endforeach
        </ul>

    </body>
</html>
