<?php if(!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
    
<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

<style>
.filter-list li.chk-list{height: 20px;}
.mod-report{position: relative;*zoom: 1;padding:66px 0 0 18px;}
.mod-report .search-wrap{position: fixed;left: 0;top: 0;width: 100%;_position:absolute;_left:expression(eval(document.documentElement.scrollLeft));_top:expression(eval(document.documentElement.scrollTop));background: #f5f5f5;}
.mod-report .search-wrap .s-inner{padding: 18px;}
.mod-report .search-wrap strong.tit{font-size:14px;line-height: 30px;}
.mod-report .search-wrap .txt{display: inline-block;*display: inline;*zoom: 1;font-size: 14px;line-height: 30px;}

.mod-report .grid-wrap:after{content: '.';display: block;clear: both;visibility: hidden;overflow: hidden;height: 0;}
.mod-report .grid-wrap{*zoom: 1;}
.mod-report .grid-wrap .grid{float: left;padding: 18px;border:1px solid #cfcfcf;background: #fff;box-shadow:0 1px 3px rgba(0,0,0,0.2);}
.mod-report .grid-wrap .H{font-size:24px;font-weight:bold;text-align: center;}
.mod-report .grid-wrap .R{text-align: right;}
.mod-report .grid-wrap .B{font-weight: bold;}
.mod-report .grid-wrap table{border-collapse:collapse;}
.mod-report .grid-wrap table.caption{margin-bottom: 5px;}
.mod-report .grid-wrap table.list{border:1px solid #666;}
.mod-report .grid-wrap table.list td{padding: 5px 5px;border:1px solid #666;}
.mod-report .grid-wrap table.list thead td{text-align: center;font-weight: bold;}
.link{ cursor:pointer; }
.tr-hover{ background:#f8ff94;}

#filter-menu .mod-choose-input{position: relative;*zoom: 1;}
#filter-menu .mod-choose-input .ui-input{padding-right: 25px;width:226px; font-family:"宋体";}
#filter-menu .ui-datepicker-input{width:105px; font-family:"宋体";}
.ui-icon-ellipsis{ right:3px; }

thead{word-break: keep-all;white-space:nowrap;}

@media print{
body{background: #fff;}
.mod-report{padding: 0;}
.mod-report .search-wrap{display: none;}
.mod-report .grid-wrap .grid{float: none;padding: 0;border:none;background: none;box-shadow:none;}
.mod-report .grid-wrap table.caption{margin-bottom: 0;}
.mod-report .grid-wrap table.list{width:100%;}
.mod-report .grid-wrap table.list td{padding: 1px;}
}
</style>
<script>
var defParams = {
	beginDate: '<?=$stt?>',
	endDate: '<?=$ett?>'
};

</script>
</head>
<body>
<div class="mod-report">
  <div class="search-wrap" id="report-search">
    <div class="s-inner cf">
      <div class="fl"> <strong class="tit mrb fl">查询条件</strong>
        <div class="ui-btn-menu fl" id="filter-menu"> <span class="ui-btn menu-btn"> <strong id="selected-period">请选择查询条件</strong><b></b> </span>
          <div class="con">
            <ul class="filter-list">
              <li>
                <label class="tit">日期:</label>
                <input type="text" value="" class="ui-input ui-datepicker-input" name="filter-fromDate" id="filter-fromDate" />
                <span>至</span>
                <input type="text" value="" class="ui-input ui-datepicker-input" name="filter-toDate" id="filter-toDate" />
              </li>
            </ul>
            <ul class="filter-list" id="more-conditions">
              <li>
                <label class="tit">供应商:</label>
                <span class="mod-choose-input" id="filter-customer"><input type="text" class="ui-input" id="supplierAuto"/><span class="ui-icon-ellipsis"></span></span>
              </li>
              <li style="height:60px; ">
                <label class="tit">商品:</label>
                <span class="mod-choose-input" id="filter-goods"><input type="text" class="ui-input" id="goodsAuto"/><span class="ui-icon-ellipsis"></span></span>
                <p style="color:#999; padding:3px 0 0 0; ">（可用,分割多个编码如1001,1008,2001，或直接输入编码段如1001--1009查询）</p>
              </li>
              <!--<li>
                <label class="tit">仓库:</label>
                <span class="mod-choose-input" id="filter-storage"><input type="text" class="ui-input" id="storageAuto"/><span class="ui-icon-ellipsis"></span></span>
              </li>-->
            </ul>
            <div class="btns"> <a href="#" id="conditions-trigger" class="conditions-trigger" tabindex="-1">更多条件<b></b></a> <a class="ui-btn ui-btn-sp" id="filter-submit" href="#">确定</a> <a class="ui-btn" id="filter-reset" href="#" tabindex="-1">重置</a> </div>
          </div>
        </div>
        <a id="refresh" class="ui-btn ui-btn-refresh fl mrb"><b></b></a> <span class="txt fl" id="cur-search-tip"></span> </div>
      <div class="fr"><a href="#" class="ui-btn ui-btn-sp mrb fl" id="btn-print">打印</a><a href="#" class="ui-btn fl" id="btn-export"><?php echo showlang('common', 'common_export');?></a></div>
    </div>
  </div>
  
  
  <div class="grid-wrap">
  	<div class="grid">
            <table width="660" height="205" border="0">
            <tr>
              <td height="45" colspan="4" align="right">QUARTZ LINK, INC.</td>
            </tr>
            <tr>
              <td height="50" colspan="4" align="center"><h1><strong>SALES CONFIRMATION</strong></h1></td>
            </tr>
            <tr>
              <td width="124">To:</td>
              <td colspan="3"><?=$contractinfo[0]['customername']?> </td>
            </tr>
            <tr>
              <td colspan="4">[ Customer Address ]<?=$contractinfo[0]['address']?></td>
            </tr>
            <tr>
              <td colspan="4">PH: [ Customer Phone ]<?=$contractinfo[0]['phone']?></td>
            </tr>
            <tr>
              <td colspan="4">Attn: </td>
            </tr>
            <tr>
              <td colspan="4"><h5>We hereby confirm having sold you on the following goods on terms and conditions as set forth hereunder.</h5></td>
            </tr>
            <tr>
                <td colspan="6">

  		<table class="list">
  			<thead>
  				<tr>
                                <td width="50">Description</td>
  				<td width="50">Item</td>
  				<td width="30">Units</td>
  				<td width="20">US$/Unit</td>
  				<td width="20">Total</td>
  				</tr>
  			</thead>
  			<tbody>
  			     <?php 
				 $qty    = 0;
				 $price  = 0;
				 $amount = 0;
				 foreach($list as $arr=>$row){?>
  			       <tr class="link" data-id="<?=$row['invpuid']?>" data-type="PUR">
  			       <td></td>
  			       <td><?=$row['number']?> <?=$row['goodsname']?>_<?=$row['spec']?></td>
  			       <td class="R"><?=str_money($row['qty'])?></td>
  			       <td class="R"><?=str_money($row['price'])?></td>
  			       <td class="R"><?=str_money($row['amount'])?></td>
  			       </tr>
  			     <?php 
				 $qty    += $row['qty'];
				 $price  += $row['price'];
				 $amount += $row['amount'];
				 }?>
  				<tr>
  				<td class="R B">Total:</td>
  				<td class="R B"></td>
  				<td class="R B"><?=$qty>0?str_money($amount/$qty):0?></td>
  				<td class="R B"><?=str_money($amount)?></td>
                                <td class="R B"><?=str_money($amount)?></td>
  				</tr>
  			</tbody>
  		</table>
                </td>
            </tr>
            <tr>
              <td colspan="4">[ goods ]</td>
            </tr>
            <tr>
              <td colspan="4">Total Value: [ total value ]</td>
            </tr>
            <tr>
              <td>Payment Terms:</td>
              <td>[ Payment Terms ]<?=$contractinfo[0]['payterm']?></td>
              <td width="71">Quality:</td>
              <td width="336">[ Quality ]As as last shipment</td>
            </tr>
            <tr>
              <td>Packing:</td>
              <td colspan="3">[ Packing ]<?=$contractinfo[0]['packing']?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="3">Totally packed in a plywood box.</td>
            </tr>
            <tr>
              <td>Shipment:</td>
              <td>&nbsp;</td>
              <td>Destination:</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Mark:</td>
              <td colspan="3">[ Mark ]</td>
            </tr>
            <tr>
              <td>Customer PO:</td>
              <td colspan="3">[ PO ]</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="3">Size:</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="3">Quantity:</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="3">Made in China</td>
            </tr>
            <tr>
              <td>Documents Requirement</td>
              <td colspan="3">1. Full set of clean Bills of Lading.</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="3">2. Signed commercial invoice.</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="3">3. Packing list.</td>
            </tr>
          </table>
  <br>
  
  <br>
  
  	</div>
  </div>
  
  
  
</div>
<script src="<?=skin_url()?>/js/dist/puContract.js?2"></script>
</body>
</html>