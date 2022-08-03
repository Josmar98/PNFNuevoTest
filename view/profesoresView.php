<!DOCTYPE html>
<html>
<head>
  <title><?php echo _NAMESYSTEM_; ?> | <?php if(!empty($action)){echo $action; } ?> <?php if(!empty($url)){echo $url;} ?></title>
  <?php //require_once('assets/headers.php'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php require_once('assets/top_menu.php'); ?>

  <?php require_once('assets/menu.php'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $url; ?>
        <small><?php echo "Ver ".$url; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?route=Home"><i class="fa fa-dashboard"></i> Inicio </a></li>
        <li><a href="?route=<?php echo $url ?>"><?php echo $url; ?></a></li>
        <li class="active"><?php if(!empty($action)){echo $action;} echo " ". $url; ?></li>
      </ol>
    </section>
    
    <br>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <div class="col-xs-12 col-sm-6">
                <img src="assets/img/logolista.png" style="width:25px;color:red !importante;">
                <h3 class="box-title"><?php echo "".$url.""; ?></h3>
              </div>
              <div class="col-xs-12 col-sm-6" style="text-align:right">


              <!--=====================================
              MODAL MODIFICAR PROF
              ======================================-->

              


                <button type="button" class="btn enviar2 btn-next btn-fill btn btn-primary btn-wd btn-sm" data-toggle="modal" data-target="#modalAgregarProf">Agregar Nuevo</button>

              <!--=====================================
              MODAL AGREGAR PROF
              ======================================-->

              <div id="modalAgregarProf" class="#modalAgregarProf modal fade" role="dialog">
                
                <div class="modal-dialog" style="width:60%;margin-left:20%;margin-right:20%;text-align:left;">

                  <div class="modal-content">

                    <!-- <form role="form" method="post" enctype="multipart/form-data"> -->

                      <!--=====================================
                      CABEZA DEL MODAL
                      ======================================-->

                      <div class="modal-header" style="background:#3c8dbc; color:white">

                        <button type="button" class="close" data-dismiss="modal" style="top:25px;" >&times;</button>

                        <h4 class="modal-title" style="text-align: left;">Agregar Profesor</h4>

                      </div>

                      <!--=====================================
                      CUERPO DEL MODAL
                      ======================================-->

                      <div class="modal-body" style="max-height:70vh;overflow:auto;">

                        <div class="box-body">

                          <div class="row">
                            
                            <!-- ENTRADA PARA EL USUARIO -->
                            <div class="form-group col-xs-12 col-sm-12">
                              <label for="cedula">Cedula</label>
                              <div class="input-group" style="width:100%;">
                                <span class="input-group-addon" style="width:5%;"><i class="fa fa-address-card"></i></span> 
                                <input type="text" class="form-control input-lg" name="nuevaCedula" placeholder="Ingresar cedula" id="cedula" maxlength="8" required>
                              </div>
                              <div style="width:100%;text-align:right;">
                                <span id="cedulaS" class="mensajeError"></span>
                              </div>
                            </div>
                            

                            <!-- ENTRADA PARA EL NOMBRE -->
                            <div class="form-group col-xs-12 col-sm-12">
                              <label for="nombre">Nombre</label>
                              <div class="input-group" style="width:100%;">
                                <span class="input-group-addon" style="width:5%;"><i class="fa fa-user"></i></span> 
                                <input type="text" class="form-control input-lg" name="nuevoNombre" id="nombre" placeholder="Ingresar nombre" maxlength="25" required>
                              </div>
                              <div style="width:100%;text-align:right;">
                                <span id="nombreS" class="mensajeError" ></span>
                              </div>
                            </div>


                            <!-- ENTRADA PARA EL APELLIDO -->
                            <div class="form-group col-xs-12 col-sm-12">
                              <label for="apellido">Apellido</label>
                              <div class="input-group" style="width:100%;">
                                <span class="input-group-addon" style="width:5%;"><i class="fa fa-user"></i></span> 
                                <input type="text" class="form-control input-lg" name="nuevoApellido" id="apellido" placeholder="Ingresar apellido" maxlength="25" required>
                              </div>
                              <div style="width:100%;text-align:right;">
                                <span id="apellidoS" class="mensajeError"></span>
                              </div>
                            </div>
                            

                            <!--ENTRADA CORREO -->
                            <div class="form-group col-xs-12 col-sm-12">
                              <label for="correo">Correo</label>
                              <div class="input-group" style="width:100%;">
                                <span class="input-group-addon" style="width:5%;"><i class="fa fa-user"></i></span> 
                                <input type="text" class="form-control input-lg" name="nuevoCorreo" id="correo" placeholder="Ingresar Correo" required>
                              </div>
                              <div style="width:100%;text-align:right;">
                                <span id="correoS" class="mensajeError"></span>
                              </div>
                            </div>
                          

                            <!--ENTRADA TELÉFONO -->
                            <div class="form-group col-xs-12 col-sm-12">
                              <label for="telefono">Telefono</label>
                              <div class="input-group" style="width:100%;">
                                <span class="input-group-addon" style="width:5%;"><i class="fa fa-user"></i></span> 
                                <input type="text" class="form-control input-lg" name="nuevoTeleono" id="telefono" placeholder="Ingresar Nro Telefonico" maxlength="11" required>
                              </div>
                              <div style="width:100%;text-align:right;">
                                <span id="telefonoS" class="mensajeError" ></span>
                              </div>
                            </div>
                          

                          </div>

                        </div>

                      </div>

                      <!--=====================================
                      PIE DEL MODAL
                      ======================================-->

                      <div class="modal-footer">

                        <span type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</span>

                        <span type="submit" class="btn btn-primary" id="guardar">Guardar</span>

                      </div>


                    <!-- </form> -->

                  </div>

                </div>

              </div>


              </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body ">
              <div class="table-responsive">
                
              <table id="datatable" class="table table-striped text-center" style="text-align:center;width:100%;font-size:1em;">
                <thead>
                <tr>
                  <th>Nº</th>
                  <th>Cédula</th>
                  <th>Nombre y Apellido</th>
                  <th>Especialidad</th>
                  <th>Teléfono</th>
                  <?php //if ($amUsuariosE==1||$amUsuariosB==1): ?>
                  <th>Acciones</th>
                  <?php //endif ?>
                </tr>
                </thead>
                <tbody>
                <?php 
                $num = 1;
                foreach ($profesores as $data):
                if(!empty($data['cedula_profesor'])):  
                ?>
                <tr>
                  <td style="width:5%">
                    <span class="contenido2">
                      <?php echo $num++; ?>
                    </span>
                  </td>
                  <td style="width:20%">
                    <span class="contenido2">
                      <?php echo $data['cedula_profesor']; ?>
                    </span>
                  </td>
                  <td style="width:20%">
                    <span class="contenido2">
                      <?php echo $data['nombre_profesor']." ".$data['apellido_profesor']; ?>
                    </span>
                  </td>
                  <td style="width:20%">
                    <span class="contenido2">
                      <?php echo $data['correo_profesor']; ?>
                    </span>
                  </td>
                  <td style="width:20%">
                    <span class="contenido2">
                      <?php echo $data['telefono_profesor']; ?>
                    </span>
                  </td>
                 
                  <?php //if ($amUsuariosE==1||$amUsuariosB==1): ?>
                  <td style="width:10%">
                    <!-- <table style="background:none;text-align:center;width:100%"> -->
                      <!-- <tr> -->
                        <?php //if ($amUsuariosE==1): ?>
                        <!-- <td style="width:50%"> -->
                          <button class="btn modificarBtn" style="border:0;background:none;color:#04a7c9" value="<?php echo $data['cedula_profesor'] ?>">
                            <span class="fa fa-pencil">
                              
                            </span>
                          </button>
                        <!-- </td> --> 
                        <?php //endif; ?>
                        <?php //if ($amUsuariosB==1): ?>
                        <!-- <td style="width:50%"> -->
                          <button class="btn eliminarBtn" style="border:0;background:none;color:red" value="<?php echo $data['cedula_profesor'] ?>">
                            <span class="fa fa-trash"></span>
                          </button>
                        <!-- </td> -->
                        <?php //endif; ?>
                      <!-- </tr> -->
                    <!-- </table> -->
                  </td>
                  <?php //endif ?>
                  

                  <button type="button" id="modificarButton<?=$data['cedula_profesor']?>" class="btn enviar2 btn-next btn-fill btn btn-primary btn-wd btn-sm" data-toggle="modal" data-target="#modalModificarProf<?=$data['cedula_profesor']?>" style="display: none">Modificar</button>

                  <div id="modalModificarProf<?=$data['cedula_profesor']?>" class="modalModificarProf modal fade modalModificarProf<?=$data['cedula_profesor']?>" role="dialog">
                    
                    <div class="modal-dialog" style="width:60%;margin-left:20%;margin-right:20%;text-align:left;">
                      <div class="modal-content">

                        <!-- <form role="form" method="post" enctype="multipart/form-data"> -->

                          <!--=====================================
                          CABEZA DEL MODAL
                          ======================================-->

                          <div class="modal-header" style="background:#3c8dbc; color:white">

                            <button type="button" class="close" data-dismiss="modal" style="top:25px;" >&times;</button>

                            <h4 class="modal-title" style="text-align: left;">Modificar Profesor</h4>

                          </div>

                          <!--=====================================
                          CUERPO DEL MODAL
                          ======================================-->

                          <div class="modal-body" style="max-height:70vh;overflow:auto;">

                            <div class="box-body">

                              <div class="row">
                                
                                <!-- ENTRADA PARA EL USUARIO -->
                                <div class="form-group col-xs-12 col-sm-12">
                                  <label for="cedula<?=$data['cedula_profesor']?>">Cedula</label>
                                  <div class="input-group" style="width:100%;">
                                    <span class="input-group-addon" style="width:5%;"><i class="fa fa-address-card"></i></span> 
                                    <input type="text" class="form-control input-lg cedulaModificar" maxlength="8" value="<?=$data['cedula_profesor']?>" name="<?=$data['cedula_profesor']?>" placeholder="Ingresar cedula" id="cedula<?=$data['cedula_profesor']?>" required>
                                  </div>
                                  <div style="width:100%;text-align:right;">
                                    <span id="cedulaS<?=$data['cedula_profesor']?>" class="mensajeError"></span>
                                  </div>
                                </div>


                                <!-- ENTRADA PARA EL NOMBRE -->
                                <div class="form-group col-xs-12 col-sm-12">
                                  <label for="nombre<?=$data['cedula_profesor']?>">Nombre</label>
                                  <div class="input-group" style="width:100%;">
                                    <span class="input-group-addon" style="width:5%;"><i class="fa fa-user"></i></span> 
                                    <input type="text" class="form-control input-lg nombreModificar" maxlength="25" value="<?=$data['nombre_profesor']?>" name="<?=$data['cedula_profesor']?>" id="nombre<?=$data['cedula_profesor']?>" placeholder="Ingresar nombre" required>
                                  </div>
                                  <div style="width:100%;text-align:right;">
                                    <span id="nombreS<?=$data['cedula_profesor']?>" class="mensajeError"></span>
                                  </div>
                                </div>


                                <!-- ENTRADA PARA EL APELLIDO -->
                                <div class="form-group col-xs-12 col-sm-12">
                                  <label for="apellido<?=$data['cedula_profesor']?>">Apellido</label>
                                  <div class="input-group" style="width:100%;">
                                    <span class="input-group-addon" style="width:5%;"><i class="fa fa-user"></i></span> 
                                    <input type="text" class="form-control input-lg apellidoModificar apellidoModificar<?=$data['cedula_profesor']?>" maxlength="25" value="<?=$data['apellido_profesor']?>" name="<?=$data['cedula_profesor']?>" id="apellido<?=$data['cedula_profesor']?>" placeholder="Ingresar apellido" required>
                                  </div>
                                  <div style="width:100%;text-align:right;">
                                    <span id="apellidoS<?=$data['cedula_profesor']?>" class="mensajeError"></span>
                                  </div>
                                </div>


                                <!--ENTRADA CORREO -->
                                <div class="form-group col-xs-12 col-sm-12">
                                  <label for="correo<?=$data['cedula_profesor']?>">Correo</label>
                                  <div class="input-group" style="width:100%;">
                                    <span class="input-group-addon" style="width:5%;"><i class="fa fa-user"></i></span> 
                                    <input type="text" class="form-control input-lg correoModificar correoModificar<?=$data['cedula_profesor']?>" value="<?=$data['correo_profesor']?>" name="<?=$data['cedula_profesor']?>" id="correo<?=$data['cedula_profesor']?>" placeholder="Ingresar Correo" required>
                                  </div>
                                  <div style="width:100%;text-align:right;">
                                    <span id="correoS<?=$data['cedula_profesor']?>" class="mensajeError"></span>
                                  </div>
                                </div>


                                <!--ENTRADA TELÉFONO -->
                                <div class="form-group col-xs-12 col-sm-12">
                                  <label for="telefono<?=$data['cedula_profesor']?>">Telefono</label>
                                  <div class="input-group" style="width:100%;">
                                    <span class="input-group-addon" style="width:5%;"><i class="fa fa-user"></i></span> 
                                    <input type="text" class="form-control input-lg telefonoModificar telefonoModificar<?=$data['cedula_profesor']?>" maxlength="11"  value="<?=$data['telefono_profesor']?>" name="<?=$data['cedula_profesor']?>" id="telefono<?=$data['cedula_profesor']?>" placeholder="Ingresar Nro Telefonico" required>
                                  </div>
                                  <div style="width:100%;text-align:right;">                            
                                     <span id="telefonoS<?=$data['cedula_profesor']?>"  class="mensajeError"></span>
                                  </div>
                                </div>


                              </div>


                            </div>

                          </div>

                          <!--=====================================
                          PIE DEL MODAL
                          ======================================-->

                          <div class="modal-footer">

                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                            <button type="submit" class="btn btn-primary modificarButtonModal" value="<?=$data['cedula_profesor']?>" id="modificar">Modificar</button>

                          </div>


                        <!-- </form> -->

                      </div>

                    </div>

                  </div>
                      
                </tr>
                <?php
               endif; endforeach;
                ?>
                </tbody>
                <tfoot>
                 <tr>
                  <th>Nº</th>
                  <th>Cédula</th>
                  <th>Nombre y Apellido</th>
                  <th>Especialidad</th>
                  <th>Teléfono</th>
                  <?php //if ($amUsuariosE==1||$amUsuariosB==1): ?>
                  <th>Acciones</th>
                  <?php //endif ?>
                </tr>
                </tfoot>
              </table>

              </div>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require_once 'assets/footer.php'; ?>
  

  <?php //require_once 'assets/aside-config.php'; ?>
</div>
<!-- ./wrapper -->


  <?php //require_once('assets/footered.php'); ?>
<?php if(!empty($response)): ?>
<input type="hidden" class="responses" value="<?php echo $response ?>">
<?php endif; ?>
<script>





$(document).ready(function(){ 

  $('#cedula').on('input', function () {
    this.value = this.value.replace(/[^0-9]/g,''); 
    if(this.value.length >= 8 && this.value.length <= 8){
      $("#cedulaS").html("");
    }else{
      $("#cedulaS").html("La cédula debe contener 8 caracteres");
    }
  });


  $('.cedulaModificar').on('input', function () {
    var id = $(this).attr("name");
    // var ids = $(this).attr("id");
    // var index = ids.indexOf(" ");
    // var id = ids.substring(index+1);
    this.value = this.value.replace(/[^0-9]/g,'');
    // alert(this.value);
    if(this.value.length >= 8 && this.value.length <= 8){
      $("#cedulaS"+id).html("");
    }else{
      $("#cedulaS"+id).html("La cédula debe contener 8 caracteres");
    }
  });



  // $('#cedula').on('input', function () {      
  //   this.value = this.value.replace(/[^0-9]/g,''); });

  $('#nombre').on('input', function () {      
    // alert("ASDASd");
    this.value = this.value.replace(/[^a-zA-Z ñ Ñ Á á É é Í í Ó ó Ú ú ]/g,''); 
  });
  $('.nombreModificar').on('input', function () {      
    this.value = this.value.replace(/[^a-zA-Z ñ Ñ Á á É é Í í Ó ó Ú ú ]/g,''); });

  $('#apellido').on('input', function () {      
    this.value = this.value.replace(/[^a-zA-Z ñ Ñ Á á É é Í í Ó ó Ú ú ]/g,''); });

  $('.apellidoModificar').on('input', function () {      
    this.value = this.value.replace(/[^a-zA-Z ñ Ñ Á á É é Í í Ó ó Ú ú ]/g,''); });

  $('#correo').on('input', function () {      
    this.value = this.value.replace(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,4}\.[0-9]{1,4}\.[0-9]{1,4}\.[0-9]{1,4}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{4,6}))$/,''); 

   let pos1 = this.value.indexOf("@");
    let pos = this.value.indexOf(".com");
    if((pos > 1) && (pos1 > 1) && (pos > pos1)){
      let maxleng = this.value.length;
      $(this).attr("maxlength",maxleng);
      $("#correoS").html("");
    }else{
      $("#correoS").html("Ingresar una direccion de correo electrónico válida");
      $(this).attr("maxlength","");
    }
  });

  $('.correoModificar').on('input', function () {      
  var id = $(this).attr("name");
  // var ids = $(this).attr("id");
  // var index = ids.indexOf(" ");
  // var id = ids.substring(index+1);
  this.value = this.value.replace(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,4}\.[0-9]{1,4}\.[0-9]{1,4}\.[0-9]{1,4}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{4,6}))$/,'');
  let pos1 = this.value.indexOf("@");
  let pos = this.value.indexOf(".com");
  if((pos > 1) && (pos1 > 1) && (pos > pos1)){
    let maxleng = this.value.length;
    $(this).attr("maxlength",maxleng);
    $("#correoS"+id).html("");
  }else{
    $("#correoS"+id).html("Ingresar una dirección de correo electrónico valida");
    $(this).attr("maxlength","");
  }
});
 
  $('.correoModificar').on('input', function () {      
    var id = $(this).attr("name");
    // var ids = $(this).attr("id");
    // var index = ids.indexOf(" ");
    // var id = ids.substring(index+1);
    this.value = this.value.replace(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,4}\.[0-9]{1,4}\.[0-9]{1,4}\.[0-9]{1,4}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{4,6}))$/,'');


    let pos1 = this.value.indexOf("@");
    let pos = this.value.indexOf(".com");
    if((pos > 1) && (pos1 > 1) && (pos > pos1)){
      let maxleng = this.value.length;
      $(this).attr("maxlength",maxleng);
      $("#correoS"+id).html("");
    }else{
      $("#correoS"+id).html("Ingresar una direccion de correo electronico valida");
      $(this).attr("maxlength","");
    }
  });


  $('#telefono').on('input', function () {      
    this.value = this.value.replace(/[^0-9+ ]/g,'');
    if(this.value.length >= 11 && this.value.length <= 11){
      $("#telefonoS").html("");
    }else{
      $("#telefonoS").html("El numero de celular debe contener 11 caracteres");
    }
  });

  $('.telefonoModificar').on('input', function () {      
    var id = $(this).attr("name");
    // var ids = $(this).attr("id");
    // var index = ids.indexOf(" ");
    // var id = ids.substring(index+1);
    this.value = this.value.replace(/[^0-9+ ]/g,''); 
    if(this.value.length >= 11 && this.value.length <= 11){
      $("#telefonoS"+id).html("");
    }else{
      $("#telefonoS"+id).html("El numero de celular debe contener 11 caracteres");
    }
  });

