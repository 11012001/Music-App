<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Chủ đề bài hát
        </h1>
    </div>
</div>

<div class="row">
	<div class="col-md-8">
		<div class="panel panel-success">
			<div class="panel-heading">Danh sách chủ đề</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<tr>
						<td width="40px;">STT</td>
						<td width="200px;">Name</td>
						<td width="80px">Loại chủ đề</td>
						<td width="80px">More</td>
					</tr>
					<?php
						$stt=0;
						foreach ($data as $value) { 
							$stt++;
					?>
					<tr>
						<td style="text-align: center;"><?php echo $stt; ?></td>
						<td><?php echo $value["tenCD"] ?></td>
						<td><?php echo $value["loaiCD"] ?></td>
						<td>
							<a href="index.php?controller=music_type/edit&id=<?php echo $value["maCD"];?>">Update</a>
							<a href="index.php?controller=music_type/list&id=<?php echo $value["maCD"];?>&act=delete">Delete</a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
	
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">Thêm chủ đề</div>
			<div class="panel-body">
				<form action="index.php?controller=music_type/list&act=add" method="post">
					<input type="text" name="topic" class="form-control" placeholder="Tên chủ đề" required />
					<select name="loaicd" class="form-control" style="margin-top: 10px;" >
								<option value="Đề xuất">Đề xuất</option>
								<option value="Thể loại">Thể loại</option>
								<option value="Tâm trạng">Tâm trạng</option>
								
					</select>
					<center><input type="submit" value="Thêm" class="btn btn-primary" style="margin-top: 5px;"></center>
				</form>
			</div>
		</div>
	</div>
</div>