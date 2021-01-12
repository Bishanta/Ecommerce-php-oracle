<?php
include 'includes/form.php';


if($shop_details = $crud->fetch_table_data('shop')) {
    foreach($shop_details as $shop) {
        if($trader_details = $crud->check_column_data('trader', 'trader_id',$shop['TRADER_ID'])) {
            if($trader_details[0]['STATUS']) {
                echo $shop['SHOP_NAME'];
            }
        }

    }
}

?>

