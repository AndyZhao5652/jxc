<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
    
<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

<link href="<?=skin_url()?>/css/authority.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper authority-wrap">
  <div class="mod-inner">
      <!--<ul class="mod-steps" id="import-steps">
        <li><span class="current">1.新建用户</span>&gt;</li>
        <li><span>2.分配权限</span>&gt;</li>
        <li><span>3.邀请成功</span></li>
      </ul>-->
      <div class="authority-ctn-wrap">
        
        <div class="register-wrap">
            <h3>新建用户</h3>
            <form action="#" id="registerForm" class="register-form">
              <ul class="mod-form-rows">
                <li class="row-item">
                  <div class="label-wrap">
                    <label for="userName">用户名</label>
                  </div>
                  <div class="ctn-wrap">
                    <input type="text" class="ui-input" id="userName" name="userName"/>
                    <p class="msg">用户名由4-20个英文字母或数字组成（不支持中文，不区分大小写字母）。一旦创建成功，不可修改。</p>
                  </div>
                </li>
                <li class="row-item">
                  <div class="label-wrap">
                    <label for="password">密码</label>
                  </div>
                  <div class="ctn-wrap">
                    <input type="password" class="ui-input" id="password" name="password" style="ime-mode:disabled;" onpaste="return false;"/>
                    <div class="pswStrength" id="pswStrength" style="display:none;">
                      <p>密码强度</p>
                      <b></b>
                      <b></b>
                      <b></b>
                    </div>
                    <p class="msg">密码由6-20个英文字母（区分大小写）或数字或特殊符号组成。</p>
                  </div>
                </li>
                <li class="row-item">
                  <div class="label-wrap">
                    <label for="pswConfirm">确认密码</label>
                  </div>
                  <div class="ctn-wrap">
                    <input type="password" class="ui-input" id="pswConfirm" name="pswConfirm" style="ime-mode:disabled;" onpaste="return false;"/>
                  </div>
                </li>
                <li class="row-item">
                  <div class="label-wrap">
                    <label for="realName">真实姓名</label>
                  </div>
                  <div class="ctn-wrap">
                      <input type="text" class="ui-input" id="realName" name="realName"/>
                      <p class="msg">真实姓名将应用在单据和账表打印中，请如实填写</p>
                  </div>
                </li>
                <li class="row-item">
                  <div class="label-wrap">
                    <label for="">常用手机</label>
                  </div>
                  <div class="ctn-wrap">
                      <input type="text" class="ui-input" id="userMobile" name="userMobile"/>
                      <p class="msg">手机将作为找回密码的重要依据</p>
                  </div>
                </li>
				<li class="row-item">
                  <div class="label-wrap">
                    <label for=""> &nbsp;&nbsp;&nbsp;</label>
                  </div>
                  <div class="ctn-wrap">
                       <a href="<?=site_url('admin')?>" class="ui-btn mrb">返回列表</a><a href="#" class="ui-btn ui-btn-sp" id="registerBtn">下一步</a>
                  </div>
                </li>
              </ul>
              <!--<div class="btn-row">
                <a href="authority.jsp" class="ui-btn mrb">返回列表</a><a href="#" class="ui-btn ui-btn-sp" id="registerBtn">下一步</a>
              </div>-->
            </form>
        </div>
      <div>
  </div>
</div>
<script src="<?=skin_url()?>/js/dist/register.js"></script>
</body>
</html>