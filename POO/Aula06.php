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
            require_once 'Aula06_Classe.php';
            $c = new ControleRemoto();
            $c->ligar();
            $c->abrirMenu();
        ?>
        </pre>

    </bodry>
</hmtl>