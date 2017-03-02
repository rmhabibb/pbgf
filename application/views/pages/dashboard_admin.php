<body>
    <?php $role = $this->session->userdata('role'); ?>
    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 style="text-align: center;">List Peserta</h2>
                <div style="margin-bottom: 5%; margin-top: 3%;">
                    <?php  
                        $msg = $this->session->userdata('msg'); 
                        if(isset($msg)){
                            echo $msg;
                        }
                    ?>
                </div>
                <table class="table table-bordered" style="background: #D3CCCC; color: #000;">
                    <thead>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1; 
                            foreach($peserta as $row): ?>
                                <?php if ($role == 'admin'): ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row->nim ?></td>
                                    <td><?= $row->nama_lengkap ?></td>
                                    <td>
                                        <div id="btn-<?= $row->username ?>">
                                            <?php if ($row->status == 'lulus'): ?>
                                                <button onclick="changeStatus('<?= $row->username ?>')" class="btn btn-success"><i class="fa fa-check"></i> Lulus</button>
                                            <?php else: ?>
                                                <button onclick="changeStatus('<?= $row->username ?>')" class="btn btn-danger"><i class="fa fa-close"></i> Tidak Lulus</button>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <?php if($role == 'admin'): ?>
                                            <a href="#" class="btn btn-info"><i class="fa fa-info"> Detail</i></a>
                                        <?php elseif($role == 'super admin'): ?>
                                            <a href="#" class="btn btn-info"><i class="fa fa-info"> Detail</i></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
               </table>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function changeStatus(id_peserta) {
            $.ajax({
                url: '<?= base_url('admin/hasil') ?>',
                type: 'POST',
                data: {
                    id_peserta: id_peserta
                },
                success: function(response) {
                    $('#btn-' + id_peserta).html(response);
                },
                error: function (e) {
                    console.log(e.responseText);
                }
            });
        }
    </script>
</body>