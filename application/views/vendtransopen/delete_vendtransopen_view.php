<html>
   <head>
   <script src="<?= base_url() ?>assets/jquery/jquery-3.6.0.min.js"></script>
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
   </head>
   <body>
      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" 
               href="<?php echo site_url('home'); ?>">My Database
            </a>
            <button class="navbar-toggler" data-toggle="collapse" 
                data-target="#collapsibleNavbar" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" 
                           href="<?php echo site_url('inventitemlocation'); ?>">
                           inventitemlocation
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" 
                           href="<?php echo site_url('vendtransopen'); ?>">
                           vendtransopen
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" 
                           href="<?php echo site_url('ddtrackimporttable'); ?>">
                           ddtrackimporttable
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" 
                           href="<?php echo site_url('dip_itemmaster'); ?>">
                           dip_itemmaster
                        </a>
                    </li>
                </ul>               
            </div> 
      </nav>
      <div class="container">
         <br>
         <p><b>Apakah Anda Yakin Untuk Menghapus REFRECID Bernomor <?php echo $REFRECID?>?</b></p>
         <form action="<?php echo site_url('vendtransopen/delete/' . $REFRECID);?>">
         <button class="btn btn-success" type="submit">OK</button>
         </form>
      </div>
   </body>
</html>