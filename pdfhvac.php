<?php
		include 'koneksi.php';
		require'fpdf.php';
 		define ('fpdf_fontpath','fpdf/font/');
  
		$pdf = new FPDF('P','mm','A4');//P atau L = orientasi kertas, mm = ukuran, A4 = jenis kertas
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',14);//Arial = jenis huruf, B = format huruf, 10 = ukuran
		//$pdf->Cell(40,10,'',1);//40 = panjang, 10 = tinggi, 1 = tingkat ketebalan garis
		$pdf->SetTextColor(147,9,166,1.00);//warna judul
		$pdf->Cell(190,10,'Tabel Asset HVAC',0,0,'C');
		$pdf->Ln(10);//Ln = pindah baris
		$pdf->SetFont('Arial','B',10,'C');
		$pdf->SetTextColor(255,255,255,1.00);//warna isi
		$pdf->SetFillColor(147,9,166,1.00);
		$pdf->Cell(10,10,'NO',1,0,'C','C');
		$pdf->Cell(30,10,'Kode Asset',1,0,'C','C');
		$pdf->Cell(40,10,'Nama Asset',1,0,'C','C');
		$pdf->Cell(40,10,'Type',1,0,'C','C');
		$pdf->Cell(30,10,'Kapasitas (kW)',1,0,'C','C');
		$pdf->Cell(40,10,'Manufacture Date',1,0,'C','C');
		
		//pindah baris
		$pdf->Ln(10);
 
		$no = 1;
 
$hvac=mysqli_query($link,"select * from hvac ORDER BY kode_asset ASC");
while($data = mysqli_fetch_array($hvac)){
			$pdf->SetTextColor(147,9,166,1.00);
			$pdf->Cell(10,10, $no, 1,0,'C');
			$pdf->Cell(30,10, $data["kode_asset"],1,0,'C');
			$pdf->Cell(40,10, $data["nama_asset"],1,0,'C');
			$pdf->Cell(40,10, $data["type"],1,0,'C');
			$pdf->Cell(30,10, $data["kapasitas"],1,0,'C');
			$pdf->Cell(40,10, $data["tanggal"],1,0,'C');
 			
			$pdf->Ln(10);
			$no++;
 
		}
 
 
 
		//cetak
		$pdf->Output();