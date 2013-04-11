<!-- File: /app/View/WearHouseProducts/productlist.ctp -->

<h1>Product List</h1>

<div style="text-align:right">
    <p><?php echo $this->Html->link('Home', array('action' => 'index', 'controller' => 'wear_house_products')); ?></p>
    <p><?php echo $this->Html->link('Add Product Detail',
        array('controller' => 'wear_house_products', 'action' => 'add')
    );?></p>
</div>

<table>
    <tr>
        <th>Item Name</th>
        <th>Item Code</th>
        <th>Barcode</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>

    <!-- Here is where we loop through our $WearHouseProducts array, printing out WearHouseProduct info -->

    <?php foreach ($products as $product): ?>
    <tr>
        <td><?php echo $product['WearHouseProduct']['item_name']; ?></td>
        <td><?php echo $product['WearHouseProduct']['item_code']; ?></td>
	<td><?php echo $product['WearHouseProduct']['bar_code']; ?></td>
        <td><?php echo $product['WearHouseProduct']['item_price']; ?></td>
        <td><?php echo $product['WearHouseProduct']['item_quantity']; ?></td>
        <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $product['WearHouseProduct']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $product['WearHouseProduct']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($product); ?>
</table>

