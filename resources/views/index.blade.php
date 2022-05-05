<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <header>
        <ol>
            @foreach ($trains as $train)
            <li>
                {{ $train->Azienda }},
                {{ $train->Stazione_di_partenza}},
                {{ $train->Stazione_di_arrivo }}
                {{ $train->Data_di_partenza }}
            </li>     
            @endforeach
        </ol>
    </header>
    
</body>
</html>