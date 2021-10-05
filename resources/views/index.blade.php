<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile</title>
    </head>
    <body>
        <h1>Hallo {{$nama}}</h1>

        @php
            $nilaiA = 100;
            $nilaiB = 80;
            $nilaiC = 70;
            $nilaiD = 40;
            $nilaiE = 10;

            $status = 10;
        @endphp

        Nilai A adalah {{$nilaiA}} <br>
        Nilai B adalah {{$nilaiB}} <br>
        Nilai C adalah {{$nilaiC}} <br>
        Nilai D adalah {{$nilaiD}} <br>
        Nilai E adalah {{$nilaiE}} <br> <br>

        @if ($status == 100)
            Nilai kamu adalah {{$nilaiA}}
        @elseif ($status == 80)
            Nilai kamu adalah {{$nilaiB}}
        @else
            Status kamu tidak lulus
        @endif

        <br>

        @for ($i = 0; $i < $status; $i++)
            Pengulangan For ke-{{$i}} <br>
        @endfor
        <br>
        @for ($a = 1; $a <= $status; $a++)
            @if (($a % 2 ) == 0)
                Ini bilangan Genap {{$a}} <br>
            @else
                Ini bilangan Ganjil {{$a}} <br>
            @endif
        @endfor
    </body>
</html>
