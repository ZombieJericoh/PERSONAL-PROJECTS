<?php 

include_once '../../../wp-load.php';

$table = "UserDependency";
$tableLD = "LastDependency";

$usuario = $_POST['nombre'];
$password = $_POST['password'];

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$count_query = "select count(*) from $table";
$num = $wpdb->get_var($count_query);

if($num >= 7){
	$sub = $num - 4;
	$dep = $sub + 1;

	$result = $wpdb->get_results("SELECT * FROM $tableLD WHERE id = 1");
	foreach ( $result as $page ){$number = $page->Number; $times = $page->Times;}

	if($times == 2){
		$dep = $number;
		$wpdb->update( $tableLD, array( 'Number' => $number + 1, 'Times' => 1 ), array( 'id' => 1 ));
	} else {
		$dep = $number;
		$wpdb->update( $tableLD, array( 'Number' => $number, 'Times' => 2 ), array( 'id' => 1 ));
	}
} else {
	$subone = 1;
}

$wpdb->insert( 
    $table, 
    array( 
        'Usuario' => $usuario, 
        'Contrasena' => $password,
        'Nombre' => $nombre,
        'Direccion' => $direccion,
        'Telefono' => $telefono,
        'Email' => $email,
        'FechaInicio' => date("Y-m-j h:i:s"),
        'IdSuperior' => $dep
      )
    );


?>