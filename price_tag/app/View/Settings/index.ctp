<!-- File: /app/View/Settings/index.ctp -->

<h1>Setting</h1>

<div style="text-align:right">
    <p><?php echo $this->Html->link('Home', array('action' => 'index', 'controller' => 'wear_house_products')); ?></p>
    <p><?php echo $this->Html->link('Show Product list',
        array('controller' => 'wear_house_products', 'action' => 'productlist')
    );?></p>
</div>

<table>
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>

    <!-- Here is where we loop through our $settings array, printing out setting info -->

    <?php foreach ($settings as $setting): ?>
    <?php 
        $key = ucwords(strtolower(str_replace('_',' ',$setting['Setting']['key'])));
        $value = $setting['Setting']['pair'];
    ?>
    <tr>
        <td><?php echo $key;?></td>
        <td><?php echo $value;?></td>
        <td>
            <?php //echo $this->Form->postLink(
                //'Delete',
                //array('action' => 'delete', $post['Post']['id']),
                //array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $setting['Setting']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($setting); ?>
</table>


