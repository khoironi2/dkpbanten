<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $title; ?></title>
<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: 12px;
    }
    .gray {
        background-color: lightgray
    }
</style>
</head>
<body>
  <table width="100%">
    <tr>
        <td valign="top"><?= $logo; ?></td>
        <td align="right">
          <?php if (empty($pengajuan->judul_pengajuan) ){ ?>
          <h3>Judul masih kosong</h3>
          <?php } else { ?>
          <h3><?= $pengajuan->judul_pengajuan ?></h3>
          <?php } ?>            
            <pre>
                Politeknik AKBARA Surakarta
                Jl. Sumbing Raya, Mojosongo, Jebres, Surakarta
                WA. 085640490980
                Telp. 02718591185
                Fax. 0271664881
                Email. akbara.surakarta@gmail.com
            </pre>
        </td>
    </tr>
  </table>
  <table width="100%">
    <tr>
        <td><strong>A. Latar Belakang </strong>
          <?php if (empty($pengajuan->latar_belakang_pengajuan) ){ ?>
          <p>Data masih kosong</p>
          <?php } else { ?>
          <h4 style="font-size: 30px"><?= $pengajuan->latar_belakang_pengajuan; ?></h4>
          <?php } ?>
        </td>
    </tr>
    <tr>
        <td><strong>B. Tujuan </strong>
          <?php if (empty($pengajuan->tujuan_pengajuan) ){ ?>
          <p>Data masih kosong</p>
          <?php } else { ?>
          <?= $pengajuan->tujuan_pengajuan; ?>
          <?php } ?>
        </td>
    </tr> 
    <tr>
        <td><strong>C. Manfaat </strong>
          <?php if (empty($pengajuan->manfaat_pengajuan) ){ ?>
          <p>Data masih kosong</p>
          <?php } else { ?>
          <?= $pengajuan->manfaat_pengajuan; ?>
          <?php } ?>
        </td>
    </tr>
    <tr>
        <td><strong>D. Jenis </strong>
          <?php if (empty($pengajuan->jenis_pengajuan) ){ ?>
          <p>Data masih kosong</p>
          <?php } else { ?>
          <?= $pengajuan->jenis_pengajuan; ?>
          <?php } ?>
        </td>
    </tr>
    <tr>
        <td><strong>E. Biaya </strong>
          <?php if (empty($pengajuan->biaya_pengajuan) ){ ?>
          <p>Data masih kosong</p>
          <?php } else { ?>
          <?= $pengajuan->biaya_pengajuan; ?>
          <?php } ?>
        </td>
    </tr>
    <tr>
        <td><strong>F. Waktu Pengajuan </strong>
          <?php if (empty($pengajuan->waktu_pengajuan_awal) ){ ?>
          <p>Data masih kosong</p>
          <?php } else { ?>
          Dari <?= $pengajuan->waktu_pengajuan_awal; ?> Sampai <?= $pengajuan->waktu_pengajuan_awal; ?>
          <?php } ?>
        </td>
    </tr> 
    <tr>
        <td><strong>G. Peserta </strong>
          <?php if (empty($pengajuan->peserta_pengajuan) ){ ?>
          <p>Data masih kosong</p>
          <?php } else { ?>
          <?= $pengajuan->peserta_pengajuan; ?>
          <?php } ?>
        </td>
    </tr>    
    <tr>
        <td><strong>H. Penutup </strong>
          <?php if (empty($pengajuan->penutup_pengajuan) ){ ?>
          <p>Data masih kosong</p>
          <?php } else { ?>
          <?= $pengajuan->penutup_pengajuan; ?>
          <?php } ?>
        </td>
    </tr>
  </table>
 
  <table style="margin-top: 80" width="100%">
    <thead>
      <tr>
        <th>Dirumuskan Oleh</th>
        <th>Diperiksa Oleh</th>
        <th>Ditetapkan Oleh</th>
        <th>Dikendalikan Oleh</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="text-align: center;"><?= $pengajuan->nama_pembuat; ?></td>
        <td style="text-align: center;"><?= $pengajuan->nama_pemeriksa; ?></td>
        <td style="text-align: center;"><?= $pengajuan->nama_penetap; ?></td>
        <td style="text-align: center;"><?= $pengajuan->nama_pengendali; ?></td>
      </tr>
      <tr>
          <td style="text-align: center;"><?= $pengajuan->nama_jabatan_perumus; ?></td>
          <td style="text-align: center;"><?= $pengajuan->nama_jabatan_pemeriksa; ?></td>
          <td style="text-align: center;"><?= $pengajuan->nama_jabatan_penetap; ?></td>
          <td style="text-align: center;"><?= $pengajuan->nama_jabatan_pengendali; ?></td>
      </tr>
      <tr>
           <td style="text-align: center;"><?= $ttdg; ?></td>
          <td style="text-align: center;"><?= $ttdg; ?></td>
           <td style="text-align: center;"><?= $ttdg; ?></td>
           <td style="text-align: center;"><?= $ttdg; ?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>