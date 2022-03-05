<?php
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        for ($i = 0 ;$i <=31 ;$i++){
            if ((2**$i)==$n){
                $num = 1;
            }
        }
        return ($num==1);
    }
}
?>