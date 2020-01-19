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
->setCellValue('G1', 'NOMOR SYAHADAH')
->setCellValue('H1', 'NAMA SYAHADAH')
->setCellValue('I1', 'PEROLEHAN')
->setCellValue('J1', 'NILAI')
->setCellValue('K1', 'MUHAFIZH/AH')
->setCellValue('L1', 'NO IDENTITAS')
->setCellValue('M1', 'TEMPAT LAHIR')
->setCellValue('M1', 'TANGGAL LAHIR')
->setCellValue('O1', 'USIA')
->setCellValue('P1', 'JENIS KELAMIN')
->setCellValue('Q1', 'STATUS PERNIKAHAN')
->setCellValue('R1', 'ALAMAT')
->setCellValue('S1', 'KABUPATEN/KOTA')
->setCellValue('T1', 'PROVINSI')
->setCellValue('U1', 'KEWARGANEGARAAN')
->setCellValue('V1', 'NO HP')
->setCellValue('W1', 'NO DARURAT')
->setCellValue('X1', 'UKURAN BAJU')

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
->setCellValue('G'.$i, $peserta->nomor_syahadah)
->setCellValue('H'.$i, $peserta->nama_syahadah)
->setCellValue('I'.$i, $peserta->perolehan)
->setCellValue('J'.$i, $peserta->nilai_syahadah)
->setCellValue('K'.$i, $peserta->nama_p)
->setCellValue('L'.$i, $peserta->no_identitas)
->setCellValue('M'.$i, $peserta->tempat_lahir)
->setCellValue('N'.$i, $peserta->tanggal_lahir)
->setCellValue('O'.$i, $peserta->usia)
->setCellValue('P'.$i, $peserta->jenis_kelamin)
->setCellValue('Q'.$i, $peserta->status_pernikahan)
->setCellValue('R'.$i, $peserta->alamat)
->setCellValue('S'.$i, $peserta->kabupaten)
->setCellValue('T'.$i, $peserta->provinsi)
->setCellValue('U'.$i, $peserta->kewarganegaraan)
->setCellValue('V'.$i, $peserta->no_handphone)
->setCellValue('W'.$i, $peserta->no_darurat)
->setCellValue('X'.$i, $peserta->ukuran_baju);

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