<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}
$MM_restrictGoTo = "index.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  //header("Location: ". $MM_restrictGoTo); 
  echo json_encode($_SESSION);
    exit;
}
?>
<?php 
require_once('../Connections/crenesoft.php'); ?>
<?php


if(isset($_GET["cache"])){
  $id = $_GET["id"];
  $query_Recordset1 = "SELECT * FROM resultclustering WHERE id=".$id." LIMIT 1";
  mysql_select_db($database_crenesoft, $crenesoft);
  $Recordset1 = mysql_query($query_Recordset1, $crenesoft) or die(mysql_error());
  $result = mysql_fetch_assoc($Recordset1);
  $lastId =$result["id"];
  $jreponse = json_decode($result["resultado"]);
  $jreponse->idconsulta = $lastId;
  $response = json_encode($jreponse);
  echo $response;
}
else if(isset($_POST["tabla"])){
  $tabla = json_decode($_POST["tabla"], true);
  $fichero =  uniqid();

  $fp = fopen($fichero.".csv", 'w');

  foreach ($tabla as $campos) {
      fputcsv($fp, $campos);
  }

  fclose($fp);
  exec('Rscript script.R '.$fichero.".csv");
  echo $fichero;  
}
else
{
  $q = $_GET["q"];
  $page = $_GET["page"];
  $per_page = $_GET["per_page"];


  function merge($acc, $actual){
     if($acc === null){
      $acc = $actual;
     }else{
      $acc->items = array_merge($acc->items, $actual->items);
     }
     return $acc;
  }


  function peticciongithub($q, $page,$per_page,$resultadofinal){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.github.com/search/repositories?q=".urlencode($q)."&page=".$page."&per_page=".$per_page."&sort=stars&order=desc",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "postman-token: 77ecfb39-adf5-cd6c-0814-2936b6b2ef0f",
        "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13"

      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    $resjs = json_decode($response);
    $resultadofinal = merge($resultadofinal, $resjs);
    return $resultadofinal;

  }
  $resultadofinal = null;
  for($i =0; $i < 2 ; $i++){
    $resultadofinal = peticciongithub($q, $i+1,$per_page,$resultadofinal );
    $tc = $resultadofinal->total_count;
    if($tc <= ($i+1)*60){
      break;
    }
  }

  $response = json_encode($resultadofinal);

  $insertSQL = sprintf("INSERT INTO resultclustering (resultado,consulta,userid) VALUES ('%s','%s',%d)",mysql_real_escape_string($response), mysql_real_escape_string($q),$_SESSION['MM_idusuario']);

    mysql_select_db($database_crenesoft, $crenesoft);
    $Result = mysql_query($insertSQL, $crenesoft) or die(mysql_error());

  $lastId = mysql_insert_id();
  $jreponse = $resultadofinal; //json_decode($response);
  $jreponse->idconsulta = $lastId;
  $response = json_encode($jreponse);



  /*if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    */echo $response;
    xdebug_start_function_monitor();
  //}
}
//echo json_encode($repos);   