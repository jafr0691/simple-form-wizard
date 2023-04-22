<?php
function isNull($nombre,$code, $phone, $email)
{
    if (strlen(trim($nombre)) < 1 || strlen(trim($code)) < 1 || strlen(trim($phone)) < 1 || strlen(trim($email)) < 1) {
        return true;
    } else {
        return false;
    }
}

function isEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function numeroExiste($numero,$id='')
{
    global $dbh;
    if ($id=='') {
        $nft = $dbh->prepare("SELECT COUNT(*) as total FROM formdatos WHERE phone = :phone LIMIT 1");
        $nft->execute(array(':phone' => $numero));
    }else{
        $nft = $dbh->prepare("SELECT COUNT(*) as total FROM formdatos WHERE phone = :phone and id_form<>:id LIMIT 1");
        $nft->execute(array(':phone' => $numero,':id'=>$id));  
    }
    $numero = $nft->fetch(PDO::FETCH_ASSOC);

    if ($numero['total'] > 0) {
        return true;
    } else {
        return false;
    }
}

function emailExiste($email,$id='')
{
    global $dbh;
    if ($id=='') {
        $ml = $dbh->prepare("SELECT COUNT(*) as total FROM formdatos WHERE email = :email LIMIT 1");
        $ml->execute(array(':email' => $email));
    }else{
        $ml = $dbh->prepare("SELECT COUNT(*) as total FROM formdatos WHERE email = :email and id_form<>:id LIMIT 1");
        $ml->execute(array(':email' => $email,':id'=>$id));
    }
    $email = $ml->fetch(PDO::FETCH_ASSOC);

    if ($email['total'] > 0) {
        return true;
    } else {
        return false;
    }
}
function resultBlock($errors)
{
    $msg ="";
    if (count($errors) > 0) {
        $msg .= "<div class='alert alert-danger text-left' role='alert'>
            <ul>";
        foreach ($errors as $error) {
            $msg .= "<li>" . $error . "</li>";
        }
        $msg .="</ul></div>";
    }
    return $msg;
}

function code()
{

    $ip = $_SERVER['REMOTE_ADDR'];
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    $visitor = $ip;

    $datocode = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=" . $visitor));

    // $code       = $datocode["geoplugin_countryCode"];
    // $pais       = $datocode["geoplugin_countryName"];
    // $region     = $datocode["geoplugin_city"];
    // $data = array('ip'=> $visitor, 'code'=> $code, 'pais'=> $pais, 'region'=> $region);

    return $datocode;
}

function selectcode()
{
    global $dbh;
    $selecthtml = "";
    $liscode    = $dbh->prepare("SELECT * FROM code_region");
    $liscode->execute();
    $code = $liscode->fetchAll(PDO::FETCH_ASSOC);

    $codehttp = (!isset(code()["geoplugin_countryCode"])) ? $codehttp = "VE" : $codehttp = code()["geoplugin_countryCode"];

    foreach ($code as $lc) {
        if ($codehttp == $lc['text_code']) {
            $selecthtml .= "<option value='" . $lc['code'] . "' selected='true'>" . $lc['text_code'] . " +" . $lc['code'] . "</option>";
        } else {
            $selecthtml .= "<option value='" . $lc['code'] . "'>" . $lc['text_code'] . " +" . $lc['code'] . "</option>";
        }
    }

    return $selecthtml;
}
