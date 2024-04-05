<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('update-user',$User->id) }}" method="post">
        @csrf
        @method('put')
        <!-- @method('PUT') -->
        <input value="{{$User->name}}" type="text" name="name" placeholder="name">
<input value="{{$User->email}}" type="email" name="email" placeholder="email">

<input type="submit">

    </form>
    
</body>
</html>