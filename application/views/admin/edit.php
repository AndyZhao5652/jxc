<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
    
<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

</head>
<body>
<div class="wrapper authority-wrap">
  <div class="mod-inner">
      
      <div class="authority-ctn-wrap">
        
        <div class="register-wrap">
            <h3>修改密码</h3>
            <form action="#" id="registerForm" class="register-form">
              <ul class="mod-form-rows">
    
                <li class="row-item">
                  <div class="label-wrap">
                    <label for="password">新密码</label>
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
                    <label for="pswConfirm"> &nbsp;&nbsp;&nbsp;</label>
                  </div>
                  <div class="ctn-wrap">
                      <a href="#" class="ui-btn ui-btn-sp" id="registerBtn">提交</a>
                  </div>
                </li>
                
              </ul>
               
            </form>
        </div>
      <div>
  </div>
</div>
<script src="<?=skin_url()?>/js/dist/editpwd.js?2"></script>
</body>
</html>