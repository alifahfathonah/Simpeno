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
    <img src="assets/img/logo.png" style="width:60px; height:auto; position:absolute;">
    <table width="100%">
        <tr>
            <td align="center">
                <span style="line-height:1.6; font-weight:bold;">
                    KANTOR NOTARIS & P.P.A.T<br />SILVIA ABBAS, S.H, Sp.N<br />Ruko mutiara kosambi I, Jl raya prancis, Blok A No. 1, Tangerang Banten
                </span>
            </td>
        </tr>
    </table>

    <hr />

    <h4 align="center">Data Notaris <?php echo date('F Y') ?></h4>
    <table width="100%" border="2" cellpadding="0">
        <thead>
            <tr>
                <th>Nomor Urut</th>
                <th>Nomor Bulanan</th>
                <th>Tanggal Akta</th>
                <th>Sifat Akta</th>
                <!-- <th>Lahir</th> -->
                <th>Nama Penghadap dan atau yang diwakili / kuasa</th>
                <th>Nomor Penyimpanan</th>
            </tr>

        </thead>
        <tbody>
            <?php foreach ($notaris as $row) : ?>
                <tr>
                    <td align="center"><?= $row['nomor_urut'] ?></td>
                    <td align="center"><?= $row['no_bulan'] ?></td>
                    <td align="center"><?= ($row['tgl_akta'] != '0000-00-00') ? date('d-m-Y', strtotime($row['tgl_akta'])) : '' ?></td>
                    <td align="center"><?= $row['sifat_akta'] . '<br>' . $row['nama_pt'] ?></td>

                    <td align="center"><?= $row['nama_penghadap_1']  . '<br>QQ. ' . $row['nama_pt'] . '<br>' . $row['nama_penghadap_2'] . '<br>' . $row['nama_penghadap_3'] ?></td>
                    <td align="center"><?= $row['no_penyimpanan'] ?></td>


                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>