<div class="col-md-6 col-md-offset-3" style="margin-top: 50px; margin-bottom: 100px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Cập nhật chủ đề</div>
		<div class="panel-body">
			<form action="index.php?controller=album/edit&id=<?php echo $value["maAB"] ?>&act=edit" method="post">
				<input type="text" name="oldname" class="form-control" readonly value="<?php echo $value["tenAB"] ?>">
				<input type="text" name="topic" class="form-control"  placeholder="Tên chủ đề mới" style="margin: 7px 0;">
				<select name="quocgia" class="form-control" style="margin-bottom: 10px;" >
								<option value="Việt Nam">Việt Nam</option>
								<option value="Âu Mỹ">Âu Mỹ</option>
								<option value="Châu Á">Châu Á</option>
								
				</select>
				<center><input type="submit" value="Cập nhật" class="btn btn-primary">
				<a href="index.php?controller=album/list" class="btn btn-success">Quay lại</a></center>
			</form>
		</div>
	</div>
</div>