<?php
$page = "home";
$title = "Chambafacil";
$metaD = "¿Buscas trabajo? aqui es muy facil";
?>

<?php 
require ('inc/header.php'); //LLAMA A LA CABEZERA HTML HEAD Y BODY 
include ('inc/menu.php');  //LLAMA AL MENU DE LA PAGINA
?>

<!-- Content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php require ('inc/sidebar.php'); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3>Recomentación de Ofertas</h3>  
     <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Mis ofertas recomendadas </div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>Logo</th>
            <th>Nombre de la Empresa</th>
            <th>Fecha</th>
            <th>Cargo</th>
            <th>Lugar</th>
            <th>Tipo</th>
            <th>Categoria</th>
            <th>Postular</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><img src="holder.js/50x50/text:Logo"></td>
            <td>Sodimac</td>    
            <td>15/10/2014</td>
            <td>Practicante de Sistemas</td>
            <td>Lima</td>
            <td>Full Time</td>
            <td>Servicios</td>
            <td><button class="btn btn-navbar btn-danger" data-toggle="modal" data-target="#postular">Postular</button></td>  
          </tr>
          <tr>
            <td><img src="holder.js/50x50/text:Logo"></td>
            <td>Sodimac</td>    
            <td>15/10/2014</td>
            <td>Practicante de Sistemas</td>
            <td>Lima</td>
            <td>Full Time</td>
            <td>Servicios</td>
            <td><button class="btn btn-navbar btn-danger" data-toggle="modal" data-target="#postular">Postular</button></td>  
          </tr>
            <tr>
            <td><img src="holder.js/50x50/text:Logo"></td>
            <td>Sodimac</td>    
            <td>15/10/2014</td>
            <td>Practicante de Sistemas</td>
            <td>Lima</td>
            <td>Full Time</td>
            <td>Servicios</td>
            <td><button class="btn btn-navbar btn-danger" data-toggle="modal" data-target="#postular">Postular</button></td>  
          </tr>
        </tbody>
      </table>
    </div>  
            
         <!-- <h1 class="page-header">Busca oferta de trabajo</h1>

          <div class="row ">
            <div class="col-xs-6 col-sm-3">
            
              <h4>Lugar</h4>
              <select class="selectpicker">
                  <option value="">Cualquiera</option>
                  <option value="+ST900" >Todo el país</option>
            <option value="+ST000">Extranjero</option>
            <option value="+ST001">Amazonas</option>
            <option value="+ST002">Ancash</option>
            <option value="+ST003">Apurímac</option>
            <option value="+ST004">Arequipa</option>
            <option value="+ST005">Ayacucho</option>
            <option value="+ST006">Cajamarca</option>
            <option value="+ST007">Callao</option>
            <option value="+ST008">Cusco</option>
            <option value="+ST009">Huancavelica</option>
            <option value="+ST010">Huánuco</option>
            <option value="+ST011">Ica</option>
            <option value="+ST012">Junín</option>
            <option value="+ST013">Lambayeque</option>
            <option value="+ST014">La Libertad</option>
            <option value="+ST015">Lima</option>
            <option value="+ST016">Loreto</option>
            <option value="+ST017">Madre de Dios</option>
            <option value="+ST018">Moquegua</option>
            <option value="+ST019">Pasco</option>
            <option value="+ST020">Piura</option>
            <option value="+ST021">Puno</option>
            <option value="+ST022">San Martín</option>
            <option value="+ST023">Tacna</option>
            <option value="+ST024">Tumbes</option>
            <option value="+ST025">Ucayali</option>
      </select>

  </select>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <h4>Categoria</h4>
              <select class="selectpicker">
                          <option value="">Cualquiera
                          </option><option value="+SC000">Administración/Oficina
                </option><option value="+SC001">Arte/Diseño/Medios
                </option><option value="+SC002">Científico/Investigación
                </option><option value="+SC003">Informática/Telecom.
                </option><option value="+SC004">Dirección/Gerencia
                </option><option value="+SC005">Economía/Contabilidad
                </option><option value="+SC006">Educación/Universidad
                </option><option value="+SC007">Hostelería/Turismo
                </option><option value="+SC008">Ingeniería/Técnico
                </option><option value="+SC009">Legal/Asesoría
                </option><option value="+SC010">Márketing/Ventas
                </option><option value="+SC011">Medicina/Salud
                </option><option value="+SC012">Recursos Humanos
                </option><option value="+SC013">Otros                   

                        </option>
  </select>
            </div>
            <div class="col-xs-6 col-sm-3 placeholderceholder">
              <h4>Fecha</h4>
              <select class="selectpicker">
                          <option value="">Cualquiera
                          </option><option value="+TM001">Hoy y ayer
                          </option><option value="+TM003">Ultimos 3 días
                          </option><option value="+TM007">Ultimos 7 días
                          </option><option value="+TM014">Ultimos 14 días
                          </option><option value="+TM021">Ultimos 21 días
                          </option><option value="+TM031">Ultimos 31 días
                        </option></select>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <h4>Tipo de Horario</h4>
              <select class="selectpicker">
                          <option value="">Cualquiera
                          </option><option value="+TE000">Tiempo Completo
            </option><option value="+TE001">Medio Tiempo
            </option><option value="+TE002">Por Horas
            </option><option value="+TE003">Temporal
            </option><option value="+TE004">Beca/Prácticas
            </option><option value="+TE005">Desde Casa

              </select>
                        </div>


                


                       <div class="row">
                        <div class="col-xs-6 col-sm-6">

                          <h4>Por palabras</h4>
                           <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" id="search-query-3">
              <span class="input-group-btn">
                <button type="submit submit-bold" class="btn"><span class="fui-search"></span></button>
              </span>
            </div>
       </div>  
            </div>
            
            
          </div>
          <h2 class="sub-header">Resultado</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre de la Empresa</th>
                  <th>Fecha</th>
                  <th>Cargo</th>
                  <th>Lugar</th>
                  <th>Tipo</th>
                  <th>Categoria</th>
                    <th>Postular</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  
                </tr>
                  <tr>
                  <td>Pacifico Seguros</td>
                  <td>12/10/2014</td>
                  <td>Senior PHP</td>
                  <td>Ica</td>
                  <td>Part Time</td>
                  <td>Servicios</td>
                  <td><button class="btn btn-navbar btn-danger" data-toggle="modal" data-target="#postular">Postular</button></td> 
                </tr>
              </tbody>
            </table>
          </div>-->
        </div> 
      </div>
    </div>
<!-- -->
<?php
require_once 'inc/footer.php';
?>
