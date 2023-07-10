<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto php fundamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Bebe Agua</span>
        </div>
        <div class="container-fluid">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Nome do curso</th>
                <th scope="col">Carga horária</th>
                <th scope="col">Versão da ferramenta</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(cursos() as $curso) : ?>
                    <?php if(!$curso["status"]) {
                        continue;
                    }
                    ?>
                        <tr>
                            <th scope="row"><?= $curso["nome_curso"] ?></th>
                            <td><?= cargaHoraria($curso["carga_horaria"])?></td>
                            <td><?= $curso["versao_ferramenta"]?></td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
