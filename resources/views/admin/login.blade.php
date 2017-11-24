<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>南京智能环境设备有限公司</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/resources/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('/resources/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('/resources/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('/resources/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body background="{{asset('/resources/image/background.jpg')}}">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
            <image class="col-md-4 col-lg-3" src="{{asset('/resources/image/wq_login.jpg')}}"></image>
            </div>
            <h1 style="color:#27408B;font-style:italic ">南京万全智能环境设备有限公司</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">用户登入</h3>
                </div>
                <div class="panel-body">
                    @if(session('msg'))
                        <p style="color:red">{{session('msg')}}</p>
                    @endif
                    <form role="form"  action="{{url('/')}}" method="post">
                        {!! csrf_field() !!}
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="用户名" name="user_name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="密码" name="user_pass" type="password" value="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="code" name="code"/>
                                <span><i class="fa fa-check-square-o"></i></span>
                                <img src="{{url('admin/code')}}" alt="验证码" onclick="this.src='{{url('admin/code')}}?'+Math.random()">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">记住密码
                                </label>
                            </div>

                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="登入">
                        </fieldset>
                        <fieldset>
                        <div class="panel-footer">
                        <p>&copy; 2017 Powered by<a href="" target="_blank">xylvip_vip@163.com</a></p>
                        </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="{{asset('/resources/vendor/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('/resources/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('/resources/vendor/metisMenu/metisMenu.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('/resources/dist/js/sb-admin-2.js')}}"></script>
</body>
</html>
