<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
{{--}}   @if($errors->any())

    @foreach($errors->all() as $error)
         <li>{{$error}}</li>
    @endforeach
    @endif

    {{--}}
    <form method="POST" action="/login">
        @csrf
        <span style="color:red">@error('username'){{$message}}@enderror</span>
        <input type="text" name="username"/><br/><br/>
        <span style="color:red">@error('password'){{$message}}@enderror</span>

        <input type="password" name="password"/>
        <input type="submit" value="submit"/>
    </form>
    
</body>
</html>