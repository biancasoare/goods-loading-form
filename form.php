<?php

/* * **************** START - ZONA INCLUDERI FISIERE AUXILIARE ************************************ */
include __DIR__ . '/array_form.php';
/* * **************** END   - ZONA INCLUDERI FISIERE AUXILIARE ************************************ */



/* * **************** START - ZONA DECLARARE VARIABILE AUXILIARE ********************************** */
$erorrs = [];
$mesaj = '';
/* * **************** END   - ZONA DECLARARE VARIABILE AUXILIARE ********************************** */



/* * ****************** START - ZONA DE LOGICA A FORMULARULUI *************************************** */
if (isset($_POST["buton"])) {

    if (array_key_exists("soferi", $_POST)) {
        $soferi = $_POST["soferi"];
    } else {
        $erorrs["soferi"] = "Campul soferi este obligatoriu! Alege cel putin un sofer.";
    }

    if ("" !== $_POST["numar_inmatriculare"]) {
        $numar_inmatriculare = $_POST["numar_inmatriculare"];
        if (!preg_match('/^[a-zA-Z]{1,2}[\s\-]?[0-9]{2,3}[\s\-]?[a-zA-Z]{3}$/', $numar_inmatriculare)) {
            $erorrs["numar_inmatriculare"] = 'Numar inmatriculare invalid';
        }
    } else {
        $erorrs["numar_inmatriculare"] = "Campul numar inmatriculare este obligatoriu!";
    }

    if (isset($_POST["marca"])) {
        $marca = $_POST["marca"];
        if ("" == $marca) {
            $erorrs["marca"] = "Campul marca este obligatoriu!";
        }
    }

    if (isset($_POST["an_fabricatie"])) {
        $an_fabricatie = $_POST["an_fabricatie"];
        if ("" == $an_fabricatie) {
            $erorrs["an_fabricatie"] = "Campul an fabricatie este obligatoriu!";
        }
    }

    if (array_key_exists("marfa", $_POST)) {
        $marfa = $_POST["marfa"];
    } else {
        $erorrs["marfa"] = "Campul marfa este obligatoriu! Alege tipul de marfa transportat.";
    }

    if ("" !== $_POST["rafinarie"]) {
        $rafinarie = $_POST["rafinarie"];
        if (!preg_match('/^[a-zA-Z\-\s\.]+$/', $rafinarie)) {
            $erorrs["rafinarie"] = 'Nume rafinarie invalid';
        }
    } else {
        $erorrs["rafinarie"] = "Campul rafinarie este obligatoriu!";
    }

    if ("" !== $_POST["aviz_incarcare"]) {
        $aviz_incarcare = $_POST["aviz_incarcare"];
        if (!preg_match('/^[a-zA-Z\-\s0-9]+$/', $aviz_incarcare)) {
            $erorrs["aviz_incarcare"] = 'Aviz incarcare invalid';
        }
    } else {
        $erorrs["aviz_incarcare"] = "Campul aviz incarcare este obligatoriu!";
    }

    if ("" !== $_POST["cantitate"]) {
        $cantitate = $_POST["cantitate"];
        if (!preg_match('/^[a-zA-Z\-\s,0-9]+$/', $cantitate)) {
            $erorrs["cantitate"] = 'Cantitate invalida';
        }
    } else {
        $erorrs["cantitate"] = "Campul cantitate este obligatoriu!";
    }

    if ("" !== $_POST["densitate"]) {
        $densitate = $_POST["densitate"];
        if (!preg_match('/^[a-zA-Z\-\s0-9,\/]+$/', $densitate)) {
            $erorrs["densitate"] = 'Densitate invalida';
        }
    } else {
        $erorrs["densitate"] = "Campul densitate este obligatoriu!";
    }

    if ("" !== $_POST["data"]) {
        $data = $_POST["data"];
        if (!preg_match('/^[0-9]{1,4}[\-\/\.\s]?[0-9a-zA-Z]{1,}[\-\/\.\s]?[0-9]{1,4}$/', $data)) {
            $erorrs["data"] = 'Data invalida';
        }
    } else {
        $erorrs["data"] = "Campul data este obligatoriu!";
    }

    if ("" !== $_POST["comentariu"]) {
        $comentariu = $_POST["comentariu"];
        if (!preg_match('/^[0-9a-zA-Z\s\.\!\?\-]+$/', $comentariu)) {
            $erorrs["comentariu"] = 'Comentariu invalid';
        }
    } else {
        $comentariu = "";
    }


    if (!count($erorrs)) {

        $soferi_msg = implode(', ', $soferi);

        // mesajul de multumire
        $mesaj .= '<br /><hr><br />';
        $mesaj .= 'Va multumim pentru completarea formularului !';
        $mesaj .= '<br />';

        $mesaj .= 'Datele Dvs sunt: <br /><br />';
        $mesaj .= 'Sofer/i: ' . htmlspecialchars($soferi_msg);
        $mesaj .= '<br />';
        $mesaj .= 'Numar inmatriculare: ' . htmlspecialchars($numar_inmatriculare);
        $mesaj .= '<br />';
        $mesaj .= 'Marca: ' . htmlspecialchars($marca);
        $mesaj .= '<br />';
        $mesaj .= 'An fabricatie: ' . htmlspecialchars($an_fabricatie);
        $mesaj .= '<br />';
        $mesaj .= 'Marfa: ' . htmlspecialchars($marfa);
        $mesaj .= '<br />';
        $mesaj .= 'Rafinarie: ' . htmlspecialchars($rafinarie);
        $mesaj .= '<br />';
        $mesaj .= 'Aviz incarcare: ' . htmlspecialchars($aviz_incarcare);
        $mesaj .= '<br />';
        $mesaj .= 'Cantitate: ' . htmlspecialchars($cantitate);
        $mesaj .= '<br />';
        $mesaj .= 'Densitate: ' . htmlspecialchars($densitate);
        $mesaj .= '<br />';
        $mesaj .= 'Data: ' . htmlspecialchars($data);
        $mesaj .= '<br />';
        $mesaj .= 'Comentariul tau: ' . htmlspecialchars($comentariu);
        $mesaj .= '<br />';

        $mesaj .= '<br /><hr><br />';
    }

}
/* * **************** END   - ZONA DE LOGICA A FORMULARULUI *************************************** */




