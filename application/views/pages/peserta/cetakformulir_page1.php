 
<!--Import materialize.css-->
<link href="<?php echo base_url(); ?>assets/css/form.css" rel="stylesheet" type="text/css"/>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
 
<table class="tg" style=" width: 800px" border="1"> 
  <tr >
    <th id="th" colspan="3" style="border-bottom-color: black">      

        <img src="<?php echo base_url();?>assets/img/team/unsri.png" id="unsri" >
        <img src="<?php echo base_url();?>assets/img/team/bem.png" id="bem" >
         <img src="<?php echo base_url();?>assets/img/team/ibgf.png" id="ibgf" >
            <h2 style="letter-spacing: 3px;">FORMULIR PENDAFTARAN <br>PEMILIHAN BUJANG GADIS FASILKOM<br>UNIVERSITAS SRIWIJAYA</h2> 
 
    </th>
  </tr>
  <tr >
      <td style="width:300px; font-weight: bold;  " rowspan="14"   style="border-bottom-color: black;border-color:#ccc;" >
        <center>
        <table border="1">
          <tr  >
            <td style="padding: 113.385.827px 75.590.551px; "  > 
              Foto <br>
              (4 x 6)
            </td>
          </tr>
          
        </table>
       
        </center>
      </td>
     
  </tr>
  <tr>
     <td  style="width:200px; font-weight: bold;">
        Nama Lengkap
      </td>
      <td >
          <?php 
              if(isset($peserta->nama_lengkap)){
                   echo $peserta->nama_lengkap;        
              }   
          ?>     
      </td>
  </tr>
  <tr>
    <td class="tg-i81m" style=" font-weight: bold;">
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
    <td class="tg-i81m" style=" font-weight: bold;">Tempat, Tanggal Lahir</td>
    <td class="tg-i81m">
      <?php 
              if(isset($peserta->tempat_lahir) && isset($peserta->tanggal_lahir)){
                   echo $peserta->tempat_lahir.', '.$peserta->tanggal_lahir;        
              } 
             
          ?>    
    </td>
  </tr>
  <tr>
    <td class="tg-i81m" style=" font-weight: bold;">
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
    <td class="tg-i81m" style=" font-weight: bold;">Jenis Kelamin</td>
    <td class="tg-i81m">
      <?php 
              if(isset($peserta->jk)){
                   echo $peserta->jk;        
              }   
          ?>  
    </td>
  </tr>
  <tr>
    <td class="tg-i81m" style=" font-weight: bold;">IPK</td>
    <td class="tg-i81m">
      <?php 
              if(isset($peserta->ipk)){
                   echo $peserta->ipk;        
              }   
          ?>  
    </td>
  </tr>
  <tr>
    <td class="tg-i81m" style=" font-weight: bold;">Jurusan</td>
    <td class="tg-i81m">
       <?php 
              if(isset($peserta->jurusan)){
                   echo $peserta->jurusan;        
              }   
          ?>  
    </td>
  </tr>
  <tr>
    <td class="tg-i81m" style=" font-weight: bold;">Angkatan</td>
    <td class="tg-i81m">
       <?php 
              if(isset($peserta->angkatan)){
                   echo $peserta->angkatan;        
              }   
          ?>  
    </td>
  </tr> 
  <tr>
    <td class="tg-i81m" style=" font-weight: bold;">Media Sosial</td>
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
  <tr> 
    <td class="tg-i81m" style="height: 200px ; font-weight: bold;">Alamat</td>
    <td style=" vertical-align: top" >
      <?php 
              if(isset($peserta->alamat)){
                   echo $peserta->alamat;        
              }   
          ?>  

    </td>
  </tr>
  <tr>
    <td class="tg-i81m" style=" font-weight: bold;">Hobi</td>
    <td class="tg-3we0">
      <?php 
              if(isset($peserta->hobi)){
                   echo $peserta->hobi;        
              }   
          ?>  
</td>
  </tr>
  <tr>
    <td class="tg-i81m" style=" font-weight: bold;">Tinggi Badan</td>
    <td class="tg-i81m">
      <?php 
              if(isset($peserta->tb)){
                   echo $peserta->tb;        
              }   
          ?>  

    </td>
  </tr>
  <tr>
    <td class="tg-i81m" style=" font-weight: bold;">Berat Badan</td>
    <td class="tg-i81m">
      <?php 
              if(isset($peserta->bb)){
                   echo $peserta->bb;        
              }   
          ?>  

    </td>
  </tr>
</table>  
