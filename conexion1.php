
<?php
function conectarDB(){
  $host="host=localhost";
  $port="port=5432";
  $user="user=postgres";
  $password="password=1234";
  $dbname="dbname=datos";
  $connect = pg_connect("$host $port $user $password $dbname");

if(!$connect){
  echo "error".pg_last_error;
}
else {
  return $connect;
}
}


function compararFechas($primera, $segunda)
 {
  $valoresPrimera = explode ("/", $primera);
  $valoresSegunda = explode ("/", $segunda);
  $diaPrimera    = $valoresPrimera[0];
  $mesPrimera  = $valoresPrimera[1];
  $anyoPrimera   = $valoresPrimera[2];
  $diaSegunda   = $valoresSegunda[0];
  $mesSegunda = $valoresSegunda[1];
  $anyoSegunda  = $valoresSegunda[2];
  $diasPrimeraJuliano = gregoriantojd($mesPrimera, $diaPrimera, $anyoPrimera);
  $diasSegundaJuliano = gregoriantojd($mesSegunda, $diaSegunda, $anyoSegunda);
  if(!checkdate($mesPrimera, $diaPrimera, $anyoPrimera)){
    // "La fecha ".$primera." no es válida";
    return 0;
  }elseif(!checkdate($mesSegunda, $diaSegunda, $anyoSegunda)){
    // "La fecha ".$segunda." no es válida";
    return 0;
  }else{
    return  $diasPrimeraJuliano - $diasSegundaJuliano;
  }
}



function insertarPoliza( $conexion, $codigo,$nombre,$fecha1,$fecha2,$usuario,$aseguradora,$valor ){

$sql="INSERT INTO poliza ( codigo_poliza, nombre_poliza, fecha_inicio, fecha_fin,
            id_usuario, id_aseguradora, valor_poliza) VALUES
             ('".$codigo."', '".$nombre."', '".$fecha1."','".$fecha2."', ".$usuario.", ".$aseguradora.", ".$valor.")";
    return pg_query( $conexion, $sql );
}

function insertarSiniestro( $conexion,$fecha1,$descripcion,$codigo ){

$sql="INSERT INTO siniestro ( fecha_siniestro, descripcion_siniestro, id_aeronave) VALUES
             ('".$fecha1."', '".$descripcion."', ".$codigo.")";
    return pg_query( $conexion, $sql );
}



function insertarEstado( $conexion,$aeronave,$fecha1,$fecha2,$estado ){
$sql="INSERT INTO estado ( nombre_estado, fecha_inicio, fecha_fin, id_aeronave)
VALUES('".$estado."', '".$fecha1."', '".$fecha2."' ,".$aeronave.")";
    return pg_query( $conexion, $sql);
}








function insertarAeronave( $conexion,$matricula,$tipo,$marca,$modelo,$grupo,$poliza,$valor ){
$sql="INSERT INTO aeronave (  matricula, tipo_aeronave, marca_aeronave, modelo_aeronave,
            id_grupo, id_poliza, valor_asegurado) VALUES ('".$matricula."', '".$tipo."', '".$marca."','".$modelo."', ".$grupo.", ".$poliza.", ".$valor.")";

    return pg_query( $conexion, $sql );

}






    function insertarPersona( $conexion, $nombre,$apodo,$contrasena,$perfil ){

        $sql="INSERT INTO usuarios (
      nombre_usuario, username, password, id_perfil) VALUES ('".$nombre."', '".$apodo."', '".$contrasena."', ".$perfil.")";

        // Ejecutamos la consulta (se devolverá true o false):
        return pg_query( $conexion, $sql );
    }




    function insertarRepuesto( $conexion,$nombre,$codigo,$serie,$poliza ){

        $sql="INSERT INTO repuesto (
         nombre_repuesto, codigo_repuesto, serie_repuesto,
              id_poliza) VALUES ('".$nombre."', '".$codigo."', '".$serie."', ".$poliza.")";

        // Ejecutamos la consulta (se devolverá true o false):
        return pg_query( $conexion, $sql );
    }


    function insertarEmpleado( $conexion,$nombre,$direccion,$telefono,$cargo,$poliza ){

        $sql="INSERT INTO empleado (
          nombre_empleado, direccion_empleado, telefono_empleado,
                  id_cargo, id_poliza) VALUES ('".$nombre."', '".$direccion."', '".$telefono."', ".$cargo.", ".$poliza.")";

        // Ejecutamos la consulta (se devolverá true o false):
        return pg_query( $conexion, $sql );
    }



