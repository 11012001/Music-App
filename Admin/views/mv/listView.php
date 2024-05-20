<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh sách MV
        </h1>
    </div>
</div>

<a href="index.php?controller=mv/add" class="btn btn-primary" style="margin-bottom: 10px;">Thêm MV</a>
<form action="index.php?controller=mv/search&act=search" method="post" enctype="multipart/form-data" >
  		<input type="search" name="search" placeholder="Search">
			</form>
<table class="table table-bordered">
	<tr>
		<th width="50px;">STT</th>
		<th width="130px">Hình</th>
		<th>Tên MV</th>
		<th>Chủ đề</th>
		<th>Ca sĩ</th>
		<th width="120px;">Quốc gia</th>
		<th>Video</th>
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
		<td><?php echo $value["tenMV"] ?></td>
		<td>
			<?php
				$catalog = $this->Model->fetchOne("select * from loaimv where maLMV=".$value["maLMV"]);
				if(isset($catalog["maLMV"]))
					echo $catalog["tenLMV"];
			?>				
		</td>
		<td>
			<?php
				$casi = $this->Model->fetchOne("select * from nghesi where maCS=".$value["maCS"]);
				if(isset($casi["maCS"]))
					echo $casi["tenCS"];
			?>				
		</td>
		<td>
			<?php
				echo $value["Quocgia"] 
			?>				
		</td>
		<td>
			<?php
				echo $value["Link"] 
			?>				
		</td>
		<td><?php echo $value["dateTime"] ?></td>
		<td>
			<a href="index.php?controller=mv/detail&id=<?php echo $value["maMV"] ?>">View</a>
			<a href="index.php?controller=mv/edit&id=<?php echo $value["maMV"] ?>">Update</a>
			<a href="index.php?controller=mv/list&act=delete&id=<?php echo $value['maMV'] ?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

<ul class="paginate">
	<?php for($i=1; $i<=$page_show; $i++){ ?>
		<li><a href="index.php?controller=mv/list&p=<?php echo $i ?>"><?php echo $i; ?></a></li>
	<?php } ?>
</ul>