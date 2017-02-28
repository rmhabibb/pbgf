<style type="text/css">
table {
  background: white;
  color: black;
  margin: 100px auto  ;
}
input , textarea {
  color: #eb24ff;
}
td ,th {
  text-align: left;
   font-weight: bold; 
}
.form-control {
 color: #eb24ff;
  }
</style>
 

    <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">  Bujang Gadis Fasilkom </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href=""></a>
                    </li> 
                    <li>
                        <a class="page-scroll" href="<?php base_url();?>index">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php base_url();?>formulir">FORMULIR</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php base_url();?>cetak_formulir">CETAK FORMULIR</a>
                    </li>
                    <li>
                        <a class="page-scroll" href='<?php base_url();?>logout'>Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
          
<body>
    <?php 
          echo form_open('peserta/edit_form');
          ?>
  <table class="table table-bordered">
    <thead >
      <tr> 
        <th colspan="2" style="text-align:center;"><h2>FORMULIR PENDAFTARAN </h2></th> 
     
      </tr>
    </thead>
    <tbody>
      <tr>
        <td >Nama Lengkap</td>
        <td><?php 
                echo form_input('nama_lengkap',$peserta->nama_lengkap);
            ?> </td> 
      </tr>
      <tr>
        <td>NIM</td>
        <td><?php 
                echo form_input('nim',$peserta->nim);
            ?> </td> 
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>
        <input type="date" name="tanggal_lahir" value="<?php echo $peserta->tanggal_lahir; ?>">
        </td> 
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><?php 
                echo form_input('jk',$peserta->jk);
            ?> </td> 
      </tr>
      <tr>
        <td>Jurusan</td>
        <td> <select name="jurusan" class="form-control" required>
              <?php if($peserta->jurusan == 'Komputer Akuntansi (D3)'): ?>
                <option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
                <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
                <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
                <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
                <option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
                <option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>
                <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
                <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
                <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
                <option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
                <option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
              <?php elseif($peserta->jurusan == 'Manajemen Informatika (D3)'): ?>
                <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
                <option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
                <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
                <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
                <option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
                <option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>
                <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
                <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
                <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
                <option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
                <option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
            <?php elseif($peserta->jurusan == 'Sistem Informasi (S1 Bilingual)'): ?>
                <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
                <option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
                <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
                <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
                <option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
                <option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>
                <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
                <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
                <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
                <option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
                <option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
            <?php elseif($peserta->jurusan == 'Sistem Informasi (S1 Profesional)'): ?>
              <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
                <option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
                <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
                <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
                <option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
                <option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>
                <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
                <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
                <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
                <option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
                <option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
            <?php elseif($peserta->jurusan == 'Sistem Informasi (S1 Reguler)'): ?>
              <option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
                <option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
                <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
                <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
                <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
                <option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>
                <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
                <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
                <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
                <option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
                <option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
            <?php elseif($peserta->jurusan == 'Teknik Komputer dan Jaringan (D3)'): ?>
              <option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>
                <option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
                <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
                <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
                <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
                <option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
                <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
                <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
                <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
                <option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
                <option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
            <?php elseif($peserta->jurusan == 'Teknik Komputer (D3)'): ?>
              <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
                <option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
                <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
                <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
                <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
                <option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
                <option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>
                <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
                <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
                <option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
                <option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
            <?php elseif($peserta->jurusan == 'Sistem Komputer (S1 Reguler)'): ?>
              <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
                <option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
                <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
                <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
                <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
                <option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
                <option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>
                <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
                <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
                <option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
                <option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
            <?php elseif($peserta->jurusan == 'Sistem Komputer (S1 Profesional)'): ?>
              <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
                <option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
                <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
                <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
                <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
                <option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
                <option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>
                <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
                <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
                <option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
                <option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
            <?php elseif($peserta->jurusan == 'Teknik Informatika (S1 Reguler)'): ?>
              <option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
                <option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
                <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
                <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
                <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
                <option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
                <option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>
                <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
                <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
                <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
                <option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
            <?php elseif($peserta->jurusan == 'Teknik Informatika (S1 Bilingual)'): ?>
              <option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
                <option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
                <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
                <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
                <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
                <option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
                <option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>
                <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
                <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
                <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
                <option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
            <?php else: ?>                            
                <option value="">Pilih Jurusan</option>
                <option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
                <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
                <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
                <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
                <option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
                <option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>
                <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
                <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
                <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
                <option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
                <option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
              <?php endif; ?>
            </select></td> 
      </tr>
      <tr>
        <td>Angkatan</td>
        <td>
          <select name="angkatan" class="form-control" required>
            <?php if($peserta->angkatan == '2016'): ?>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
            <?php elseif($peserta->angkatan == '2015'): ?>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2014">2014</option>
            <?php elseif($peserta->angkatan == '2014'): ?>
              <option value="2014">2014</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
            <?php else: ?>
              <option value="">Pilih Angkatan</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
            <?php endif; ?>
          </select>
        </td>
      </tr>
          <tr>
        <td>ID Line</td>
        <td><?php 
                echo form_input('line',$peserta->line);
            ?> </td> 
      </tr>
        <tr>
        <td>Instagram</td>
        <td><?php 
                echo form_input('ig',$peserta->ig);
            ?> </td> 
      </tr>
      <tr>
        <td>Alamat</td>
        <td>
          <textarea name="alamat"><?php echo $peserta->alamat; ?></textarea>
        </td> 
      </tr>
      <tr>
        <td>Hobi</td>
        <td><textarea name="hobi"><?php echo $peserta->hobi; ?></textarea></td> 
      </tr>
      <tr>
        <td>Tinggi Badan</td>
        <td><?php 
                echo form_input('tb',$peserta->tb);
            ?> </td> 
      </tr>
      <tr>
        <td>Berat Badan</td>
        <td><?php 
                echo form_input('bb',$peserta->bb);
            ?> </td> 
      </tr>
      <tr>
        <td>Motivasi Mengikuti BGF</td>
        <td><textarea name="motivasi"><?php echo $peserta->motivasi; ?></textarea></td> 
      </tr>
       <tr>
        <td>Riwayat Organisasi</td>
        <td><textarea name="riwayat_organisasi"><?php echo $peserta->riwayat_organisasi; ?></textarea></td> 
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><h4><b>Prestasi yang Pernah di Capai</b></h4></td> 
      </tr>
      <tr>
        <td colspan="2"><textarea name="prestasi"><?php echo $peserta->prestasi; ?></textarea></td> 
      </tr>
    </tbody>
  </table>
   <button type="submit" class="button button-block"/>Simpan</button>
          
          <?php 
          echo form_close();
          ?> 
          </div>
   </header>
           
    
    
      