<?php
require_once('./includes/database.php');
  function find_by_sql($sql){
    global $db;
    $result = $db->query($sql);
    $result_set = $db->while_loop($result);
  return $result_set;
  }

  function join_horaires_table(){
    global $db;
    $sql  =" SELECT * FROM horaires";
    $sql  .=" ORDER BY date ASC";
    return find_by_sql($sql);
  }
  function find_horaires_avec_cours_date($cours, $date){
    global $db;
    $sql = $db->query(" SELECT * FROM horaires WHERE COURS_8H_10H='{$userr}' AND DATE='{$date}'");
    if($result = $db->fetch_assoc($sql)){
      return $result;
    }else{
      return null;
    }
  }

?>