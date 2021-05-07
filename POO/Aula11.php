<!DOCTYPE html>

<hmtl>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <bodry>
        <h1>Classe ...</h1>

        <pre>
        <?php
            require_once 'Aula11_Classe_Visitante.php';

            $v1 = new Visitante;
            $v1->setNome("Jose");
            $v1->setIdade(30);
            $v1->setSexo("M");

            print_r($v1)


            require_once 'Aula11_Classe_Aluno.php';
            require_once 'Aula11_Classe_Bolsista.php';

            $a1 = new Aluno;
            $a1->setNome("Maria");
            $a1->setIdade(24);
            $a1->setSexo("F");
            $a1->setMatricula(111);
            $a1->setCurso("Informatica");
            $a1->pagarMensalidade();

            print_r($a1)
            

            $b1 = new Bolsista;
            $b1->setNome("João");
            $b1->setIdade(18);
            $b1->setSexo("M");
            $b1->setMatricula(222);
            $b1->setCurso("Direito");
            $b1->setBolsa(12.5);
            $b1->pagarMensalidade();
            
        ?>
        </pre>

    </bodry>
</hmtl>