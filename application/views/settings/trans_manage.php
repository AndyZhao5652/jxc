<?php if(!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
    
<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

<style>
body{background: #fff;}
.mod-form-rows .label-wrap{font-size:12px;}
.mod-form-rows .row-item {padding-bottom: 15px;margin-bottom: 0;}/*兼容IE7 ，重写common的演示*/
.manage-wrapper{margin:20px auto 10px;width:600px;}
.manage-wrap .ui-input{width: 198px;}
.base-form{*zoom: 1;}
.base-form:after{content: '.';display: block;clear: both;height: 0;overflow: hidden;}
.base-form li{float: left;width: 290px;}
.base-form li.odd{padding-right:20px;}
.manage-wrap textarea.ui-input{width: 588px;height: 60px;overflow:hidden;}
#receiveFunds,#periodReceiveFunds{text-align: right;}

.contacters{margin-bottom: 10px;}
.contacters h3{margin-bottom: 10px;font-weight: normal;}
.mod-form-rows .pb0{padding-bottom:0;}
.mod-form-rows .ctn-wrap{overflow: visible;;}
</style>
</head>
<body>
<div class="manage-wrapper">
    <div id="manage-wrap" class="manage-wrap">
    	<form id="manage-form" action="">
    		<ul class="mod-form-rows base-form" id="base-form">
    			<li class="row-item odd">
    				<div class="label-wrap"><label for="shipno">运输单号</label></div>
    				<div class="ctn-wrap"><input type="text" value="" class="ui-input" name="shipno" id="shipno"></div>
    			</li>
    			<li class="row-item">
    				<div class="label-wrap"><label for="customer">客户名称</label></div>
    				<div class="ctn-wrap"><input type="text" value="" class="ui-input" name="customer" id="customer"></div>
    			</li>
    			<li class="row-item odd">
    				<div class="label-wrap"><label for="shiptype">运输方式</label></div>
    				<div class="ctn-wrap"><input type="text" value="" class="ui-input" name="shiptype" id="shiptype"></div>
    			</li>
                        <li class="row-item">
    				<div class="label-wrap"><label for="shipto">目的地</label></div>
    				<div class="ctn-wrap"><input type="text" value="" class="ui-input" name="shipto" id="shipto"></div>
    			</li>
                        <li class="row-item odd">
    				<div class="label-wrap"><label for="contractno">合同号</label></div>
    				<div class="ctn-wrap"><input type="text" value="" class="ui-input" name="contractno" id="contractno"></div>
    			</li>
                        <li class="row-item">
    				<div class="label-wrap"><label for="decinvoiceno">报关发票号</label></div>
    				<div class="ctn-wrap"><input type="text" value="" class="ui-input" name="decinvoiceno" id="decinvoiceno"></div>
    			</li>
                        <li class="row-item odd">
    				<div class="label-wrap"><label for="lwh">长宽高</label></div>
    				<div class="ctn-wrap"><input type="text" value="" class="ui-input" name="lwh" id="lwh"></div>
    			</li>
                        <li class="row-item">
    				<div class="label-wrap"><label for="weight">实重</label></div>
    				<div class="ctn-wrap"><input type="text" value="" class="ui-input" name="weight" id="weight"></div>
    			</li>
                        <li class="row-item odd">
    				<div class="label-wrap"><label for="qty">件数</label></div>
    				<div class="ctn-wrap"><input type="text" value="" class="ui-input" name="qty" id="qty"></div>
    			</li>
                        <li class="row-item">
    				<div class="label-wrap"><label for="shipprice">运费报价</label></div>
    				<div class="ctn-wrap"><input type="text" value="" class="ui-input" name="shipprice" id="shipprice"></div>
    			</li>
                        <li class="row-item odd">
    				<div class="label-wrap"><label for="invoiceno">给客户发票号</label></div>
    				<div class="ctn-wrap"><input type="text" value="" class="ui-input" name="invoiceno" id="invoiceno"></div>
    			</li>
    			<li class="row-item">
    				<div class="label-wrap"><label for="esarrdate">预计抵达日期</label></div>
    				<div class="ctn-wrap"><input type="text" value="" class="ui-input ui-datepicker-input" id="date" /></div>
    			</li>
                        <li class="row-item odd">
    				<div class="label-wrap"><label for="date">实际抵达日期</label></div>
    				<div class="ctn-wrap"><input type="text" value="" class="ui-input ui-datepicker-input" name="rearrdate" id="rearrdate" /></div>
    			</li>
                        <li class="row-item">
    				<div class="label-wrap"><label for="date">发货日期</label></div>
    				<div class="ctn-wrap"><input type="text" value="" class="ui-input ui-datepicker-input" name="shipdate" id="shipdate" /></div>
    			</li>
    		</ul>
    		<div class="contacters">
    			<h3 class="dn">联系方式</h3>
    			<div class="grid-wrap">
				  <table id="grid">
				  </table>
				  <div id="page"></div>
				</div>
    		</div>
    		<ul class="mod-form-rows">
    			<li class="row-item pb0">
    				<!-- <div class="label-wrap"><label for="note">备注</label></div> -->
    				<div class="ctn-wrap"><textarea name="" id="note" class="ui-input ui-input-ph">添加备注信息</textarea></div>
    			</li>
    		</ul>
    	</form>

    </div>
</div>

<script src="<?=skin_url()?>/js/dist/transManage.js?1"></script>
</body>
</html>