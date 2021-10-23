<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    {{ $id }}
    <form action="StudentController@edit/{{$id}}" method="POST">
        @csrf
        NAME: <input type="text" name="studentName" ><br>
        Score: <input type="text" name="score"><br>
        <input type="submit" value="Edit">
    </form>
</body>
</html>