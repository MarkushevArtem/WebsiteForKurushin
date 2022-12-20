<?php 
    function generate_index()
    {
        $min = 0;
        $max = 999999;
        $result = mt_rand($min,$max);
        return $result;
    }    
?>