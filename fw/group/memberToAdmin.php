<?php
	include "../includes/config.php";
	 
	$group_id =  filter_var ( $_POST['group_id'] , FILTER_SANITIZE_NUMBER_INT  ) ;
	
	//the user_id
	$member_id = filter_var ( $_POST['member_id'] , FILTER_SANITIZE_NUMBER_INT  ) ;
	
	$sql ="UPDATE fw_group_members SET role = ? WHERE group_id =? AND user_id =? ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([ 'admin' , $group_id, $member_id ]);
	
	echo "admin";
  
