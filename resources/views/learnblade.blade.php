<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="10000">
    <title>learn blade </title>
</head>
<body>

    {{--}}
    @if($users['name'] === 'emerald')
    <h3>
        {{$users['name']}}
    </h3>
    @else
    <h3>name is different</h3>
    @endif
    <br/>

    @for($i = 0;$i < count($users);$i++)
    <h3>
        {{$users[$i]}}
    </h3>
    @endfor    

{{--}}

@foreach($users as $user)
<h4>{{$user}}</h4>
@endforeach

</body>
</html>