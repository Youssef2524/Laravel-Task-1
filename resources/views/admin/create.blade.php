<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('store-user')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name">
<input type="email" name="email" placeholder="email">
<input type="password" name="password" placeholder="pass">
<input type="submit">

    </form>
    
</body>
</html>