function buscarPoliza( $conexion, $id )
{
$sql = "SELECT  aeronave.id_aeronave,aeronave.matricula,estado.nombre_estado from aeronave,estado where
estado.id_aeronave=aeronave.id_aeronave
and aeronave.id_poliza  WHERE aeronave.id_poliza=".$id."";
$devolver = null;

// Ejecutar la consulta:
$rs = pg_query( $conexion, $sql );

if( $rs )
{
    // Si se encontró el registro, se obtiene un objeto en PHP con los datos de los campos:
    if( pg_num_rows($rs) > 0 )
        $devolver = pg_fetch_object( $rs, 0 );
}

return $devolver;
}





function buscarEmpleado( $conexion, $id )
{
$sql = "SELECT  * from empleado  WHERE nombre_empleado='".$id."'";
$devolver = null;

// Ejecutar la consulta:
$rs = pg_query( $conexion, $sql );

if( $rs )
{
    // Si se encontró el registro, se obtiene un objeto en PHP con los datos de los campos:
    if( pg_num_rows($rs) > 0 )
        $devolver = pg_fetch_object( $rs, 0 );
}

return $devolver;
}



function buscarusuario( $conexion, $id )
{
$sql = "SELECT  * from usuarios  WHERE id_usuario='".$id."'";
$devolver = null;

// Ejecutar la consulta:
$rs = pg_query( $conexion, $sql );

if( $rs )
{
    // Si se encontró el registro, se obtiene un objeto en PHP con los datos de los campos:
    if( pg_num_rows($rs) > 0 )
        $devolver = pg_fetch_object( $rs, 0 );
}

return $devolver;
}


function buscaraero( $conexion, $id )
{
$sql = "SELECT  * from aeronave  WHERE id_aeronave='".$id."'";
$devolver = null;

// Ejecutar la consulta:
$rs = pg_query( $conexion, $sql );

if( $rs )
{
    // Si se encontró el registro, se obtiene un objeto en PHP con los datos de los campos:
    if( pg_num_rows($rs) > 0 )
        $devolver = pg_fetch_object( $rs, 0 );
}

return $devolver;
}





function cmbcodigopoliza( $conexion )
{
$sql = "SELECT codigo_poliza FROM poliza";
$devolver = null;
$rs = pg_query( $conexion, $sql );
if( $rs ){
    if( pg_num_rows($rs) > 0 )
        $devolver = pg_fetch_object( $rs, 0 );}

return $devolver;
}



function modificarPersona( $conexion, $nombre,$nombre1,$apodo,$contrasena,$perfil )
{
$sql = "UPDATE usuarios SET nombre_usuario='".$nombre1."',username='".$apodo."',password='".$contrasena."',id_perfil=".$perfil."
WHERE id_usuario=".$nombre."";

    return pg_query( $conexion, $sql );
}




function modificarAeronave($conexion,$matricula1,$matricula,$tipo,$marca,$modelo,$poliza,$valor,$grupo )
{
$sql = "UPDATE aeronave SET matricula='".$matricula."',tipo_aeronave='".$tipo."',marca_aeronave='".$marca."',modelo_aeronave='".$modelo."'
,id_grupo=".$grupo.",id_poliza=".$poliza.",valor_asegurado=".$valor."


WHERE id_aeronave=".$matricula1."";


    // Ejecutamos la consulta (se devolverá true o false):
    return pg_query( $conexion, $sql );
}


function modificarpoliza( $conexion,$codigo1,$codigo,$nombre,$fecha1,$fecha2,$usuario,$aseguradora,$valor )
{
$sql = "UPDATE poliza SET codigo_poliza=".$codigo.",nombre_poliza='".$nombre."',fecha_inicio='".$fecha1."',fecha_fin='".$fecha2."',id_usuario=".$usuario.",id_aseguradora=".$aseguradora.",valor_poliza=".$valor."
 WHERE id_poliza=".$codigo1."";

    return pg_query( $conexion, $sql );
}

