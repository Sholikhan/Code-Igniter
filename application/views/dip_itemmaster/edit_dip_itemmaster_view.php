<html>
	<head>
		<title>Edit dip_itemmaster</title>
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
                           Ddtrackimporttable
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
		<h1><center>Edit dip_itemmaster</center></h1>
		<div class="container">
			<form action="<?php echo site_url('dip_itemmaster/update');?>" method="post">
			<table>
				<tr>
					<div>
						<td><label>BILLINGGROUPCODE</label></td>
						<td><input class="form-control" type="int" name="BILLINGGROUPCODE" value="<?php echo $BILLINGGROUPCODE;?>" placeholder = "BILLINGGROUPCODE"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>BILLINGSUBGROUPCODE</label></td>
						<td><input class="form-control" type="text" name="BILLINGSUBGROUPCODE" value="<?php echo $BILLINGSUBGROUPCODE;?>" placeholder = "BILLINGSUBGROUPCODE"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>BILLINGGROUP</label></td>
						<td><input class="form-control" type="text" name="BILLINGGROUP" value="<?php echo $BILLINGGROUP;?>" placeholder = "BILLINGGROUP"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>ORDERITEMCODE</label></td>
						<td><input class="form-control" type="int" name="ORDERITEMCODE" value="<?php echo $ORDERITEMCODE;?>" placeholder = "ORDERITEMCODE"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>ORDERITEMNAME</label></td>
						<td><input class="form-control" type="text" name="ORDERITEMNAME" value="<?php echo $ORDERITEMNAME;?>" placeholder = "ORDERITEMNAME"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>MAINSTORECODE</label></td>
						<td><input class="form-control" type="int" name="MAINSTORECODE" value="<?php echo $MAINSTORECODE;?>" placeholder = "MAINSTORECODE"></td>
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
						<input type="hidden" name="ITEMMASTERID" value="<?php echo $ITEMMASTERID?>">
						<button class="btn btn-success" type="submit">Submit</button>
					</td>
				</tr>
			</table>
			</form>
		</div>
	</body>
</html>