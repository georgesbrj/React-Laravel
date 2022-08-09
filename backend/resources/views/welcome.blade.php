<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title> 
    </head>
    <body>
         <h1>Usuários</h1> 

         <ul>
            @forelse ($users as $u)
                <li>{{$u->name }}  </li>
            @empty
                <li>Nenhum usuario</li>
            @endforelse
        </ul>
    </body>
</html>
