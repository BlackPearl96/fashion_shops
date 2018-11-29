<?php 
	include "model/m_home.php";
	$arr_nhomsp=list_nhomsp();

	$arr_thoitrang_hot= list_thoitrang_hot();

	$arr_phukien_hot=list_phukien_hot();

	$arr_mypham_hot=list_mypham_hot();


	$arr_sp=list_thoitrang_new();
	
	$arr_news=list_news();
	include "view/v_home.php";
 ?>