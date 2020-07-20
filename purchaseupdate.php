<?php
$db=mysqli_connect("localhost","root","","query");
$db2=mysqli_connect("localhost","root","","q_erp");
$receiver1 = mysqli_query($db, "SELECT nw_purchase_receiver_name FROM `nw_purchase` GROUP BY nw_purchase_receiver_name");
while ($row = mysqli_fetch_assoc($receiver1)) {
	if($row['nw_purchase_receiver_name']!=""){
		$isCheck = mysqli_query($db2, "SELECT name FROM `input_tag` where tag_id='RECEIVER' AND module=1 AND name='".$row['nw_purchase_receiver_name']."'");
		$isData= mysqli_num_rows($isCheck); 
		if(!$isData){
			mysqli_query($db2, "INSERT INTO `input_tag`(`tag_id`, `module`, `name`) VALUES ('RECEIVER',1,'".$row['nw_purchase_receiver_name']."')");	
		}
	}
}

$matriyal1 = mysqli_query($db, "SELECT nw_purchase_material FROM `nw_purchase` GROUP BY nw_purchase_material");
while ($row = mysqli_fetch_assoc($matriyal1)) {
	if($row['nw_purchase_material']!=""){
		$isCheck = mysqli_query($db2, "SELECT name FROM `input_tag` where tag_id='PARTY' AND module=1 AND name='".$row['nw_purchase_material']."'");
		$isData= mysqli_num_rows($isCheck); 
		if(!$isData){
			mysqli_query($db2, "INSERT INTO `input_tag`(`tag_id`, `module`, `name`) VALUES ('MATERIAL',1,'".$row['nw_purchase_material']."')");	
		}
	}
}

$quarry1 = mysqli_query($db, "SELECT nw_purchase_quarry_name FROM `nw_purchase` GROUP BY nw_purchase_quarry_name");
while ($row = mysqli_fetch_assoc($quarry1)) {
	if($row['nw_purchase_quarry_name']!=""){
		$isCheck = mysqli_query($db2, "SELECT name FROM `input_tag` where tag_id='QUARRYNAME' AND module=1 AND name='".$row['nw_purchase_quarry_name']."'");
		$isData= mysqli_num_rows($isCheck); 
		if(!$isData){
			mysqli_query($db2, "INSERT INTO `input_tag`(`tag_id`, `module`, `name`) VALUES ('QUARRYNAME',1,'".$row['nw_purchase_quarry_name']."')");	
		}
	}
}
$driver1 = mysqli_query($db, "SELECT nw_purchase_driver_name FROM `nw_purchase` GROUP BY nw_purchase_driver_name");
while ($row = mysqli_fetch_assoc($driver1)) {
	if($row['nw_purchase_driver_name']!=""){
		$isCheck = mysqli_query($db2, "SELECT name FROM `input_tag` where tag_id='PARTY' AND module=1 AND name='".$row['nw_purchase_driver_name']."'");
		$isData= mysqli_num_rows($isCheck); 
		if(!$isData){
			mysqli_query($db2, "INSERT INTO `input_tag`(`tag_id`, `module`, `name`) VALUES ('DRIVER',1,'".$row['nw_purchase_driver_name']."')");	
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
$sales = mysqli_query($db, "SELECT * FROM `nw_purchase`");
while ($row = mysqli_fetch_assoc($sales)) {
			$vehicleId= mysqli_query($db2, "SELECT id FROM `vehicle` where name='".str_replace(" ","-",str_replace("  "," ",$row['nw_purchase_vehicle_number']))."'");
			while ($vehicleRow = mysqli_fetch_assoc($vehicleId)) {
				$vehicleSetId=$vehicleRow["id"];				
			}
			$materialId= mysqli_query($db2, "SELECT id FROM `input_tag` where tag_id='MATERIAL' AND module=1 AND name='".$row['nw_purchase_material']."'");
			while ($materialIdrow = mysqli_fetch_assoc($materialId)) {
				$material_id=$materialIdrow["id"];				
			}
			$salesdriverId= mysqli_query($db2, "SELECT id FROM `input_tag` where tag_id='DRIVER' AND module=1 AND name='".$row['nw_purchase_driver_name']."'");
			while ($salesdriverIdrow = mysqli_fetch_assoc($salesdriverId)) {
				$driver_id=$salesdriverIdrow["id"];				
			}
			$receiverId= mysqli_query($db2, "SELECT id FROM `input_tag` where tag_id='RECEIVER' AND module=1 AND name='".$row['nw_purchase_receiver_name']."'");
			while ($receiverIdrow = mysqli_fetch_assoc($receiverId)) {
				$receiver_id=$receiverIdrow["id"];				
			}
			$quarryId= mysqli_query($db2, "SELECT id FROM `input_tag` where tag_id='QUARRYNAME' AND module=1 AND name='".$row['nw_purchase_quarry_name']."'");
			while ($quarryIdrow = mysqli_fetch_assoc($quarryId)) {
				$quarry_id=$quarryIdrow["id"];				
			}
			mysqli_query($db2, "INSERT INTO `purchase`(`id`, `date`, `vehicle_id`, `transporter_name`, `gross_weight`, `tare_weight`, `net_weight`, `material_id`, `quarryname_id`, `receiver_id`, `driver_id`, `carting_id`, `note`) VALUES ('".$row["id"]."','".date("Y-m-d",strtotime($row["nw_purchase_date_and_time"]))."','".$vehicleSetId."','".$row["nw_purchase_vehicle_name"]."','".$row["nw_purchase_g_weight"]."','".$row["nw_purchase_vehicle_tare_weight"]."','".$row["nw_purchase_n_weight"]."','".$material_id."','".$quarry_id."','".$receiver_id."','".$driver_id."','".(($row["nw_purchase_carting"]=="carting")?2:1)."','".$row["nw_purchase_note"]."')");	
	
}

?>