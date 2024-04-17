<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planejamentot</title>
</head>
<body>
    <h1>Planejamento Estrategico </h1>

    @foreach ( $plaEstra as $plaEs )

    <div>
        <ol>
            <li>{{ $plaEs->plaDescricao }}</li>
            <li>{{ $plaEs->plaDataInicio }}</li>
            <li>{{ $plaEs->plaDataFinal }}</li>
        </ol>

    </div>
        
    @endforeach
</body>
</html>