<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD NEW CAKE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/form.css')}}">
</head>
<body>
<div class="container-fluid">
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
        <div class="col-sm-10">
            <form action="/admin/category" method="post">
                {{csrf_field()}}
                <h2 class="text-center">Add new category</h2>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label>Images</label>
                    <textarea class="form-control" name="images" rows="5"></textarea>
                </div>
                <div class="form-group" style="text-align: center;">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    <button type="reset" class="btn btn-primary btn-block">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>