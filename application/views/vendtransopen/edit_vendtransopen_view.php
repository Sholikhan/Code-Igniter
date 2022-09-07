<html>
	<head>
		<title>Edit vendtransopen</title>
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
                           Inventitemlocation
                        </a>
                    </li>
					<li>
                        <a class="nav-link" 
                           href="<?php echo site_url('vendtransopen'); ?>">
                           Vendtransopen
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
		<br>
		<h1><center>Edit vendtransopen</center></h1>
		<div class="container">
			<form action="<?php echo site_url('vendtransopen/update');?>" method="post">
			<table>
				<tr>
					<div>
						<td><label>AMOUNTCUR</label></td>
						<td><input class="form-control" type="int" name="AMOUNTCUR" value="<?php echo $AMOUNTCUR;?>" placeholder = "AMOUNTCUR"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>AMOUNTMST</label></td>
						<td><input class="form-control" type="int" name="AMOUNTMST" value="<?php echo $AMOUNTMST;?>" placeholder = "AMOUNTMST"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>DUEDATE</label></td>
						<td><input class="form-control" type="date" name="DUEDATE" value="<?php echo $DUEDATE;?>" placeholder = "DUEDATE"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>ACCOUNTNUM</label></td>
						<td><input class="form-control" type="text" name="ACCOUNTNUM" value="<?php echo $ACCOUNTNUM;?>" placeholder = "ACCOUNTNUM"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>RECVERSION</label></td>
						<td><input class="form-control" type="text" name="RECVERSION" value="<?php echo $RECVERSION;?>" placeholder = "RECVERSION"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>RECID</label></td>
						<td><input class="form-control" type="text" name="RECID" value="<?php echo $RECID;?>" placeholder = "RECID"></td>
					</div>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="REFRECID" value="<?php echo $REFRECID?>">
						<button class="btn btn-success" type="submit">Submit</button>
					</td>
				</tr>
			</table>
			</form>
		</div>
	</body>
</html>