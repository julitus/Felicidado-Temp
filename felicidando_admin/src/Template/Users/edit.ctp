<div class="users form large-9 medium-8 columns content">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">EDITAR USUARIO</div>
                <div class="panel-body">
                    <?= $this->Form->create($user) ?>
                    <fieldset>
                        <div class="form-group">
                        <?php
                            echo $this->Form->input('first_name', ['class' => 'form-control', 'label' => 'Nombre']);
                            echo $this->Form->input('last_name', ['class' => 'form-control', 'label' => 'Apellidos']);
                            echo $this->Form->input('email', ['class' => 'form-control', 'label' => 'E-mail']);
                            echo $this->Form->input('password', ['class' => 'form-control', 'label' => 'Contraseña']);
                            echo $this->Form->input('active', ['label' => 'Activo']);
                            echo $this->Form->input('new', ['label' => 'Nuevo']);
                            echo $this->Form->input('country_id', ['options' => $countries, 'empty' => true, 'class' => 'form-control', 'label' => 'País']);
                            echo $this->Form->input('state_id', ['options' => $states, 'empty' => true, 'class' => 'form-control', 'label' => 'Estado/Región']);
                            echo $this->Form->input('city_id', ['options' => $cities, 'empty' => true, 'class' => 'form-control', 'label' => 'Ciudad']);
                            echo $this->Form->input('role_id', ['options' => $roles, 'empty' => true, 'class' => 'form-control', 'label' => 'Rol']);
                            echo $this->Form->input('company_id', ['options' => $companies, 'empty' => true, 'class' => 'form-control', 'label' => 'Compañia']);
                        ?>
                        </div>
                    </fieldset>
                    <table>
                        <tr>
                            <td><?= $this->Form->button('Submit', ['class' => 'btn btn-primary']); ?></td>
                            <td>
                                <?= $this->Form->postLink(
                                        __('Eliminar'),
                                        ['action' => 'delete', $user->id],
                                        ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-link']
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
