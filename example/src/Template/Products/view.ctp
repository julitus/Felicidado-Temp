<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Promotions'), ['controller' => 'Promotions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Promotion'), ['controller' => 'Promotions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Product Details'), ['controller' => 'ProductDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Detail'), ['controller' => 'ProductDetails', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($product->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File1') ?></th>
            <td><?= h($product->file1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File2') ?></th>
            <td><?= h($product->file2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File3') ?></th>
            <td><?= h($product->file3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Path') ?></th>
            <td><?= h($product->path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Promotion') ?></th>
            <td><?= $product->has('promotion') ? $this->Html->link($product->promotion->name, ['controller' => 'Promotions', 'action' => 'view', $product->promotion->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rating') ?></th>
            <td><?= $this->Number->format($product->rating) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hit') ?></th>
            <td><?= $this->Number->format($product->hit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Price') ?></th>
            <td><?= $this->Number->format($product->final_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Count') ?></th>
            <td><?= $this->Number->format($product->count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Points') ?></th>
            <td><?= $this->Number->format($product->points) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Brand Id') ?></th>
            <td><?= $this->Number->format($product->brand_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($product->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Product Details') ?></h4>
        <?php if (!empty($product->product_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Total Points') ?></th>
                <th scope="col"><?= __('Total Price') ?></th>
                <th scope="col"><?= __('Sale Date') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->product_details as $productDetails): ?>
            <tr>
                <td><?= h($productDetails->id) ?></td>
                <td><?= h($productDetails->quantity) ?></td>
                <td><?= h($productDetails->total_points) ?></td>
                <td><?= h($productDetails->total_price) ?></td>
                <td><?= h($productDetails->sale_date) ?></td>
                <td><?= h($productDetails->product_id) ?></td>
                <td><?= h($productDetails->user_id) ?></td>
                <td><?= h($productDetails->created) ?></td>
                <td><?= h($productDetails->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductDetails', 'action' => 'view', $productDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductDetails', 'action' => 'edit', $productDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductDetails', 'action' => 'delete', $productDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
