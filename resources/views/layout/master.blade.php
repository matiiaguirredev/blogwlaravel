<?php /* 

<div>                            @extends ('layout')
    @yield('content')   ------<  @section ('content') Tiene que coincidir el nombre
</div>                              <div>
                                        <p>Este parrafo se inserta en donde este el yield </p>
                                    </div>
 */
// esto lo llevamos a welcome.blade.php ?> 


<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href={{ URL::to ('css/styles.css') }}>
        
    </head>
    <body> 
        @include('partials.header')
        <div class="container">
            @yield('content')
        </div>

    </body>
</html>

