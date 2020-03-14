<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Categorías</title>
  </head>
  @include('./header')
  <body>
    <h1>categorias</h1>
    <p> "Acá deberíamos recorrer y mostar todos las categorias de la bbdd"</p>
    <ul>
      @foreach ($categorias as $categoria)
        <li>{{$categoria->name}}</li>

      @endforeach
</ul>
  </body>
  @include('./footer')
</html>
