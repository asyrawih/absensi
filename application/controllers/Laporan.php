<?php
defined('BASEPATH') or exit('No direct script access allowed');
// load autoload dari compser 

require "vendor/autoload.php";
// Lib Excel ; 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Laporan extends CI_Controller
{


  public function index()
  {
    $data['title'] = "Laporan";

    

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidenav', $data);
    $this->load->view('templates/navbar');
    $this->load->view('laporan/index');
    $this->load->view('templates/footer');
  }
  public function export()
  {

    $helper = new Sample();
    if ($helper->isCli()) {
      $helper->log('This example should only be run from a Web Browser' . PHP_EOL);

      return;
    }

    $ex = new Spreadsheet();
    $ex->setActiveSheetIndex(0)
      ->setCellValue('A1', 'No ')
      ->setCellValue('B1', 'NIS ')
      ->setCellValue('C1', 'NAMA ');


    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . uniqid() . 'export.xlsx"');
    header('Cache-Control: max-age=0');
    // If you're serving to IE 9, then the following may be needed
    header('Cache-Control: max-age=1');

    // If you're serving to IE over SSL, then the following may be needed
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
    header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header('Pragma: public');

    $writer = IOFactory::createWriter($ex, 'Xlsx');
    $writer->save('php://output');
    exit;
  }
}

/* End of file Laporan.php */
