<?php
function Cabecera(){
?>
<h1>Esta es mi agenda</h1>
<?php
};
function Pie(){
?>
<footer>Espero que lo disfrute</footer>
<?php
};
function mostrarContactos($contactos){
    $cabeceraTabla = false;
    for ($i=0; $i<count($contactos); $i++) {
        if(!$cabeceraTabla){
            $cabeceraTabla = array_keys($contactos[$i]);
            echo "<table border='1'><tr>";
            foreach ($cabeceraTabla as $nombreColumna) {
                echo "<th> $nombreColumna </th>";
            }
            echo "</tr>";
            
        }
        echo "<tr>";
        foreach ($contactos[$i] as $nombreCampo => $valorCampo) {
            echo "<td> $valorCampo </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>