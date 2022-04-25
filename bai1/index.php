<?php

/* ## test case 1 ## */

/*  a  */

function findMax5($arr)  
{  
    $new_arr = sort($arr);
    $arr_reverse = array_reverse($arr);
    echo "<pre>";
    print_r(array_slice($arr_reverse,0,5));
}  

findMax5([3,4,5,3,2,3,10,11]);
findMax5([14,12,38,17,10,36,12,29,45,34,48,22]) ;
findMax5([10,11,2,30,22,6,8,9,11,12,22]);


/*  b  */

function findFrequent($array)  
{  
   $leng_arr = count($array);
   $new_arr = array();

   for ($i=0; $i <  $leng_arr; $i++) { 
        $count = 1;
        $pre_value = $array[$i];
        $key =  $pre_value;

        if(is_null($pre_value)){
               $key = 'null'; 
        }

        if(is_bool($pre_value)){
            if($pre_value){
                $key = 'true'; 
            }else{
                $key = 'false'; 
            }
        }

        if(array_key_exists($key,$new_arr)){
            break;
        }

        for ($j= $i + 1; $j < $leng_arr; $j++) { 
            $next_value = $array[$j];
            
            if($pre_value === $next_value){
                $count ++;
            }

        }

        $new_arr[$key] = $count;

    }
    arsort($new_arr);
    echo "<br>".''.array_key_first($new_arr);
}  
findFrequent([3, 7, 3]);
 findFrequent([null, "hello", true, null]);
 findFrequent([false, "up", "down", "left", "right", true, false]) ;

?>