<!DOCTYPE html>

<hmtl>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <bodry>
        <h1>Projeto Controle Remoto</h1>

        <pre>
        <?php
            require_once 'Aula07_Classe.php';
            require_once 'Aula07_Classe_Luta.php';

            $l = array();

            $l[0] = new Lutador("Pretty Boy","Fraça",30, 1.75,68.9,11,2,1);            
            $l[0]->Status();

            $l[1] = new Lutador("Putscript","Brasil",29, 1.68,57.8,14,2,3);            
            $l[1]->Status();

            $UEC01 = new Luta();
            $UEC01->marcarLuta($l[0];$l[1]);

            $UEC01->lutar();

            $l[0]->status();
            $l[1]->status();

        ?>
        </pre>

    </bodry>
</hmtl>