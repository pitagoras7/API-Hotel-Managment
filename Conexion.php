<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
class Conexion {

    public $con;
    public $sql;


    public $insert_field__      = null;
    public $insert_value__      = null;

    public $where_value__       = null;
    public $set_update__        = null;
    public $where_condition__   = null;
    public $extra_sql__         = null;
    public $sql__;
    public $foreign_field__     = null;
    public $foreign_table__     = null;
    public $error               = "error";



    public function open(){
        $this->con = new mysqli("localhost", "root", "12345789", "ibuhotelDB");
    }


    public function execute_sql($sql2){
        $this->open();
        $this->sql =  $this->con->query($sql2);
        return $this->sql;
    }



    function id__()
    {
        return $this->con->insert_id;
    }


    public function where__($x,$y,$z){
        $this->where_condition__.= $x." ".$y."  '".$z."'  AND ";
    }

    public function foreign__($ff,$ft)
    {

        $this->foreign_field__[] = $ff;
        $this->foreign_table__[] = $ft;

    }


    public function ta__($x){
       return  json_decode($x);
    }

    public function tj__($x){
       return  json_encode($x);
    }



    public function ejecucion()
    {



        for ($i=0; $i <count($this->where_value__) ; $i++) { 

            $this->set_update__.= $this->where_field__[$i]." = '".$this->where_value__[$i]."',";

            $this->insert_field__.=  "".$this->where_field__[$i].",";
            $this->insert_value__.=  "'".$this->where_value__[$i]."',";


        }


        $this->set_update__     = substr($this->set_update__,0,-1);
        $this->insert_field__   = substr($this->insert_field__,0,-1);
        $this->insert_value__   = substr($this->insert_value__,0,-1);


        if( $this->id != null ) {

            $sql =  "UPDATE ".$this->table." SET ".$this->set_update__."  WHERE id in ('".$this->id."')";

        }else  if( $this->where_condition__ != null ){

            $sql = "UPDATE ".$this->table." SET  ".$this->set_update__." WHERE ".$this->where_condition__." 1=1 ".$this->extra_sql__ ;

        }else{

            $sql = "INSERT INTO ".$this->table." (".$this->insert_field__ .") VALUES (".$this->insert_value__.");";

        }


        $this->sql__ = $sql;


        $this->open();
        $this->request  = $request;
        $mysqli         = $this->con;


        if ($stmt = $mysqli->prepare($this->sql__)) {
            $stmt->execute();
            return $this->id__();

        }

    }





    public function foreign_query($table,$id){

        if ( $result = $this->execute_sql("SELECT * FROM ".$table." WHERE id  in ('".$id."') ") ) {

            while($row = $result->fetch_array(MYSQL_ASSOC)) {

                $myArray[] = $row;

            }

            return $myArray[0];
        }

    }




    public function all($id=null){


        if( $id != null ){

            $w = " id in ('".$id."')";

        }else if($this->where_condition__ == null){
            $w = "1=1";
        }else{
            $w = $this->where_condition__." 1=1";
        }
        
        if($this->extra_sql__ == null)
        {
            $e = "";
        }else{
            $e = $this->extra_sql__;
        }


        //echo "SELECT * FROM ".$this->table." WHERE ".$w." ".$e;



        if ( $result = $this->execute_sql("SELECT * FROM ".$this->table." WHERE ".$w." ".$e ) ){

            while($row = $result->fetch_array(MYSQL_ASSOC)) {

                $myArray[] = $row;
            }


            for ($y=0; $y < count($myArray) ; $y++) { 

                if( $this->foreign_table__ != null){
                    for ($i=0; $i <count($this->foreign_table__) ; $i++) {

                        $myArray[$y][$this->foreign_field__[$i]."_fk"] = $this->foreign_query( $this->foreign_table__[$i] , $myArray[$y][$this->foreign_field__[$i]] );
                        
                    }
                }
            }


            return json_encode($myArray);

        }

    }


    public function ARR__($json,$n=1){


     if($n>0){
         $arr[$n] = json_decode($json);
         return $arr[$n];
     }

     if($n==0){
         $arr = json_decode($json);
         return $arr;
     }



 }


 public function delete($id){
    $this->open();
    $mysqli = $this->con;
    if ($stmt = $mysqli->prepare("UPDATE ".$this->table." set archived='yes'  , archived_at = CURRENT_TIMESTAMP()  where id=? ")) {
        $stmt->bind_param("i",$id);
        return($stmt->execute());
    }
}


function date_sql($fecha)
{
    $ano = substr($fecha, -4);
    $mes = substr($fecha, -7, 2);
    $dia = substr($fecha, -10, 2);
    return "$ano/$mes/$dia";
}

public function datetime_now()
{
    return date('Y-m-d H:i:s');
}

public function now__()
{
    return date('Y-m-d H:i:s');
}


function Sanitize($input, $type) {
  switch ($type) {
    // 1- Input Validation


    case 'password': // comprueba si $input es integer
    $output = md5($input);
    
    break;
    

    case 'int': // comprueba si $input es integer
    if (is_int(pg_escape_string($input))) {
     $output = $input;
 } else {
    $output = "";
}
break;

    case 'str': // comprueba si $input es string
    if (is_string(pg_escape_string($input))) {
        $output = $input;
    } else {
        $output = "";
    }
    break;
    
    case 'digit': // comprueba si $input contiene solo numeros
    if (ctype_digit($input)) {
        $output = $input;
    } else {
        $output = "";
    }
    break;
    
    case 'upper': // comprueba si $input contiene solo mayusculas
    if ($input == strtoupper($input)) {
        $output = $input;
    } else {
        $output = "";
    }
    break;
    
    case 'lower': // comprueba si $input contiene solo minusculas
    if ($input == strtolower($input)) {
        $output = $input;
    } else {
        $output = "";
    }
    break;
    
    case 'mobile': // comprueba si $input contiene 9 numeros
    if ((strlen($input) == 9) && (ctype_digit($input) == TRUE)) {
        $output = $input;
    } else {
        $output = "";
    }
    break;
    
    case 'email': // comprueba si $input tiene formato de email
    $reg_exp = "/^[-.0-9A-Z]+@([-0-9A-Z]+.)+([0-9A-Z]){2,4}$/i";
    if (preg_match($reg_exp, pg_escape_string($input))) {
        $output = $input;
    } else {
        $output = "";
    }
    break;
    
    
    case 'no_html': // los datos van a una pagina web, escapar para HTML
    $output = htmlentities(trim($input), ENT_QUOTES);
    break;
    
    case 'shell_arg': // los datos van al shell, escapar para shell argument
    $output = escapeshellarg(trim($input));
    break;
    
    case 'shell_cmd': // los datos van al shell, escapar para shell command
    $output = escapeshellcmd(trim($input));
    break;
    
    case 'url': // los datos forman parte de una URL, escapar para URL
    
      // htmlentities() traduce a HTML el separador &
    $output = htmlentities(urlencode(trim($input)));
    break;
    
    case 'comment': // los datos solo pueden contener algunos tags HTML
    $output = strip_tags($input, '<b><i><img>');
    break;
}
return $output;
}



/* PASSWORD */

public function password_create($pass)
{
    return password_hash ($pass, PASSWORD_DEFAULT);
}






}


?>
