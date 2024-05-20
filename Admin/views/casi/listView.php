<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh sách ca sĩ
        </h1>
    </div>
</div>

<a href="index.php?controller=casi/add" class="btn btn-primary" style="margin-bottom: 10px;">Thêm ca sĩ</a>
<form action="index.php?controller=casi/search&act=search" method="post" enctype="multipart/form-data" >
  		<input type="search" name="search" placeholder="Search">
			</form>
<table class="table table-bordered">
	<tr>
		<th width="50px;">STT</th>
		<th width="200px">Hình</th>
		<th>Tên</th>
		<th> Quốc gia</th>
		<th> Giới thiệu</th>
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
		<td><?php echo $value["tenCS"] ?></td>
		<td>
			<?php
				echo $value["Quocgia"] 
			?>				
		</td>
		<td>
			<?php
				echo $value["Gioithieu"] 
			?>				
		</td>
		<td><?php echo $value["dateTime"] ?></td>
		<td>
			<a href="index.php?controller=casi/edit&id=<?php echo $value["maCS"] ?>">Update</a>
			<a href="index.php?controller=casi/list&act=delete&id=<?php echo $value['maCS'] ?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

<ul class="paginate">
	<?php for($i=1; $i<=$page_show; $i++){ ?>
		<li><a href="index.php?controller=casi/list&p=<?php echo $i ?>"><?php echo $i; ?></a></li>
	<?php } ?>
</ul>