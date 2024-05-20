<div class="col-md-12" style="margin-top:20px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm Playlist</div>
		<div class="panel-body">
				<?php
				foreach($data as $value){
				?>
			<form action="index.php?controller=playlist/addbh&act=add&malist=<?php echo $value["maList"]?>" method="post" enctype="multipart/form-data">
				<table cellpadding="3" style="width: 100%">
					<tr>
						<td width="10%">Tên playlist</td>
						<td width="90%">
							<input type="text" name="oldname" class="form-control" readonly value="<?php echo $value["tenList"] ?>">
						</td>
					</tr>
					<!-- upload image -->
					<tr>
						<td>Ảnh</td>
						<td>
							<img src="../<?php  echo $value["Anh"] ?>" alt="Error" width="200px;height:200px">
						</td>
					</tr>
					<tr>
						<td>Danh sách bài hát </td>
						<td>
							<select name="baihat" class="form-control" style="margin-top: 10px;margin-bottom:10px; padding: 3px;">
								<?php
									$data1 = $this->Model->fetch("select * from song where maBH not in( select maBH from list where maList=
									'$id' );");
									foreach ($data1 as $key) {
								?>
								<option value="<?php echo $key["maBH"];?>"><?php echo $key["tenBH"];?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
				</table>
				<center>
				<input type="submit" class="btn btn-primary" value="Thêm Playlist" style="margin-top: 10px;">
				<a href="index.php?controller=playlist/detail&id=<?php echo $value["maList"]?>" class="btn btn-success" style="margin-top: 10px;">Quay lại</a>
			</center>
			</form><?php }?>
		</div>
	</div>
</div>