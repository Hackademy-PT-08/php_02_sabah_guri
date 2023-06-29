<?php
for($i=1;$i<=100;$i++){
    // echo "$i ";
    if($i % 3==0 && $i% 5==0){
        echo "HACKADEMY ";
    }elseif ($i% 5==0) {
        echo "JAVASCRIPT ";
    }elseif($i % 3==0){
        echo "PHP ";

    }else{
        echo "$i ";

    }
    
};