<!DOCTYPE html>

<hmtl>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <bodry>
        <h1>Polimorfismo ...</h1>

        <pre>
        <?php
            require_once 'Aula12_Classe_Mamifero.php';
            require_once 'Aula12_Classe_Reptil.php';
            require_once 'Aula12_Classe_Peixe.php';
            require_once 'Aula12_Classe_Ave.php';
            require_once 'Aula12_Classe_Canguru.php';

            $m = new Mamifero();
            $a = new Ave();
            $r = new Reptil();
            $c = new Canguru();

            $m->setPeso(10);
            $m->locomover();
            $a->locomover();
            $r->locomover();

            
            
        ?>
        </pre>

    </bodry>
</hmtl>