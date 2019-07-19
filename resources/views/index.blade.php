<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Impresion con google cloud print</h1>
    <label>Formulario</label>
    <form method="post" action="/imprimirpagina">
        {{csrf_field()}}
        {{--<input type="hidden" name="_method" value="PUT">--}}
        <button>Imprimir una pagina web demo</button>
    </form>
    <form method="post" action="/imprimirpdf">
        {{csrf_field()}}
        {{--<input type="hidden" name="_method" value="PUT">--}}
        <button>Imprimir pdf demo</button>
    </form>
    <form method="post" action="/imprimirtexto">
        {{csrf_field()}}
        {{--<input type="hidden" name="_method" value="PUT">--}}
        <button>Imprimir un texto demo</button>
    </form>
    
    
</body>
</html>