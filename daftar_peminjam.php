<?php include 'view/header.php'; ?>

<body>

<div class="w3-white w3-border " style="
		width: 98%; 
		border-radius: 10px; 
		position: absolute;
		left: 1%;
		right: 1%;
		box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);">

		

    <div class="w3-indigo" style="padding: 10px 40px; border-radius: 10px 10px 0px 0px;">
    	<center><h3>DATA PEMINJAM PERANGKAT KOMPUTER</h3></center>
    </div>
    	<table class="w3-table w3-striped">
    		<tr style="border: 1px solid;" class="w3-center">
    			<th>No</th>
    			<th>Nama</th>
    			<th>ID</th>
    			<th>No Telpon/HP</th>
    			<th>Email</th>
    			<th>Printer</th>
    			<th>Scanner</th>
    			<th>Infocus</th>
    			<th>Komputer</th>
    			<th>Laptop</th>
    			<th>Lama Pinjam</th>
    			<th>Tanggal Pinjam</th>
    			<th>Tanggal Pengembalian</th>
    			<th>Status</th>
    		</tr>
    	
    	<?php
	   		include 'function/conn.php';

	    	$tampilkan = mysqli_query($conn, "select *from data_peminjam");

	    	$no=1;
	    		foreach ($tampilkan as $row){
	 
	        	echo "<tr >
	            	<td>$no</td>
	            	<td>".$row['nama']."</td>
	            	<td>".$row['id']."</td>
	            	<td>".$row['no_telpon']."</td>
	            	<td>".$row['email']."</td>
	            	<td>".$row['printer']."</td>
	            	<td>".$row['scanner']."</td>
	            	<td>".$row['infocus']."</td>
	            	<td>".$row['komputer']."</td>
	            	<td>".$row['laptop']."</td>
	            	<td>".$row['lama_pinjam']." Hari</td>
	            	<td><center>".$row['tgl_pinjam']."</center></td>
	            	<td><center>".$row['tgl_pengembalian']."</center></td>
	            	<td><center>".$row['status']."</center></td>
	            	</tr>";
	        $no++;
	    	}
    	?>

		</table>
		<hr style="border: 1px solid; margin: 0;">
		<div class="w3-center" style="margin: 20px;">
		<a href="logout.php">
			<button type="submit" class="w3-btn w3-indigo w3-round-large" style="padding: 10px 40px;">Logout</button>
		</a> 	
 	
		</div> 
	</div>
	<div style="position: fixed; top: 18px; left: 1235px;">
		<button id="show" class="w3-btn w3-white w3-round-large">Edit Status</button>
	</div>

	<div style="position: fixed; top: 18px; left: 1100px;">
		<button id="show-pesan" class="w3-btn w3-white w3-round-large" onclick="document.getElementById('id01').style.display='block'">Kirim Pesan</button>
	</div>

	<!-- button kirim pesan -->
		<div id="id01" class="modal">
		<!-- form Hidden -->
			<form class="modal-content animate" id="size" action="pesan.php" method="POST">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				<div>
					<div style="margin-top: 10px; font-size: 20px; margin-bottom: 10px;">
						<center>Kirim Pesan</center>
					</div>
					<div>
						<div style="padding: 15px;">
						<label>ID Penerima</label>
						<input type="text" name="idPenerima" placeholder="Contoh: 0001" style="border: none; padding: 5px 10px; border-bottom: 1px solid gray; width: 100%; margin-bottom: 15px;" required>

						<label>Subjek</label>
						<input type="text" name="subjek" placeholder="Contoh: Pesan Admin" style="border: none; padding: 5px 10px; border-bottom: 1px solid gray; width: 100%; margin-bottom: 15px;" required>

						<textarea placeholder="Isi Pesan Anda" style="width: 100%; border-radius: 6px; border: 1px solid gray; height: 220px; padding: 10px; margin-bottom: 20px; resize: none;" name="isi" required></textarea>

						<!-- <input type="file" name="file"> -->

						<a href="pesan.php">
							<button class="w3-btn w3-indigo w3-round-large w3-right" style="width: 100px;">Kirim</button>
						</a>
					</div>
					</div>
				</div>
			</form>
		</div>
		<!-- form Hidden -->

	<div style="position: fixed; background-color: blue; padding: 20px 20px; border-radius: 6px; width: 98%; left: 1%; right: 1%; top: 565px;" id="edit">

		<form method="POST" action="edit.php">
		<label style="margin-left: 200px;">ID Peminjam</label>
		<input type="text" name="id" id="pesan" style="margin: 0px 30px 0px 7px;">

		<label>Status</label>
		<select style="margin: 0px 20px 0px 7px;" name="status">
			<option value="Belum">Belum Dikembalikan</option>
			<option value="Sudah">Sudah Dikembalikan</option>
		</select>
		
		<button class="w3-btn w3-white w3-round-large" id="save" style="margin-right: 15px; margin-left: 35px;">
			Save
		</button>
		
		<button id="hide" class="w3-btn w3-white w3-round-large">
			Batal
		</button>
		</form>
	</div>
</body>
</html>


<script>
$("#save").prop("disabled", "disabled");

$("#pesan").on("keypress", function () {
  if ($(this).val() != "") {
    $("#save").prop("disabled", false);
  } else {
    $("#save").prop("disabled", "disabled");
  }
});

$(document).ready(function(){

	$("#edit").hide();	

    $("#hide").click(function(){
        $("#edit").hide();
    });

    $("#show").click(function(){
    	$("#edit").slideToggle("slow");
        $("#edit").show();
    });
});

var modal = document.getElementById('id01');
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
</script>
