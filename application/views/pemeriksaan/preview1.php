<?php
$pdf = new FPDF("L", "cm", "A4");

$pdf->SetMargins(2, 1, 1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
//$pdf->Image('assets/img/logo_puskesmas.png', 2.5, 0.5, 3, 2.5);
$pdf->SetX(8);
$pdf->MultiCell(19.5, 0.7, "PEMERINTAH KOTA TIDORE KEPULAUAN", 0, 'C');
$pdf->SetFont('Times', 'B', 14);
$pdf->SetX(8);
$pdf->MultiCell(19.5, 0.7, "UPT PUSKESMAS TALAGAMORI", 0, 'C');
$pdf->SetFont('Times', '', 12);
$pdf->SetX(8);
$pdf->MultiCell(19.5, 0.7, '' . $alamat . '', 0, 'C');
$pdf->Line(2, 3.1, 31, 3.1);
$pdf->SetLineWidth(0.1);
$pdf->Line(2, 3.2, 31, 3.2);
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Times', 'B', 11);
$pdf->MultiCell(31, 0.7, "DATA REKAM MEDIS", 0, 'C');
$pdf->SetFont('Times', '', 10);
$pdf->MultiCell(31, 0.7, '' . $ket . '', 0, 'C');
foreach ($nama_pasien as $n) {
    $pdf->MultiCell(31, 0.7, '' . $n->nama_pasien . '', 0, 'C');
}
$pdf->SetFont('Times', '', 10);
$pdf->Cell(5, 0.6, "Di cetak pada : " . date("d/m/Y"), 0, 0, 'C');
$pdf->ln(1);

$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(3.5, 0.8, 'TANGGAL', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'KODE PERIKSA', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'KELUHAN', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'DIAGNOSIS', 1, 0, 'C');
$pdf->Cell(10, 0.8, 'TINDAKAN', 1, 0, 'C');
$pdf->ln();

if (!empty($pemeriksaan)) {
    $no = 1;
    foreach ($pemeriksaan as $data) {
        $pdf->SetFont('Times', '', 10);
        $pdf->Cell(1, 0.6, $no++, 1, 0, 'C');
        $pdf->Cell(3.5, 0.6, date('d-m-Y', strtotime($data['tanggal'])), 1, 0, 'C');
        $pdf->Cell(2.5, 0.6, $data['id_periksa'], 1, 0, 'L');
        $pdf->Cell(6, 0.6, $data['keluhan'], 1, 0, 'L');
        $pdf->Cell(6, 0.6, $data['diagnosa'], 1, 0, 'L');
        $pdf->Cell(10, 0.6, $data['tindakan'], 1, 0, 'L');
        $pdf->ln();
    }
}

$pdf->Output("Laporan Rekam Medis Perpasien.pdf", "I");
