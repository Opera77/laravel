<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enregistrement</title>
</head>
<body>
    <h1>Modifier {{$categorie->name}}</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{route('categories.update', $categorie->id)}}" method="post">
        @csrf
        @method('PUT')

        <p>Nom : <input value="{{$categorie->name}}" type="text" name="name"></p>
        <p>Description : <textarea name="description" id="" cols="30" rows="10">{{$categorie->description}}</textarea></p>
        <p><button type="submit">Modifier</button></p>
    </form>
</body>
</html>