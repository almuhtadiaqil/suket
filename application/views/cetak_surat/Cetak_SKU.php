<?php
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
function getRomawi($bln)
{
    switch ($bln) {
        case 1:
            return "I";
            break;
        case 2:
            return "II";
            break;
        case 3:
            return "III";
            break;
        case 4:
            return "IV";
            break;
        case 5:
            return "V";
            break;
        case 6:
            return "VI";
            break;
        case 7:
            return "VII";
            break;
        case 8:
            return "VIII";
            break;
        case 9:
            return "IX";
            break;
        case 10:
            return "X";
            break;
        case 11:
            return "XI";
            break;
        case 12:
            return "XII";
            break;
    }
}

$this->load->library('pdf');
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetTitle('Cetak - Surat Keterangan Usaha');
$pdf->SetSubject('Surat Keterangan Usaha');
$pdf->SetMargins(15, 18, 15, 18);

//Kop surat
$pdf->Image('assets/user/images/munding.png', 10, 8, 25, 25);
$pdf->SetFont('Times', 'B', 14);
$pdf->setY(10);
$pdf->setX(40);
$pdf->Cell(0, 6, 'PEMERINTAH KABUPATEN GARUT', 0, 1, 'C');
$pdf->SetFont('Times', '', 14);
$pdf->setY(15);
$pdf->setX(40);
$pdf->Cell(0, 6, 'KECAMATAN GARUT KOTA', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 24);
$pdf->setY(22);
$pdf->setX(40);
$pdf->Cell(0, 6, 'KELURAHAN MUARASANDING', 0, 1, 'C');
$pdf->SetFont('Times', '', 14);
$pdf->setY(28);
$pdf->setX(40);
$pdf->Cell(0, 6, 'JL. CIMANUK NO.11 TELP. (0262) 541503 KODE POS 44119-GARUT', 0, 3, 'C');
$pdf->SetLineWidth(1);
$pdf->Line(10, 38, 200, 38);
$pdf->ln(10);

//Awalan surat
$pdf->AddFont('Calbold', '', 'calbold.php');
$pdf->SetFont('Calbold', 'U', 14);
$pdf->setY(40);
$pdf->setX(22);
$pdf->Cell(0, 6, 'SURAT KETERANGAN USAHA', 0, 1, 'C');
$pdf->AddFont('Calreg', '', 'calreg.php');
$pdf->SetFont('Calreg', '', 12);
$pdf->setY(45);
$pdf->setX(22);
$pdf->Cell(0, 6, 'NOMOR  : 145/2428 - Kel/2020', 0, 1, 'C');
$pdf->SetFont('Calreg', '', 12);
$pdf->setY(55);
$pdf->setX(30);
$pdf->Cell(0, 6, 'Yang  bertanda  tangan  dibawah  ini  Kepala   Kelurahan   Muarasanding   Kecamatan   Garut   Kota', 0, 1, 'L');
$pdf->setY(60);
$pdf->setX(9);
$pdf->SetFont('Calreg', '', 12);
$pdf->Cell('0', 6, 'Kabupaten Garut, menerangkan bahwa :', 0, 1, 'L');
$pdf->ln(8);

