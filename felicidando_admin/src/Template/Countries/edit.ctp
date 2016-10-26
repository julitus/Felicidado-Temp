<div class="countries form large-9 medium-8 columns content">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">EDITAR PAÍS</div>
                <div class="panel-body">
                    <?= $this->Form->create($country) ?>
                    <fieldset>
                        <div class="form-group">
                        <?php
                            echo $this->Form->input('name', ['class' => 'form-control', 'label' => 'Nombre']);
                            echo $this->Form->input('sortname', ['class' => 'form-control', 'label' => 'Abreviatura']);
                        ?>
                        </div>
                    </fieldset>
                    <table>
                        <tr>
                            <td><?= $this->Form->button('Submit', ['class' => 'btn btn-primary']); ?></td>
                            <td>
                                <?= $this->Form->postLink(
                                        __('Eliminar'),
                                        ['action' => 'delete', $country->id],
                                        ['confirm' => __('Are you sure you want to delete # {0}?', $country->id), 'class' => 'btn btn-link']
                                    )
                                ?>            
                            </td>
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
