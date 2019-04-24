<div class="modal fade" id="<?php echo $tproveedor['idticket_cab']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Detalles - <?php echo 'Ticket: '.$tproveedor['idticket_cab'] ?></h4>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-md-12">

          <div class="col-md-6">
              Usuario: <br>
              <input type="text" value="<?php echo utf8_decode($tproveedor['fullname'])?>" class="form-control" readonly >

            </div>

            <div class="col-md-6">
              Area: <br>
              <input type="text" value="<?php echo $tproveedor['descripcion']?>" class="form-control" readonly >
              <br>
            </div>
            <br>

          <div class="col-md-6">
          Fecha de registro:
          <input type="text" value="<?php echo $tproveedor['fecha_creacion']?>" class="form-control" readonly>
          <br>
          </div>



          <div class="col-md-6">

            Fecha-Hora de Atención:
            <input type="text" class="form-control" value="<?php echo $tproveedor['fecha_asignacion']?>" readonly>
              <br>
          </div>




            <?php
              $datetime2 = new DateTime($tproveedor['fecha_asignacion']);
  $datetime1 = new DateTime(date('Y-m-d H:i:s'));

    $interval = $datetime2->diff($datetime1);

  $interval->format('%R%a dias, %h Horas');


    ?>


    <div class="col-md-4">



    Nivel:

    <input style="text-align:center" type="text" class="form-control" name="" value="<?php echo "4"; ?> " readonly>
    <br>
    </div>


    <div class="col-md-4">



    SLA:

    <input style="text-align:center" type="text" class="form-control" name="" value="<?php echo "7 Días"; ?> " readonly>
    <br>
    </div>






    <div class="col-md-4"  >



    Tiempo de atención:


    <?php if ($interval->format('%R%a') == '6' And $interval->format('%h') > '19') { ?>

    <input style="text-align:center; background-color:#DF7F0C "  type="text" class="form-control" value="<?php echo $interval->format('%R%a día, %h Horas');?> "  readonly>



  <?php } elseif ($interval->format('%R%a') <= '6' And $interval->format('%h') >= '0' ){ ?>


      <input style="text-align:center;"  type="text" class="form-control" value="<?php echo $interval->format('%R%a días,%h Horas');?> "  readonly>

    <?php }else{ ?>

      <input style="text-align:center; background-color:#EC220A; color:#FBFBFB"  type="text" class="form-control" value="<?php echo 'Ticket Vencido';?> "  readonly>
      <?php }  ?>

    <br>
    </div>


          <div class="col-md-12">


            Detalle:
          <textarea name="" id="" cols="30" rows="10"  class="form-control" readonly>
            <?php echo rtrim(ltrim(utf8_decode($tproveedor['detalle'])))?>
          </textarea>
            </div>





          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>
