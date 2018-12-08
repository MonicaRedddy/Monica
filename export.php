<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Export CSV</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
    crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="/css/cssAddWords.css" />
</head>

<body>

<!-- Add Nav Bar part-->
<?php include "topbar-header.php"; 
include "sidebar-header.php"
?>

<div id ="confirm" class="modal fade">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" id ="modalclosesmall"class="btn btn-secondary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
<!-- Start main html-->
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<!-- File Export stuff-->
<H3>Export CSV</H3>
<div class="row">
   
  <div class="col-sm-6"><br><H5><label >Export Word Data to CSV File </label></H5><br>
  <small id="downloadHelp" class="form-text text-muted">CSV Format: Term, Defintion, Category, Level</small><br>
  <a href="/php/inc-export.php" id ="download" class="btn btn-lg btn-primary" role="button" download="exportedterms">Download</a>
  
  </div>
  
</div>
</main>
<!--  End of Export stuff-->
</body>

<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/qunit/qunit-2.4.1.js"></script>
  <script>
    if (typeof ($.fn.modal) === 'undefined') {
      document.write('<script src="/js/bootstrap.min.js"><\/script>')
    }
  </script>
  <script>
    window.jQuery || document.write('<script src="/js/jquery-3.2.1.min.js"><\/script>');
  </script>
  <div id="bootstrapCssTest" class="hidden"></div>
  <script>
    $(function () {
      if ($('#bootstrapCssTest').is(':visible')) {
        $("head").prepend('<link rel="stylesheet" href="/css/bootstrap.min.css">');
      }
    });
  </script>
  <script src="/js/export.js"></script>
</html>