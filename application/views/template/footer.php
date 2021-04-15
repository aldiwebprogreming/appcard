  		</div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url() ?>assets/js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="<?= base_url() ?>assets/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>assets/js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url() ?>assets/js/startmin.js"></script>

        <script src="<?php echo base_url() ?>assets/alert.js"></script>

        <?php echo "<script>".$this->session->flashdata('message')."</script>"?> 

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
