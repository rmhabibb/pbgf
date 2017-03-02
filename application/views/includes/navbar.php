<?php  
    $role       = $this->session->userdata('role');
    $username   = $this->session->userdata('username');
?>

<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?= base_url() ?>">  Bujang Gadis Fasilkom </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href=""></a>
                    </li> 
                    <li>
                        <a class="page-scroll" href="<?= base_url() ?>">HOME</a>
                    </li>
                    <?php if($role == "peserta"): ?>
                        <li>
                            <a class="page-scroll" href="<?php base_url();?>peserta/formulir">FORMULIR</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?php base_url();?>cetak_formulir">CETAK FORMULIR</a>
                        </li>
                    <?php endif; ?>
                    
                    <?php if($role == "admin" || $role == "superadmin"): ?>
                        <li>
                            <a class="page-scroll" href="<?php base_url('admin');?>">PESERTA</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?php base_url();?>daftar_panitia">PANITIA</a>
                        </li>
                    <?php endif; ?>
                    <li>
                        <?php 
                            if(isset($username)): 
                                if($role == "admin"):
                        ?>
                                    <a class="page-scroll" href='<?php base_url();?>admin/logout'>LOGOUT</a>
                                <?php elseif($role == "peserta"): ?>
                                    <a class="page-scroll" href='<?= base_url() ?>peserta/logout'>LOGOUT</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <a class="page-scroll" href='<?php base_url();?>login'>LOGIN</a>
                        <?php endif; ?>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>