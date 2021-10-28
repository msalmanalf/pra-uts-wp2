<html>
  <head>
    <title>Form Tambah - CRUD Codeigniter</title>
  </head>
  <body bgcolor="lightgrey">
    <h1 align="center">Form Tambah Data Mahasiswa</h1>
    <hr>
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("mahasiswa/tambah"); ?>
    <table border=0 width="45%" cellpadding="5" cellspacing="0">
        <tr bgcolor="black">
            <td Colspan="3" align="left">
                <H3 style="color: white;">TAMBAH DATA MAHASISWA</H3>
            </td>
        </tr>
          <td>NIM</td>
          <td><input type="text" name="input_nim" value="<?php echo set_value('input_nim'); ?>"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
        </tr>
        <tr>
          <td>Kelas</td>
          <td><input type="text" name="input_kelas" value="<?php echo set_value('input_kelas'); ?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><textarea name="input_alamat"><?php echo set_value('input_alamat'); ?></textarea></td>
        </tr>
      </table>
        
      <hr>
      <input style='color:lime;background:dimgrey;font-size:17px;border:none' type="submit" name="submit" value="Simpan">
      <a href="<?php echo base_url(); ?>"><input style='color:darkred;background:dimgrey;font-size:17px;border:none' type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>