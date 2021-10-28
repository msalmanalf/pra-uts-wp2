<html>
  <head>
    <title>CRUD Identitas Codeigniter</title>
  </head>
  <body bgcolor="lightgrey">
  <h2 align=center>Data Mahasiswa</h2>
    <hr>
    <a href='<?php echo base_url("mahasiswa/tambah"); ?>' style='color:lime;background:dimgrey;padding:4px;font-size:17px;border:none'>Tambah Data</a><br><br>
    <table border=1 width=80% cellpadding=2 cellspacing=0>
      <tr bgcolor=grey align=center style="color: white;">
        <th>NIM</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
      </tr>
      <?php
      if( ! empty($mahasiswa)){
        foreach($mahasiswa as $data){
          echo "<tr>
          <td>".$data->nim."</td>
          <td>".$data->nama."</td>
          <td>".$data->kelas."</td>
          <td>".$data->alamat."</td>
          <td><a href='".base_url("mahasiswa/ubah/".$data->nim)."'style='color:green'>Ubah</a></td>
          <td><a href='".base_url("mahasiswa/hapus/".$data->nim)."'style='color:darkred'>Hapus</a></td>
          </tr>";
        }
      }else{
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
      <?php
      $conn = new mysqli($hostname = 'localhost', $username = 'root', $password = '', $database = 'pra_uts_wp2');
      $sql = "SELECT * FROM mahasiswa";
      if ($result=mysqli_query($conn,$sql)) {
      $rowcount=mysqli_num_rows($result);
      echo "Jumlah data : ".$rowcount; 
      }
      ?>
    </table>
  </body>
</html>