/* * **************** START - ZONA DE CREARE VARIABILE pentru template-uri ************************ */
if (isset($erorrs)) {
    echo implode("<br/>", $erorrs);
}

if ($mesaj) {
    echo $mesaj;
}
/* * **************** END   - ZONA DE CREARE VARIABILE pentru template-uri ************************ */

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formular</title>
</head>
<body>

<div id="header">
    <h1>Formular Incarcare Marfa</h1>
</div>

<div id="content">

    <form id="formular" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="width:300px;background-color:#e5e4d7">

        Soferi: <?php echo ($incarcare["soferi"]["required"])? "*" : ""; ?><br/>
        Ion Popescu <input type="checkbox" name="soferi['s001']" value="Ion Popescu" <?php if (array_key_exists('soferi', $_POST) && in_array('Ion Popescu',$_POST['soferi'])) echo 'checked'; ?> /><br/>
        Dan Manea <input type="checkbox" name="soferi['s002']" value="Dan Manea" <?php if (array_key_exists('soferi', $_POST) && in_array('Dan Manea',$_POST['soferi'])) echo 'checked'; ?> /><br/>
        Alin Ionescu <input type="checkbox" name="soferi['s003']" value="Alin Ionescu" <?php if (array_key_exists('soferi', $_POST) && in_array('Alin Ionescu',$_POST['soferi'])) echo 'checked'; ?> /><br/>
        Dan Pop <input type="checkbox" name="soferi['s004']" value="Dan Pop" <?php if (array_key_exists('soferi', $_POST) && in_array('Dan Pop',$_POST['soferi'])) echo 'checked'; ?> /><br/>
        Victor Duta <input type="checkbox" name="soferi['s005']" value="Victor Duta" <?php if (array_key_exists('soferi', $_POST) && in_array('Victor Duta',$_POST['soferi'])) echo 'checked'; ?> /><br/>
        Mihai Danescu <input type="checkbox" name="soferi['s006']" value="Mihai Danescu" <?php if (array_key_exists('soferi', $_POST) && in_array('Mihai Danescu',$_POST['soferi'])) echo 'checked'; ?> /><br/>
        Vlad Petre <input type="checkbox" name="soferi['s007']" value="Vlad Petre" <?php if (array_key_exists('soferi', $_POST) && in_array('Vlad Petre',$_POST['soferi'])) echo 'checked'; ?> /><br/>
        Sorin Popa <input type="checkbox" name="soferi['s008']" value="Sorin Popa" <?php if (array_key_exists('soferi', $_POST) && in_array('Sorin Popa',$_POST['soferi'])) echo 'checked'; ?> /><br/>
        <br/>

        Numar inmatriculare: <?php echo ($incarcare["numar_inmatriculare"]["required"])? "*" : ""; ?><br/>
        <input type="text" name="numar_inmatriculare" value="<?= (isset($numar_inmatriculare)) ? $numar_inmatriculare : ''?>"/><br/>
        <br/>

        Marca: <?php echo ($incarcare["marca"]["required"])? "*" : ""; ?><br/>
        <select name="marca">
            <option value="">Select...</option>
            <option value="Volvo" <?php if (array_key_exists('marca', $_POST) && 'Volvo' == $_POST['marca']) echo 'selected'; ?> >Volvo</option>
            <option value="Manu" <?php if (array_key_exists('marca', $_POST) && 'Manu' == $_POST['marca']) echo 'selected'; ?> >Manu</option>
            <option value="Mercedes" <?php if (array_key_exists('marca', $_POST) && 'Mercedes' == $_POST['marca']) echo 'selected'; ?> >Mercedes</option>
            <option value="Renault" <?php if (array_key_exists('marca', $_POST) && 'Renault' == $_POST['marca']) echo 'selected'; ?> >Renault</option>
            <option value="Iveco" <?php if (array_key_exists('marca', $_POST) && 'Iveco' == $_POST['marca']) echo 'selected'; ?> >Iveco</option>
        </select><br/>
        <br/>

        An fabricatie: <?php echo ($incarcare["an_fabricatie"]["required"])? "*" : ""; ?><br/>
        <select name="an_fabricatie">
            <option value="">Select...</option>
            <option value="2007" <?php if (array_key_exists('an_fabricatie', $_POST) && '2007' == $_POST['an_fabricatie']) echo 'selected'; ?> >2007</option>
            <option value="2008" <?php if (array_key_exists('an_fabricatie', $_POST) && '2008' == $_POST['an_fabricatie']) echo 'selected'; ?> >2008</option>
            <option value="2009" <?php if (array_key_exists('an_fabricatie', $_POST) && '2009' == $_POST['an_fabricatie']) echo 'selected'; ?> >2009</option>
            <option value="2010" <?php if (array_key_exists('an_fabricatie', $_POST) && '2010' == $_POST['an_fabricatie']) echo 'selected'; ?> >2010</option>
            <option value="2011" <?php if (array_key_exists('an_fabricatie', $_POST) && '2011' == $_POST['an_fabricatie']) echo 'selected'; ?> >2011</option>
            <option value="2012" <?php if (array_key_exists('an_fabricatie', $_POST) && '2012' == $_POST['an_fabricatie']) echo 'selected'; ?> >2012</option>
            <option value="2013" <?php if (array_key_exists('an_fabricatie', $_POST) && '2013' == $_POST['an_fabricatie']) echo 'selected'; ?> >2013</option>
            <option value="2014" <?php if (array_key_exists('an_fabricatie', $_POST) && '2014' == $_POST['an_fabricatie']) echo 'selected'; ?> >2014</option>
            <option value="2015" <?php if (array_key_exists('an_fabricatie', $_POST) && '2015' == $_POST['an_fabricatie']) echo 'selected'; ?> >2015</option>
            <option value="2016" <?php if (array_key_exists('an_fabricatie', $_POST) && '2016' == $_POST['an_fabricatie']) echo 'selected'; ?> >2016</option>
        </select><br/>
        <br/>

        Marfa: <?php echo ($incarcare["marfa"]["required"])? "*" : ""; ?><br/>
        Gpl <input type="radio" name="marfa" value="gpl" <?php if (array_key_exists('marfa', $_POST) && 'gpl' == $_POST['marfa']) echo 'checked'; ?> />
        Benzina <input type="radio" name="marfa" value="benzina" <?php if (array_key_exists('marfa', $_POST) && 'benzina' == $_POST['marfa']) echo 'checked'; ?> /><br/>
        <br/>

        Rafinarie: <?php echo ($incarcare["rafinarie"]["required"])? "*" : ""; ?><br/>
        <input type="text" name="rafinarie" value="<?= (isset($rafinarie)) ? $rafinarie : '' ?>" /><br/>
        <br/>

        Aviz Incarcare: <?php echo ($incarcare["aviz_incarcare"]["required"])? "*" : ""; ?><br/>
        <input type="text" name="aviz_incarcare" value="<?= (isset($aviz_incarcare)) ? $aviz_incarcare : '' ?>" /> <br/>
        <br/>

        Cantitate: <?php echo ($incarcare["cantitate"]["required"])? "*" : ""; ?><br/>
        <input type="text" name="cantitate" value="<?= (isset($cantitate)) ? $cantitate : '' ?>" /> <br/>
        <br/>

        Densitate: <?php echo ($incarcare["densitate"]["required"])? "*" : ""; ?><br/>
        <input type="text" name="densitate" value="<?= (isset($densitate)) ? $densitate : '' ?>" /> <br/>
        <br/>

        Data: <?php echo ($incarcare["data"]["required"])? "*" : ""; ?><br/>
        <input type="text" name="data" value="<?= (isset($data)) ? $data : '' ?>" /> <br/>
        <br/>

        Comentariu: <?php echo ($incarcare["comentariu"]["required"])? "*" : ""; ?><br/>
        <textarea name="comentariu" cols="20" rows="20"><?= (isset($comentariu)) ? $comentariu : '' ?></textarea><br/>
        <br/>

        <br/><br/>
        <input type="submit" name="buton" value="Trimite" />
        <br/>

    </form>

</div>

<div id="footer">
    ...........<br/><b /><br/>
</div>

</body>
</html>