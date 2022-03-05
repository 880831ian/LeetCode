<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
         return strlen(preg_replace("/(\s+|\w+)[\s]+/","",preg_replace("/(^\s+|\s+$)/","",$s)));
        
    }
}
?>