<?php

include ("./includes/db.php");

include("../functions/functions.php");
if(isset($_POST['categoryId'])) {
    $categoryId = $_POST['categoryId'];
    echo "<option>Select Product Category</option>";
    $res = mysqli_query($db, "select * from " . product_categories . " WHERE catid = $categoryId and parent=0 order by catid asc");
    while ($data = mysqli_fetch_array($res)) {
        echo "<option value='" . $data['p_cat_id'] . "'>" . $data['p_cat_title']. "</option>";
    }
}else{
    $subcategoryId = $_POST['subcategoryId'];

    echo "<option>Select sub Category </option>";
    $res = mysqli_query($db, "select * from " . product_categories . " WHERE parent = $subcategoryId   ");
    while ($data = mysqli_fetch_array($res)) {
        echo "<option value='" . $data['p_cat_id'] . "'>" . $data['p_cat_title'] . "</option>";
    }
}

?>