function borrarPersona( $conexion, $id )
   {
          $sql1 = "DELETE FROM poliza";
          $sql = "DELETE FROM usuarios";

          if( $id != null )
          $sql1 .= " WHERE id_usuario=".$id;
           $sql .= " WHERE id_usuario=".$id;



       // Ejecutamos la consulta (se devolverá true o false):
       return pg_query( $conexion, $sql );
   }

   function borrarEmpleado( $conexion, $id )
      {

             $sql = "DELETE FROM empleado";

             if( $id != null )
             $sql .= " WHERE id_empleado=".$id;




          // Ejecutamos la consulta (se devolverá true o false):
          return pg_query( $conexion, $sql );
      }


      function borrarRepuesto( $conexion, $id )
         {

                $sql = "DELETE FROM repuesto";

                if( $id != null )
                $sql .= " WHERE id_repuesto=".$id;

             return pg_query( $conexion, $sql );
         }



         function borrarAeronave( $conexion, $id )  {

           $sql = "DELETE FROM aeronave";
         if( $id != null )
           $sql .= " WHERE id_aeronave=".$id;
         return pg_query( $conexion, $sql );    }



           function borrarAeronaveestado( $conexion, $id )  {
             $sql = "DELETE FROM estado";
                     if( $id != null )
                     $sql .= " WHERE id_aeronave=".$id;
                  return pg_query( $conexion, $sql );    }

                  function borrarAeronavesiniestro( $conexion, $id )  {
                    $sql = "DELETE FROM siniestro";
                            if( $id != null )
                            $sql .= " WHERE id_aeronave=".$id;
                         return pg_query( $conexion, $sql );    }






   function borrarpoliza( $conexion, $id )
      {

          $sql1 = "DELETE FROM aeronave";
          $sql2 = "DELETE FROM repuesto";
          $sql3 = "DELETE FROM empleado";
          $sql = "DELETE FROM poliza";


          // Si 'id' es diferente de 'null' sólo se borra la persona con el 'id' especificado:
          if( $id != null )

              $sql1 .= " WHERE id_poliza=".$id;
              $sql2 .= " WHERE id_poliza=".$id;
              $sql3 .= " WHERE id_poliza=".$id;
                $sql .= " WHERE id_poliza=".$id;


          // Ejecutamos la consulta (se devolverá true o false):
          return pg_query( $conexion, $sql );
      }


   function listarpolizas( $conexion,$id ) {
           $sql = "SELECT * FROM poliza,aeronave where poliza.id_poliza=aeronave.id_poliza
           and poliza.id_poliza=".$id."";
           $ok = true;
           $rs = pg_query( $conexion, $sql );
           if( $rs ){
               if( pg_num_rows($rs) > 0 )
               {?>
                    <header class="w3-container w3-teal ">
                     <h1>LISTA DE AERONAVES CORRESPONDIENTES A LA POLIZA</h1>
                   </header>
                   <div class="w3-container">
                 <table class="w3-table-all">
                     <tr> <th>ID_AERONAVE</th>
                       <th>ID_POLIZA</th>
                       <th>MATRICULA</th>
                       <th>TIPO_AERONAVE</th>
                       <th>FECHA_INICIAL</th>
                       <th>FECHA_FINAL</th>

                     </tr>
                     <tr>
                       <?php
                       while( $obj = pg_fetch_array($rs) ){
    echo "<tr><td>".$obj["id_aeronave"]."</td>";
    echo "<td>".$obj["id_poliza"]."</td>";

                          echo "<td>".$obj["matricula"]."</td>";
                          echo "<td>".$obj["tipo_aeronave"]."</td>";
                          echo "<td>".$obj["fecha_inicio"]."</td>";
                          echo "<td>".$obj["fecha_fin"]."</td>";

  }                    }

 else{
echo "<p>No se encontraron aeronaves relacionadas a esta poliza</p>";
 }
 ?>

</tr>
               </table> <?php
   }
           else
               $ok = false;
               return $ok; }







