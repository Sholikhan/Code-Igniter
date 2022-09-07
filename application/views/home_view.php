<html>
    <head>
        <title>My Project</title>
        <script src="<?= base_url() ?>assets/jquery/jquery-3.6.0.min.js"></script>
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome/css/all.min.css">
        <style type="text/css">
			.jumbotron{background-image: url(../assets/images/database.jpg);}
		</style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="container-fluid">
            	<a class="navbar-brand" href="<?php echo site_url('home'); ?>">
				<img src="../assets/images/logo.png" width="40" height="40" class="mr-2" alt="">
				<strong class="p-2">My Database</strong>
				</a>
			</div>
        </nav>
        <br>
        <div class="container">
            <div class="jumbotron text-white">
                <center>
                    <h1>My Database</h1>
                    <p>
                        My Database adalah sebuah perusahaan dibidang database yang memberikan pemahaman tentang pembuatan database
                    </p>
                    <p>
                        My Database memungkinkan kalian dapat belajar membuat database dari level dasar hingga expert
                    </p>
                </center>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-tittle">
                                <i class="fas fa-database"></i> inventitemlocation
                            </h5>
                            <p class="card-text">
                                Berisi Tentang inventitemlocation
                            </p>
                            <a href="<?php echo site_url('inventitemlocation'); ?>" class="btn btn-primary">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-tittle">
                                <i class="fas fa-database"></i> vendtransopen
                            </h5>
                            <p class="card-text">
                                Berisi Tentang Database vendtransopen
                            </p>
                            <a href="<?php echo site_url('vendtransopen'); ?>" class="btn btn-primary">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-tittle">
                                <i class="fas fa-database"></i> ddtrackimporttable
                            </h5>
                            <p class="card-text">
                                Berisi Tentang Database ddtrackimporttable
                            </p>
                            <a href="<?php echo site_url('ddtrackimporttable'); ?>" class="btn btn-primary">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-tittle">
                                <i class="fas fa-database"></i> dip_itemmaster
                            </h5>
                            <p class="card-text">
                                Berisi Tentang Database dip_itemmaster
                            </p>
                            <a href="<?php echo site_url('dip_itemmaster'); ?>" class="btn btn-primary">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>