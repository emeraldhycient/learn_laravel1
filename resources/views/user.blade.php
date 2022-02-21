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
        <input type="text" name="username"/>
        <span style="color:red">@error('username'){{$message}}@enderror</span>
        <br/><br/>
        
        <input type="password" name="password"/>
        <span style="color:red">@error('password'){{$message}}@enderror</span>
        <br/><br/>
        <input type="submit" value="submit"/>
    </form>
    
</body>
</html>