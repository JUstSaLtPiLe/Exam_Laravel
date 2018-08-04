<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/categoryLayout.css')}}">
</head>
<body>
        <div class="container-fluid">
            {{--<div class="row title">aaaaaaaa</div>--}}
            <div class="row">
                <div class="col-sm-2 nopadding" style="background-color:#2e353d;">
                    <div class="user-panel">
                        <img src="{{URL::asset("/images/user-image.png")}}">
                        <b style="letter-spacing: 0 !important;">Admin</b>
                        <i class="fa fa-circle text-success"></i>
                    </div>
                    <div class="search">
                        <input type="text" placeholder="Search">
                    </div>
                    <div class="nav-side-menu">
                        <div class="brand">Navigation Menu</div>
                        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

                        <div class="menu-list">

                            <ul id="menu-content" class="menu-content collapse out">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dashboard fa-lg"></i> Dashboard
                                    </a>
                                </li>
                                <li data-toggle="collapse" data-target="#service" class="collapsed">
                                    <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
                                </li>
                                <ul class="sub-menu collapse" id="service">
                                    <li><a href="/admin/cake/create">Add new product</a></li>
                                    <li><a href="/admin/category/create">Add new caterogry</a></li>
                                    <li><a href="/admin/cake">Show product list</a></li>
                                    <li><a href="/admin/category">Show category list</a></li>
                                    <li><a href="/user">Show user menu</a></li>
                                </ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user fa-lg"></i> Profile
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-users fa-lg"></i> Users
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 nopadding">
                    <div class="id test">ID</div>
                    <div class="images test">Image</div>
                    <div class="name test">Name</div>
                    <div class="description test" style="display: flex">Description</div>
                    <div class="tool test">Tool</div>
                    @foreach($obj as $item)
                        <div class="id test test2">{{$item -> id}}</div>
                        <div class="images test test2"><img src="{{$item -> images}}" style="max-width:100%; max-height:100%;"></div>
                        <div class="name test test2">{{$item -> name}}</div>
                        <div class="description test test2">{{$item -> description}}</div>
                        <div class="tool test test2">
                            <button type="button" class="btn btn-link"><span class="glyphicon glyphicon-pencil" onclick="location.href ='/admin/category/{{$item -> id}}/edit'"></span></button>
                            <button type="button" class="btn btn-link"><span class="glyphicon glyphicon-eye-open" onclick="location.href ='/admin/category/{{$item -> id}}'"></span></button>
                            <button type="button" class="btn btn-link"><span class="glyphicon glyphicon-trash btn-delete" id="{{$item-> id}}"></span></button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    <script>
        $listBtn = document.getElementsByClassName('btn-delete');
        for(var i = 0; i < $listBtn.length; i++ ){
            $listBtn[i].onclick = function () {
                if(confirm('Are you sure?')){
                    var xhttp = new XMLHttpRequest();
                    var params = '_token={{csrf_token()}}';
                    var deleteID = this.id;
                    xhttp.open('DELETE', '/admin/category/' + deleteID, true);
                    xhttp.onreadystatechange = function (){
                        if (this.readyState == 4 && this.status == 200) {
                            alert('DELETE SUCCESS!');
                            window.location.reload();
                        }
                    };
                    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhttp.send(params);
                }
            }
        }
    </script>
</body>
</html>