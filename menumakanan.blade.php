<!DOCTYPE html>
<html>
    <head>
        <title>Menu Makanan Yang Di Pilih</title>
    </head>
    <body>
        <h3>{{$pesanan}}</h3>
        @foreach($pilih as $plh)
            {{ $plh }}
            <br>
        @endforeach
    </body>
</html>