<div class="countries view large-9 medium-8 columns content">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><?= h($country->name) ?></div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="vertical-table">
                            <tr>
                                <th scope="row" class="th-class"><?= __('Nombre') ?></th>
                                <td><?= h($country->name) ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('Abreviatura') ?></th>
                                <td><?= h($country->sortname) ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('Id') ?></th>
                                <td><?= $this->Number->format($country->id) ?></td>
                            </tr>
                        </table>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $country->id], ['class' => 'btn btn-link']) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id), 'class' => 'btn btn-link']) ?>
                        <?= $this->Html->link(__('Ir a Lista'), ['action' => 'index'], ['class' => 'btn btn-link']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
