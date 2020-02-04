<?php include 'view/header.php'; ?>

<body>
	<div style="width: 80%; margin: 20px auto;">

	  <div class="w3-container w3-white">
	  	<div class="w3-white w3-border shadow-form">
	    	<div class="w3-indigo" style="padding: 10px 15px; border-radius: 10px 10px 0px 0px; font-size: 25px;">
				<center>Data Anda</center>
			</div>	
		    <div>	
		    	<form class="w3-container" id="container-judul" method="post" action="inputdata.php">
					<label>Nama Karyawan</label>
						<input class="w3-input input-style" type="text" name="nama" required placeholder="Susanto">

					<label>ID Karyawan</label>
						<input class="w3-input input-style" type="text" name="id" required placeholder="0001">


					<label>Nomor Telpon/HP</label>
						<input class="w3-input input-style" type="tel" name="no_telpon" required placeholder="089655993300">


					<label>Email</label>
						<input class="w3-input input-style" type="email" name="email" required placeholder="contoh@gmail.com" >

				</div> 
		    </div>
	  </div>

	  	<div style="
			border-radius: 10px;  
			box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
			margin: 40px 16px 16px 20px;">
			<div class="w3-indigo" style="padding: 10px 15px; border-radius: 10px 10px 0px 0px; font-size: 25px;">
				<center>Data Perangkat</center>
			</div>
			<div class="w3-container" style="margin: 30px auto; width: 75%; padding: 30px 0 30px 0;">	
				 <table>
				 	<tr>
				 		<td class="style-td">
				 			<input type="checkbox" name="nama_alat[]" value="printer"/>
				 			<label>PRINTER</label>
				 		</td>
				 		<td class="style-td">
				 			<input type="text" name="merek_ptr" placeholder="Contoh: CANON PIXMA " class="input-merek"/>
				 		</td>
				 		<td class="style-td">	
				 			<label> Berapa Unit</label>
					  			<select name="ptr" id="ptr3" style="margin-left: 15px;" >
					    			<option value="Tidak Pinjam">Pilih</option>
					    			<option value="( 1 UNIT ), ">1 UNIT</option>
					    			<option value="( 2 UNIT ), ">2 UNIT</option>
					    			<option value="( 3 UNIT ), ">3 UNIT</option>
					    			<option value="( 4 UNIT ), ">4 UNIT</option>
					    			<option value="( 5 UNIT ), ">5 UNIT</option>
					  			</select>
				 		</td>
				 	</tr>
				 	<tr>
				 		<td class="style-td">
				 			<input type="checkbox" name="nama_alat[]" value="scanner"/>
				 			<label>SCANNER</label>
				 		</td>
				 		<td class="style-td">
				 			<input type="text" name="merek_scr" placeholder="Contoh: Canon LiDE 120" class="input-merek"/>
				 		</td>
				 		<td class="style-td">
				 			<label> Berapa Unit</label>
					  			<select name="scr" style="margin-left: 15px;">
					    			<option value="Tidak Pinjam">Pilih</option>
					    			<option value="( 1 UNIT ), ">1 UNIT</option>
					    			<option value="( 2 UNIT ), ">2 UNIT</option>
					    			<option value="( 3 UNIT ), ">3 UNIT</option>
					    			<option value="( 4 UNIT ), ">4 UNIT</option>
					    			<option value="( 5 UNIT ), ">5 UNIT</option>
					  			</select>
				 		</td>
				 		
				 	</tr>
				 	<tr>
				 		<td class="style-td">
				 			<input type="checkbox" name="nama_alat[]" value="infocus"/>
				 			<label>INFOCUS</label>
				 		</td>
				 		<td class="style-td">
				 			<input type="text" name="merek_ifs" placeholder="Contoh: Projector IN114X" class="input-merek"/>
				 		</td>
				 		<td class="style-td">
				 			<label> Berapa Unit</label>
					  			<select name="ifs" style="margin-left: 15px;">
					    			<option value="Tidak Pinjam">Pilih</option>
					    			<option value="( 1 UNIT ), ">1 UNIT</option>
					    			<option value="( 2 UNIT ), ">2 UNIT</option>
					    			<option value="( 3 UNIT ), ">3 UNIT</option>
					    			<option value="( 4 UNIT ), ">4 UNIT</option>
					    			<option value="( 5 UNIT ), ">5 UNIT</option>
					  			</select>
				 		</td>
				 		
				 	</tr>
				 	<tr>
				 		<td class="style-td">
				 			<input type="checkbox" name="nama_alat[]" value="Komputer"/>
				 			<label>KOMPUTER</label>
				 		</td>
				 		<td class="style-td">
				 			<input type="text" name="merek_kpr" placeholder="Contoh: ASUS X200" class="input-merek"/>
				 		</td>
				 		<td class="style-td">
				 			<label> Berapa Unit</label>
					  			<select name="kpr" style="margin-left: 15px;">
					    			<option value="Tidak Pinjam">Pilih</option>
					    			<option value="( 1 UNIT ), ">1 UNIT</option>
					    			<option value="( 2 UNIT ), ">2 UNIT</option>
					    			<option value="( 3 UNIT ), ">3 UNIT</option>
					    			<option value="( 4 UNIT ), ">4 UNIT</option>
					    			<option value="( 5 UNIT ), ">5 UNIT</option>
					  			</select>
				 		</td>
				 		
				 	</tr>
				 	<tr>
				 		<td class="style-td">
				 			<input type="checkbox" name="nama_alat[]" value="Laptop"/>
				 			<label>LAPTOP</label>
				 		</td>
				 		<td class="style-td">
				 			<input type="text" name="merek_ltp" placeholder="Contoh: ACER Predator" class="input-merek"/>
				 		</td>
				 		<td class="style-td">
				 			<label> Berapa Unit</label>
					  			<select name="ltp" style="margin-left: 15px;">
					    			<option value="Tidak Pinjam">Pilih</option>
					    			<option value="( 1 UNIT ), ">1 UNIT</option>
					    			<option value="( 2 UNIT ), ">2 UNIT</option>
					    			<option value="( 3 UNIT ), ">3 UNIT</option>
					    			<option value="( 4 UNIT ), ">4 UNIT</option>
					    			<option value="( 5 UNIT ), ">5 UNIT</option>
					  			</select>
				 		</td>
				 		
				 	</tr>
				 	<tr>
				 		<td class="style-td">
				 			<label> LAMA PEMINJAMAN</label>
				 		</td>
				 		<td class="style-td">
				 			<select name="lama_pinjam" style="width: 200px;" class="input-merek" required>
					    			<option value="1">1 HARI</option>
					    			<option value="2">2 HARI</option>
					    			<option value="3">3 HARI</option>
					    			<option value="4">4 HARI</option>
					    			<option value="5">5 HARI</option>
					    			<option value="6">6 HARI</option>
					    			<option value="7">7 HARI</option>
					  			</select>
				 		</td>
				 	</tr>
				 	<tr>
				 		<td class="style-td">
				 			<label>TANGGAL PINJAM</label></td>
				 		<td class="style-td">
				 			<input type="date" name="tgl_pinjam" style="width: 200px;" class="input-merek" required>
				 		</td>
				 	</tr>
				 	<tr>
				 		<td class="style-td">
				 			<label>TANGGAL PENGEMBALIAN</label></td>
				 		<td class="style-td">
				 			<input type="date" name="tgl_pengembalian" style="width: 200px;" class="input-merek" required>
				 		</td>
				 	</tr>
				 	<tr>
				 		<td><br><br>
				 			<a href="index.php" style="margin-left: 150px;">
				 				<div class="w3-btn w3-indigo w3-round-large" style="width: 100px;" class="input-merek">
				 					Batal
				 				</div>
				 			</a>
				 		</td>
				 		<td></td>

				 		<td><br><br>
				 			<input type="submit" name="masuk" value="Pinjam" class="w3-btn w3-indigo w3-round-large" style="width: 100px;">
				 		</td>
				 	</tr>
			  	</table>
				</form>				
			</div>
		</div>

	</div>		 
</body>
</html>
