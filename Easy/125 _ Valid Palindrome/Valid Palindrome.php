<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        return strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $s)) == strrev(strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $s)));
    }
}
?>