<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Chủ đề Album
        </h1>
    </div>
</div>

<div class="row">
	<div class="col-md-8">
		<div class="panel panel-success">
			<div class="panel-heading">Danh sách chủ đề Album</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<tr>
						<td width="40px;">STT</td>
						<td width="200px;">Name</td>
						<td width="80px">Quốc gia</td>
						<td width="80px">More</td>
					</tr>
					<?php
						$stt=0;
						foreach ($data as $value) { 
							$stt++;
					?>
					<tr>
						<td style="text-align: center;"><?php echo $stt; ?></td>
						<td><?php echo $value["tenAB"] ?></td>
						<td><?php echo $value["Quocgia"] ?></td>
						<td>
							<a href="index.php?controller=album/edit&id=<?php echo $value["maAB"];?>">Update</a>
							<a href="index.php?controller=album/list&id=<?php echo $value["maAB"];?>&act=delete">Delete</a>
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
				<form action="index.php?controller=album/list&act=add" method="post">
					<input type="text" name="topic" class="form-control" placeholder="Tên chủ đề" required />
					<select name="quocgia" class="form-control" style="margin-top: 10px;" >
								<option value="Việt Nam">Việt Nam</option>
								<option value="Âu Mỹ">Âu Mỹ</option>
								<option value="Châu Á">Châu Á</option>
								
					</select>
					<center></c><input type="submit" value="Thêm" class="btn btn-primary" style="margin-top: 5px;"></center>
				</form>
			</div>
		</div>
	</div>
</div>