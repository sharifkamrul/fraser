<!-- File: /app/View/WearHouseProducts/tag_print_view.ctp -->
<style type="text/css">
    <!--
    @media screen{
        body{margin:10px;}
    }

    @media print{
        body{margin: 0; padding: 0;}
        #print-price-tag .tag_separator:nth-child(6n){
            /* border-right: none; */
        }
    }
    #print-price-tag{vertical-align: baseline;font-family:<?php echo $tag_font;?>}
    #print-price-tag .price_tags{height:<?php echo __tag_height;?>in;width:<?php echo __tag_width;?>in;}
    #print-price-tag .tag_separator{height: <?php echo __tag_height;?>in;}

    -->
</style>

<?php //echo $this->Form->create();?>
<div id="print-price-tag">
<?php
    for($i = 1; $i <= $tag_number; $i++) {
?>
        <div class="price_tags price_tag_<?php echo $i; ?>">
            <div class="item_section"><span><?php echo $tag_section; ?></span></div>
            <div class="item_name"><?php echo $item_name; ?></div>
            <div class="item_bar_code"><?php echo $this->Html->image('sample_barcode.jpg'); ?></div>
            <div class="item_code"><?php echo $item_code; ?></div>
            <div class="item_price">
                <span class="currency">Tk.</span>
                <span class="amount"><?php echo $item_price; ?></span>
                <span class="tax">+VAT</span>
            </div>
        </div>
        <div class="tag_separator"></div>
<?php
    }
?>
    <div class="clear"></div>
</div>
<?php //echo $this->Form->end('print');?>
<?php

//function genRandomString() {
//    $length = 12;
//    $characters = '1234567890';
//    $string = "";
//    for ($p = 0; $p < $length; $p++) {
//        $string .= $characters[mt_rand(0, strlen($characters) - 1)];
//    }
//    CakeLog::write('debug', $string);
//    while(strpos($string, "0") === 0){
//        $string = genRandomString();
//    }
//    return $string;
//}
?>

<script type="text/javascript">
//    $(document).ready(function(){
//        $('#WearHouseProductTagprintForm').submit(function(){
//            alert('hi');
//            window.print();
//            return false;
//        });
//        window.print();
//    });
</script>