// // Isi Tabel
foreach ($sku as $surat) {
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(70);
    $pdf->setX(30);
    $pdf->Cell(0, 6, 'Nama', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(70);
    $pdf->setX(74);
    $pdf->Cell(0, 6, ' : ', 0, 0, 'L');
    $pdf->setY(70);
    $pdf->setX(80);
    $pdf->SetFont('Calbold', '', 12);
    $pdf->Cell(250, 6, $surat->nama, 0, 1, 'L');

    $pdf->setY(78);
    $pdf->setX(15);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6, '                Jenis Kelamin', 0, 0, 'L');
    $pdf->setY(78);
    $pdf->setX(75);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, ':', 0, 0, 'L');
    $pdf->setY(78);
    $pdf->setX(80);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, $surat->jenis_kelamin, 0, 1, 'L');

    $pdf->setY(86);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6, 'Tempat Tanggal Lahir', 0, 0, 'L');
    $pdf->SetFont('Calreg', '', 12);
    $pdf->setY(86);
    $pdf->setX(75);
    $pdf->Cell(0, 6, ':', 0, 0, 'L');
    $pdf->setY(86);
    $pdf->setX(80);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, $surat->tempat_lahir . ', ' . $surat->tanggal_lahir, 0, 1, 'L');

    $pdf->setY(94);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, 'Agama', 0, 0, 'L');
    $pdf->setY(94);
    $pdf->setX(75);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, ':', 0, 0, 'L');
    $pdf->setY(94);
    $pdf->setX(80);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, $surat->agama, 0, 1, 'L');

    $pdf->setY(102);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell('0', 6, 'Pekerjaan', 0, 0, 'L');
    $pdf->setY(102);
    $pdf->setX(75);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, ':', 0, 0, 'L');
    $pdf->setY(102);
    $pdf->setX(80);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, $surat->pekerjaan, 0, 1, 'L');

    $pdf->setY(110);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, 'Alamat', 0, 0, 'L');
    $pdf->setY(110);
    $pdf->setX(75);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, ':', 0, 0, 'L');
    $pdf->setY(110);
    $pdf->setX(80);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, $surat->alamat . ' RT ' . $surat->rt . ' RW ' . $surat->rw, 0, 1, 'L');
    $pdf->setY(118);
    $pdf->setX(80);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(247, 6, 'Kel. ' . $surat->kelurahan . ' Kec. ' . $surat->kecamatan . ' Kab. ' . $surat->kab_kota, 0, 1, 'L');
    $pdf->ln(10);

    //penutup
    $pdf->setY(128);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, 'Adalah   benar   warga   kami   dan  berdasarkan  Keterangan   dari   yang   bersangkutan   dan   dari', 0, 1, 'L');
    $pdf->setY(133);
    $pdf->setX(9);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, 'RT/RW   nya   serta   hasil   kenelitian   kami   bahwa  yang  bersangkutan  benar  mempunyai  usaha  Servis  Jual ', 0, 1, 'L');
    $pdf->setY(138);
    $pdf->setX(9);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, 'Beli Komputer.', 0, 1, 'L');

    $pdf->setY(146);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, 'Surat    keterangan    ini     dipergunakan     untuk     Melengkapi    persyaratan  ', 0, 0, 'L');
    $pdf->setY(146);
    $pdf->SetX(166);
    $pdf->SetFont('Calbold', '', 12);
    $pdf->Cell(0, 6, 'Bantuan Pemulihan', 0, 1, 'L');
    $pdf->setY(151);
    $pdf->setX(9);
    $pdf->SetFont('Calbold', '', 12);
    $pdf->Cell(0, 6, 'Ekonomi.', 0, 1, 'L');

    $pdf->setY(159);
    $pdf->setX(30);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, 'Demikian    keterangan   ini   kami   berikan    kepada   yang   berkepentingan   untuk   dipergunakan ', 0, 1, 'L');
    $pdf->setY(164);
    $pdf->setX(9);
    $pdf->SetFont('Calreg', '', 12);
    $pdf->Cell(0, 6, 'sebagaimana mestinya.', 0, 1, 'L');
    $pdf->ln(30);

    //titimangsa
    $pdf->SetFont('Times', '', 12);
    $pdf->ln();
    $pdf->setY(200);
    $pdf->setX(125);
    $pdf->Cell(20, 5, 'Garut, ' . tgl_indo($surat->tgl_ajukan_surat), 0, 0);

    $pdf->setY(205);
    $pdf->setX(125);
    $pdf->Cell(20, 5, "Kepala Kelurahan Muarasanding", 0, 0);

    $pdf->SetFont('Times', 'BU', 12);
    $pdf->setY(240);
    $pdf->setX(135);
    $pdf->Cell(20, 5, "SALAHUDIN, S.IP.", 0, 0);

    $pdf->SetFont('Times', '', 12);
    $pdf->setY(245);
    $pdf->setX(130);
    $pdf->Cell(20, 5, 'NIP. 197006042007011011', 0, 0);
}

$pdf->Output();
