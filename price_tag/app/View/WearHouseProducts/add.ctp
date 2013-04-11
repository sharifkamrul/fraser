<!-- File: /app/View/WearHouseProducts/add.ctp -->

<h1>Add Product Detail</h1>

<div style="text-align:right">
    <p><?php echo $this->Html->link('Home', array('action' => 'index', 'controller' => 'wear_house_products')); ?></p>
    <p><?php echo $this->Html->link('Show Product list',
        array('controller' => 'wear_house_products', 'action' => 'productlist')
    );?></p>
</div>

<?php
echo $this->Form->create(); 
echo $this->Form->input('Enter Item Name',array('id' => 'item_name', 'name' => "data[WearHouseProduct][item_name]"));
echo $this->Form->input('Enter Item Code',array('id' => 'item_code', 'name' => "data[WearHouseProduct][item_code]"));
echo $this->Form->input('Enter Bar Code',array('id' => 'bar_code', 'name' => "data[WearHouseProduct][bar_code]", 'value' => '||||||||||||||||||||||||||||||||||'));
echo $this->Form->input('Enter Price',array('id' => 'item_price', 'name' => "data[WearHouseProduct][item_price]"));
echo $this->Form->input('Enter Number of Mentioned Item',array('id' => 'item_quantity', 'name' => "data[WearHouseProduct][item_quantity]"));
echo $this->Form->end('Add');
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

        $('#WearHouseProductAddForm').submit(function(){
            var item_name = $("#item_name").val();  //alert (item_name.length); return false;
            var item_code = $("#item_code").val();  //alert (item_code.length); return false;
            var item_bar_code = $("#item_bar_code").val();  //alert (item_bar_code.length); return false;
            var item_price = $("#item_price").val();    //alert (item_price); return false;
            var item_quantity = $("#item_quantity").val()   ;//alert (item_quantity.length); return false;

            if(item_name == "" || item_code == "" || item_bar_code == "" || item_price == "" || item_quantity == ""  ) {
                alert ("Fill the required fields");return false;
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
