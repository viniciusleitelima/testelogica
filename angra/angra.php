<?php
$tempo = 0;

if (isset($_POST["massa"])) {
    $massa = str_replace(',','.',$_POST['massa']);
    while ($massa >=  0.10) {
        $massa = $massa * 0.25;
        $tempo = $tempo + 30;
    }
    echo $tempo." segundos";
}else{
    echo "Não foi possível calcular. Por favor insira a masssa do material";
}

  ?>