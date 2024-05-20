<?php

	class DetailList extends Controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'delete':
					$baihat = isset($_GET["baihat"])?$_GET["baihat"]:0;
					$malist = isset($_GET["malist"])?$_GET["malist"]:0;
					$this->Model->execute("delete from list where maBH='$baihat' and maList='$maList'" );
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=playlist/detail&id=$malist>";
					break;
			}
			$id = isset($_GET["id"])?$_GET["id"]:0;
			// dem tong so ban ghi
			$number = $this->Model->count("select * from song join list on song.maBH=list.maBH where list.maList='$id'");
			// so ban ghi hien thi tren 1 trang
			$num_page = 10;
			// so trang can hien thi
			$page_show = ceil($number/$num_page);
			// lay trang hien tai tren thanh url
			$page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]:1;

			$form = ($page-1)*$num_page;
			
			$data = $this->Model->fetch("select * from song join list on song.maBH=list.maBH where list.maList='$id' order by song.maBH asc limit $form,$num_page");
			include "views/playlist/detailView.php";
		}
	}
	new DetailList();

?>