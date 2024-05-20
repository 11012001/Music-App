<div class="col-md-6 col-md-offset-3" style="margin-top: 50px; margin-bottom: 100px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Cập nhật chủ đề</div>
		<div class="panel-body">
			<form action="index.php?controller=music_type/edit&id=<?php echo $value["maCD"] ?>&act=edit" method="post">
				<input type="text" name="oldname" class="form-control" readonly value="<?php echo $value["tenCD"] ?>">
				<input type="text" name="topic" class="form-control"  placeholder="Tên chủ đề mới" style="margin: 7px 0;" >
				<select name="loaicd" class="form-control" style="margin-bottom: 10px; padding: 3px;">
								
								<option value="Đề xuất">Đề xuất</option>
								<option value="Thể loại">Thể loại</option>
								<option value="Tâm trạng">Tâm trạng</option>
								
				</select><br>
				<center>
				<input type="submit" value="Cập nhật" class="btn btn-primary">
				<a href="index.php?controller=music_type/list" class="btn btn-success">Quay lại</a></center>
			</form>
		</div>
	</div>
</div>