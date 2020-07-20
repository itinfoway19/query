<?php
$db=mysqli_connect("localhost","root","","query");
$db2=mysqli_connect("localhost","root","","q_erp");
$party1 = mysqli_query($db, "SELECT nw_sales_party_name FROM `nw_sales` GROUP BY nw_sales_party_name");
while ($row = mysqli_fetch_assoc($party1)) {
	if($row['nw_sales_party_name']!=""){
		$isCheck = mysqli_query($db2, "SELECT name FROM `input_tag` where tag_id='PARTY' AND module=2 AND name='".$row['nw_sales_party_name']."'");
		$isData= mysqli_num_rows($isCheck); 
		if(!$isData){
			mysqli_query($db2, "INSERT INTO `input_tag`(`tag_id`, `module`, `name`) VALUES ('PARTY',2,'".$row['nw_sales_party_name']."')");	
		}
	}
}

$matriyal1 = mysqli_query($db, "SELECT nw_sales_material FROM `nw_sales` GROUP BY nw_sales_material");
while ($row = mysqli_fetch_assoc($matriyal1)) {
	if($row['nw_sales_material']!=""){
		$isCheck = mysqli_query($db2, "SELECT name FROM `input_tag` where tag_id='MATERIAL' AND module=2 AND name='".$row['nw_sales_material']."'");
		$isData= mysqli_num_rows($isCheck); 
		if(!$isData){
			mysqli_query($db2, "INSERT INTO `input_tag`(`tag_id`, `module`, `name`) VALUES ('MATERIAL',2,'".$row['nw_sales_material']."')");	
		}
	}
}

$loading1 = mysqli_query($db, "SELECT nw_sales_loading FROM `nw_sales` GROUP BY nw_sales_loading");
while ($row = mysqli_fetch_assoc($loading1)) {
	if($row['nw_sales_loading']!=""){
		$isCheck = mysqli_query($db2, "SELECT name FROM `input_tag` where tag_id='LOADING' AND module=2 AND name='".$row['nw_sales_loading']."'");
		$isData= mysqli_num_rows($isCheck); 
		if(!$isData){
			mysqli_query($db2, "INSERT INTO `input_tag`(`tag_id`, `module`, `name`) VALUES ('LOADING',2,'".$row['nw_sales_loading']."')");	
		}
	}
}
$place1 = mysqli_query($db, "SELECT nw_sales_place FROM `nw_sales` GROUP BY nw_sales_place");
while ($row = mysqli_fetch_assoc($place1)) {
	if($row['nw_sales_place']!=""){
		$isCheck = mysqli_query($db2, "SELECT name FROM `input_tag` where tag_id='PLACE' AND module=2 AND name='".$row['nw_sales_place']."'");
		$isData= mysqli_num_rows($isCheck); 
		if(!$isData){
			mysqli_query($db2, "INSERT INTO `input_tag`(`tag_id`, `module`, `name`) VALUES ('PLACE',2,'".$row['nw_sales_place']."')");	
		}
	}
}

$driver1 = mysqli_query($db, "SELECT nw_sales_driver_name FROM `nw_sales` GROUP BY nw_sales_driver_name");
while ($row = mysqli_fetch_assoc($driver1)) {
	if($row['nw_sales_driver_name']!=""){
		$isCheck = mysqli_query($db2, "SELECT name FROM `input_tag` where tag_id='DRIVER' AND module=2 AND name='".$row['nw_sales_driver_name']."'");
		$isData= mysqli_num_rows($isCheck); 
		if(!$isData){
			mysqli_query($db2, "INSERT INTO `input_tag`(`tag_id`, `module`, `name`) VALUES ('DRIVER',2,'".$row['nw_sales_driver_name']."')");	
		}
	}
}
$royalty1 = mysqli_query($db, "SELECT nw_sales_royalty_name FROM `nw_sales` GROUP BY nw_sales_royalty_name");
while ($row = mysqli_fetch_assoc($royalty1)) {
	if($row['nw_sales_royalty_name']!=""){
		$isCheck = mysqli_query($db2, "SELECT name FROM `input_tag` where tag_id='ROYALTY' AND module=2 AND name='".$row['nw_sales_royalty_name']."'");
		$isData= mysqli_num_rows($isCheck); 
		if(!$isData){
			mysqli_query($db2, "INSERT INTO `input_tag`(`tag_id`, `module`, `name`) VALUES ('ROYALTY',2,'".$row['nw_sales_royalty_name']."')");	
		}
	}
}

