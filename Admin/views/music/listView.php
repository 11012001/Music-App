<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh sách nhạc
        </h1>
    </div>
</div>

<a href="index.php?controller=music/add" class="btn btn-primary" style="margin-bottom: 10px;">Thêm nhạc</a>
<form action="index.php?controller=music/search&act=search" method="post" enctype="multipart/form-data" >
  		<input type="search" name="search" placeholder="Search">
			</form>
<table class="table table-bordered">
	<tr>
		<th width="50px;">STT</th>
		<th width="130px">Hình</th>
		<th>Tên bài hát</th>
		<th width="120px;">Tên ca sĩ</th>
		<th>Chủ đề</th>
		<th>Nhạc mới</th>
		<th>Link nhạc</th>
		<th width="120px">Ngày thêm</th>
		<th width="80px;">More</th>
	</tr>
	<?php 
		$stt=0;
		foreach ($data as $value) {
			$stt++;
	?>
	<tr>
		<td style="text-align: center;"><?php echo $stt; ?></td>
		<td>
			<img src="../<?php  echo $value["Anh"] ?>" alt="Error" width="100%">
		</td>
		<td><?php echo $value["tenBH"] ?></td>
		<td>
			<?php
				$nghesi = $this->Model->fetchOne("select * from nghesi where maCS=".$value["maCS"]);
				if(isset($nghesi["maCS"]))
					echo $nghesi["tenCS"];
			?>				
		</td>
		<td>
			<?php
				$chude = $this->Model->fetchOne("select * from chude where maCD=".$value["maCD"]);
				if(isset($chude["maCD"]))
					echo $chude["tenCD"];
			?>				
		</td>
		<td>
			<?php
				if($value["moi"]==0){
					echo "Không";
				}
			else{
				echo "Có";
			}
			?>				
		</td>
		<td>
			<?php
				echo $value["link"]
			?>				
		</td>
		<td><?php echo $value["dateTime"] ?></td>
		<td>
			<a href="index.php?controller=music/detail&id=<?php echo $value["maBH"] ?>">View</a>
			<a href="index.php?controller=music/edit&id=<?php echo $value["maBH"] ?>">Update</a>
			<a href="index.php?controller=music/list&act=delete&id=<?php echo $value['maBH'] ?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

<ul class="paginate">
	<?php for($i=1; $i<=$page_show; $i++){ ?>
		<li><a href="index.php?controller=music/list&p=<?php echo $i ?>"><?php echo $i; ?></a></li>
	<?php } ?>
</ul>