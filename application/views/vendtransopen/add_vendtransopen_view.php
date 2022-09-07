<html>
  <head>    
    <title>Add new vendtransopen</title>
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
      <h1><center>Add new vendtransopen</center></h1>
      <div >
        <form action="<?php echo site_url('vendtransopen/save');?>" method="post">
        <table>
          <tr>
            <div class="form-group">
              <td><label>REFRECID</label></td>
              <td><input class="form-control" type="int" name="REFRECID" placeholder="REFRECID"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td><label>AMOUNTCUR</label></td>
              <td><input class="form-control" type="int" name="AMOUNTCUR" placeholder="AMOUNTCUR"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td><label>AMOUNTMST</label></td>
              <td><input class="form-control" type="int" name="AMOUNTMST" placeholder="AMOUNTMST"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td><label>DUEDATE</label></td>
              <td><input class="form-control" type="date" name="DUEDATE" placeholder="DUEDATE"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td><label>ACCOUNTNUM</label></td>
              <td><input class="form-control" type="text" name="ACCOUNTNUM" placeholder="ACCOUNTNUM"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td><label>RECVERSION</label></td>
              <td><input class="form-control" type="text" name="RECVERSION" placeholder="RECVERSION"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td><label>RECID</label></td>
              <td><input class="form-control" type="text" name="RECID" placeholder="RECID"></td>
            </div>
          </tr>
          <tr>
            <td></td>
            <td><button class="btn btn-success" type="submit">Submit</button></td>
          </tr>
        </table> 
        </form>
    </div>   
  </div>
  </body>
</html>
