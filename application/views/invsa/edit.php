<?php if(!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
    
<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

</head>

<body>
<div class="wrapper">
  <div class="mod-toolbar-top mr0 cf dn" id="toolTop"></div>
  <div class="bills" style="width:1192px;">
    <div class="con-header">
      <dl class="cf">
        <dd class="pct30">
          <label>销货单位:</label>
          <span class="ui-combo-wrap" id="customer">
          <input type="text" name="" class="input-txt" autocomplete="off" value="" data-ref="date">
          <i class="trigger"></i></span></dd>
        <dd class="pct25 tc">
          <label>单据日期:</label>
          <input type="text" id="date" class="ui-input ui-datepicker-input" value="">
        </dd>
        <dd id="identifier" class="pct25 tc">
          <label>单据编号:</label>
          <span id="number"><?=$billno?></span></dd>
        <dd id="classes" class="pct20 tr">
          <label class="radio">
            <input type="radio" name="classes" value="1">
            销货</label>
          <label class="radio">
            <input type="radio" name="classes" value="2">
            退货</label>
        </dd>
        
        <dd class="pct30">
            <div class="label-wrap">
        	<label>币种:</label>
        </div>
        <div class="ctn-wrap">
        	<input type="text" id="currency" class="ui-input" data-ref="discount" style="width:20%; margin:0 -6px; ">
        </div>
        </dd>
        
      </dl>
    </div>
    <div class="grid-wrap">
      <table id="grid">
      </table>
      <div id="page"></div>
    </div>
    <div class="con-footer cf">
      <div class="mb10">
      	<div class="label-wrap">
        	<label>备注:</label>
        </div>
        <div class="ctn-wrap">
        	<input type="text" id="note" class="ui-input" data-ref="discount" style="width:100%; margin:0 -6px; ">
        </div>
      </div>
      <div id="amountArea">
          <p>
            <label>折扣率:</label>
            <input type="text" id="discountRate" class="ui-input" data-ref="deduction">%
            <span>
            <label>折扣额:</label>
            <input type="text" id="deduction" class="ui-input" data-ref="payment">
            </span>
            <span>
            <label>折后金额:</label>
            <input type="text" id="discount" class="ui-input ui-input-dis" data-ref="discountRate" disabled>
            </span></p>
          <p>
            <label id="paymentTxt">本次收款:</label>
            <input type="text" id="payment" class="ui-input">&emsp;
            <span id="accountWrap" class="dn">
            <label>结算方式:</label>
              <span class="ui-combo-wrap" id="account" style="padding:0;">
              <input type="text" class="input-txt" autocomplete="off">
              <i class="trigger"></i></span><a id="accountInfo" class="ui-icon ui-icon-folder-open" style="display:none;"></a>
            </span>
            <span>
            <label>本次欠款:</label>
            <input type="text" id="arrears" class="ui-input ui-input-dis" disabled>
            </span>
            <span class="dn">
            <label>累计欠款:</label>
            <input type="text" id="totalArrears" class="ui-input ui-input-dis" disabled>
            </span></p>
       </div>
    </div>
    <div class="cf" id="bottomField">
    	<div class="fr" id="toolBottom"></div>
    	<div>
           <label>制单人:</label>
           <span id="userName"></span>
        </div>
    </div>
    <div id="mark"></div>
  </div>
  
  <div id="initCombo" class="dn">
    <input type="hidden" id="printid" value=""> 
    <input type="text" class="textbox goodsAuto" name="goods" autocomplete="off">
    <input type="text" class="textbox storageAuto" name="storage" autocomplete="off">
  </div>
  <div id="storageBox" class="shadow target_box dn">
  </div>
</div>
<script src="<?=skin_url()?>/js/dist/sales.js?2bb"></script>
</body>
</html>