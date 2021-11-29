<?php

class Revert
{
    public function revertCharacters($str)
    {
        $arr = explode(' ', $str);
        $count = count($arr);
        $revert_str = '';
        for ($i = 0; $i < $count; $i++) {
            $str_word = $arr[$i];
            $arr_symbol = str_split($str_word, 1);
            $arr_reverse = array_reverse($arr_symbol);
            if ($arr_reverse[0]=='!' ||
                $arr_reverse[0]=='?' ||
                $arr_reverse[0]=='.' ||
                $arr_reverse[0]==',') {
                $symbol = array_shift($arr_reverse);
                array_push($arr_reverse,$symbol);
            }
            $revert_str .= implode('', $arr_reverse).' ';
        }
        $result = substr($revert_str,0,-1);
        return $result;
    }
}