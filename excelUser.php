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
    ->setTitle("Office 2007 XLSX Data User")
    ->setSubject("Office 2007 XLSX Data User")
    ->setDescription("Data User for Office 2007 XLSX Roqib Abdillah.")
    ->setKeywords("office 2007 openxml php Roqib Abdillah")
    ->setCategory("Test result file Roqib Abdillah");

// Set judul
$spreadsheet->getActiveSheet()->mergeCells('B2:G2');
$spreadsheet->setActiveSheetIndex(0)->setCellValue('B2', 'Laporan Data User Pajak');
$spreadsheet->getActiveSheet()->getStyle('B2:G4')
    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

// Font style
$spreadsheet->getDefaultStyle()->getFont()->setName('Arial');

//Font Color
$spreadsheet->getActiveSheet()->getStyle('B4:G4')
    ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
$spreadsheet->getActiveSheet()->getStyle('B2:G4')->getFont()->setBold(true);

// Background color
$spreadsheet->getActiveSheet()->getStyle('B4:G4')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('FFFF0000');

// sheet pertama
$spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('B4', 'No NPWP')
    ->setCellValue('C4', 'Nama Lengkap')
    ->setCellValue('D4', 'Jenis Kelamin')
    ->setCellValue('E4', 'Agama')
    ->setCellValue('F4', 'Pekerjaan')
    ->setCellValue('G4', 'Alamat');

// membaca data dari mysql
$printer = mysqli_query($connect, "SELECT * FROM userpajak");
$row = 5;
while ($record = mysqli_fetch_array($printer)) {
    $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('B' . $row, $record['no_npwp'])
        ->setCellValue('C' . $row, $record['nama_lengkap'])
        ->setCellValue('D' . $row, $record['jenis_kelamin'])
        ->setCellValue('E' . $row, $record['agama'])
        ->setCellValue('F' . $row, $record['pekerjaan'])
        ->setCellValue('G' . $row, $record['alamat']);
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
$spreadsheet->getActiveSheet()->getStyle('B4:G' . $row)->applyFromArray($styleArray);
$spreadsheet->getActiveSheet()->getStyle('B2:G2')->applyFromArray($styleArray);


// Mengatur ukuran colomn cell secara otomatis
$spreadsheet->getActiveSheet(0)->getColumnDimension('B')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('C')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('D')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('E')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('F')->setAutoSize(true);
$spreadsheet->getActiveSheet(0)->getColumnDimension('G')->setAutoSize(true);

// name worksheet
$spreadsheet->getActiveSheet()->setTitle('Data User Pajak ' . date('d-m-Y H'));

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);

// redirect output to client browser
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data-user-pajak.xlsx"');
header('Cache-Control: max-age=0');

$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
