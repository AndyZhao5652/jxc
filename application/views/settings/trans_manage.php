<?php if(!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=1280, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<title>在线进销存</title>
<link href="<?=skin_url()?>/css/common.css?ver=20140815" rel="stylesheet" type="text/css">
<link href="<?=skin_url()?>/css/<?=skin()?>/ui.min.css?ver=20140815" rel="stylesheet">
<script src="<?=skin_url()?>/js/common/libs/jquery/jquery-1.10.2.min.js"></script>
<script src="<?=skin_url()?>/js/common/libs/json2.js"></script>
<script src="<?=skin_url()?>/js/common/common.js?ver=20140815"></script>
<script src="<?=skin_url()?>/js/common/grid.js?ver=20140815"></script>
<script src="<?=skin_url()?>/js/common/plugins.js?ver=20140815"></script>
<script src="<?=skin_url()?>/js/common/plugins/jquery.dialog.js?self=true&ver=20140815"></script>
<script type="text/javascript">
try{
	document.domain = '<?=base_url()?>';
}catch(e){
	//console.log(e);
}
</script>

<script type="text/javascript">
var WDURL = "";
var SCHEME= "<?=skin()?>";
var icon_url = "<?=skin_url()?>/css/base/dialog/icons/";      
var settings_customer_manage = "<?=site_url('settings/customer_manage')?>";  
var settings_trans_manage = "<?=site_url('settings/trans_manage')?>";   
var settings_vendor_manage = "<?=site_url('settings/vendor_manage')?>";       
var settings_vendor_batch = "<?=site_url('settings/vendor_batch')?>";         
var settings_customer_batch = "<?=site_url('settings/customer_batch')?>";   
var basedata_settlement = "<?=site_url('basedata/settlement')?>";            
var settings_settlement_manage = "<?=site_url('settings/settlement_manage')?>";       
var basedata_category = "<?=site_url('basedata/category')?>";                     
var basedata_category_type= "<?=site_url('basedata/category_type')?>";         
var settings_goods_manage = "<?=site_url('settings/goods_manage')?>";     
var settings_goods_batch  = "<?=site_url('settings/goods_batch')?>";       
var basedata_goods = "<?=site_url('basedata/goods')?>";                     
var basedata_unit  = "<?=site_url('basedata/unit')?>";                      
var settings_unit_manage = "<?=site_url('settings/unit_manage')?>";    
var basedata_contact  = "<?=site_url('basedata/contact')?>";
var basedata_trans  = "<?=site_url('basedata/trans')?>";
var settings_inventory =  "<?=site_url('settings/inventory')?>";          
var settings_skins =  "<?=site_url('settings/skins')?>"; 

 
var category_save = "<?=site_url('category/save')?>";
var basedata_contact_query = "<?=site_url('basedata/contact_query')?>";

var basedata_trans_query = "<?=site_url('basedata/trans_query')?>";

var basedata_contact_getnextno = "<?=site_url('basedata/contact_getnextno')?>";
var basedata_contact_checkname = "<?=site_url('basedata/contact_checkname')?>";
var basedata_trans_checkno = "<?=site_url('basedata/trans_checkno')?>";
var customer_save = "<?=site_url('customer/save')?>";
var trans_save = "<?=site_url('trans/save')?>";
var settings_customer_cate_manage = "<?=site_url('settings/customer_cate_manage')?>";

</script>
<link rel="stylesheet" href="<?=skin_url()?>/js/common/plugins/validator/jquery.validator.css">
<script type="text/javascript" src="<?=skin_url()?>/js/common/plugins/validator/jquery.validator.js"></script>
<script type="text/javascript" src="<?=skin_url()?>/js/common/plugins/validator/local/zh_CN.js"></script>
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