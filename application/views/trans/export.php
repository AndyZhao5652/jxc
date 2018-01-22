<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
		<table class="table" width="1500"  border="1">
			<thead>
				<tr>
				    <th colspan="15" align="center"><h3>运输单列表</h3></th>
				</tr>
				<tr>
				    <th width="150" align="center">发货日期</th>
					<th width="180" >运输方式</th>
					<th width="180" align="center">运单号</th>
					<th width="150" align="center">目的地</th>
					<th width="100" align="center">合同号</th>	
					<th width="100" align="center">报关发票号</th>	
					<th width="120" align="center">长宽高</th>
					<th width="120" align="center">实重</th>	
					<th width="100" align="center">件数</th>	
					<th width="100" align="center">运费报价</th>	
					<th width="100" align="center">实收客户</th>	
					<th width="100" align="center">给客户的发票号</th>
                                        <th width="100" align="center">预计抵达日期</th>	
                                        <th width="100" align="center">实际抵达日期</th>	
                                        <th width="100" align="center">备注</th>	
				</tr>
			</thead>
			<tbody>
			  <?php 
			  $i = 1;
			  foreach($list as $arr=>$row) {
//				  if (strlen($row['linkmans'])>0) {                               //获取首个联系人
//					  $array = (array)json_decode($row['linkmans']);
//					  foreach ($array as $arr1=>$row1) {
//						  if ($row1->linkFirst==1) {
//							  $name        = $row1->linkName;
//							  $mobile      = $row1->linkMobile; 
//							  $phone       = $row1->linkPhone; 
//							  $im          = $row1->linkIm; 
//							  $first       = $row1->linkFirst==1 ? true : false; 
//							  $address     = $row1->linkAddress; 
//						  }
//					  } 
//				  }
//			  ?>
				<tr target="id">
					<td ><?=$row['shipdate']?></td>
					<td ><?=$row['shiptype']?></td>
					<td ><?=$row['shipno']?></td>
					<td ><?=$row['shipto']?></td>
					<td ><?=$row['contractno']?></td>
					<td ><?=$row['decinvoiceno']?></td>
					<td ><?=$row['lwh']?></td>
                                        <td ><?=$row['weight']?></td>
					<td ><?=$row['qty']?></td>
					<td ><?=$row['shipprice']?></td>
					<td ><?=$row['customer']?></td>
					<td ><?=$row['invoiceno']?></td>
					<td ><?=$row['esarrdate']?></td>
					<td ><?=$row['rearrdate']?></td>
                                        <td ><?=$row['description']?></td>
<!--					<td ><?=isset($name)?$name:''?></td>
					<td ><?=isset($mobile)?$mobile:''?></td>
					<td ><?=isset($phone)?$phone:''?></td>
					<td ><?=isset($im)?$im:''?></td>
					<td ><?=isset($address)?$address:''?></td>-->
				</tr>
				<?php $i++;}?>
 
 </tbody>
</table>	
