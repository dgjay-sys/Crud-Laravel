<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Insert Users Page</h1>

    <form action="{{route('insert')}}" method="post">
        @csrf {{ csrf_field() }}
        <label for="user_name">name</label>
        <input type="text" name="user_name">
        <label for="username">username</label>
        <input type="text" name="username">
        <label for="password">password</label>
        <input type="password" name="passowrd">
        <button type="submit">Insert</button>
    </form>
</body>

</html>
