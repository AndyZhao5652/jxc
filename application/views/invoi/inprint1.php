<?php if(!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
    
<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

<link rel="stylesheet" href="<?=skin_url()?>/css/report.css" />
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

</head>
<body>
<div class="mod-report">
 
 <div class="grid-wrap">
  	<div class="grid">
		<table width="900"  border="0">
		    <tr target="id" align="center">
				<td colspan="6" ><h1 style="font-size:24px"><?=COMPANYNAME?></h1></td>
		    </tr>
		    <tr target="id" align="center">
				<td colspan="6" ><h3>其他入库单</h3></td>
		    </tr>
			<tr target="id">
				<td colspan="2">供应商：<?=$contactname?></td>
			    <td colspan="2">单据日期：<?=$billdate?></td>
				<td colspan="2">单据编号：<?=$billno?></td>
				<td colspan="2" align="right">业务类型: <?=$type==1?'其他入库':'盘盈'?></td>
			</tr>
		</table>	
		
		<table class="list" width="900">
				<tr>
					<td width="30" align="center"><b>序号<b></td>
					<td width="150" ><b>商品<b></td>
					<td width="60" align="center"><b>单位<b></td>
					<td width="60" align="center"><b>数量<b></td>
					<td width="110" align="center"><b>入库单价<b></td>	
					<td width="110" align="center"><b>入库金额<b></td>	
				</tr>
			  <?php 
			  $i = 1;
			  foreach($list as $arr=>$row) {
			      
			  ?>
				<tr>
				    <td align="center"><?=$i?></td>
					<td ><?=$row['number']?> <?=$row['goodsname']?>_<?=$row['spec']?></td>
					<td ><?=$row['unitname']?></td>
					<td ><?=str_money(abs($row['qty']))?></td>
					<td ><?=str_money($row['price'])?></td>
					<td ><?=str_money(abs($row['amount']))?></td>
				</tr>
				
				<?php $i++;}?>
				<tr>
				    <td colspan="3" align="right" >合计：</td>
					<td ><?=str_money($totalqty)?></td>
					<td ></td>
					<td ><?=str_money($totalamount)?></td>
				</tr>
				 
		</table>	

		<table width="900"  border="0">
				<tr target="id">
					<td height="30" colspan="6" > 备注：<?=$description?> </td>
				</tr>
				<tr target="id">
					<td>制单人：<?=$username?></td>
					<td>收货人签字： </td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
		</table>	
 			 
				 
  	</div>
  </div>
</div>
</body>
</html>