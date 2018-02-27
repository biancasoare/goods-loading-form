<?php

/* * **************** START - ZONA INCLUDERI FISIERE AUXILIARE ************************************ */
include __DIR__ . '/arrayFormFunction.php';
include __DIR__ . '/f-forms.php';
include __DIR__ . '/f-html.php';
/* * **************** END   - ZONA INCLUDERI FISIERE AUXILIARE ************************************ */



/* * **************** START - ZONA DECLARARE VARIABILE AUXILIARE ********************************** */
$erorrs = [];
$mesaj = '';
/* * **************** END   - ZONA DECLARARE VARIABILE AUXILIARE ********************************** */



/* * ****************** START - ZONA DE LOGICA A FORMULARULUI *************************************** */
if (isset($_POST["buton"])) {

    if (array_key_exists("soferi", $_POST)) {
        $incarcare["soferi"]["data"] = $_POST["soferi"];
        $soferi = $incarcare["soferi"]["data"];
        //var_dump($soferi);
    } elseif ($incarcare["soferi"]["required"]) {
        $erorrs["soferi"] = "Campul soferi este obligatoriu! Alege cel putin un sofer.";
    }

    if ("" !== $_POST["numar_inmatriculare"]) {
        $incarcare["numar_inmatriculare"]["value"] = $_POST["numar_inmatriculare"];
        $numar_inmatriculare = $incarcare["numar_inmatriculare"]["value"];
        if (!preg_match('/^[a-zA-Z]{1,2}[\s\-]?[0-9]{2,3}[\s\-]?[a-zA-Z]{3}$/', $numar_inmatriculare)) {
            $erorrs["numar_inmatriculare"] = 'Numar inmatriculare invalid';
        }
    } elseif ($incarcare["numar_inmatriculare"]["required"]) {
        $erorrs["numar_inmatriculare"] = "Campul numar inmatriculare este obligatoriu!";
    }

    if (array_key_exists("marca", $_POST)) {
        $incarcare["marca"]["data"] = $_POST["marca"];
        $marca = $incarcare["marca"]["data"];
    } elseif ($incarcare["marca"]["required"]) {
        $erorrs["marca"] = "Campul marca este obligatoriu!";
    }

    if (array_key_exists("an_fabricatie", $_POST)) {
        $incarcare["an_fabricatie"]["data"] = $_POST["an_fabricatie"];
        $an_fabricatie = $incarcare["an_fabricatie"]["data"];
    } elseif ($incarcare["an_fabricatie"]["required"]) {
        $erorrs["an_fabricatie"] = "Campul an fabricatie este obligatoriu!";
    }

    if (array_key_exists("marfa", $_POST)) {
        $incarcare["marfa"]["data"] = $_POST["marfa"];
        $marfa = $incarcare["marfa"]["data"];
    } elseif ($incarcare["marfa"]["required"]) {
        $erorrs["marfa"] = "Campul marfa este obligatoriu! Alege tipul de marfa transportat.";
    }

    if ("" !== $_POST["rafinarie"]) {
        $incarcare["rafinarie"]["value"] = $_POST["rafinarie"];
        $rafinarie = $incarcare["rafinarie"]["value"];
        if (!preg_match('/^[a-zA-Z\-\s\.]+$/', $rafinarie)) {
            $erorrs["rafinarie"] = 'Nume rafinarie invalid';
        }
    } elseif ($incarcare["rafinarie"]["required"]) {
        $erorrs["rafinarie"] = "Campul rafinarie este obligatoriu!";
    }

    if ("" !== $_POST["aviz_incarcare"]) {
        $incarcare["aviz_incarcare"]["value"] = $_POST["aviz_incarcare"];
        $aviz_incarcare = $incarcare["aviz_incarcare"]["value"];
        if (!preg_match('/^[a-zA-Z\-\s0-9]+$/', $aviz_incarcare)) {
            $erorrs["aviz_incarcare"] = 'Aviz incarcare invalid';
        }
    } elseif ($incarcare["aviz_incarcare"]["required"]) {
        $erorrs["aviz_incarcare"] = "Campul aviz incarcare este obligatoriu!";
    }

    if ("" !== $_POST["cantitate"]) {
        $incarcare["cantitate"]["value"] = $_POST["cantitate"];
        $cantitate = $incarcare["cantitate"]["value"];
        if (!preg_match('/^[a-zA-Z\-\s,0-9]+$/', $cantitate)) {
            $erorrs["cantitate"] = 'Cantitate invalida';
        }
    } elseif ($incarcare["cantitate"]["required"]) {
        $erorrs["cantitate"] = "Campul cantitate este obligatoriu!";
    }

    if ("" !== $_POST["densitate"]) {
        $incarcare["densitate"]["value"] = $_POST["densitate"];
        $densitate = $incarcare["densitate"]["value"];
        if (!preg_match('/^[a-zA-Z\-\s0-9,\/]+$/', $densitate)) {
            $erorrs["densitate"] = 'Densitate invalida';
        }
    } elseif ($incarcare["densitate"]["required"]) {
        $erorrs["densitate"] = "Campul densitate este obligatoriu!";
    }

    if ("" !== $_POST["data"]) {
        $incarcare["data"]["value"] = $_POST["data"];
        $data = $incarcare["data"]["value"];
        if (!preg_match('/^[0-9]{1,4}[\-\/\.\s]?[0-9a-zA-Z]{1,}[\-\/\.\s]?[0-9]{1,4}$/', $data)) {
            $erorrs["data"] = 'Data invalida';
        }
    } elseif ($incarcare["data"]["required"]) {
        $erorrs["data"] = "Campul data este obligatoriu!";
    }


    if ("" !== $_POST["comentariu"]) {
        $incarcare["comentariu"]["value"] = $_POST["comentariu"];
        $comentariu = $incarcare["comentariu"]["value"];
        if (!preg_match('/^[0-9a-zA-Z\s\.\!\?\-]+$/', $comentariu)) {
            $erorrs["comentariu"] = 'Comentariu invalid';
        }
    } else {
        $comentariu = "";
    }


    if (!count($erorrs)) {

        $soferi_msg = implode(', ', $soferi);
        var_dump($soferi);

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




/* * **************** INCLUDERE TEMPLATE ********************************************************** */
echo html_start("ro", "Formular", "<h1>Formular Incarcare Marfa</h1>");


    echo start_form("post", htmlspecialchars($_SERVER["PHP_SELF"]), 'style="width:300px;background-color:#e5e4d7"');


        foreach ($incarcare as $detalii) {

            if ("text" == $detalii["type"]) {
                echo addLabel($detalii["label"]);
                echo ($detalii['required']) ? '*' : '';
                echo "<br/>";
                echo form_input($detalii['name'], $detalii['type'], $detalii['value'], 'class="input_style"');

                echo "<br/><br/>";
            } elseif ("checkbox" == $detalii["type"]) {
                echo addLabel($detalii["label"]);
                echo ($detalii['required']) ? '*' : '';
                echo "<br/>";
                echo form_choice($detalii['name'], true, true, $detalii['init_data'], $detalii['data'] );

            } elseif ("select" == $detalii["type"]) {
                echo addLabel($detalii["label"]);
                echo ($detalii['required']) ? '*' : '';
                echo "<br/>";
                echo form_choice($detalii['name'], false, false, $detalii['init_data'], $detalii['data'] )."<br/>";
                echo '<br>';
            } elseif ("radio" == $detalii["type"]) {
                echo addLabel($detalii["label"]);
                echo ($detalii['required']) ? '*' : '';
                echo form_choice($detalii['name'], false, true, $detalii['init_data'], $detalii['data'] );
                echo '<br>';
            } elseif ("textarea" == $detalii["type"]) {
                echo addLabel($detalii["label"]);
                echo ($detalii['required']) ? '*' : '';
                echo '<br>';
                echo form_textarea($detalii['name'], $detalii["value"],'class= cols="20" rows="20"');
                echo '<br>';
            }
        }
        echo "<br/><br/>";

        echo form_button("buton", "Trimite")."<br/>";

    echo end_form();

echo html_end();
