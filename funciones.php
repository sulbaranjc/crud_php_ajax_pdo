<?php
//
/**
 * Sube una imagen al servidor y devuelve el nombre generado para la misma.
 *
 * @return string|null El nombre generado para la imagen subida o null si no se subió ninguna imagen.
 */
function subir_imagen(){
  if (isset($_FILES["imagen_usuario"])) {
      $extension = explode('.', $_FILES["imagen_usuario"]['name']);
      $nuevo_nombre = rand() . '.' . $extension[1];
      $ubicacion = './img/' . $nuevo_nombre;
      move_uploaded_file($_FILES["imagen_usuario"]['tmp_name'], $ubicacion);
      return $nuevo_nombre;
  }
}



/**
 * Obtiene el nombre de la imagen de un usuario dado su ID.
 *
 * @param int $id_usuario El ID del usuario.
 * @return string El nombre de la imagen del usuario.
 */
function obtener_nombre_imagen($id_usuario){
  include('conexion.php');
  $stmt = $conexion->prepare("SELECT imagen FROM usuarios WHERE id = :id_usuario");
  $stmt->execute();
  $resultado = $stmt->fetchAll();
  foreach($resultado as $fila){
      return $fila["imagen"];
  }
}


/**
 * Obtiene todos los registros de la tabla usuarios
 *
 * @return int Número de filas afectadas por la consulta
 */
function obtener_todos_registros(){
  include('conexion.php');
  $stmt = $conexion->prepare("SELECT * FROM usuarios");
  $stmt->execute();
  $resultado = $stmt->fetchAll();
  return $stmt->rowCount();
}

