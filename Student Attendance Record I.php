class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function checkRecord($s) {
        if (substr_count($s, 'A') > 1){
            return false;
        }
        if (substr_count($s, 'LLL') >= 1){
            return false;
        }
        return true;
    }
}
