<?php 
// panggil file config.php untuk koneksi ke database
require_once "config/config.php";
// panggil fungsi untuk format tanggal
include "config/fungsi_tanggal.php";

header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("content-disposition: attachment;filename=DATA-RUMAH.xls");
?>

<!-- Buat Table saat di Export Ke Excel -->
<center>
    <h3>DATA RUMAH</h3>
</center>

<table border='1'>
    <h3>
        <thead>
            <tr>
                <th align="center" valign="middle">No.</th>
                <th align="center" valign="middle">N0MER RUMAH</th>
                <th align="center" valign="middle">Nama Penghuni</th>
                <th align="center" valign="middle">STATUS, Tanggal Lahir</th>
                <th align="center" valign="middle">Jenis Kelamin</th>
                <th align="center" valign="middle">Agama</th>
                <th align="center" valign="middle">SEBAGAI</th>
                <th align="center" valign="middle">No. Hp</th>
            </tr>
        </thead>
    </h3>

    <tbody>
        <?php  
    $no = 1;
    // fungsi query untuk menampilkan data dari tabel pegawai
    $result = $mysqli->query("SELECT * FROM pegawai ORDER BY nip ASC")
                              or die('Ada kesalahan pada query tampil data pegawai: '.$mysqli->error);
    $rows = $result->num_rows;
    // jika data ada, tampilkan data
    if ($rows > 0) {
        while ($data = $result->fetch_assoc()) { ?>
        <tr>
            <td align="center" valign="top"><?php echo $no; ?></td>
            <td align="center" valign="top"><?php echo $data["nip"]; ?></td>
            <td valign="top"><?php echo $data["nama_pegawai"]; ?></td>
            <td valign="top"><?php echo $data["tempat_lahir"]; ?>,
                <?php echo date('d-m-Y', strtotime($data['tanggal_lahir'])); ?></td>
            <td align="center" valign="top"><?php echo $data["jenis_kelamin"]; ?></td>
            <td align="center" valign="top"><?php echo $data["agama"]; ?></td>
            <td valign="top"><?php echo $data["alamat"]; ?></td>
            <td align="center" valign="top">'<?php echo $data["no_hp"]; ?></td>
        </tr>
        <?php
			$no++;
		}
	// jika data tidak ada, tampilkan tabel kosong
	} else { ?>
        <tr>
            <td align="center" valign="top"></td>
            <td align="center" valign="top"></td>
            <td valign="top"></td>
            <td valign="top"></td>
            <td align="center" valign="top"></td>
            <td align="center" valign="top"></td>
            <td valign="top"></td>
            <td align="center" valign="top"></td>
        </tr>
        <?php
	}
	?>
    </tbody>
</table>
<script>
window.print();
</script>