<?php 





defined ('BASEPATH') OR Exit ('No Direct script acces allowed');


// Load library phpspreadsheet
require('./vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;


class excel extends CI_Controller{

  //load model

  public function __construct(){

    parent:: __construct();
    $this->load->model('admin_model');

  }

//Exsport ke excel
public function export()
{
$peserta = $this->admin_model->pesertatelahverifikasi();
// Create new Spreadsheet object
$spreadsheet = new Spreadsheet();

// Set document properties
$spreadsheet->getProperties()->setCreator('Dede Husen - IT Specialist')
->setLastModifiedBy('Andoyo - Java Web Medi')
->setTitle('Office 2007 XLSX Test Document')
->setSubject('Office 2007 XLSX Test Document')
->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
->setKeywords('office 2007 openxml php')
->setCategory('Test result file');

// Add some data
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A1', 'PROGRAM')
->setCellValue('B1', 'NAMA LENGKAP')
->setCellValue('C1', 'NAMA ARAB')
->setCellValue('D1', 'NAMA PANGGILAN')
->setCellValue('E1', 'NAMA AYAH')
->setCellValue('F1', 'NAMA AYAH ARAB')
->setCellValue('G1', 'MUHAFIZH/AH')
->setCellValue('H1', 'NO IDENTITAS')
->setCellValue('I1', 'TEMPAT LAHIR')
->setCellValue('J1', 'TANGGAL LAHIR')
->setCellValue('K1', 'USIA')
->setCellValue('L1', 'JENIS KELAMIN')
->setCellValue('M1', 'STATUS PERNIKAHAN')
->setCellValue('N1', 'ALAMAT')
->setCellValue('O1', 'KABUPATEN/KOTA')
->setCellValue('P1', 'PROVINSI')
->setCellValue('Q1', 'KEWARGANEGARAAN')
->setCellValue('R1', 'NO HP')
->setCellValue('S1', 'NO DARURAT')
->setCellValue('T1', 'UKURAN BAJU')

;

// Miscellaneous glyphs, UTF-8
$i=2; foreach($peserta as $peserta) {

$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i, $peserta->program)
->setCellValue('B'.$i, $peserta->nama_lengkap)
->setCellValue('c'.$i, $peserta->nama_lengkap_arab)
->setCellValue('D'.$i, $peserta->nama_panggilan)
->setCellValue('E'.$i, $peserta->nama_ayah)
->setCellValue('F'.$i, $peserta->nama_ayah_arab)
->setCellValue('G'.$i, $peserta->pengajar)
->setCellValue('H'.$i, $peserta->no_identitas)
->setCellValue('I'.$i, $peserta->tempat_lahir)
->setCellValue('J'.$i, $peserta->tanggal_lahir)
->setCellValue('K'.$i, $peserta->usia)
->setCellValue('L'.$i, $peserta->jenis_kelamin)
->setCellValue('M'.$i, $peserta->status_pernikahan)
->setCellValue('N'.$i, $peserta->alamat)
->setCellValue('O'.$i, $peserta->kabupaten)
->setCellValue('P'.$i, $peserta->provinsi)
->setCellValue('Q'.$i, $peserta->kewarganegaraan)
->setCellValue('R'.$i, $peserta->no_handphone)
->setCellValue('S'.$i, $peserta->no_darurat)
->setCellValue('T'.$i, $peserta->ukuran_baju);

$i++;
}

// Rename worksheet
$spreadsheet->getActiveSheet()->setTitle('Data Peserta Fix '.date('d-m-Y H'));

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Xlsx)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Data Peserta Karantina Fix.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header('Pragma: public'); // HTTP/1.0

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
exit;
}

}







?>