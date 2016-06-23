<?php
/**
 * 
 * @author Axoford12
 * @since 2016/6/22
 * @modif
 * author:Axoford12
 * Time:2016/6/22
 *
 */
class Math{
    /**
     * 
     * @param $i  
     * Use to run math low
     * @return
     * Return result map
     */
    public static function Compute($i){
        if(!is_int($i)){
            return -1;
        }
       
        
        $result = array();
        array_push($result, $i);
        while($i!=1){
            if($i%2 == 0){
                $i = $i/2;
                array_push($result,$i);
            }else{
               
                $i = 3*$i + 1;
                array_push($result,$i);
            }
        }
        array_push($result,$i);
        return $result;
        
    }
}