@extends('admin.common.layout')
@section('body')
<body>
    @include('admin.common.header')
    @include('admin.common.menu')
    <div class="page-content">
        <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
            <ul class="layui-tab-title">
                <li class="home"><i class="layui-icon">&#xe68e;</i>我的桌面</li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <iframe src='{{ route('admin_main') }}' frameborder="0" scrolling="yes"
                            class="x-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>
    @include('admin.common.footer')
</body>
@endsection
