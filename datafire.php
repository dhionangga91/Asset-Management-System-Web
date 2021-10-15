<center>TABEL ASSET FIRE FIGHTING</center>
		 	 <table border="1" bordercolor="#9F059E" style="margin: 0 auto; color:#9F059E ; border-style: solid">
      <tr>
     <th width="50px" bgcolor="#9F059E"><center><font color="white">No</font></center></th>
        <th width="100px" bgcolor="#9F059E"><center><font color="white">Kode Asset</font></center></th>
        <th width="200px" bgcolor="#9F059E"><center><font color="white">Nama Asset</font></center></th>
        <th width="150px" bgcolor="#9F059E"><center><font color="white">Type</font></center></th>
        <th width="150px" bgcolor="#9F059E"><center><font color="white">Kapasitas (kW)</font></center>/th>
		  <th width="100px" bgcolor="#9F059E"><center><font color="white">Manufacture Date</font></center></th>
      </tr>
      <?php
	 // memanggil file koneksi.php untuk melakukan koneksi database
  		include '../UAS/koneksi.php';
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM fire ORDER BY kode_asset ASC";
      $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      //buat perulangan untuk element tabel dari data fire
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td><center>$no</center></td>"; //menampilkan no urut
        echo "<td><center>$data[kode_asset]</center></td>"; //menampilkan data kode
        echo "<td><center>$data[nama_asset]</center></td>"; //menampilkan data nama
        echo "<td><center>$data[type]</center></td>"; //menampilkan data type
		echo "<td><center>$data[kapasitas]</center></td>"; //menampilkan data kapasitas
		echo "<td><center>$data[tanggal]</center></td>";		
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
    </table>
		