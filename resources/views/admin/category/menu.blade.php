<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <style type="text/css">
        .container{
            width: 100%;
        }
        .nopadding{
            padding: 0 !important;
            margin: 0 !important;
        }
        .col-sm-2{
            padding-bottom: 100% !important;
            margin-bottom: -100% !important;
            background-color:  #2e353d;
        }
        .title{
            background-color: #1d68a7;
            height: 50px;
        }
        .user-panel{
            margin-top: 5%;
            height: 65px;
            text-align: center;
            color: white;
            letter-spacing: 10px;
        }
        .user-panel img{
            width: 20%;
        }
        .search{
            margin-top: 5%;
            text-align: center;
        }
        .search input{
            height: 40px;
            width: 80%;
            border-radius: 5px;
            border: solid;
            padding-left: 10px;
        }
        .nav-side-menu {
            margin-top: 5%;
            overflow: auto;
            font-family: verdana;
            font-size: 12px;
            font-weight: 200;
            background-color: #2e353d;
            width: 100%;
            height: 100%;
            color: #e1ffff;
        }
        .nav-side-menu .brand {
            background-color: #23282e;
            line-height: 50px;
            display: block;
            text-align: center;
            font-size: 14px;
        }
        .nav-side-menu .toggle-btn {
            display: none;
        }
        .nav-side-menu ul,
        .nav-side-menu li {
            list-style: none;
            padding: 0px;
            margin: 0px;
            line-height: 35px;
            cursor: pointer;
        }
        .nav-side-menu ul :not(collapsed) .arrow:before,
        .nav-side-menu li :not(collapsed) .arrow:before {
            font-family: FontAwesome;
            content: "\f078";
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            vertical-align: middle;
            float: right;
        }
        .nav-side-menu ul .active,
        .nav-side-menu li .active {
            border-left: 3px solid #d19b3d;
            background-color: #4f5b69;
        }
        .nav-side-menu ul .sub-menu li.active,
        .nav-side-menu li .sub-menu li.active {
            color: #d19b3d;
        }
        .nav-side-menu ul .sub-menu li.active a,
        .nav-side-menu li .sub-menu li.active a {
            color: #d19b3d;
        }
        .nav-side-menu ul .sub-menu li,
        .nav-side-menu li .sub-menu li {
            background-color: #181c20;
            border: none;
            line-height: 28px;
            border-bottom: 1px solid #23282e;
            margin-left: 0px;
        }
        .nav-side-menu ul .sub-menu li:hover,
        .nav-side-menu li .sub-menu li:hover {
            background-color: #020203;
        }
        .nav-side-menu ul .sub-menu li:before,
        .nav-side-menu li .sub-menu li:before {
            font-family: FontAwesome;
            content: "\f105";
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            vertical-align: middle;
        }
        .nav-side-menu li {
            padding-left: 0px;
            border-left: 3px solid #2e353d;
            border-bottom: 1px solid #23282e;
        }
        .nav-side-menu li a {
            text-decoration: none;
            color: #e1ffff;
        }
        .nav-side-menu li a i {
            padding-left: 10px;
            width: 20px;
            padding-right: 20px;
        }
        .nav-side-menu li:hover {
            border-left: 3px solid #d19b3d;
            background-color: #4f5b69;
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -o-transition: all 1s ease;
            -ms-transition: all 1s ease;
            transition: all 1s ease;
        }
        @media (max-width: 767px) {
            .nav-side-menu {
                position: relative;
                width: 100%;
                margin-bottom: 10px;
            }
            .nav-side-menu .toggle-btn {
                display: block;
                cursor: pointer;
                position: absolute;
                right: 10px;
                top: 10px;
                z-index: 10 !important;
                padding: 3px;
                background-color: #ffffff;
                color: #000;
                width: 40px;
                text-align: center;
            }
            .brand {
                text-align: left !important;
                font-size: 22px;
                padding-left: 20px;
                line-height: 50px !important;
            }
        }
        @media (min-width: 767px) {
            .nav-side-menu .menu-list .menu-content {
                display: block;
            }
        }
        body {
            margin: 0px;
            padding: 0px;
        }

    </style>
<body>
    <div class="container">
        <div class="row title"></div>
        <div class="row no-gutters">
            <div class="col-sm-2 nopadding">
                <div class="user-panel">
                    <img src="{{URL::asset("/images/user-image.png")}}">
                    <b style="letter-spacing: 0 !important;">Admin</b>
                    <i class="fa fa-circle text-success"></i>
                </div>
                <div class="search">
                    <input type="text" placeholder="Search">
                </div>
                <div class="nav-side-menu">
                    <div class="brand">Brand Logo</div>
                    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

                    <div class="menu-list">

                        <ul id="menu-content" class="menu-content collapse out">
                            <li>
                                <a href="#">
                                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                                </a>
                            </li>

                            <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                                <a href="#"><i class="fa fa-gift fa-lg"></i> UI Elements <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="products">
                                <li class="active"><a href="#">CSS3 Animation</a></li>
                                <li><a href="#">General</a></li>
                                <li><a href="#">Buttons</a></li>
                                <li><a href="#">Tabs & Accordions</a></li>
                                <li><a href="#">Typography</a></li>
                                <li><a href="#">FontAwesome</a></li>
                                <li><a href="#">Slider</a></li>
                                <li><a href="#">Panels</a></li>
                                <li><a href="#">Widgets</a></li>
                                <li><a href="#">Bootstrap Model</a></li>
                            </ul>


                            <li data-toggle="collapse" data-target="#service" class="collapsed">
                                <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="service">
                                <li>New Service 1</li>
                                <li>New Service 2</li>
                                <li>New Service 3</li>
                            </ul>


                            <li data-toggle="collapse" data-target="#new" class="collapsed">
                                <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="new">
                                <li>New New 1</li>
                                <li>New New 2</li>
                                <li>New New 3</li>
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
        </div>
    </div>
</div>
</div>
</body>
</html>

<form action="/admin/cake/{{$obj -> id}}" method="post">
    @method('PUT')
    {{csrf_field()}}
    <h2 class="text-center">Add new gerne</h2>
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="{{$obj -> name}}">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" class="form-control" name="price" value="{{$obj -> price}}">
    </div>
    <div class="form-group">
        <label>Type</label>
        <select class="form-control" name="type">
            <option value="1">Cupcake</option>
            <option value="2">Sandwich</option>
            <option value="3">Cookie</option>
        </select>
    </div>
    <div class="form-group">
        <label>Quantity</label>
        <input class="form-control" type="number" name="quantity" value="{{$obj -> quantity}}">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description" rows="5">{{$obj -> description}}</textarea>
    </div>
    <div class="form-group">
        <label>Images</label>
        <textarea class="form-control" name="images" rows="5">{{$obj -> images}}</textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
    <div class="form-group">
        <button type="reset" class="btn btn-primary btn-block">Reset</button>
    </div>
</form>