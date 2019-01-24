<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>测试单页</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('layui/css/layui.css') }}"  media="all">
</head>
<body>
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
    <legend>恒大钱包登录</legend>
</fieldset>
<div>

</div>
<form class="layui-form" action="{{ $cash_url }}/credit-user/login" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">用户名</label>
        <div class="layui-input-inline">
            <input type="text" name="username" placeholder="手机号" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码</label>
        <div class="layui-input-inline">
            <input type="text" name="password" placeholder="密码" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button id="submit" class="layui-btn">提交</button>
        </div>
    </div>
</form>
<div class="layui-input-block">
    <a href="{{ $cash_url }}/credit-card/get-verification-info" target="_blank" class="layui-btn layui-btn-danger">认证信息</a>
    <a href="{{ $cash_url }}/credit-loan/get-my-orders" target="_blank" class="layui-btn layui-btn-danger">借款记录</a>
    <a href="{{ $cash_url }}/credit-app/index" target="_blank" class="layui-btn layui-btn-danger">首页数据</a>
    <a href="{{ $cash_url }}/credit-app/config" target="_blank" class="layui-btn layui-btn-danger">获取配置</a>

</div>
<div class="layui-form-item"></div>
<div class="layui-input-block">
    <a href="{{ $cash_url }}/loan/loan-detail?id=1&clientType=wap&utmsource=hengdaqianbao" target="_blank" class="layui-btn layui-btn-danger">借款详情</a>
    <a href="{{ $cash_url }}/loan/debit-bank-captcha-pre?orderId=1&cardId=4" target="_blank" class="layui-btn layui-btn-danger">直接还款</a>
    <a href="{{ $cash_url }}/loan/loan-repayment-type?id=1" target="_blank" class="layui-btn layui-btn-danger">选择还款方式</a>
    <a href="{{ $cash_url }}/credit-web/verification-jxl" target="_blank" class="layui-btn layui-btn-danger">手运营商认证</a>
</div>
<div class="layui-form-item"></div>
<div class="layui-input-block">
    <a href="{{ $cash_url }}/loan/bind-card?source_id=1&source=add-card" target="_blank" class="layui-btn layui-btn-danger">添加还款银行卡</a>
    <a href="{{ $cash_url }}/loan/ali-pay-pre?orderId=1" target="_blank" class="layui-btn layui-btn-danger">支付宝还款介绍</a>
</div>
<div class="layui-form-item"></div>
<div class="layui-input-block">
    <a href="{{ $cash_url }}/credit-web/add-quota?utmsource=hengdaqianbao&clientType=wap" target="_blank" class="layui-btn layui-btn-danger">平台介绍</a>
    <a href="{{ $cash_url }}/credit-web/repayment-process?utmsource=hengdaqianbao" target="_blank" class="layui-btn layui-btn-danger">还款帮助</a>
    <a href="{{ $cash_url }}/credit-web/help-center?utmsource=hengdaqianbao" target="_blank" class="layui-btn layui-btn-danger">帮助中心</a>
</div>
<div class="layui-form-item"></div>
<div class="layui-input-block">
    <a href="{{ $cash_url }}/credit-web/platform-service?id=1&utmsource=hengdaqianbao&clientType=wap" target="_blank" class="layui-btn layui-btn-danger">借款协议</a>
    <a href="{{ $cash_url }}/credit-web/loan-agreement?id=1&utmsource=hengdaqianbao&clientType=wap" target="_blank" class="layui-btn layui-btn-danger">平台服务协议</a>
    <a href="{{ $cash_url }}/credit-web/license-agreement?id=1&utmsource=hengdaqianbao&clientType=wap" target="_blank" class="layui-btn layui-btn-danger">授权扣款协议</a>
</div>
</body>
</html>

