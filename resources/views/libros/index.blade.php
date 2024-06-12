<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>

        @foreach ($book as $books)
        <tr>
            <td>{{$books->id}}</td>
            <td>{{$books->title}}</td>
            <td>{{$books->ISBN}}</td>
            <td>{{$books->editorial}}</td>
            <td>{{$books->paginas}}</td>
            <td><a href="{{route('book.show',$books->id)}}">Mostrar</a></td>
            <td><a href="{{route('book.edit',$books->id)}}">Editar</a></td>
            <td>
                <form action="{{route('book.destroy',$books->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>  


            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>