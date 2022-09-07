<html>
  <head>    
    <title>Add new ddtrackimporttable</title>
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
      <h1><center>Add new ddtrackimporttable</center></h1>
      <div >
        <form action="<?php echo site_url('ddtrackimporttable/save');?>" method="post">
        <table>
          <tr>
            <div class="form-group">
              <td><label>DDIMPORTID</label></td>
              <td><input class="form-control" type="int" name="DDIMPORTID" placeholder="DDIMPORTID"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td><label>DDIMPORTTYPE</label></td>
              <td><input class="form-control" type="text" name="DDIMPORTTYPE" placeholder="DDIMPORTTYPE"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td><label>DDIMPORTEDNUM</label></td>
              <td><input class="form-control" type="int" name="DDIMPORTEDNUM" placeholder="DDIMPORTEDNUM"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td><label>NAME</label></td>
              <td><input class="form-control" type="text" name="NAME" placeholder="NAME"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td><label>DDIMPORTDATETIME</label></td>
              <td><input class="form-control" type="date" name="DDIMPORTDATETIME" placeholder="DDIMPORTDATETIME"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td><label>LINES</label></td>
              <td><input class="form-control" type="int" name="LINES" placeholder="LINES"></td>
            </div>
          </tr>
          <tr>
            <div class="form-group">
              <td><label>DDCREATEDJOURNAL</label></td>
              <td><input class="form-control" type="text" name="DDCREATEDJOURNAL" placeholder="DDCREATEDJOURNAL"></td>
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
