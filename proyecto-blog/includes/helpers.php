<?php
function mostrarError($errores, $campo){
    if($errores==null){
        return;
    }
    $alert='';
    if(isset($errores[$campo]) && !empty($campo)){
        $alert = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
    }

    return $alert;
}

function borrarErrores(){
    // if ( $_SESSION['errores']==null){
    //     return;
    // }
    $_SESSION['errores'] = null;

    
    $_SESSION['completado'] = null;

    $_SESSION['errores_entrada'] = null;
   
    
}

function getCategorias($conexion){
    $sql = "SELECT * FROM categorias ORDER BY id ASC";
    $categorias = mysqli_query($conexion,$sql);
    $result = false;
    if($categorias && mysqli_num_rows($categorias)>=1){
        $result = $categorias;
    }
    return $result;
}

function getCategoria($conexion,$id){
    $sql = "SELECT * FROM categorias WHERE id=".$id;
    $categoria = mysqli_query($conexion,$sql);
    $result = false;
    if($categoria && mysqli_num_rows($categoria)>=1){
        $result =mysqli_fetch_assoc($categoria);
    }
    return $result;
}

function getLastEntries($conexion){
    $sql = "SELECT e.*,c.nombre AS 'categoria' FROM entradas e ". 
           "INNER JOIN categorias c ON e.categoria_id=c.id ". 
           "ORDER BY e.id DESC LIMIT 4;";
    $entries = mysqli_query($conexion,$sql);
    $result = false;
    if($entries && mysqli_num_rows($entries)>1){
        $result = $entries;
    }
  
    return $result;
}

function getAllEntries($conexion){
    $sql = "SELECT e.*,c.nombre AS 'categoria' FROM entradas e ". 
           "INNER JOIN categorias c ON e.categoria_id=c.id ". 
           "ORDER BY e.id DESC";
    $entries = mysqli_query($conexion,$sql);
    $result = false;
    if($entries && mysqli_num_rows($entries)>1){
        $result = $entries;
    }
  
    return $result;
}

function getEntriesByCategory($conexion,$categoryId){
   
    $sql = "SELECT e.*,c.nombre AS 'categoria' FROM entradas e ". 
        "INNER JOIN categorias c ON e.categoria_id=c.id ";
       
    if(!empty($categoryId)){
        $sql .="WHERE c.id=".$categoryId." ORDER BY e.id DESC";
    }else {
        $sql .="ORDER BY e.id DESC";
    } 
          
    $entries = mysqli_query($conexion,$sql);
    $result = false;
    if($entries && mysqli_num_rows($entries)>=1){
        $result = $entries;
    }
  
    return $result;
}

function getEntrada($conexion,$id){
    $sql = "SELECT e.*,c.nombre AS 'categoria',u.nombre as 'usuario_nombre' FROM entradas e ". 
        "INNER JOIN categorias c ON e.categoria_id=c.id ". 
        "INNER JOIN usuarios u ON e.usuario_id = u.id".
        "WHERE e.id=".$id." ORDER BY e.id DESC LIMIT 1";
   
    var_dump($sql);
    die();
    $categoria = mysqli_query($conexion,$sql);
    $result = false;
    if($categoria && mysqli_num_rows($categoria)>=1){
        $result =mysqli_fetch_assoc($categoria);
    }
    return $result;
}
















?>