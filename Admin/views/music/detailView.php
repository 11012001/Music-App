<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Chi tiết bài nhạc</div>
		<div class="panel-body">
			<div class="col-md-3">
				<img src="../<?php echo $value["Anh"] ?>" alt="Error" width="100%" />
			</div>
			<div class="col-md-9">
				<h2 style="margin: 0;">
					<?php echo $value["tenBH"] ?>
				</h2>
				<p style="margin-top: 10px; font-style: italic">
					<b>Ca sĩ: </b>
					<?php
						$casi = $this->Model->fetchOne("select * from nghesi where maCS=".$value["maCS"]);
						if(isset($casi["maCS"]))
							echo $casi["tenCS"];
					?>
				</p>
				<p>
					<b>Thuộc danh mục:</b>
					<?php
						$catalog = $this->Model->fetchOne("select * from chude where maCD=".$value["maCD"]);
						if(isset($catalog["maCD"]))
							echo $catalog["tenCD"];
					?>
				</p>
				<p><b>Nhạc mới:</b>
					<?php
				if($value["moi"]==0){
					echo "Không";
					}
					else{
						echo "Có";
					}
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
					<?php echo $value["link"] ?>
				</p>
				<!-- btn -->
				<a href="index.php?controller=music/edit&id=<?php echo $value["maBH"];?>" class="btn btn-primary">Cập nhật</a>
				<a href="index.php?controller=music/list" class="btn btn-success">Quay lại</a>
			</div>
		</div>
	</div>
</div>
