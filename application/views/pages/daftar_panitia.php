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
                        <a class="page-scroll" href="<?php base_url();?>daftar_peserta">Peserta</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php base_url();?>daftar_panitia"">Panitia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Logout</a>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

     <section id="peserta" class="bg-light-gray">
            
             <div class="row" style="margin-top:60px">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Panitia</h2> <br><br><br>
                </div>
            </div>
             <div class="row">
                  <div class="col-md-12">
                            
                              <table>
                                  <thead>
                                  <tr>
                                      <th>USERNAME</th>
                                      <th>NAMA LENGKAP</th>
                                      <th><a href="<?php echo base_url();?>create_panitia"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a></th> 
                                  </tr>
                                  </thead>
                                  <tbody>
                                        <?php
                                            foreach ($peserta as $dpeserta) {
                                                echo '<tr> 
                                                            <td>'. $dpeserta['username'] . '</td>
                                                            <td>'. $dpeserta['nama_lengkap'] . '</td>
                                                            <td><a href="<?php echo base_url();?>create_panitia"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a></td> 
                                                      </tr>';
                                            }

                                        ?>
                                  </tbody>
                              </table> 
                      </div><!-- /col-md-12 -->
             </div>
    </section> 