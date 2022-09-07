<html>
	<head>
		<title>Edit ddtrackimporttable</title>
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
		<h1><center>Edit ddtrackimporttable</center></h1>
		<div class="container">
			<form action="<?php echo site_url('ddtrackimporttable/update');?>" method="post">
			<table>
				<tr>
					<div>
						<td><label>DDIMPORTTYPE</label></td>
						<td><input class="form-control" type="text" name="DDIMPORTTYPE" value="<?php echo $DDIMPORTTYPE;?>" placeholder = "DDIMPORTTYPE"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>DDIMPORTEDNUM</label></td>
						<td><input class="form-control" type="int" name="DDIMPORTEDNUM" value="<?php echo $DDIMPORTEDNUM;?>" placeholder = "DDIMPORTEDNUM"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>NAME</label></td>
						<td><input class="form-control" type="text" name="NAME" value="<?php echo $NAME;?>" placeholder = "NAME"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>DDIMPORTDATETIME</label></td>
						<td><input class="form-control" type="date" name="DDIMPORTDATETIME" value="<?php echo $DDIMPORTDATETIME;?>" placeholder = "DDIMPORTDATETIME"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>LINES</label></td>
						<td><input class="form-control" type="int" name="LINES" value="<?php echo $LINES;?>" placeholder = "LINES"></td>
					</div>
				</tr>
				<tr>
					<div>
						<td><label>DDCREATEDJOURNAL</label></td>
						<td><input class="form-control" type="text" name="DDCREATEDJOURNAL" value="<?php echo $DDCREATEDJOURNAL;?>" placeholder = "DDCREATEDJOURNAL"></td>
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
						<input type="hidden" name="DDIMPORTID" value="<?php echo $DDIMPORTID?>">
						<button class="btn btn-success" type="submit">Submit</button>
					</td>
				</tr>
			</table>
			</form>
		</div>
	</body>
</html>