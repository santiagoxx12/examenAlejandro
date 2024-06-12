<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editorial</title>
</head>
<body>

    <form action="{{route('book.update', $book)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Titulo:
        <br>
        <input name="title" type="text" value="{{old('title',$book->title) }}">
        <br>
        </label>
        <br>
        <label>
        ISBN:
        <br>
        <input name="ISBN" type="text" value="{{old('ISBN',$book->ISBN)}}">
        <br>
        </label>
        <br>
        <label>
        Editorial:
        <br>
        <input name="editorial" type="text" value="{{old('editorial',$book->editorial)}}">
        <br>
        </label>
        <br>
        <label>
        Paginas:
        <br>
        <input name="paginas" type="text" value="{{old('paginas',$book->paginas)}}">            <br>
        </label>
        <br>
       
        <button  type="submit">Actualizar Libro</button>
       
    </form>
   
</body>
</html>