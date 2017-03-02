<style type="text/css">
    h3 {
    text-align: center;
    color : red ;
}

table, th, td { 
    border: 1px solid ;
   margin: 0 auto;
   text-align: center;
}

th {
 padding: 15px;
    font-size: 20px;
}

table {

 width: 80%;
 border-spacing: 0px; 
}

td { 
    padding: 10px;
}
</style> 
     <section id="peserta" class="bg-light-gray">
            
             <div class="row" style="margin-top:60px">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Peserta</h2> <br><br><br>
                </div>
            </div>
             <div class="row">
                  <div class="col-md-12">
                            
                              <table>
                                  <thead>
                                  <tr>
                                      <th>NIM</th>
                                      <th>NAMA LENGKAP</th>
                                      <th>JENIS KELAMIN</th> 
                                  </tr>
                                  </thead>
                                  <tbody>
                                        <?php
                                            foreach ($peserta as $dpeserta) {
                                                echo '<tr> 
                                                            <td>'. $dpeserta['nim'] . '</td>
                                                            <td>'. $dpeserta['nama_lengkap'] . '</td>
                                                            <td>'. $dpeserta['jk'] . '</td> 
                                                      </tr>';
                                            }

                                        ?>
                                  </tbody>
                              </table> 
                      </div><!-- /col-md-12 -->

             </div>
    </section> 