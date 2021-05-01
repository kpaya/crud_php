<?php

$finalNote = '';
foreach ($myNotes as $note) {
    $finalNote .= '<tr>
                      <td class="text-center">' . $note->title . '</td>
                      <td class="text-center">' . substr($note->description, 0, 100) . '...</td>
                      <td class="text-center">' . ($note->finished == 1 ? 'Sim' : 'Não') . '</td>
                      <td class="text-center">' . date('d/m/Y - H:i:s', strtotime($note->moment)) . '</td>
                      <td class="text-center">
                        <a href="show.php?id=' . $note->id . '">
                          <button type="button" class="btn btn-primary"><i class="far fa-address-book"></i>Visualizar</button>
                        </a>
                        <a href="update.php?id=' . $note->id . '">
                          <button type="button" class="btn btn-success"><i class="far fa-address-book"></i>Editar</button>
                        </a>
                        <a href="delete.php?id=' . $note->id . '">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
}

$finalNote = strlen($finalNote) ? $finalNote : '<tr><td colspan="5" class="text-center">Não existe(m) registro(s) para essa consulta</td></tr>';


?>
<div class="container">
    <div class="row bg-secondary">
        <div class="col text-center">
            <h1>Notes - CRUD</h1>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm">
            <div class="card shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-1">
                            <a href="insert.php" class="">
                                <button type="button" class="btn btn-dark">Adicionar</button>
                            </a>
                        </div>

                        <div class="col-sm text-start">
                            <h3><?= PAGETITLE ?></h3>
                        </div>
                    </div>


                    <div class="card-body px-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">Título</th>
                                        <th class="text-center" scope="col">Descrição</th>
                                        <th class="text-center" scope="col">Finalizado</th>
                                        <th class="text-center" scope="col">Criado em</th>
                                        <th class="text-center" scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?= $finalNote ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>