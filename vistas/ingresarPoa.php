<?php
    session_start();
?>
<script src="js/main.js"></script>
<script src="js/ingrePOA.js"></script>
<div class="container">
    <div id="contenidoProyecto">
        <h1 class="titulo">POA - Area <?php echo $_SESSION['area_designada']?> </h1>
        <div>
            <form action="proceso.php" method="post" >
                <div class="form-group">
                <label for="usr" class="Ingresar-POA">Proyecto</label>
                <select class="form-control" id="selectListaProyectos">

                </select>
                </div>

                <div class="form-group">
                <label for="usr" class="Ingresar-POA" >Objetivo General</label>
                <input type="text" class="form-control" id="inputObjGeneral" readonly="readonly">
                </div>

                <div class="form-group">
                <label for="usr" class="Ingresar-POA" >Objetivo Especifico</label>
                <input type="text" class="form-control" id="inputObjEspecifico" readonly="readonly">
                </div>


                <div class="form-group">
                <label for="usr" class="Ingresar-POA">Resultados</label><br>
                <label for="usr" id="OE" class="Ingresar-POA">Cantidad:</label>
                <input type="number"  class="form-control" id="cantidad" min="0" value="" onChange="crearCampos(this.value);"  /><br><br>
                <div id="campos_dinamicos" >
                </div>
                </div><br>
                <input  class="btn btn-primary active" data-toggle="modal" data-target="#myModal" value="Guardar Proyecto">
            </form>
        </div>
        <!--<button id="botonAdelante">dale</button>-->
    </div>
    <br>
    <div id="contenidoActividad" style="display: none;">
        <div>
            <div>
                <h1 class="titulo" id="indiceActividad"></h1>
                <input class="form-control" placeholder="Nombre de la actividad" type="text" >
            </div><br>

            <div class="form-group">
                <label for="">INDICADOR</label>
                <textarea class="form-control" id="comment" rows="5"></textarea>
            </div>

            <div>
                <label for="">META</label>
                <input id="meta" type="number" class="form-control meta" min=0 value=0>
            </div><br>

            <div>
                <label for="">PERIODO</label>
                <table class="table table-hover">
                    <tr>
                        <td><label>Enero</label></td>
                        <td><label>Febrero</label></td>
                        <td><label>Marzo</label></td>
                        <td><label>Abril</label></td>
                        <td><label>Mayo</label></td>
                        <td><label>Junio</label></td>
                        <td><label>Julio</label></td>
                        <td><label>Agosto</label></td>
                        <td><label>Setiembre</label></td>
                        <td><label>Octubre</label></td>
                        <td><label>Noviembre</label></td>
                        <td><label>Diciembre</label></td><br>
                    </tr>

                    <tr>
                        <td><input type="number" class= "form-control periodo" id="enero" name="enero" min="0" max="5" value=0 onchange="prueba();"></td>
                        <td><input type="number" class= "form-control periodo" id="febrero" name="febrero" min="0" max="5" value=0  onchange="prueba();"></td>
                        <td><input type="number" class= "form-control periodo" id="marzo" name="marzo" min="0" max="5" value=0  onchange="prueba();"></td>
                        <td><input type="number" class= "form-control periodo" id="abril" name="abril" min="0" max="5" value=0  onchange="prueba();"></td>
                        <td><input type="number" class= "form-control periodo" id="mayo" name="mayo" min="0" max="5" value=0  onchange="prueba();"></td>
                        <td><input type="number" class= "form-control periodo" id="junio" name="junio" min="0" max="5" value=0  onchange="prueba();"></td>
                        <td><input type="number" class= "form-control periodo" id="julio" name="julio" min="0" max="5"value=0   onchange="prueba();"></td>
                        <td><input type="number" class= "form-control periodo" id="agosto" name="agosto" min="0" max="5" value=0  onchange="prueba();"></td>
                        <td><input type="number" class= "form-control periodo" id="septiembre" name="septiembre" min="0" value=0  max="5" onchange="prueba();"></td>
                        <td><input type="number" class= "form-control periodo" id="octubre" name="octubre" min="0" max="5"value=0   onchange="prueba();"></td>
                        <td><input type="number" class= "form-control periodo" id="noviembre" name="noviembre" min="0" max="5" value=0  onchange="prueba();"></td>
                        <td><input type="number" class= "form-control periodo" id="diciembre" name="diciembre" min="0" max="5" value=0  onchange="prueba();"></td>
                    </tr>
                </table>
            </div>

            <div class="form-group">
                <label for="">POBLACION</label>
                <input class="form-control"  type="text" name="username" size="10" placeholder="">
            </div>

            <table class="table table-hover" id="dataTable" CELLSPACING="1px" WIDTH="350px" >
                <caption>
                    <label>PRESUPUESTO</label>
                    <i class="fa fa-plus-circle" aria-hidden="true" onclick="addRow('dataTable');"></i>
                    <i class="fa fa-minus-circle" aria-hidden="true" onclick="deleteRow('dataTable');"></i>
                </caption>
                <thead>
                    <tr>
                    <th></th>
                      <th>Detalle</th>
                      <th>Unidad de Medida</th>
                      <th>Cantidad</th>
                      <th>Precio Unitario</th>
                      <th>Sub Total</th>

                    </tr>
            
                </thead>
                <tbody>
                 
                    <tr>
                        <td><INPUT id="check" type="checkbox" NAME="chk"/></td>
                        <td><input  type="text" class="form-control tabla-estilo"/></td>
                        <td><input  type="text" class="form-control tabla-estilo" /></td>
                        <td><input  type="number"  class="form-control tabla-estilo"  min="0" id="cell41" onChange="multiplicar();" value=0 /></td>
                        <td><input  type="number" class="form-control tabla-estilo" min="0" id="cell51" onChange="multiplicar();" value=0 /></td>
                        <td><input type="number" class="form-control tabla-estilo" min="0" readonly id="resultado1" value=0></td>

                    </tr>

                </tbody>
            </table>

            <div id="total">
                <label>TOTAL </label>   
                <input type="text" class= "form-control " id="total1" type="number" min="0" readonly  value=0>
            </div>
            <br><br>
            <button class="btn btn-primary active" id="botonAtras">Atras</button>
            <button class="btn btn-primary active" id="botonGuardarActividad">Guardar</button>
        </div>
    </div>

</div>
<br><br>