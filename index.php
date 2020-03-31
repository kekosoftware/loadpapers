<!DOCTYPE html>
<html lang="en">

  <?php require_once('./includes/head.php'); ?>

  <body>

    <?php require_once('./includes/menu.php'); ?> 

    <!-- Page Content -->
    <div class="container" style="margin-top:80px;">
      
      
      <?php require_once('./includes/estates.php'); ?>

      

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <div id="centrador">
           <img id="imgFooter" src="./img/footermdh.png" alt="covid-19>">
        </div>
        
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">
      #centrador{
        position: relative;
        height: 50px;
      }

      #imgFooter{
          position: absolute;
          width: 95%;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          margin: auto;
      }
    </style>

  </body>

</html>
