@extends('admin.common.layout')
@section('body')
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
</body>
@endsection
