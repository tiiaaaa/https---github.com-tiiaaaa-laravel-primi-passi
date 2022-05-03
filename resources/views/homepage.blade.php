@php
    $message = "Hello Word!";
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>
</head>
<body>
    <div class="container">
        <header>
            <a href="{{ route('contatti') }}">Contatti</a>
            <a href="{{ route('menu') }}">Menu</a>
            <a href="{{ route('links') }}">Links</a>
        </header>
    
        <div>
            <h1>{{$message}}</h1>
        </div>
    </div>
</body>
</html>

<style>
    
    div.container{
        text-align: center
    }

    header{
        height: 10vh;
        display: flex;
        align-items: center;
        justify-content: center
    }

    a{
        font-size: 1.5rem;
        text-decoration: none;
        margin-right: 1rem;
        color: rgb(29, 146, 255);
    }

</style>

