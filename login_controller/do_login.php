<?php 
session_start();
include_once '../classes/MySQLi.php';
$sUsername = @$_REQUEST['username'];
$sUserpass = @$_REQUEST['userpass'];
$aData = array('message_list' => array());
if (NULL != $sUsername && NULL != $sUserpass && '' != trim($sUsername) && '' != trim($sUserpass)) {
    $sQuery = "SELECT COUNT(lo.idLogin) as counter FROM login lo WHERE TRIM(lo.usuLogin) = TRIM('%s')";
    $aResult = doExecuteQuery(sprintf($sQuery, $sUsername));
    if ($aResult[0]['counter'] > 0) {
        $sQuery = "SELECT COUNT(lo.idLogin) as counter"
                . " FROM login lo WHERE TRIM(lo.usuLogin) = TRIM('%s') AND"
                . " TRIM(lo.passLogin) = TRIM('%s')";
        $aResult = doExecuteQuery(sprintf($sQuery, $sUsername, md5($sUserpass)));
        if ($aResult[0]['counter'] > 0) {
            $_SESSION['username'] = $sUsername;
        } else {
            array_push($aData['message_list'], 'Credenciales incorrectas!');
        }
    } else {
        array_push($aData['message_list'], 'Usuario no existe!');
    }
} else {
    array_push($aData['message_list'], 'Complete el formulario!');
}
echo json_encode($aData);