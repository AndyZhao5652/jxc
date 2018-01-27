<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
    
<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

<style>
#para-wrapper{font-size:14px; }
#para-wrapper .para-item{margin-bottom:30px;}
#para-wrapper .para-item h3{font-size:14px;font-weight:bold;margin-bottom:10px;}

.mod-form-rows .label-wrap { width:128px; }
.para-item .ui-input{width:220px;font-size:14px;}

.subject-para .ui-input{width:40px;}

.code-length .ui-spinbox-wrap{margin-right:0;}

.books-para input{margin-top:-3px;}

#currency{width: 68px;}
.ui-droplist-wrap .list-item {font-size:14px;}
</style>
</head>
<body>
<div class="wrapper">
  <div id="para-wrapper">
    <div class="para-item">
      <h3>基础参数</h3>
      <ul class="mod-form-rows" id="establish-form">
        <li class="row-item">
          <div class="label-wrap">
            <label for="companyName">公司名称：</label>
          </div>
          <div class="ctn-wrap">
            <input type="text" name="companyname" value="<?=COMPANYNAME?>" class="ui-input" id="companyName" />
          </div>
        </li>
        <li class="row-item">
          <div class="label-wrap">
            <label for="companyAddress">公司地址：</label>
          </div>
          <div class="ctn-wrap">
            <input type="text" name="companyaddress" class="ui-input" value="<?=COMPANYADDRESS?>" id="companyAddress" />
          </div>
        </li>
        <li class="row-item">
          <div class="label-wrap">
            <label for="companyTel">公司电话：</label>
          </div>
          <div class="ctn-wrap">
            <input type="text" name="companytel" class="ui-input" value="<?=COMPANYTEL?>" id="companyTel" />
          </div>
        </li>
        <li class="row-item">
          <div class="label-wrap">
            <label for="companyFax">公司传真：</label>
          </div>
          <div class="ctn-wrap">
            <input type="text" name="companyfax" class="ui-input" value="<?=COMPANYFAX?>" id="companyFax" />
          </div>
        </li>
        <li class="row-item">
          <div class="label-wrap">
            <label for="postcode">公司邮编：</label>
          </div>
          <div class="ctn-wrap">
            <input type="text" name="postcode" class="ui-input" value="<?=POSTCODE?>" id="postcode" />
          </div>
        </li>
        
        
      </ul>
    </div>
    
    <div class="btn-wrap"> <a id="save" class="ui-btn ui-btn-sp">保存</a> </div>
  </div>
</div>
<script src="<?=skin_url()?>/js/dist/parameter.js?1"></script>
</body>
</html>