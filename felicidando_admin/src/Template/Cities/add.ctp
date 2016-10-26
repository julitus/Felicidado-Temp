<div class="cities form large-9 medium-8 columns content">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">AGREGAR CIUDAD</div>
                <div class="panel-body">
                    <?= $this->Form->create($city) ?>
                    <fieldset>
                        <div class="form-group">
                        <?php
                            echo $this->Form->input('name', ['class' => 'form-control', 'label' => 'Nombre']);
                            echo $this->Form->input('state_id', ['options' => $states, 'empty' => true, 'class' => 'form-control', 'label' => 'Estado/Región']);
                        ?>
                        </div>
                    </fieldset>
                    <table>
                        <tr>
                            <td><?= $this->Form->button('Submit', ['class' => 'btn btn-primary']); ?></td>
                            <td>
                                <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-link']) ?>           
                            </td>
                        </tr>
                    </table>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
