<?php
session_start();
session_destroy();
echo 'Cerrando sesión';
echo '<script> window.location="../index.php"; </script>';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Saliendo...</title>
	<meta charset="utf-8"> 
    </head>
<body>
</body>
</html>