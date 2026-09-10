<?php

//definimos la variable inicial del proyecto, todo se direcciona a este archivo
//es importnte que siempre se ejecute primero este archivo para que genere estas rutas
session_start();



if (!defined('ROOT_PATH')) { //si la ruta raiz no esta definida, define todas las rutas requeridas
    define('ROOT_PATH', __DIR__);
    define('CONFIG_PATH', ROOT_PATH . '/config');
    define('APP_PATH', ROOT_PATH . '/app');
    define('VIEW_PATH', APP_PATH . '/views');
    define('MODEL_PATH', APP_PATH . '/models');
    define('CONTROLLER_PATH', APP_PATH . '/controllers');
}


//mandar errores a unj log en desarrollo
ini_set('log_errors', 1); //por default esta habilitada eta opcion de errores
ini_set('error_log', 'app/errors/errores.log');

//obtiene el control y la accion enviados desde el cliente
$controller = $_GET['controller'] ?? 'login';
$action = $_GET['action'] ?? 'loginIP';

//se accede a la configuracion para saber que tipo de contenedor es si publico o privado
require_once CONFIG_PATH . '/Config.php'; //incluye la variable de $config_data para la configuracion
$config = Config::load();



if ($controller == 'login') {
    if ($action == 'loginIP') {
        require_once CONTROLLER_PATH . '/LoginController.php';
        $obj = new LoginController();
        $obj->validarIp();
        exit;
    } else if ($action == 'loginUser') {
        // Existe y tiene valor
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            require_once CONTROLLER_PATH . '/LoginController.php';
            $obj = new LoginController();
            $obj->validarUsuario($username, $password);
            exit;
        }
        else{
            //si se ejecuta esta parte es porque las credenciales enviadas estan vacias
            $_GET['LOGIN_ERROR'] = true; //la utiklizamos para saber que ubo un error de usuario y password
        }
    }
    else if ($action == 'nologin') {

        if($contenedor_privado=='0'){
        // Existe y tiene valor
            require_once CONTROLLER_PATH . '/LoginController.php';
            $obj = new LoginController();
            $obj->noValidar();
            exit;
        }   
    }
   
     else if ($action == 'logOut') {
        require_once CONTROLLER_PATH . '/LoginController.php';
        $obj = new LoginController();
        $obj->logOut();
        exit;
    }
}
//configuracion general --------------------------
else if ($controller == 'configuracion') {

    $rol_id = $_SESSION["rol_id"];

    $datos = json_decode(file_get_contents("php://input"), true);
    //Si el perfil es de superusuario y usuario
    if ($rol_id == 1) {


        require_once CONTROLLER_PATH . '/ConfiguracionController.php';

        if ($action == 'obtener') {
            $obj = new ConfiguracionController();
            $obj->obtener();
            exit;
        } else if ($action == 'guardar') {

            //$nuevo_nombre = $datos ?? "";
            $obj = new ConfiguracionController();
            $obj->guardar($datos);
            exit;
        }
    }
}


require VIEW_PATH . '/login.php';

exit;
