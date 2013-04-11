<!-- File: /app/View/Settings/edit.ctp -->

<h1>Update Settings</h1>
<div style="text-align:right">
    <p><?php echo $this->Html->link('Home', array('action' => 'index', 'controller' => 'wear_house_products')); ?></p>
    <p><?php echo $this->Html->link('Show Product list',
        array('controller' => 'wear_house_products', 'action' => 'productlist')
    );?></p>
    <?php echo $this->Html->link('Settings', array('action' => 'index', 'controller' => 'settings')); ?>
</div>

<?php
echo $this->Form->create();

echo $this->Form->input($setting['Setting']['key'], array('value' => $setting['Setting']['pair']));
//echo $this->Form->input('tag_width',array('id' => 'tag_width'));
echo $this->Form->end('update');
?>


<script type="text/javascript">
//    function checkInt (value) {
//            if (value.length == 0) {
//                return false;
//            }
//
//            var intValue = parseInt(value);
//
//            if (isNaN(intValue))    return false;
//            else if (intValue <= 0)  return false;
//            else return true;
//        }
//
//        $('#SettingEditForm').submit(function() {
//            if($('#tag_height').val() == "" || $('#tag_width').val() == ""  ) {
//                alert ("Invalid input");return false;
//            }
//            else if(!checkInt($('#tag_height').val()) || !checkInt($('#tag_width').val())) {
//                alert ('Enter number');
//                return false;
//            }
//
//        });
   
</script>
