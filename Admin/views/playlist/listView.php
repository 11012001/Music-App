<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh sách Playlist
        </h1>
    </div>
</div>

<a href="index.php?controller=playlist/add" class="btn btn-primary" style="margin-bottom: 10px;">Thêm Playlist</a>
<form action="index.php?controller=playlist/search&act=search" method="post" enctype="multipart/form-data" >
  		<input type="search" name="search" placeholder="Search">
			</form>
<table class="table table-bordered">
	<tr>
		<th width="50px;">STT</th>
		<th width="200px">Hình</th>
		<th>Tên</th>
		<th>chủ đề ALbum</th>
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
		<td><?php echo $value["tenList"] ?></td>
		<td><?php 
			$album = $this->Model->fetchOne("select * from album where maAB=".$value["maAB"]);
				if(isset($album["maAB"]))
					echo $album["tenAB"];
			?></td>
		<td><?php echo $value["dateTime"] ?></td>
		<td>
			<a href="index.php?controller=playlist/detail&id=<?php echo $value["maList"] ?>">View</a>
			<a href="index.php?controller=playlist/edit&id=<?php echo $value["maList"] ?>">Update</a>
			<a href="index.php?controller=playlist/list&act=delete&id=<?php echo $value['maList'] ?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

<ul class="paginate">
	<?php for($i=1; $i<=$page_show; $i++){ ?>
		<li><a href="index.php?controller=playlist/list&p=<?php echo $i ?>"><?php echo $i; ?></a></li>
	<?php } ?>
</ul>