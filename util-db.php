<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'chloepro_finalprojectuser', 'NcZdR^o5pb=Q', 'chloepro_finalproject');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
