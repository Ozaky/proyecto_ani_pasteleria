<section>
    <link rel="stylesheet" href="recursos/abc.css">
    <!--for demo wrap-->
    <h1>Listado de Productos por Detalle</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr style="text-align: center;">
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Detalle</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Producto</th>
                </tr>
            </thead>
        </table>
    </div>

    <div class="tbl-content" style="height: 239px;">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <?php
                foreach ($this->datos as $valor) {
                    $cod = $valor["Pro_Id_Producto"];
                    $foto = $valor["Pro_Foto_Producto"];
                    // $can =$a["Ped_Pro_Cantidad"];
                    echo "<tr>";
                    // echo  "<td>".$valor["Pro_Id_Producto"]."</td>";
                    echo  "<td>" . $valor["Pro_Nombre"] . "</td>";
                    echo  "<td>" . $valor["Pro_Precio"] . "</td>";
                    // echo  "<td>".$valor["Pro_Cat_Id_Categoria"]."</td>";
                    echo  "<td>" . $valor["Pro_Detalle"] . "</td>";
                    // echo  "<td>".$valor["Pro_Descripcion"]."</td>";
                    echo  "<td>" . $valor["Pro_Descripcion"] . "</td>";
                    echo  "<td>" . $valor["Ped_Pro_Cantidad"] . "</td>";
                    echo  "<td><img  style='  box-shadow: rgba(0, 0, 0, 0.35)  0px 2.8px 7px 3px; border-radius: 4px; float: right'src='public/assets/img/fotos_productos/$foto' width='90%'</td>";
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
</section>