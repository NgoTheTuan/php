<?php
		include("connectdb.php");
		$query = "SELECT * FROM products ";
		$result = mysqli_query($conn,$query);
?>
<section class="container-fluid">

	<h3 style="margin: 20px;">DANH SÁCH CAFE</h3>

	<table >
	    <tr>
	        <th scope="col">#</th>
	        <th>Ma_Cafe</th>
            <th>Ten_Cafe</th>
            <th>Trong_luong</th>
            <th>Don_gia</th>
            <th>Action</th>
	    </tr>
	  <tbody>
	  	<?php
	  		$stt=0;
	  		if(mysqli_num_rows($result)>0):
	  			while ( $row = mysqli_fetch_array($result)):
	  				$stt++;
	  	?>
		    <tr>
		      <th class="text-center"><?php echo $stt; ?></th>
		      <td><?php echo $row["Ma_Cafe"]; ?></td>
		      <td><?php echo $row["Ten_Cafe"]; ?></td>
              <td><?php echo $row["Trong_luong"]; ?></td>
			  <td><?php echo $row["Don_gia"]; ?></td>

		      <td class="text-center">
		      	<a href="?go=product-Edit&masp=<?php echo $row["Ma_Cafe"];?>" class="btn btn-primary">
		      		Sửa</a>
		      	<a href="?go=products-list&masp=<?php echo $row["Ma_Cafe"];?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">
		      		Xóa</a>
		      </td>
		    </tr>
	    <?php
	    		endwhile;
	    	else:
	    ?>
	    	<tr>
		      <th colspan="6">Chưa có dữ liệu....</th>
		    </tr>
	    <?php
	    	endif;
	    ?>
	  </tbody>
	</table>
	<a href="?go=product-Add" class="btn btn-success">Thêm mới</a>
</section>

<?php

	if(isset($_GET['masp'])){
		$masp = $_GET['masp'];
		$query = " delete from products where Ma_Cafe ='$masp'";
		if(mysqli_query($conn,$query)){
			echo "<script> location.href='index.php?go=products-list' </script>";
		}
	}
?>