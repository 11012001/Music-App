<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh sách MV
        </h1>
    </div>
</div>

<a href="index.php?controller=mvtl/add" class="btn btn-primary" style="margin-bottom: 10px;">Thêm MV</a>
<form action="index.php?controller=mvtl/search&act=search" method="post" enctype="multipart/form-data" >
  		<input type="search" name="search" placeholder="Search">
			</form>
<table class="table table-bordered">
	<tr>
		<th width="50px;">STT</th>
		<th width="130px">Hình</th>
		<th width="130px">Tên MV</th>
		<th width="130px">Tên User</th>
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
			<img src="../<?php  echo $value["AnhMV"] ?>" alt="Error" width="100%">
		</td>
		<td><?php echo $value["tenMV"] ?></td>
		<td>
			<?php
				$nghesi = $this->Model->fetchOne("select * from users where id=".$value["id"]);
				if(isset($nghesi["id"]))
					echo $nghesi["name"];
			?>				
		</td>
		<td>
			<?php
				echo $value["Link"] 
			?>				
		</td>
		<td><?php echo $value["dateTime"] ?></td>
		<td>
			<a href="index.php?controller=mvtl/detail&id=<?php echo $value["maMV"] ?>">View</a>
			<a href="index.php?controller=mvtl/edit&id=<?php echo $value["maMV"] ?>">Update</a>
			<a href="index.php?controller=mvtl/list&act=delete&id=<?php echo $value['maMV'] ?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

<ul class="paginate">
	<?php for($i=1; $i<=$page_show; $i++){ ?>
		<li><a href="index.php?controller=mvtl/list&p=<?php echo $i ?>"><?php echo $i; ?></a></li>
	<?php } ?>
</ul>