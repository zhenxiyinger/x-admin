<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登录-X-admin2.0</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('x-admin/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('x-admin/css/xadmin.css') }}">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('x-admin/lib/layui/layui.js') }}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ asset('x-admin/js/xadmin.js') }}"></script>
</head>
<body class="login-bg">

<div class="login layui-anim layui-anim-up">
    <div class="message">x-admin2.0-管理登录</div>
    <div id="darkbannerwrap"></div>

    <form action="{{ route('admin_login') }}" method="post" class="layui-form" >
        {{ csrf_field() }}
        <input name="username" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
        <hr class="hr15">
        <input name="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
        <hr class="hr15">
        <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit">
        <hr class="hr20" >
    </form>
</div>

<script>
    $(function  () {
        layui.use('form', function(){
            var form = layui.form;
            //监听提交
            form.on('submit(login)', function(data){
                layer.msg(JSON.stringify(data));
                $.ajax({
                    url:'{{ route('admin_login') }}',
                    data:data.field,
                    type: "post" ,
                    dataType:'json',
                    success:function(res){
                        if(res.status){
                            location.href='{{ route('admin_index') }}'
                        }else{
                            layer.msg(JSON.stringify(res), {icon:1,time:1000});
                        }
                    }
                });
                return false;
            });
        });
    })


</script>


<!-- 底部结束 -->
<script>
    //百度统计可去掉
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>
</html>
