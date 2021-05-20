<?php 
    if(is_author()){
        echo "active author";
    }elseif(is_category()){
        echo "active category";
    }
?>