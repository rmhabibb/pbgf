 
<!--Import materialize.css-->
<link href="<?php echo base_url(); ?>assets/css/form.css" rel="stylesheet" type="text/css"/>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
 
<table class="tg" style=" width: 800px" border="1"> 
  
  <tr>
    <td class="tg-amwm" colspan="4" style="border-bottom-color: black; border-top-color: black;">

      <center>
        MOTIVASI MENGIKUTI BUJANG GADIS FASILKOM
      </center>

    </td>
    </tr>
    <tr>
    <td class="tg-yw4l" colspan="3" style="height: 250px;">
      <?php 
              if(isset($peserta->motivasi)){
                   echo $peserta->motivasi;        
              }   
          ?>  

    </td>
    </tr>
   <tr>
    <td class="tg-amwm" colspan="4" style="border-bottom-color: black; border-top-color: black;">

      <center>
        RIWAYAT ORGANISASI
      </center>

    </td>
    </tr>
    <tr> 
    <td class="tg-yw4l" colspan="4" style="height: 250px;">
      <?php 
              if(isset($peserta->riwayat_organisasi)){
                   echo $peserta->riwayat_organisasi;        
              }   
          ?>  

    </td>
  </tr>
  <tr>
    <td class="tg-amwm" colspan="4" style="border-bottom-color: black; border-top-color: black;">

      <center>
        PRESTASI YANG PERNAH DICAPAI
      </center>

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