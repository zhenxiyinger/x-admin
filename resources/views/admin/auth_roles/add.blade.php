@extends('admin.common.layout')
@section('body')
<body>
    <div class="x-body">
        <form class="layui-form">
            {{ csrf_field() }}
            <div class="layui-form-item">
                <label for="name" class="layui-form-label">
                    <span class="x-red">*</span>角色名称
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="name" name="name" required=""
                           autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_repass" class="layui-form-label">
                </label>
                <button  class="layui-btn" lay-filter="add" lay-submit="">
                    增加
                </button>
            </div>
        </form>
    </div>
    <script>
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
            var form = layui.form
                ,layer = layui.layer;

            //自定义验证规则
            form.verify({
                name: function(value){
                    if(value.length > 0){
                        return '角色名称必填';
                    }
                }
            });

            //监听提交
            form.on('submit(add)', function(data){
                $.ajax({
                    url: '{{ route('auth_roles_add') }}',
                    data: data.field,
                    type: "post" ,
                    dataType:'json',
                    success:function(res){
                        if(res.status){
                            layer.alert("增加成功", {icon: 6},function () {
                                // 获得frame索引
                                var index = parent.layer.getFrameIndex(window.name);
                                //关闭当前frame
                                parent.layer.close(index);
                                parent.location.reload();
                            });
                        } else {
                            layer.alert(res.msg);
                        }
                    }
                });
                return false;
            });
        });
    </script>
</body>
@endsection
