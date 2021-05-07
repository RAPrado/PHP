<!DOCTYPE html>

<hmtl>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <bodry>
        <h1>Classe Pessoas e Livros</h1>

        <pre>
        <?php
            require_once 'Aula10_Classe_Pessoa.php';
            require_once 'Aula10_Classe_Aluno.php';
            require_once 'Aula10_Classe_Professor.php';
            require_once 'Aula10_Classe_Funcionario.php';          

            
            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome("Pedro");
            $p2->setNome("João");
            $p3->setNome("Simão");
            $p4->setNome("Lucas");

            $p2->setCurso("Informática");
            $p3->setSalario(2500.13);
            $p4->setSetor("Estoque");

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
            
        ?>
        </pre>

    </bodry>
</hmtl>