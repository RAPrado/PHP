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
            require_once 'Aula09_Classe_Pessoa.php';
            require_once 'Aula09_Classe_Livro.php';

            
            $p[0] = new Pessoa("Pedro",22,"M");
            $p[1] = new Pessoa("Maria",31,"F");

            $l[0] = new Livro("O Livro dos Espiritos","Allan Kardec",350,$p[0]);
            $l[1] = new Livro("O Livro dos Médiuns","Allan Kardec",450,$p[1]);
         
            
            $l[0]->abrir();
            $l[0]->folhear(0);
            $l[0]->avancar();

            $l[0]->detalhes();
        ?>
        </pre>

    </bodry>
</hmtl>