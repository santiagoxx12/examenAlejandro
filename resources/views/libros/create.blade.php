<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <form action="{{route('book.store')}}" method="POST">

        @csrf
        <label>
            Titulo
            <input type="text" name="title">
            <br>
        </label>
        <label>
            ISBN
            <input type="text" name="ISBN">
            <br>
        </label>
        <label>
            Editorial
            <input type="text" name="editorial">
            <br>
        </label>
        <label>
            Paginas
            <input type="text" name="paginas">
            <br>
        </label>
<button type="submit">Guardar</button>
</form>
</body>
</html>