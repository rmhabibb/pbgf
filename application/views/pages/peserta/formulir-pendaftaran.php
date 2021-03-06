<link href="<?= base_url('assets/css/bootstrap-datetimepicker.min.css') ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap-datetimepicker.min.js') ?>"></script>

<style type="text/css">
table {
  background: white;
  color: black;
  margin: 100px auto  ;
}
input[type=text],input[type=password],input[type=number],input[type=date] , textarea {
  color: #eb24ff;
  font-size: 20px;
   display: block;
  width: 100%;
  height: 100%;
  padding: 5px 10px;
  background: none;
  background-image: none;
  border: 1px solid #eb24ff; 
  border-radius: 0;
  -webkit-transition: border-color .25s ease, box-shadow .25s ease;
  transition: border-color .25s ease, box-shadow .25s ease;
}
td ,th {
  text-align: left;
  padding: 5%;font-weight: bold;

}.form-control {
 color: #eb24ff;
  }

 
  i { 
  font-size: 20px;  
   color: #eb24ff;
   padding-left: 5px;
  }
 
</style>
 
<body>
    <!-- Header -->
  <header>
      <div class="container">   
  <?php echo form_open('peserta/simpanformulir'); ?>
  <table class="table table-bordered">
    <thead>
      <tr> 
        <th colspan="4" style="text-align:center;"><h2>FORMULIR PENDAFTARAN </h2>  
          <div style="margin-bottom: 3%;">
          <?php  
            $msg = $this->session->flashdata('msg');
            if(isset($msg)){
              echo $msg;
            }
          ?>
        </div>
       </th> 
     
      </tr>
    </thead>

    <tbody>
      <tr>
        <td style="padding: 2%;">Nama Lengkap</td>
        <td colspan="3">

            <?php 
              if(isset($peserta->nama_lengkap)){
                ?>
                  <input id="kolom" type="text" name="nama_lengkap" required value="<?php echo $peserta->nama_lengkap; ?>">
                <?php
              } else { ?>
                          
                  <input id="kolom" type="text" name="nama_lengkap" required value="">
            <?php
              }  
            ?> 
        </td> 
      </tr>
      <tr>
        <td style="padding: 2%;">NIM</td>
        <td colspan="3">
            <?php 
              if(isset($peserta->nim)){
                ?>
                  <input type="text" name="nim" required value="<?php echo $peserta->nim; ?>">
                <?php
              } else { ?>
                          
                  <input type="text" name="nim" required value="">
            <?php
              }  
            ?> 
        </td> 
      </tr>
       <tr>
        <td style="padding: 2%;">Tempat Lahir</td>
        <td colspan="3">
            <?php 
              if(isset($peserta->tempat_lahir)){
                ?>
                  <input type="text" name="tempat_lahir" required value="<?php echo $peserta->tempat_lahir; ?>">
                <?php
              } else { ?>
                          
                  <input type="text" name="tempat_lahir" required value="">
            <?php
              }  
            ?> 
        </td> 
      </tr>
      <tr>
        <td style="padding: 2%;">Tanggal Lahir</span></td>
        <td>
          <!-- <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
          </div> -->
          <?php if(isset($peserta->tanggal_lahir)){?>
                <input type="text" name="tanggal_lahir" value="<?= $peserta->tanggal_lahir ?>">
                <!-- <div class="input-append date form_datetime">
                  <input required type="text" name="date_mulai" value="<?= $peserta->tanggal_lahir ?>">
                  <span class="add-on"><i class="icon-th"></i></span>
                </div> -->
          <?php } else { ?>
                <input type="text" name="tanggal_lahir" placeholder="dd-mm-yyyy">
                <!-- <div class="input-append date form_datetime">
                  <input required type="text" name="date_mulai">
                  <span class="add-on"><i class="icon-th"></i></span>
                </div> -->
          <?php } ?> 
        </td> 
      </tr>
       <tr>
        <td style="padding: 2%;">Agama</td>
        <td colspan="3">
          <select name="agama" class="form-control" required>
            <?php if($peserta->agama == 'Islam'): ?>
              <option value="Islam">Islam</option>
              <option value="Kristen Protestan">Kristen Protestan</option>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Buddha">Buddha</option>
              <option value="Lainnya">Lainnya</option>
            <?php elseif($peserta->agama == 'Kristen Protestan'): ?>
              <option value="Kristen Protestan">Kristen Protestan</option>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Buddha">Buddha</option>
              <option value="Islam">Islam</option>
              <option value="Lainnya">Lainnya</option>
            <?php elseif($peserta->agama == 'Katolik'): ?>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Buddha">Buddha</option>
              <option value="Islam">Islam</option>
              <option value="Kristen Protestan">Kristen Protestan</option>
              <option value="Lainnya">Lainnya</option>
              <?php elseif($peserta->agama == 'Hindu'): ?>
              <option value="Hindu">Hindu</option>
              <option value="Buddha">Buddha</option>
              <option value="Islam">Islam</option>
              <option value="Kristen Protestan">Kristen Protestan</option>
              <option value="Katolik">Katolik</option>
              <option value="Lainnya">Lainnya</option>
              <?php elseif($peserta->agama == 'Buddha'): ?>
              <option value="Buddha">Buddha</option>
              <option value="Islam">Islam</option>
              <option value="Kristen Protestan">Kristen Protestan</option>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Lainnya">Lainnya</option>
              <?php elseif($peserta->agama == 'Lainnya'): ?>
              <option value="Lainnya">Lainnya</option>
              <option value="Buddha">Buddha</option>
              <option value="Islam">Islam</option>
              <option value="Kristen Protestan">Kristen Protestan</option>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
            <?php else: ?>
              <option value="">Pilih Agama</option> 
              <option value="Islam">Islam</option>
              <option value="Kristen Protestan">Kristen Protestan</option>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Buddha">Buddha</option>
              <option value="Lainnya">Lainnya</option>
            <?php endif; ?>
          </select>
        </td> 
      </tr>
      <tr>
        <td style="padding: 2%;">Jenis Kelamin</td>
          <td colspan="3">
          <?php 
              if(isset($peserta->jk)){
                ?>
                  <input type="radio" style="margin-left: 10px" id="jk" required name="jk" <?php if ($peserta->jk=="Perempuan") {echo "checked";}?>  value="Perempuan">
                  <i style="padding-right: 20px">Perempuan</i> 
                  <input type="radio" id="jk" name="jk" required <?php if ($peserta->jk=="Laki - Laki"){ echo "checked";}?> value="Laki - Laki"><i>Laki - Laki</i>

                <?php
              } else { ?>
                  <input  style="margin-left: 10px" type="radio" required id="jk" name="jk"  value="Perempuan"><i>Perempuan</i>
                  <input type="radio" id="jk" name="jk"  required value="Laki - Laki"><i>Laki - Laki</i>
            <?php
              }  
            ?> 
        </td> 
      </tr>
       <tr>
        <td style="padding: 2%;">IPK</td>
        <td colspan="3">
            <?php 
              if(isset($peserta->ipk)){
                ?>
                  <input type="number" name="ipk" min="0" max="4" step="any"  required value="<?php echo $peserta->ipk; ?>">
                <?php
              } else { ?>
                          
                  <input type="number" step="any"  name="ipk" required value="">
            <?php
              }  
            ?> 
        </td> 
      </tr>
      <tr>
        <td style="padding: 2%;">Jurusan</td>
        <td colspan="3">
          <select name="jurusan" class="form-control" required>
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
        <td style="padding: 2%;">Angkatan</td>
        <td colspan="3">
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
        <td style="padding: 2%;">ID Line</td>
       <td colspan="3">
          <?php 
              if(isset($peserta->line)){
                ?>
                  <input type="text" name="line" required value="<?php echo $peserta->line; ?>">
                <?php
              } else { ?>
                          
                  <input type="text" name="line" required value="">
            <?php
              }  
            ?> 
        </td> 
      </tr>
        <tr>
        <td style="padding: 2%;">Instagram</td>
       <td colspan="3">
          <?php 
              if(isset($peserta->ig)){
                ?>
                  <input type="text" name="ig" required value="<?php echo $peserta->ig; ?>">
                <?php
              } else { ?>
                          
                  <input type="text" name="ig" required value="">
            <?php
              }  
            ?> 
        </td> 
      </tr>
      <tr>
        <td style="padding: 2%;">Alamat</td>
       <td colspan="3">
          <?php 
              if(isset($peserta->alamat)){
                ?>
                  <textarea name="alamat" required  ><?php echo $peserta->alamat; ?></textarea>
                <?php
              } else { ?>
                          
                  <textarea name="alamat" required value=" "></textarea>
            <?php
              }  
            ?> 
        </td> 
      </tr>
      <tr>
        <td style="padding: 2%;">Hobi</td>
         <td colspan="3">
          <?php 
              if(isset($peserta->hobi)){
                ?>
                  <textarea name="hobi"   ><?php echo $peserta->hobi; ?></textarea>
                <?php
              } else { ?>
                          
                  <textarea name="hobi"  value=" "></textarea>
            <?php
              }  
            ?> 
        </td> 
      </tr>
      <tr>
        <td style="padding: 2%;">Tinggi Badan</td>
        <td colspan="3">
          <?php 
              if(isset($peserta->tb)){
                ?>
                  <input type="number" name="tb" required value="<?php echo $peserta->tb; ?>">
                <?php
              } else { ?>
                          
                  <input type="number" name="tb" required value="">
            <?php
              }  
            ?> 
        </td> 
      </tr>
      <tr>
        <td style="padding: 2%;">Berat Badan</td>
         <td colspan="3">
          <?php 
              if(isset($peserta->bb)){
                ?>
                  <input type="number" name="bb" required value="<?php echo $peserta->bb; ?>">
                <?php
              } else { ?>
                          
                  <input type="number" name="bb" required value="">
            <?php
              }  
            ?> 
        </td> 
      </tr>
      <tr>
        <td style="padding: 2%;">Motivasi Mengikuti BGF</td>
        <td colspan="3">
          <?php 
              if(isset($peserta->motivasi)){
                ?>
                  <textarea name="motivasi"   ><?php echo $peserta->motivasi; ?></textarea>
                <?php
              } else { ?>
                          
                  <textarea name="motivasi"  value=""></textarea>
            <?php
              }  
            ?> 
        </td> 
      </tr>
       <tr>
        <td style="padding: 2%;">Riwayat Organisasi</td>
        <td colspan="3">
          <?php 
              if(isset($peserta->riwayat_organisasi)){
                ?>
                  <textarea name="riwayat_organisasi"><?php echo $peserta->riwayat_organisasi; ?></textarea>
                <?php
              } else { ?>
                          
                  <textarea name="riwayat_organisasi"  value=" "></textarea>
            <?php
              }  
            ?> 
        </td> 
      </tr>
      </table>
      <table id="wrapperrr"  class="table table-bordered">
        <tr>
          <td colspan="2"><h4><b>Prestasi yang Pernah di Capai</b> <a id="tambah_prestasi" class="btn btn-info"><i class="fa fa-plus"></i></a></h4></td>
        </tr>
        <tr>
          <td>Nama Penghargaan</td>
          <td>Instansi Pemberi Penghargaan</td>
          <td>Tahun</td> 
          <td></td>
        </tr>
      <?php 
        $prestasi = explode(',', $peserta->prestasi);
        $instansi = explode(',', $peserta->instansi_pemberi);
        $tahun    = explode(',', $peserta->tahun_prestasi);
        $jmlh = count($prestasi);
        if($jmlh > 0):
          
          for($i=0; $i < $jmlh; $i++): 
      ?>
        <tr>
          <td><input type="text" name="nama_prestasi[]" class="form-control" value="<?= $prestasi[$i] ?>"></td>
          <td><input type="text" name="instansi[]" class="form-control" value="<?= $instansi[$i] ?>"></td>
          <td><input type="text" name="tahun[]" class="form-control" value="<?= $tahun[$i] ?>"></td>
          <td></td>
        </tr>

      <?php endfor; ?>
      <?php else: ?>

        <tr>
          <td>Nama Penghargaan</td>
          <td>Instansi Pemberi Penghargaan</td>
          <td>Tahun</td> 
        </tr>
        <tr>
          <td><input type="text" name="nama_prestasi[]" class="form-control"></td>
          <td><input type="text" name="instansi[]" class="form-control"></td>
          <td><input type="text" name="tahun[]" class="form-control"></td> 
          <td></td>
        </tr>
      <?php endif; ?>
      </table>
      </div>
      <div class="container">
        <button type="submit" name="simpan" value="Daftar" class="button button-block"/>Simpan</button>
      </div>
          
          <?php 
          echo form_close();
          ?> 
          </div>
   </header>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      var i = <?= $jmlh ?>;
      $("#tambah_prestasi").click(function(){
        $("#wrapperrr").append('<tr>'+
          '<td><input type="text" name="nama_prestasi[]" class="form-control" ></td>'+
          '<td><input type="text" name="instansi[]" class="form-control"></td>'+
          '<td><input type="text" name="tahun[]" class="form-control"></td>'+
          '<td></td>'+
        '</tr>');
      });
    
      $(".form_datetime").datetimepicker({
          format: "yyyy-mm-dd hh:mm:ss"
      });
    });

  </script>
    
    
            
</body>
     