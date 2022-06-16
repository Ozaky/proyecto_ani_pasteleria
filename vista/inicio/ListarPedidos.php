<section>
  <link rel="stylesheet" href="recursos/abc.css">
  <!--for demo wrap-->
  <h1>Listado de pedidos de: <?php echo $_SESSION["nombre"] ?></h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th style="font-family: sans-serif;">Fecha Pedido</th>
          <th style="font-family: sans-serif;">Fecha Entrega</th>
          <th style="font-family: sans-serif;">Direccion</th>
          <th style="font-family: sans-serif;">Cedula Cliente</t>
          <th style="font-family: sans-serif;">Estado</t>
          <th>
        </tr>
      </thead>
    </table>
  </div>

  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php
        foreach ($this->datos as $valor) {
          $cod = $valor["Ped_Id_Pedido"];
          echo "<tr class='table-danger'>";
          //echo  "<td>".$valor["Ped_Id_Pedido"]."</td>";
          echo  "<td>" . $valor["Ped_Fecha_Pedido"] . "</td>";
          echo  "<td>" . $valor["Ped_Fecha_Entrega"] . "</td>";
          echo  "<td>" . $valor["Ped_Direccion"] . "</td>";
          echo  "<td>" . $valor["Ped_Usu_Cedula"] . "</td>";
          echo  "<td>" . $valor["Ped_Estado"] . "</td>";
          echo  "<td>
            <div class='button-container-1'>
            <a href='?controlador=pedido&accion=detallecliente&cod=$cod'><button id='work' type='button' name='Hover'>Detalle</button></a>
            </div>
            </td>";
          echo "</tr>";
        }
        ?>

      </tbody>
    </table>
  </div>
</section>


<script>
  // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
  $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({
      'padding-right': scrollWidth
    });
  }).resize();
</script>