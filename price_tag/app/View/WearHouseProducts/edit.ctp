<!-- File: /app/View/WearHouseProducts/edit.ctp -->

<h1>Update Product Detail</h1>
<div style="text-align:right">
    <p><?php echo $this->Html->link('Home', array('action' => 'index', 'controller' => 'wear_house_products')); ?></p>
    <p><?php echo $this->Html->link('Show Product list',
        array('controller' => 'wear_house_products', 'action' => 'productlist')
    );?></p>
</div>

<?php
echo $this->Form->create(); 
echo $this->Form->input('item_name',array('id' => 'item_name'));
echo $this->Form->input('item_code',array('id' => 'item_code'));
echo $this->Form->input('bar_code',array('id' => 'bar_code'));
echo $this->Form->input('item_price',array('id' => 'item_price'));
echo $this->Form->input('item_quantity',array('id' => 'item_quantity'));
echo $this->Form->end('Update');
?>

<script type="text/javascript">
    $(document).ready(function(){
        function checkInt (value) {
            if (value.length == 0) {
                return false;
            }

            var intValue = parseInt(value);

            if (isNaN(intValue))    return false;
            else if (intValue <= 0)  return false;
            else return true;
        }

        $('#WearHouseProductEditForm').submit(function(){
            var item_name = $("#item_name").val();  //alert (item_name.length); return false;
            var item_code = $("#item_code").val();  //alert (item_code.length); return false;
            var item_bar_code = $("#item_bar_code").val();  //alert (item_bar_code.length); return false;
            var item_price = $("#item_price").val();    //alert (item_price); return false;
            var item_quantity = $("#item_quantity").val()   ;//alert (item_quantity.length); return false;

            if(item_name == "" || item_code == "" || item_bar_code == "" || item_price == "" || item_quantity == ""  ) {
                alert ("Invalid Input");return false;
            }
            else if(!checkInt(item_price) || !checkInt(item_quantity)) {
                alert ('Enter a number in the item price/quantity field');
                return false;
            }
//            if(item_name == "") {
//                return false;
//            }
//            if(item_name == "") {
//                return false;
//            }
//            if(item_name == "") {
//                return false;
//            }
            
        });
    });
 
</script>
