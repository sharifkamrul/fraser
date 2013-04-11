<!-- File: /app/View/WearHouseProducts/tagprint.ctp -->

<p style="text-align:right"><?php echo $this->Html->link('Home', array('action' => 'index', 'controller' => 'wear_house_products')); ?></p>

<?php echo $this->Form->create('WearHouseProduct', array('target' => '_blank')); ?>
<?php
echo $this->Form->input('item_section');
echo $this->Form->input('item_name');
echo $this->Form->input('item_code');
echo $this->Form->input('item_price');
echo $this->Form->input('Number of tags',array('id' => 'tag_num', 'value' => 1,'name' => "data[WearHouseProduct][tag_number]"));
echo $this->Form->input('select_font', array('type' => 'select','options' => $fonts));
echo $this->Form->end('Print Tags');

?>

<script type="text/javascript">
    $(document).ready(function(){
        
        function checkInt (value) {
            if (value.length == 0) {
                return false;
            }

            var intValue = parseInt(value);//alert(intValue);
            if (isNaN(intValue)) {//alert('hi');
                return false;
            }

            if (intValue < 0)
            {
                //alert('hi');
                return false;
            }
            return true;
        }

        $('#WearHouseProductTagprintForm').submit(function(){
            if(($("#WearHouseProductItemCode").val() != "") && $("#WearHouseProductItemName").val() != ''
                && $("#WearHouseProductItemPrice").val() != "" && $("#tag_num").val() != "") {
                //alert ('hi');
                if(false == checkInt($("#tag_num").val())) {
                    alert ('Invalid Input in Tag number field'); return false;
                }
                else if(false == checkInt($("#WearHouseProductItemPrice").val())) {
                    alert ('Invalid input in Price field'); return false;
                }
                else {
                    return true;
                }
            }
            else {
                alert ('Empty Input!!!')
                return false;
            }
        });
    });

</script>