/*  $("#trayecto").change(function(){
    var trayecto = $(this).val();
    if(trayecto == ""){
      $("#trayectoS").html("Seleccione un trayecto para el alumno");
    }else{
      $("#trayectoS").html("");
    }
  });
  $(".trayectoModificar").change(function(){
    var id = $(this).attr("name");
    // var ids = $(this).attr("id");
    // var index = ids.indexOf(" ");
    // var id = ids.substring(index+1);
    var trayecto = $(this).val();
    if(trayecto == ""){
      $("#trayectoS"+id).html("Seleccione un trayecto para el alumno");
    }else{
      $("#trayectoS"+id).html("");
    }
  });
*/


  $(".modificarButtonModal").click(function(){
    var id = $(this).val();
    // alert(id);
    var response = validar(true, id);
    if(response){
    swal.fire({ 
          title: "¿Desea guardar los datos?",
          text: "Se guardaran los datos, ¿desea continuar?",
          type: "question",
          showCancelButton: true,
          confirmButtonText: "¡Guardar!",
          cancelButtonText: "No", 
          closeOnConfirm: false,
          closeOnCancel: false 
      }).then((isConfirm) => {
          if (isConfirm.value){ 

            let cedula = $("#cedula"+id).val();     
            let nombre = $("#nombre"+id).val();     
            let apellido = $("#apellido"+id).val();
            let correo = $("#correo"+id).val();
            let telefono = $("#telefono"+id).val();


            $.ajax({
              url: 'Profesores/Modificar',    
              type: 'POST',   
              data: {
                Editar: true,   
                codigo: id,   
                cedula: cedula,       
                nombre: nombre,       
                apellido: apellido,
                correo: correo,
                telefono: telefono,
              },
              success: function(resp){
                // alert(resp);
              /*window.alert("Hola mundo");   
              console.log(resp); 
                window.alert(resp);*/
                var datos = JSON.parse(resp);   
                if (datos.msj === "Good") {   
                    Swal.fire({
                      type: 'success',
                      title: '¡Modificacion Exitosa!', 
                      text: 'Se ha modificado al profesor ' + nombre + ' ' + apellido + ' en el sistema', 
                      footer: 'SCHSL', timer: 3000, showCloseButton: false, showConfirmButton: false,
                    }).then((isConfirm) => {
                        location.reload();
                    } );
                  } 
                  if (datos.msj === "Repetido") {   
                    Swal.fire({
                      type: 'warning',
                      title: '¡Registro repetido!',
                      text: 'El profesor ' + nombre + ' ' + apellido + ' ya esta agregado al sistema con la cedula '+cedula,
                      footer: 'SCHSL', timer: 3000, showCloseButton: false, showConfirmButton: false,
                    });
                  }
                  if (datos.msj === "Error") {   
                    Swal.fire({
                      type: 'error',
                      title: '¡Error la guardar los cambio!',
                      text: 'Intente de nuevo, si el error persiste por favor contacte con el soporte',
                      footer: 'SCHSL', timer: 3000, showCloseButton: false, showConfirmButton: false,
                    });
                  }   
                  if (datos.msj === "Vacio") {   
                    Swal.fire({
                      type: 'warning',
                      title: '¡Debe rellenar todos los campos!',
                      footer: 'SCHSL', timer: 3000, showCloseButton: false, showConfirmButton: false,
                    });
                  }   
              },
              error: function(respuesta){       
                var datos = JSON.parse(respuesta);
                console.log(datos);

              }

            });
          }else { 
              swal.fire({
                  type: 'error',
                  title: '¡Proceso cancelado!',
              });
          } 
      });
    }

  });


  $("#guardar").click(function(){
    var response = validar();
    if(response){

      swal.fire({ 
            title: "¿Desea guardar los datos?",
            text: "Se guardaran los datos, ¿desea continuar?",
            type: "question",
            showCancelButton: true,
            confirmButtonText: "¡Guardar!",
            cancelButtonText: "No", 
            closeOnConfirm: false,
            closeOnCancel: false 
      }).then((isConfirm) => {
          if (isConfirm.value){ 


            let cedula = $("#cedula").val();     
            let nombre = $("#nombre").val();     
            let apellido = $("#apellido").val();
            let correo = $("#correo").val();
            let telefono = $("#telefono").val();

          /*alert(cedula + ' ' + nombre + ' ' + apellido + ' ' + especialidad);*/
              $.ajax({
                url: 'Profesores/Agregar',    
                type: 'POST',   
                data: {
                  Agregar: true,   
                  cedula: cedula,       
                  nombre: nombre,       
                  apellido: apellido,
                  correo: correo,
                  telefono: telefono,
                },
                success: function(resp){
                  // alert(resp);
                /*window.alert("Hola mundo");   
                console.log(resp); 
                  window.alert(resp);*/
                  var datos = JSON.parse(resp);     
                    if (datos.msj === "Good") {   
                      Swal.fire({
                        type: 'success',
                        title: '¡Registro Exitoso!',
                        text: 'Se ha agregado al profesor ' + nombre + ' ' + apellido + ' al sistema',
                        footer: 'SCHSL', timer: 3000, showCloseButton: false, showConfirmButton: false,
                      }).then((isConfirm) => {
                          location.reload();
                      } );
                    } 
                    if (datos.msj === "Repetido") {   
                      Swal.fire({
                        type: 'warning',
                        title: '¡Registro repetido!',
                        text: 'El profesor ' + nombre + ' ' + apellido + ' ya esta agregado al sistema',
                        footer: 'SCHSL', timer: 3000, showCloseButton: false, showConfirmButton: false,
                      });
                    }
                    if (datos.msj === "Error") {   
                      Swal.fire({
                        type: 'error',
                        title: '¡Error la guardar los cambio!',
                        text: 'Intente de nuevo, si el error persiste por favor contacte con el soporte',
                        footer: 'SCHSL', timer: 3000, showCloseButton: false, showConfirmButton: false,
                      });
                    }     
                    if (datos.msj === "Vacio") {   
                      Swal.fire({
                        type: 'warning',
                        title: '¡Debe rellenar todos los campos!',
                        footer: 'SCHSL', timer: 3000, showCloseButton: false, showConfirmButton: false,
                      });
                    }     
                },
                error: function(respuesta){       
                  var datos = JSON.parse(respuesta);
                  console.log(datos);

                }

              });
          }else { 
                swal.fire({
                    type: 'error',
                    title: '¡Proceso cancelado!',
                });
          } 
      });
    }

  });


  $(".modificarBtn").click(function(){
    swal.fire({ 
          title: "¿Desea modificar los datos?",
          text: "Se movera al formulario para modificar los datos, ¿desea continuar?",
          type: "question",
          showCancelButton: true,
          confirmButtonText: "¡Si!",
          cancelButtonText: "No", 
          closeOnConfirm: false,
          closeOnCancel: false 
      }).then((isConfirm) => {
          if (isConfirm.value){            
            /*window.alert($(this).val());*/
            let userMofif = $(this).val();
            // alert(userMofif);
            $.ajax({
              url: 'Profesores/Buscar',    
              type: 'POST',  
              data: {
                Buscar: true,   
                userNofif: userMofif,       
              },
              success: function(respuesta){       
                // alert(respuesta); 
                var resp = JSON.parse(respuesta);   
                // alert(resp.msj);
                if (resp.msj == "Good") {  
                  $("#modificarButton"+userMofif).click(); 

                  /*
                  alert('Bienvenido');                    
                  console.log('Aquí estoy yo'); 
                  // console.log($(".cedula").val(Json['resp']));
                  Swal.fire({
                    type: 'success',
                    title: '¡Modificación Exitosa!',
                    text: 'Has modificado al usuario ' + user + ' al sistema',
                    footer: 'SCHSL',
                    timer: 3000,
                    showCloseButton: false,
                    showConfirmButton: false,
                    
                  });
                  */

                }        
              },
              error: function(respuesta){       
                // alert(respuesta);
                var resp = JSON.parse(respuesta);
                console.log(resp);

              }

            });




          }else { 
              swal.fire({
                  type: 'error',
                  title: '¡Proceso cancelado!',
              });
          } 
      });
  });

  $(".eliminarBtn").click(function(){
      swal.fire({ 
          title: "¿Desea borrar los datos?",
          text: "Se borraran los datos escogidos, ¿desea continuar?",
          type: "error",
          showCancelButton: true,
          confirmButtonText: "¡Si!",
          cancelButtonText: "No", 
          closeOnConfirm: false,
          closeOnCancel: false 
      }).then((isConfirm) => {
          if (isConfirm.value){            
      
                swal.fire({ 
                    title: "¿Esta seguro de borrar los datos?",
                    text: "Se borraran los datos, esta opcion no se puede deshacer, ¿desea continuar?",
                    type: "error",
                    showCancelButton: true,
                    confirmButtonText: "¡Si!",
                    cancelButtonText: "No", 
                    closeOnConfirm: false,
                    closeOnCancel: false 
                }).then((isConfirm) => {
                    if (isConfirm.value){                      
                        /*window.alert($(this).val());*/
                        let userDelete = $(this).val();
                      $.ajax({
                        url: 'Profesores/Eliminar',    
                        type: 'POST',   
                        data: {
                          Eliminar: true,   
                          userDelete: userDelete,
                        },
                        success: function(respuesta){       
                          // alert(respuesta);
                          var datos = JSON.parse(respuesta);
                          if (datos.msj === "Good") {   
                            Swal.fire({
                              type: 'success',
                              title: 'Eliminación Exitosa',
                              text: 'Se ha eliminado al profesor ' + datos.data.nombre_profesor + ' ' + datos.data.apellido_profesor + ' ya cuya cédula es ' + userDelete+' del sistema',
                              footer: 'SCHSL', timer: 3000, showCloseButton: false, showConfirmButton: false,
                            }).then((isConfirm) => {
                                location.reload();
                            } );
                          } 
                          if (datos.msj === "Repetido") {   
                            Swal.fire({
                              type: 'warning',
                              title: '¡Registro repetido!',
                              text: 'El profesor ' + nombre + ' ' + apellido + ' ya esta agregado al sistema',
                              footer: 'SCHSL', timer: 3000, showCloseButton: false, showConfirmButton: false,
                            });
                          }
                          if (datos.msj === "Error") {   
                            Swal.fire({
                              type: 'error',
                              title: '¡Error la guardar los cambio!',
                              text: 'Intente de nuevo, si el error persiste por favor contacte con el soporte',
                              footer: 'SCHSL', timer: 3000, showCloseButton: false, showConfirmButton: false,
                            });
                          }     
                          if (datos.msj === "Vacio") {   
                            Swal.fire({
                              type: 'warning',
                              title: '¡Debe rellenar todos los campos!',
                              footer: 'SCHSL', timer: 3000, showCloseButton: false, showConfirmButton: false,
                            });
                          }        
                        },
                        error: function(respuesta){       
                          var data = JSON.parse(respuesta);
                          console.log(data);

                        }

                      });
                    }else { 
                        swal.fire({
                            type: 'error',
                            title: '¡Proceso cancelado!',
                            confirmButtonColor: "#ED2A77",
                        });
                    } 
                });

          }else { 
              swal.fire({
                  type: 'error',
                  title: '¡Proceso cancelado!',
                  confirmButtonColor: "#ED2A77",
              });
          } 
      });
  });
});  