/////////////////////////////////////////////////////////////////////////////////////////////////////
           function listarAeronavespoliza( $conexion,$id ) {
                   $sql = "SELECT aeronave.id_aeronave,poliza.id_poliza,
                   aeronave.matricula,estado.fecha_inicio,estado.fecha_fin,estado.nombre_estado,estado.id_estado,estado.dias,estado.valor_dia
                   ,estado.valor_total
                    FROM poliza,aeronave,estado
                    where poliza.id_poliza=aeronave.id_poliza
                    and estado.id_aeronave=aeronave.id_aeronave
                   and aeronave.id_aeronave=".$id." order by estado.id_estado  ";
                   $ok = true;
                 $rs = pg_query( $conexion, $sql );
                   if( $rs ){
                       if( pg_num_rows($rs) > 0 )
                       {?>
                            <header class="w3-container w3-teal ">
                             <h1>LISTA DE AERONAVES CON SUS ESTADOS</h1>
                           </header>

                           <div class="w3-container">
                         <table class="w3-table-all">
                             <tr> <th>ID_AERONAVE</th>
                               <th>ID_POLIZA</th>
                               <th>MATRICULA</th>
                               <th>FECHA_INICIAL</th>
                               <th>FECHA_FINAL</th>
                               <th>NOMBRE ESTADO</th>
                                <th>ID ESTADO</th>
                                <th>DIAS</th>
                                  <th>valor_dia</th>
                                  <th>total</th>

                             </tr>
                             <tr>
                               <?php
                               while( $obj = pg_fetch_array($rs) ){
                                 echo "<tr><td>".$obj[0]."</td>";
                                 echo "<td>".$obj[1]."</td>";
                                 echo "<td>".$obj[2]."</td>";
                                  echo "<td>".$obj[3]."</td>";
                                  echo "<td>".$obj[4]."</td>";
                                    echo "<td>".$obj[5]."</td>";
                                      echo "<td>".$obj[6]."</td>";
                                      echo "<td>".$obj[7]."</td>";
                                          echo "<td>".$obj[8]."</td>";
                                  echo "<td>".$obj[9]."</td></tr>";

          }                    }

         else{
        echo "<p>No se encontraron aeronaves relacionadas a esta poliza</p>";
         }
         ?>

        </tr>
                       </table> <?php
           }
                   else
                       $ok = false;
                       return $ok;

                     }



//////////////////////////////////////////////////////////////////////////////////////////////////////////
                              function buscarPersona( $conexion, $id )
                                  {
                                      $sql = "SELECT * FROM usuarios WHERE id_usuario=".$id."";
                                      $devolver = null;
                          // Ejecutar la consulta:
                                      $rs = pg_query( $conexion, $sql );

                                      if( $rs )
                                      {
                                          // Si se encontró el registro, se obtiene un objeto en PHP con los datos de los campos:
                                          if( pg_num_rows($rs) > 0 )
                                              $devolver = pg_fetch_object( $rs, 0 );
                                      }

                                      return $devolver;
                                  }

///////////////////////////////////////////////////////////////////////////////

function buscarfechafinporpoliza( $conexion, $id )
    {
      $sql = "SELECT fecha_fin FROM poliza where id_poliza=".$id."";
      $ok = true;
      $rs = pg_query( $conexion, $sql );
      if( $rs ){
          if( pg_num_rows($rs) > 0 )
          {
                  while( $obj = pg_fetch_array($rs) ){
                    $a=$obj[0];
                    //echo "<tr><td>".$obj[0]."</td>";

}                    }

else{
echo "<p>No se encontraron aeronaves relacionadas a esta poliza</p>";
}

}
      else
          $ok = false;
          return $a;

    }

