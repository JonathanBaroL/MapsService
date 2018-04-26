<?php

$login = new Login("localhost","","app","root","");
class Login
{
	private $db;

	public function __construct($host,$port,$dbname,$dbuser,$passwd)
	{
        $dsn = "mysql:host=$host;port=$port;dbname=$dbname;";
        try{
            $this->db = new PDO($dsn,$dbuser,$passwd);
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           // echo 'conexión establecida';
        }catch(PDOException $ex)
        {
            echo 'error en la conexión a la BD'.$ex->getMessage();
        }
    }

    public function insertarUsuario($nombre, $apellido, $email, $contra, $nomUsuario)
    {
        try
        {
            $verif = $this->db->prepare("SELECT * FROM app.users where `nomUsuario`=?");
            $verif->execute(array($nomUsuario));
            $renglones = $verif->fetchAll();
            if(count($renglones)==1)
            {
                echo 'usuario ya existente';
                return false;//ya existe
            }
            else{
                $resultadoins = $this->db->prepare("INSERT INTO `users` (`nom`,`apellido`,`email`,`contra`,`nomUsuario` ) 
                VALUES (?,?,?,?,?);");
                $resultadoins->execute(array($nombre, $apellido, $email, $contra, $nomUsuario));
                return true;
            }
        }catch(PDOException $ex)
        {
            echo 'error en la inserción'.$ex->getMessage();
            return false;
        }
    }
    
    public function consultarInfo($nomUsuario, $contra)
    {
        try
        {
            $verif = $this->db->prepare("SELECT * FROM `users` where `nomUsuario`=? and `contra`=? ");
            $info=$verif->execute(array($nomUsuario, $contra));
            if($info==1)
            {
                $_SESSION['usuario'] = $nomUsuario; 
                $q = "SELECT * FROM  `users` where `nomUsuario`= '$nomUsuario'";
                $res=$this->consultar($q);
                return $res;
            }
        }catch(PDOException $ex)
        {
            echo 'error en la consulta'.$ex->getMessage();
        }
        return $resultado;
    }

    public function consultar($consulta)
    {
        try{
            $resultado = $this->db->query($consulta);
            /*$info=$resultado->fetch();
            var_dump($info);*/
        }catch(PDOException $ex)
        {
            echo 'error en la consulta'.$ex->getMessage();
            $resultado=null;
        }
        /*echo $resultado;*/
        return $resultado;
    }
}

?>