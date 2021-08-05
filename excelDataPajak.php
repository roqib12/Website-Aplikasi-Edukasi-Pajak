<?php

// Menghubungkan dengan library phpspreadsheet
require 'vendor/autoload.php';

// menghubungkan dengan koneksi file database
include 'dbconnect.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
// akhir library phpspreadsheet

// membuat object class baru
$spreadsheet = new Spreadsheet();
$spreadsheet->getActiveSheet();

// Membuat properti dokumen
$spreadsheet->getProperties()
    ->setCreator("Roqib Abdillah")
    ->setLastModifiedBy("Roqib Abdillah")
    ->setTitle("Office 2007 XLSX Data Pajak")
    ->setSubject("Office 2007 XLSX Data Pajak")
    ->setDescription("Data Pajak for Office 2007 XLSX Roqib Abdillah.")
    ->setKeywords("office 2007 openxml php Roqib Abdillah")
    ->setCategory("Test result file Roqib Abdillah");

// Set judul
$spreadsheet->getActiveSheet()->mergeCells('B2:L2');
$spreadsheet->setActiveSheetIndex(0)->setCellValue('B2', 'Laporan Data Pajak');
$spreadsheet->getActiveSheet()->getStyle('B2:L4')
    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

// Font style
$spreadsheet->getDefaultStyle()->getFont()->setName('Arial');

//Font Color
$spreadsheet->getActiveSheet()->getStyle('B4:L4')
    ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
$spreadsheet->getActiveSheet()->getStyle('B2:L4')->getFont()->setBold(true);

// Background color
$spreadsheet->getActiveSheet()->getStyle('B4:L4')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('FFFF0000');

// sheet pertama
$spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('B4', 'Hasil Bruto')
    ->setCellValue('C4', 'Biaya Jabatan')
    ->setCellValue('D4', 'Bruto Setahun')
    ->setCellValue('E4', 'Jabatan Setahun')
    ->setCellValue('F4', 'Iuran Setahun')
    ->setCellValue('G4', 'Pengurang Setahun')
    ->setCellValue('H4', 'Hasil Neto')
    ->setCellValue('I4', 'Neto Setahun')
    ->setCellValue('J4', 'PTKP')
    ->setCellValue('K4', 'PKP')
    ->setCellValue('L4', 'PKP21');

// membaca data dari mysql
$printer = mysqli_query($connect, "SELECT * FROM pph21");
$row = 5;
while ($record = mysqli_fetch_array($printer)) {
    $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('B' . $row, $record['hasilBruto'])
        ->setCellValue('C' . $row, $record['biayaJabatan'])
        ->setCellValue('D' . $row, $record['brutoSetahun'])
        ->setCellValue('E' . $row, $record['jabatanSetahun'])
        ->setCellValue('F' . $row, $record['iuranSetahun'])
        ->setCellValue('G' . $row, $record['pengurangSetahun'])
        ->setCellValue('H' . $row, $record['hasilNeto'])
        ->setCellValue('I' . $row, $record['netoSetahun'])
        ->setCellValue('J' . $row, $record['ptkp'])
        ->setCellValue('K' . $row, $record['pkp'])
        ->setCellValue('L' . $row, $record['pkp21']);
    $row++;
}

// Membuat border tabel
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$row = $row - 1;
$spreadsheet->getActiveSheet()->getStyle('B4:L' . $row)->applyFromArray($styleArray);
$spreadsheet->getActiveSheet()->getStyle('B2:L2')->applyFromArray($styleArray);


// Mengatur ukuran colomn cell secara otomatis
$spreadsheet->getActiveSheet(0)->getColumnDimension('B')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('C')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('D')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('E')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('F')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('G')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('H')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('I')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('J')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('K')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('L')->setAutoSize(true);

// name worksheet
$spreadsheet->getActiveSheet()->setTitle('Data Pajak ' . date('d-m-Y H'));

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);

// redirect output to client browser
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data-pajak.xlsx"');
header('Cache-Control: max-age=0');

$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
