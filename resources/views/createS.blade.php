<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
</head>
<body>
    
    <form action="/createS" method="POST">
        @csrf
        NAME: <input type="text" name="studentName" ><br>
        Score: <input type="text" name="score"><br>
        <input type="submit" value="Add">
    </form>
</body>
</html>