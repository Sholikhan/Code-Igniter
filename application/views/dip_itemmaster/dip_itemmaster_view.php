<html>
    <head>
		<title>List dip_itemmaster</title>
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
                <ul class="navbar-nav mr-auto">
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
                <form class="form-inline my-2 my-lg-0" method='post' action="<?= base_url() ?>index.php/dip_itemmaster/index">
                    <input class="form-control mr-2" type='text' name='search' value='<?= $search ?>'>
                    <input class="btn btn-info" type='submit' name='submit' value='Submit'>
                </form>               
            </div> 
    </nav>
    <div class="container-fluid">
    <br>
    <h1><center>List dip_itemmaster</center></h1> 
    <a href="<?php echo site_url('dip_itemmaster/add_new');?>" class="btn btn-primary">Add new dip_itemmaster</a><br/><br/>                  
            <table class="table table-hover" >
                <thead>
                    <tr bgcolor="yellow">
                        <th>ITEMMASTERID</th>
                        <th>BILLINGGROUPCODE</th>
                        <th>BILLINGSUBGROUPCODE</th>
                        <th>BILLINGGROUP</th>
                        <th>ORDERITEMCODE</th>
                        <th>ORDERITEMNAME</th>
                        <th>MAINSTORECODE</th>
                        <th>RECID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = $row + 1;
                    foreach ($dip_itemmaster->result() as $row) :
                    ?>
                <tr>
                    <td align="center"><?php echo $row->ITEMMASTERID;?></td>
                    <td align="center"><?php echo $row->BILLINGGROUPCODE;?></td>
                    <td align="center"><?php echo $row->BILLINGSUBGROUPCODE;?></td>
                    <td align="center"><?php echo $row->BILLINGGROUP;?></td>
                    <td align="center"><?php echo $row->ORDERITEMCODE;?></td>
                    <td align="center"><?php echo $row->ORDERITEMNAME;?></td>
                    <td align="center"><?php echo $row->MAINSTORECODE;?></td>
                    <td align="center"><?php echo $row->RECID;?></td>
                    <td>
                    <a href="<?php echo site_url('dip_itemmaster/get_edit/'.$row->ITEMMASTERID);?>" class="btn btn-warning">Update</a>
                    <a href="<?php echo site_url('dip_itemmaster/get_delete/'.$row->ITEMMASTERID); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php 
                $count++;
                endforeach;
                ?>
                </tbody>
            </table>   
            <!-- Paginate -->
            <div align="center">
                <?= $pagination; ?>
            </div>
    </div>     
    </body>
</html>