<!-- File: /app/View/WearHouseProduct/index.ctp -->

<p><?php echo $this->Html->link('Show Product list',
    array('controller' => 'wear_house_products', 'action' => 'productlist')
);?></p>

<p><?php echo $this->Html->link('Print Tags',
    array('controller' => 'wear_house_products', 'action' => 'tagprint')
);?></p>

<p><?php echo $this->Html->link('Settings',
    array('controller' => 'settings', 'action' => 'index')
);?></p>



