<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>index</title>
    <link href="{{asset('static/css/bootstrap.min.css')}}" rel="stylesheet">

</head>
<body>

<div class="jumbotron">
    <div class="container">
        <h1>Laravel 为web艺术家设计</h1>
        <h3>——我就是玩不转form表单</h3>
    </div>
</div>

<div class="container">
    <div class="main">
        <div class="row">
            <!-- 左侧内容 -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="" class="list-group-item text-center active">学生列表</a>
                    <a href="" class="list-group-item text-center">新增学生</a>
                </div>
            </div>
            <!-- 右侧内容 -->
            <div class="col-md-9">
                @yield('content')
                <!-- 自定义内容 -->

            </div>
        </div>
    </div>
</div>
<!-- 尾部 -->

<div class="jumbotron" style=" margin-bottom:0;margin-top:105px;">
    <div class="container">
        <span>&copy; 2016 Saitmob</span>
    </div>
</div>


<script src="{{asset('static/js/jquery-3.1.0.min.js')}}"></script>
<script src="{{asset('static/js/bootstrap.min.js')}}"></script>
</body>
</html>