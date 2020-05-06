<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>单元测试</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container" style="width: 50%">
    <div class="row">
        <h1 class="text-center">不区分大小写(可以自行完善)</h1>
    </div>
    <div class="row">
        <form action="{{route('demo.store')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="namespace">命名空间：</label>
                <input id="namespace" type="text" class="form-control" name='namespace' placeholder="如：app\index\controller 或app\index\controller\Index">
            </div>
            <p class="lead" style="color: red">可以写全，然后下面类名不用写</p>
            <div class="form-group">
                <label for="className">类名：</label>
                <input id="className" type="text" class="form-control" name='className' placeholder="如：index ">
            </div>
            <p class="lead" style="color: red">命名空间全可以不用写</p>
            <div class="form-group">
                <label for="action">测试方法名：</label>
                <input id="action" type="text" class="form-control" name='action' placeholder="index">
            </div>
            <br>
            <div class="form-group">
                <label for="param">传递参数以 | 分割：</label>
                <input id="param" type="text" class="form-control" name='param' placeholder="如: 1|2|3">
            </div>
            <br>
            <button type="submit" class="btn btn-info btn-lg btn-block">测试</button>
        </form>
    </div>
</div>
</body>
