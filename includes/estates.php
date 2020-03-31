<?php require_once "./includes/connection.php"; ?>
<!-- Portfolio Section -->
<h2>Material Informativo para Descargar</h2>

<div class="row">
  <div class="col-lg-6 col-sm-12 portfolio-item">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="./img/estates/ciudadano.jpg" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Listado PDF</a>
        </h4>
        <table class="table table-striped">
          <tbody>
            <?php 
              $select_stmt= $db->prepare('SELECT tblF.name AS title, tblTF.description AS typeFile, tblF.image AS nameFile FROM dbFolletos.tbl_file AS tblF INNER JOIN tbl_typeFile as tblTF ON tblF.typeFile = tblTF.id WHERE tblF.team = 2 AND tblF.typeFile = 1 ORDER BY tblF.image DESC;');	//sql select query
              $select_stmt->execute();
              while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
              {
                $eLink = "../subirfolletos/upload/".$row['nameFile'];
            ?>
            <tr>
              <th scope="row" class="icon_color"><i class="fa fa-file" aria-hidden="true"></i></th>
              <td><a href=<?php echo $eLink;?>><?php echo "(".$row['typeFile'].") ".$row['title'] ?></a></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
        <h4 class="card-title">
          <a href="#">Listado Multimedia</a>
        </h4>
        <table class="table table-striped">
          <tbody>
            <?php 
              $select_stmt= $db->prepare('SELECT tblF.name AS title, tblTF.description AS typeFile, tblF.image AS nameFile FROM dbFolletos.tbl_file AS tblF INNER JOIN tbl_typeFile as tblTF ON tblF.typeFile = tblTF.id WHERE tblF.team = 2 AND (tblF.typeFile = 2 OR tblF.typeFile = 3) ORDER BY tblF.image DESC;');	//sql select query
              $select_stmt->execute();
              while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
              {
                $eLink = "../subirfolletos/upload/".$row['nameFile'];
            ?>
            <tr>
              <th scope="row" class="icon_color"><i class="fa fa-file" aria-hidden="true"></i></th>
              <td><a href=<?php echo $eLink;?>><?php echo "(".$row['typeFile'].") ".$row['title'] ?></a></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-sm-12 portfolio-item">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="./img/estates/equiposalud.jpg" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Listado PDF</a>
        </h4>
        <table class="table table-striped">
          <tbody>
            <tr>
              <th scope="row" class="icon_color"><i class="fa fa-file" aria-hidden="true"></i></th>
              <td><a href="./pdf/protocolo_provincial_de_COVID-19.pdf">Protocolo Provincial COVID-19</a></td>
            </tr>
            <tr>
              <th scope="row" class="icon_color"><i class="fa fa-file" aria-hidden="true"></i></th>
              <td><a href="./pdf/protocolo_provincial_de_COVID-19.pdf">Protocolo Provincial COVID-19 (16-Mar-2020)</a></td>
            </tr>
            <tr>
              <th scope="row" class="icon_color"><i class="fa fa-file" aria-hidden="true"></i></th>
              <td><a href="./pdf/Instructivo_para_Personas_Aisladas_EquipoSalud.pdf">Protocolo para personas aisladas (16-Mar-2020)</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.row -->