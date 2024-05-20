<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Chi tiết bài nhạc</div>
		<div class="panel-body">
			<div class="col-md-3">
				<img src="../<?php echo $value["AnhBH"] ?>" alt="Error" width="100%" />
			</div>
			<div class="col-md-9">
				<h2 style="margin: 0;">
					<?php echo $value["tenBH"] ?>
				</h2>
				<p style="margin-top: 10px; font-style: italic">
					<b>User: </b>
					<?php
						$casi = $this->Model->fetchOne("select * from users where id=".$value["id"]);
						if(isset($casi["id"]))
							echo $casi["name"];
					?>
				</p>
				<p>
					<b>Ngày cập nhật:</b>
					<?php
						echo $value["dateTime"]
					?>
				</p>
				
				<p>
					<b>Link: </b>
					<?php echo $value["Link"] ?>
				</p>
				<!-- btn -->
				<a href="index.php?controller=songtl/edit&id=<?php echo $value["maBH"];?>" class="btn btn-primary">Cập nhật</a>
				<a href="index.php?controller=songtl/list" class="btn btn-success">Quay lại</a>
			</div>
		</div>
	</div>
</div>
