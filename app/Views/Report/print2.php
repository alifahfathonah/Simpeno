<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Print</title>
</head>
<style>
    table {

        border-collapse: collapse;
    }
</style>

<body>
    <table width="100%">
        <tr style="font-size: 10pt;">
            <td width="7%">Nama PPAT</td>

            <td align="left">: SILVIA ABBAS, S.H, Sp.N</td>


            <td>KEPADA YTH :</td>
        </tr>
        <tr style="font-size: 10pt;">
            <td width="7%">Alamat</td>

            <td align="left">: Ruko mutiara kosambi I,<br> Jl raya prancis, Blok A No. 1, Tangerang Banten</td>
            <td>1. Kepala Kantor Pertanahan Nasional Kabupaten Tangerang</td>


        </tr>
        <tr style="font-size: 10pt;">
            <td width="7%">NPWP</td>

            <td align="left">: 09.307.337.7-418.000</td>


            <td>2. Kepala Kantor Wilayah Badan Pertanahan Nasional Propinsi Banten</td>
        </tr>
        <tr style="font-size: 10pt;">
            <td width="7%">Wilayah Kerja</td>

            <td align="left">: Kabupaten Tangerang dan semua kecamatan<br>yang ada di kabupaten Tangerang</td>


            <td>3. Kantor Pelayanan Pajak Pratama Kosambi</td>
        </tr>

        <!-- <tr>
            <td align="center">
                <span style="line-height:1.6; font-weight:bold;">
                    KANTOR NOTARIS & P.P.A.T<br />SILVIA ABBAS, S.H, Sp.N<br />Ruko mutiara kosambi I, Jl raya prancis, Blok A No. 1, Tangerang Banten
                </span>
            </td>
        </tr> -->
    </table>


    <h4 align="center">LAPORAN BULANAN PEMBUATAN AKTA OLEH PPAT</h4>
    <h4 align="center">Bulan <?php echo date('F Y') ?></h4>
    <table width="100%" border="2" cellpadding="0">
        <thead>
            <tr>
                <th rowspan="2" width="1%">Nomor Urut</th>
                <th colspan="2" width="13%">AKTA</th>
                <th rowspan="2" width="5%">Bentuk Perbuatan Hukum</th>
                <th colspan="2" width="38%">Nama dan npwp</th>
                <th rowspan="2">Jenis Dan Nomor Hak</th>
                <th rowspan="2">Letak Tanah Dan Bangunan</th>
                <th colspan="2" width="13%">Luas m²</th>
                <th rowspan="2">Harga Transaksi perolehan pengalihan Hak (Rp.000)</th>
            </tr>
            <tr>
                <th>Nomor</th>
                <th>Tanggal</th>
                <th width="20%">Pihak yang mengalihkan / memberikan</th>
                <th>Pihak yang menerima</th>
                <th width="6%">Tanah</th>
                <th>Bangunan</th>
            </tr>

            <!-- <th>Lahir</th> -->


        </thead>
        <tbody>
            <?php foreach ($Ppat as $row) : ?>
                <tr>
                    <td align="center"><?= $row['no_urut'] ?></td>
                    <td align="center"><?= $row['no_akta'] ?></td>
                    <td align="center"><?= ($row['tgl_akta'] != '0000-00-00') ? date('d-m-Y', strtotime($row['tgl_akta'])) : '' ?></td>
                    <td align="center"><?= $row['bentuk_perbuatan'] ?></td>
                    <td align="center"><?= $row['pihak_pemberi'] . '<br>' . 'QQ. ' . $row['nama_pt'] . '<br>' . $row['alamat_pemberi'] ?></td>

                    <td align="center"><?= $row['pihak_penerima'] . '<br>'  . $row['alamat_penerima'] ?></td>
                    <td align="center"><?= $row['jenis_no_hak'] ?></td>
                    <td align="center"><?= $row['letak_tanah_bangunan'] ?></td>
                    <td align="center"><?= $row['luas_tanah'] . 'm²' ?></td>
                    <td align="center"><?= $row['luas_bangunan'] . 'm²' ?></td>
                    <td align="center"><?= $row['harga_pengalihan'] ?></td>



                </tr>
            <?php endforeach ?>

        </tbody>

    </table>
    <br>
    <table width="100%">
        <tr align="right">
            <td><?php date_default_timezone_set('Asia/jakarta');
                echo date('d F Y') ?></td>
        </tr>
        <tr align="right" style="font-size: 8;">
            <td><b>Pejabat Pembuat Akta Tanah</b></td>
        </tr>

    </table>
    <br>
    <br>
    <br>
    <table width="100%">
        <tr align="right">
            <td><b>Silvia Abbas Sudrajat, S.H, Sp.N</b></td>
        </tr>
    </table>
</body>

</html>