////////////////////////////////////////////////////////////////////////////////////
    function buscaridporpoliza( $conexion, $id )
        {
          $sql = "SELECT id_poliza FROM aeronave where id_aeronave=".$id."";
          $ok = true;
          $rs = pg_query( $conexion, $sql );
          if( $rs ){
              if( pg_num_rows($rs) > 0 )
              {
                      while( $obj = pg_fetch_array($rs) ){
                        $a=$obj[0];
                        //echo "<tr><td>".$obj[0]."</td>";

    }                    }

    else{
    echo "<p>No se encontraron aeronaves relacionadas a esta poliza</p>";
    }

    }
          else
              $ok = false;
              return $a;

        }

    /////////////////////////////////////////////////////////

    function buscaridestado( $conexion,$id ) {
            $sql = "SELECT estado.id_estado
             FROM poliza,aeronave,estado
             where poliza.id_poliza=aeronave.id_poliza
             and estado.id_aeronave=aeronave.id_aeronave
            and aeronave.id_aeronave=".$id." order by estado.id_estado desc limit 1 ";
            $ok = true;
          $rs = pg_query( $conexion, $sql );
            if( $rs ){
                if( pg_num_rows($rs) > 0 )
                {
                        while( $obj = pg_fetch_array($rs) ){
                            $a=$obj[0];
}                    }

   else{
   echo "<p>No se encontraron aeronaves relacionadas a esta poliza</p>";
   }
}
            else
                $ok = false;
                return $a;

              }
//////////////////////////////////////////////////////////////////////////////
function buscarfecha( $conexion,$id ) {
        $sql = "SELECT estado.fecha_inicio
         FROM poliza,aeronave,estado
         where poliza.id_poliza=aeronave.id_poliza
         and estado.id_aeronave=aeronave.id_aeronave
        and aeronave.id_aeronave=".$id." order by estado.id_estado desc limit 1 ";
        $ok = true;
      $rs = pg_query( $conexion, $sql );
        if( $rs ){
            if( pg_num_rows($rs) > 0 )
            {
                    while( $obj = pg_fetch_array($rs) ){
                        $a=$obj[0];
}                    }

else{
echo "<p>No se encontraron aeronaves relacionadas a esta poliza</p>";
}
}
        else
            $ok = false;
            return $a;

          }
  ////////////////////////////////////////////////////
  function modificaresta( $conexion,$fecha2,$estado )
  {
  $sql = "UPDATE estado SET
fecha_fin='".$fecha2."'
WHERE id_estado=".$estado."";
return pg_query( $conexion, $sql );
  }

  /////////////////////////////////////////////////////
  function modificardias( $conexion,$dias,$estado,$valor_dia ,$total)
  {
  $sql = "UPDATE estado SET
  dias='".$dias."',valor_dia=".$valor_dia.",valor_total=".$total."
   WHERE id_estado=".$estado."";

  return pg_query( $conexion, $sql );
  }


/////////////////////////////////////////////////////////////////////////
function calculardias( $conexion ,$dias) {
        $sql = "SELECT *, date(fecha_fin)- date(fecha_inicio)
         FROM estado  WHERE id_estado=".$dias."";
        $ok = true;
      $rs = pg_query( $conexion, $sql );
        if( $rs ){
            if( pg_num_rows($rs) > 0 )
            {
                    while( $obj = pg_fetch_array($rs) ){
                        $a=$obj[8];
}                    }

else{
echo "<p>No se encontraron aeronaves relacionadas a esta poliza</p>";
}
}
        else
            $ok = false;
            return $a;

          }

          //////////////////////////////////////////////
          function buscarvaloraseguradodeaeronave( $conexion, $id ,$aeronave)
              {
                $sql = "SELECT valor_asegurado FROM aeronave where id_poliza=".$id." and id_aeronave=".$aeronave." ";
                $ok = true;
                $rs = pg_query( $conexion, $sql );
                if( $rs ){
                    if( pg_num_rows($rs) > 0 )
                    {
                            while( $obj = pg_fetch_array($rs) ){
                              $a=$obj[0];
                              //echo "<tr><td>".$obj[0]."</td>";

          }                    }

          else{
          echo "<p>No se encontraron aeronaves relacionadas a esta poliza</p>";
          }

          }
                else
                    $ok = false;
                    return $a;

              }

    /////////////////////////////////////////////////////////////////////////////////
    function calculartotal( $conexion ,$estado) {
            $sql = "SELECT dias*valor_dia
             FROM estado  WHERE id_estado=".$estado."";
            $ok = true;
          $rs = pg_query( $conexion, $sql );
            if( $rs ){
                if( pg_num_rows($rs) > 0 )
                {
                        while( $obj = pg_fetch_array($rs) ){
                            $a=$obj[0];
    }                    }

    else{
    echo "<p>No se encontraron aeronaves relacionadas a esta poliza</p>";
    }
    }
            else
                $ok = false;
                return $a;

              }



?>
