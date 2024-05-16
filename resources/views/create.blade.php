<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enregistrement</title>
</head>
<body>
    <h1>Enregistrer pays</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{route('savePays')}}" method="post">
        @csrf
        <p>Nom : <input type="text" name="name"></p>
        <p>Capitale : <input type="text" name="capitale"></p>
        <p><button type="submit">Enregistrer</button></p>
    </form>
</body>
</html>