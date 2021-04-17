

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?= $sub_title ?></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">

                        <div class="col-lg-12">
                             
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    DataTables Advanced Tables
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form method="post" action="<?= base_url() ?>data_user/send_email"></
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>No</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Birth Date</th>
                                                    <th>Tgl Pengiriman</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $no = 1;
                                                 foreach ($send as $data) { ?>
                                                <tr class="odd gradeX">
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $data['nama_user'] ?></td>
                                                    <td><?= $data['email'] ?></td>
                                                    <td><?= $data['tgl_ultah'] ?></td>
                                                    <td><?= $data['date_pengeriman'] ?></td>
                                                    <td>
                                                        <a onclick="return confirm('Yakin ingin menghapus')" href="<?= base_url() ?>Data_user/hapus?id=<?= $data['id'] ?>" class="btn btn-danger">Hapus</a>
                                                    </td>
                                                    
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    </form>
                                    <!-- /.table-responsive -->
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                 
                    </div>

                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

       