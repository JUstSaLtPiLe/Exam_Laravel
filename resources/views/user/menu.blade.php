<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('css/menuLayout.css')}}">
</head>
<body>
<div class="container-fluid">
    <div class="navbar">
        <div class="logo">
            <img src="{{URL::asset('images/logo.png')}}">
        </div>
        <a href="#">Home</a>
        <a href="#">Menu</a>
        <a href="#">News</a>
        <a href="#">Contact</a>
    </div>
    <div class="nav">
        <button type="button" class="btn" onclick="location.href ='/user'">All</button>
    @foreach($objType as $item)
            <button type="button" class="btn" onclick="location.href ='/user/{{$item -> name}}'">{{$item -> name}}</button>
        @endforeach
    </div>
    <div class="main">
        @foreach($obj as $item)
            <div class="product">
                <img src="{{$item -> images}}">
                <h4>{{$item -> name}}</h4>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>