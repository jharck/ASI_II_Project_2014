<?php

function doExecuteQuery($sPgQuery) {
    $oMySQLi = new mysqli("localhost", 'root', '', 'db_clinica_medica');
    $asdjhg = $oMySQLi->connect_error;
    $oResult = $oMySQLi->query($sPgQuery);
    if ($oResult) {
        $iNumRows = mysqli_num_rows($oResult);
        $aResponse = array();
        if ($iNumRows > 0) {
            for ($i = 0; $i < $iNumRows; $i++) {
                array_push($aResponse, mysqli_fetch_array($oResult, MYSQLI_ASSOC));
            }
            $oMySQLi->close();
            return $aResponse;
        } else {
            $iAffectedRows = mysqli_affected_rows($oResult);
            $oMySQLi->close();
            return $iAffectedRows;
        }
    }
    return FALSE;
}

?>