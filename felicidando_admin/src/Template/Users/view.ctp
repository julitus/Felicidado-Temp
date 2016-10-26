<div class="users view large-9 medium-8 columns content">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><?= h($user->first_name . ' ' . $user->last_name) ?></div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="vertical-table">
                            <tr>
                                <th scope="row" class="th-class"><?= __('Nombre') ?></th>
                                <td><?= h($user->first_name) ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('Apellidos') ?></th>
                                <td><?= h($user->last_name) ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('E-mail') ?></th>
                                <td><?= h($user->email) ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('Contraseña') ?></th>
                                <td><?= h($user->password) ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('
                                País') ?></th>
                                <td><?= $user->has('country') ? $this->Html->link($user->country->name, ['controller' => 'Countries', 'action' => 'view', $user->country->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('Estado/Región') ?></th>
                                <td><?= $user->has('state') ? $this->Html->link($user->state->name, ['controller' => 'States', 'action' => 'view', $user->state->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('Ciudad') ?></th>
                                <td><?= $user->has('city') ? $this->Html->link($user->city->name, ['controller' => 'Cities', 'action' => 'view', $user->city->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('Rol') ?></th>
                                <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('Compañia') ?></th>
                                <td><?= $user->has('company') ? $this->Html->link($user->company->name, ['controller' => 'Companies', 'action' => 'view', $user->company->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('Id') ?></th>
                                <td><?= $this->Number->format($user->id) ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('Ptos. Acumulados') ?></th>
                                <td><?= $this->Number->format($user->accumulated_points) ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('Creado') ?></th>
                                <td><?= h($user->created) ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('Ult. Modificación') ?></th>
                                <td><?= h($user->modified) ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('Activo') ?></th>
                                <td><?= $user->active ? __('Yes') : __('No'); ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th-class"><?= __('Nuevo') ?></th>
                                <td><?= $user->new ? __('Yes') : __('No'); ?></td>
                            </tr>
                        </table>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class' => 'btn btn-link']) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-link']) ?>
                        <?= $this->Html->link(__('Ir a Lista'), ['action' => 'index'], ['class' => 'btn btn-link']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
