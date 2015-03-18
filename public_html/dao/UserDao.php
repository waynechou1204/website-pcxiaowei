<?php
include 'models/User.php';
include 'php_functions/setDB.php';
/**
* 
*/
class UserDao
{
	function getAllUsers(){
		connectDB();
		$sql = 'SELECT * FROM client';
        
        $result=mysql_query($sql) or die("Invalid query: " . mysql_error());
        $nb = mysql_num_rows($result);

        if($nb > 0) {
            while($arr = mysql_fetch_array($result)) {
                $user = new User($arr);
                $users[]=$user;
            }
        }
        mysql_close();
        return $users;
	} 

    function getUserById($id){
        connectDB();
        $sql = 'SELECT * FROM client WHERE id="' . $id .'" ';
        $result=mysql_query($sql) or die("Invalid query: " . mysql_error());
        $nb = mysql_num_rows($result);
        if($nb > 0) {
            while($arr = mysql_fetch_array($result)) {
                $user = new User($arr);
                $data=$user;
            }
        }
        mysql_close();
        return $data;
    }
}
?>