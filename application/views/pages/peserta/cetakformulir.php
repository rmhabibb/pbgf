<!--Import materialize.css-->
<link href="<?php echo base_url(); ?>assets/css/form.css" rel="stylesheet" type="text/css"/>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
 
<table class="tg" style=" width: 800px">
  <colgroup>
  <col style="width: 281.88889px">
  <col style="width: 200px">
  <col style="width: 450px">
  </colgroup>
  <tr>
    <td class="tg-amwm" colspan="3">
      <img src="<?php echo base_url(); ?>assets/img/team/unsri.png" id="unsri"><img src="<?php echo base_url(); ?>assets/img/team/bem.png" id="bem"> <h2>FORMULIR PENDAFTARAN <br>PEMILIHAN BUJANG GADIS FASILKOM<br> UNIVERSITAS SRIWIJAYA 2017</h2> 
    </td>
  </tr>
  <tr>
      <td style="vertical-align:center; text-align: center; font-weight: bold" rowspan="15">
        Foto
      </td>
      <td class="tg-i81m">
        Nama Lengkap
      </td>
      <td class="tg-i81m">
          <?php 
              if(isset($peserta->nama_lengkap)){
                   echo $peserta->nama_lengkap;        
              }   
          ?>     
      </td>
  </tr>
  <tr>
    <td class="tg-i81m">
      NIM
    </td>
    <td class="tg-i81m">
       <?php 
              if(isset($peserta->nim)){
                   echo $peserta->nim;        
              }   
          ?>    
    </td>
  </tr>
  <tr>
    <td class="tg-i81m">Tempat, Tanggal Lahir</td>
    <td class="tg-i81m">
      <?php 
              if(isset($peserta->tempat_lahir) && isset($peserta->tanggal_lahir)){
                   echo $peserta->tempat_lahir.', '.$peserta->tanggal_lahir;        
              } 
             
          ?>    
    </td>
  </tr>
  <tr>
    <td class="tg-i81m">
      Agama
    </td>
    <td class="tg-i81m">
       <?php 
              if(isset($peserta->agama)){
                   echo $peserta->agama;        
              }   
          ?>    
    </td>
  </tr>
  <tr>
    <td class="tg-i81m">Jenis Kelamin</td>
    <td class="tg-i81m">
      <?php 
              if(isset($peserta->jk)){
                   echo $peserta->jk;        
              }   
          ?>  
    </td>
  </tr>
  <tr>
    <td class="tg-i81m">IPK</td>
    <td class="tg-i81m">
      <?php 
              if(isset($peserta->ipk)){
                   echo $peserta->ipk;        
              }   
          ?>  
    </td>
  </tr>
  <tr>
    <td class="tg-i81m">Jurusan</td>
    <td class="tg-i81m">
       <?php 
              if(isset($peserta->jurusan)){
                   echo $peserta->jurusan;        
              }   
          ?>  
    </td>
  </tr>
  <tr>
    <td class="tg-i81m">Angkatan</td>
    <td class="tg-i81m">
       <?php 
              if(isset($peserta->angkatan)){
                   echo $peserta->angkatan;        
              }   
          ?>  
    </td>
  </tr> 
  <tr>
    <td class="tg-i81m">Media Sosial</td>
    <td class="tg-3we0">
        <?php 
              if(isset($peserta->line) && isset($peserta->ig)){
                   echo 'Line   : '.$peserta->line.'<br>
                      '.'Instagram : '.$peserta->ig;        
              } else if (isset($peserta->line) && !isset($peserta->ig)){
                echo 'Line   : '.$peserta->line;
              } else {
                echo 'Instagram   : '.$peserta->ig;
              }
             
          ?>    

    </td>
  </tr>
  <tr style="height: 150px;"> 
    <td class="tg-i81m" >Alamat</td>
    <td class="tg-3we0">
      <?php 
              if(isset($peserta->alamat)){
                   echo $peserta->alamat;        
              }   
          ?>  

    </td>
  </tr>
  <tr>
    <td class="tg-i81m">Hobi</td>
    <td class="tg-3we0">
      <?php 
              if(isset($peserta->hobi)){
                   echo $peserta->hobi;        
              }   
          ?>  
</td>
  </tr>
  <tr>
    <td class="tg-i81m">Tinggi Badan</td>
    <td class="tg-i81m">
      <?php 
              if(isset($peserta->tb)){
                   echo $peserta->tb;        
              }   
          ?>  

    </td>
  </tr>
  <tr>
    <td class="tg-i81m">Berat Badan</td>
    <td class="tg-i81m">
      <?php 
              if(isset($peserta->bb)){
                   echo $peserta->bb;        
              }   
          ?>  

    </td>
  </tr>
  <tr style="height: 150px; ">
    <td class="tg-i81m">Motivasi Mengikuti BGF</td>
    <td class="tg-i81m">
      <?php 
              if(isset($peserta->motivasi)){
                   echo $peserta->motivasi;        
              }   
          ?>  

    </td>
  </tr>
  <tr style="height: 150px;">
    <td class="tg-i81m">Riwayat Organisasi</td>
    <td class="tg-i81m">
      <?php 
              if(isset($peserta->riwayat_organisasi)){
                   echo $peserta->riwayat_organisasi;        
              }   
          ?>  

    </td>
  </tr>
  <tr>
    <td class="tg-amwm" colspan="4">
      PRESTASI YANG PERNAH DICAPAI
    </td>
  </tr>
  <tr>
    <td style="width: 50px;">No</td>
    <td>Nama Prestasi</td>
    <td>Instansi Pemberi Prestasi</td>
    <td>Tahun</td>
  </tr>
  <?php 
    $prestasi = explode(',', $peserta->prestasi);
    $instansi = explode(',', $peserta->instansi_pemberi);
    $tahun    = explode(',', $peserta->tahun_prestasi);
    $jmlh = count($prestasi); 
    if($jmlh > 0):
      for($i=0; $i<$jmlh; $i++):
  ?>
    <tr>
        <td class="tg-yw4l" style="width: 50px;"><?= $i+1 ?></td>
        <td class="tg-yw4l"><?= $prestasi[$i] ?></td>
        <td class="tg-yw4l"><?= $instansi[$i] ?></td>
        <td class="tg-yw4l"><?= $tahun[$i] ?></td>
    </tr>
  <?php endfor; ?>
  <?php else: ?>
    <tr>
      <td style="width: 50px;"></td>
      <td class="tg-yw4l"></td>
      <td class="tg-yw4l"></td>
      <td class="tg-yw4l"></td>
    </tr>
  <?php endif; ?>
</table>  