function validar(modificar = false, id=""){
  var form = "";
  if(!modificar){
    form = "#modalAgregarProf";
  }else{
    form = "#modalModificarProf"+id;
  }

  var cedula = $(form+" #cedula"+id).val();
  var rcedula = false;
  if(cedula.length >= 8 && cedula.length <= 8){
    $(form+" #cedulaS"+id).html("");
    rcedula = true;
  }else{
    $(form+" #cedulaS"+id).html("La cedula debe contener 8 caracteres");
  }

  var nombre = $(form+" #nombre"+id).val();
  var rnombre = false;
  if(nombre.length > 2){ 
    rnombre = true;
    $(form+" #nombreS"+id).html("");
  }else{
    $(form+" #nombreS"+id).html("Debe ingresar el nombre del profesor");
  }

  var apellido = $(form+" #apellido"+id).val();
  var rapellido = false;
  if(apellido.length > 2){ 
    rapellido = true;
    $(form+" #apellidoS"+id).html("");
  }else{
    $(form+" #apellidoS"+id).html("Debe ingresar el apellido del profesor");
  }

  var correo = $(form+" #correo"+id).val();
  var rcorreo = false;

  var pos1 = correo.indexOf("@");
  var pos = correo.indexOf(".com");
  if((pos > 1) && (pos1 > 1) && (pos > pos1)){
    var maxleng = correo.length;
    $(this).attr("maxlength",maxleng);
    $(form+" #correoS"+id).html("");
    rcorreo = true;
  }else{
    $(form+" #correoS"+id).html("Ingresar una direccion de correo electronico valida");
    $(this).attr("maxlength","");
  }

  var telefono = $(form+" #telefono"+id).val();
  var rtelefono = false;
  if(telefono.length >= 11 && telefono.length <= 11){
    $(form+" #telefonoS"+id).html("");
    rtelefono = true;
  }else{
    $(form+" #telefonoS"+id).html("La telefono debe contener 11 caracteres");
  }

/*  var trayecto = $(form+" #trayecto"+id).val();
  var rtrayecto = false;
  if(trayecto == ""){
    $(form+" #trayectoS"+id).html("Seleccione un trayecto para el alumno");
  }else{
    rtrayecto = true;
    $(form+" #trayectoS"+id).html("");
  }*/

  var validado = false;
  if(rcedula==true && rnombre==true && rapellido==true && rcorreo==true && rtelefono==true /*&& rtrayecto==true*/){
    validado=true;
  }else{
    validado=false;
  }
  // alert(validado);
  return validado;
}




















</script>
</body>
</html>