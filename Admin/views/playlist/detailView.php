<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh sách nhạc trong playlist
        </h1>
    </div>
</div>

<a href="index.php?controller=playlist/addbh&id=<?php echo $id; ?>" class="btn btn-primary" style="margin-bottom: 10px;">Thêm nhạc</a>
<a href="index.php?controller=playlist/list" class="btn btn-success" style="margin-bottom: 10px ;margin-right:10px ">Quay lại</a>

<table class="table table-bordered">
	<tr>
		<th width="50px;">STT</th>
		<th width="130px">Hình</th>
		<th>Tên bài hát</th>
		<th width="120px;">Tên ca sĩ</th>
		<th>Chủ đề</th>
		<th>Thuộc playlist</th>
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
				$playlist = $this->Model->fetchOne("select * from listbh where maList=".$value["maList"]);
				if(isset($playlist["maList"]))
					echo $playlist["tenList"];
			?>				
		</td>
		<td>
			<?php
				echo $value["link"]
			?>				
		</td>
		<td><?php echo $value["dateTime"] ?></td>
		<td>
			<a href="index.php?controller=playlist/detail&act=delete&baihat=<?php echo $value['maBH']?>&malist=<?php echo $value['maList']?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

<ul class="paginate">
	<?php for($i=1; $i<=$page_show; $i++){ ?>
		<li><a href="index.php?controller=playlist/detail&p=<?php echo $i ?>"><?php echo $i; ?></a></li>
	<?php } ?>
</ul>