$vehicle = mysqli_query($db, "SELECT * FROM `nw_vehicle`");
while ($row = mysqli_fetch_assoc($vehicle)) {
	if($row['nw_vehicle_no']!=""){
		$isCheck = mysqli_query($db2, "SELECT name FROM `vehicle` where name='".str_replace(" ","-",str_replace("  "," ",$row['nw_vehicle_no']))."'");
		$isData= mysqli_num_rows($isCheck); 
		if(!$isData){
			mysqli_query($db2, "INSERT INTO `vehicle`(`name`, `vehicle_name`, `vehicle_tare_weight`) VALUES ('".str_replace(" ","-",str_replace("  "," ",$row['nw_vehicle_no']))."','".$row['nw_vehicle_name']."','".$row['nw_vehicle_tare_weight']."')");	
		}
	}
}
$sales = mysqli_query($db, "SELECT * FROM `nw_sales`");
while ($row = mysqli_fetch_assoc($sales)) {
			$vehicleId= mysqli_query($db2, "SELECT id FROM `vehicle` where name='".str_replace(" ","-",str_replace("  "," ",$row['nw_sales_vehicle_number']))."'");
			while ($vehicleRow = mysqli_fetch_assoc($vehicleId)) {
				$vehicleSetId=$vehicleRow["id"];				
			}
			$materialId= mysqli_query($db2, "SELECT id FROM `input_tag` where tag_id='MATERIAL' AND AND module=2 name='".$row['nw_sales_material']."'");
			while ($materialIdrow = mysqli_fetch_assoc($materialId)) {
				$material_id=$materialIdrow["id"];				
			}
			$placeId= mysqli_query($db2, "SELECT id FROM `input_tag` where tag_id='PLACE' AND AND module=2 name='".$row['nw_sales_place']."'");
			while ($placeIdrow = mysqli_fetch_assoc($placeId)) {
				$place_id=$placeIdrow["id"];				
			}
			$royaltyId= mysqli_query($db2, "SELECT id FROM `input_tag` where tag_id='ROYALTY' AND AND module=2 name='".$row['nw_sales_royalty_name']."'");
			while ($royaltyIdrow = mysqli_fetch_assoc($royaltyId)) {
				$royalty_id=$royaltyIdrow["id"];				
			}
			$salesdriverId= mysqli_query($db2, "SELECT id FROM `input_tag` where tag_id='DRIVER' AND AND module=2 name='".$row['nw_sales_driver_name']."'");
			while ($salesdriverIdrow = mysqli_fetch_assoc($salesdriverId)) {
				$driver_id=$salesdriverIdrow["id"];				
			}
			$partyId= mysqli_query($db2, "SELECT id FROM `input_tag` where tag_id='PARTY' AND AND module=2  name='".$row['nw_sales_party_name']."'");
			while ($partyIdrow = mysqli_fetch_assoc($partyId)) {
				$party_id=$partyIdrow["id"];				
			}
			$loadingId= mysqli_query($db2, "SELECT id FROM `input_tag` where tag_id='LOADING' AND module=2  AND name='".$row['nw_sales_loading']."'");
			while ($loadingIdrow = mysqli_fetch_assoc($loadingId)) {
				$loading_id=$loadingIdrow["id"];				
			}
			mysqli_query($db2, "INSERT INTO `sales`( `id`,`date`, `vehicle_id`, `transporter_name`, `gross_weight`, `tare_weight`, `net_weight`, `party_weight`, `rate`, `gst`, `material_id`, `loading_id`, `place_id`, `party_id`, `royalty_id`, `royalty_number`, `royalty_tone`, `driver_id`, `carting_id`, `note`, `status`) VALUES ('".$row["id"]."','".date("Y-m-d",strtotime($row["nw_sales_date_and_time"]))."','".$vehicleSetId."','".$row["nw_sales_vehicle_name"]."','".$row["nw_sales_g_weight"]."','".$row["nw_sales_vehicle_tare_weight"]."','".$row["nw_sales_n_weight"]."','".$row["nw_sales_party_weight"]."','".$row["nw_sales_rate"]."','".$row["nw_sales_gst"]."','".$material_id."','".$loading_id."','".$place_id."','".$party_id."','".$royalty_id."','".$row["nw_sales_royalty_number"]."','".$row["nw_sales_royalty_tone"]."','".$driver_id."','".(($row["nw_sales_carting"]=="carting")?2:1)."','".$row["nw_sales_note"]."',0)");	
	
}

?>