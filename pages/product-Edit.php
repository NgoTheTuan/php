<?php
		if(isset($_REQUEST['btnGhiLai'])){
			include("connectdb.php");
			$ma_cafe = $_POST['ma_cafe'];
			$ten_cafe = $_POST['ten_cafe'];
            $trong_luong = $_POST['trong_luong'];
			$don_gia = $_POST['don_gia'];

			$query = "UPDATE  products";
			$query .= " SET ma_cafe='$ma_cafe',ten_cafe='$ten_cafe',Trong_luong='$trong_luong',Don_gia='$don_gia'  WHERE Ma_Cafe ='$ma_cafe'"	;

			if(mysqli_query($conn, $query)){
				echo "<script> location.href='index.php?go=products-list'; </script>";
			}else{
				$err = "Lỗi CẬP NHẬT:" . $query;
			}
		}


	?>
    <?php
        if(isset($_GET['masp'])){
			include("connectdb.php");
			$masp = $_GET['masp'];

			$query = "SELECT * FROM products WHERE ma_cafe='$masp'";
			$result = mysqli_query($conn,$query);
			$row = mysqli_fetch_array($result);
		}
    ?>
<section class="container" >
		<h1 style="margin: 20px;">Thêm mới sản phẩm</h1>
		<form action="" method="post" style="text-align:left">
			<div class="form-group">
				<label for="ma_cafe" class="form-label">
					Mã sản phẩm
                </label>
                <input type="text" class="form-control" id="ma_cafe" name="ma_cafe" value="<?php echo $row['Ma_Cafe'];?>" >


			</div>
            <div class="form-group">
                <label for="ten_cafe" class="form-label">
                       Tên cafe
                </label>
                <input type="text" class="form-control" id="ten_cafe" name="ten_cafe" value="<?php echo $row['Ten_Cafe'];?>" >
			</div>
            <div class="form-group">
                <label for="trong_luong" class="form-label">
                       Trọng lượng
                </label>
                <input type="number" class="form-control" id="trong_luong" name="trong_luong" value="<?php echo $row['Trong_luong'];?>" >
			</div>
			<div class="form-group">
                <label for="don_gia" class="form-label">
                       Đơn giá
                </label>
                <input type="number" class="form-control" id="don_gia" name="don_gia" value="<?php echo $row['Don_gia'];?>" >
			</div>

            <div class="form-group">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-success" name="btnGhiLai">
                    Cập nhật</button>
                </div>
		    </div>


		  <span>
		  	<?php
		  		if(isset($err)){
		  			echo $err;
		  		}
		  	?>
		  </span>
		</form>
	</section>