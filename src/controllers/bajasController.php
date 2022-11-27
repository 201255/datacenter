<?php
$servername = "localhost";
$database = "bdafiliaccion";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$consulta= "SELECT * FROM simpatizantes";
$resultado = mysqli_query($conn,$consulta);
if($resultado) {
    while($row = $resultado -> fetch_array()){
        $cveElectoral = $row['cveElectoral'];
        $curp= $row['curp'];
        $nombre = $row['nombre'];
        $apaterno = $row['apaterno'];
        $amaterno = $row['amaterno'];
        $fecha_nac = $row['fecha_nac'];
        $sexo = $row['sexo'];
        $domicilio = $row['domicilio'];
        $colonia = $row['colonia'];
        $localidad = $row['localidad'];
        $municipio = $row['municipio'];
        $estado = $row['estado'];
        $numtelefono = $row['numtelefono'];
        $facebook = $row['facebook'];
        $instagram = $row['instagram'];
        $otrared = $row['otrared'];
        // $municipio = $row['municipio'];
        // $municipio = $row['municipio'];
        // $municipio = $row['municipio'];
        ?> 
        <div>
            <h2><?php echo $nombre ?></h2>
            <div>
                <p>
                    <b>cveElectoral:</b><?php echo $cveElectoral ?><br>
                    <b>curp:</b><?php echo $curp ?><br>
                    <b>apaterno:</b><?php echo $apaterno ?><br>
                    <b>amaterno:</b><?php echo $amaterno ?><br>
                    <b>fecha_nac:</b><?php echo $fecha_nac ?><br>
                    <b>sexo:</b><?php echo $sexo ?><br>
                    <b>domicilio:</b><?php echo $domicilio ?><br>
                    <b>colonia:</b><?php echo $colonia ?><br>
                    <b>localidad:</b><?php echo $localidad ?><br>
                    <b>municipio:</b><?php echo $municipio ?><br>
                    <b>estado:</b><?php echo $estado ?><br>
                    <b>numtelefono:</b><?php echo $numtelefono ?><br>
                    <b>facebook:</b><?php echo $facebook ?><br>
                    <b>instagram:</b><?php echo $instagram ?><br>
                    <b>otrared:</b><?php echo $otrared ?><br>
                </p>
            </div>
        </div>
        <?php        
    }
}

?>
