<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pays</title>
</head>
<body>
    <h1>Liste Pays</h1>
    
    <table border='1px solid' style="width: 400px; height:120px; text-align:center;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
            </tr>
        </thead>
    <tbody>
        @foreach($pays as $key=>$item)
        <tr>
            <td>{{$item['id']}}</td>
            <td><a href="{{route('detailPays', $key)}}">{{$item['name']}}</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>