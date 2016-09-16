<?php 
    session_start();
    if(trim($_POST['tshirt']) != '' && trim($_POST['tshirt']) != undefined) {
        $_SESSION['men']['tshirt'] = $_POST['tshirt'];
    }
    if(trim($_POST['cap']) != '' && trim($_POST['cap']) != undefined) {
        $_SESSION['men']['cap'] = $_POST['cap'];
    }
    if(trim($_POST['shoe']) != '' && trim($_POST['shoe']) != undefined) {
        $_SESSION['men']['shoe'] = $_POST['shoe'];
    }
    if(trim($_POST['glasses']) != '' && trim($_POST['glasses']) != undefined) {
        $_SESSION['men']['glasses'] = $_POST['glasses'];
    }
    if(trim($_POST['shorts']) != '' && trim($_POST['shorts']) != undefined) {
        $_SESSION['kids']['shorts'] = $_POST['shorts'];
    }
    if(trim($_POST['tshirts']) != '' && trim($_POST['tshirts']) != undefined) {
        $_SESSION['kids']['tshirts'] = $_POST['tshirts'];
    }
    if(trim($_POST['tshirtkid']) != '' && trim($_POST['tshirtkid']) != undefined) {
        $_SESSION['kids']['tshirtkid'] = $_POST['tshirtkid'];
    }
    if(trim($_POST['jean']) != '' && trim($_POST['jean']) != undefined) {
        $_SESSION['kids']['jean'] = $_POST['jean'];
    }
    if(trim($_POST['dress1']) != '' && trim($_POST['dress1']) != undefined) {
        $_SESSION['women']['dress1'] = $_POST['dress1'];
    }
    if(trim($_POST['dress2']) != '' && trim($_POST['dress2']) != undefined) {
        $_SESSION['women']['dress2'] = $_POST['dress2'];
    }
    if(trim($_POST['dress3']) != '' && trim($_POST['dress3']) != undefined) {
        $_SESSION['women']['dress3'] = $_POST['dress3'];
    }
    if(trim($_POST['dress4']) != '' && trim($_POST['dress4']) != undefined) {
        $_SESSION['women']['dress4'] = $_POST['dress4'];
    }
?>