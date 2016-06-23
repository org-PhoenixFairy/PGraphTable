<?php
/**
 * @author Axoford12
 * @access 847072154
 * @see 2016Äê6ÔÂ23ÈÕ
 */

class Image
{
    private $im;
    /**
     * @return the $im
     */
    public function getIm()
    {
        return $this->im;
    }

    /**
     * @param field_type $im
     */
    public function setIm($im)
    {
        $this->im = $im;
    }
    public function __construct($im){
        $this->im = $im;
    }

    /**
     * 
     * @return $colors
     * Return a colors array
     */
    public function setColors(){
        $colors = array(
            "white" => imagecolorallocate($this->im, 255, 255, 255),
            "snow" => imagecolorallocate($this->im, 255, 250, 250),
            "black" => imagecolorallocate($this->im, 0, 0, 0),
            "cyan" => imagecolorallocate($this->im, 0, 255, 255),
            "red" => imagecolorallocate($this->im, 205, 92, 92),
            "Azu" => imagecolorallocate($this->im, 240, 255, 255),
            "green" => imagecolorallocate($this->im, 0, 240, 0)
        );
        return $colors;
    }
    /**
     * 
     * @param $color
     * Color array
     * @param $total_width
     * Total width of graph
     * @param $total_height
     * Total hright of graph
     * @param $inner_length
     * Inner Length of graph
     */
    public function imageInit($color,$total_width,$total_height,$inner_length){
        imagefill($this->im, 0, 0, $color[ 'Azu']);
        imageline($this->im, $inner_length, $inner_length, $inner_length, $total_height-$inner_length, $color[ 'red']);
        imageline($this->im, $total_width-$inner_length, $total_height-$inner_length, $total_width-$inner_length, $inner_length, $color[ 'red']);
        imageline($this->im, $inner_length, $total_height-$inner_length, $total_width-$inner_length, $total_height-$inner_length, $color[ 'red']);
        imageline($this->im, $total_width-$inner_length,$inner_length,$inner_length,$inner_length,$color[ 'red']);
    }
    
    public function drawPicture($r,$total_width,$total_height,$color){
        $r_format = $r;
        sort($r_format);
        $length = count($r);
        $one_height = $r_format[$length-1] / $total_height;
        $one_width = count($r) / $total_width;
        for ($i = 0; $i < count($r); $i++) {
            if(i == count($r)-1){
                break;
            }
           imageline($this->im, $i*$one_width, $r[$i]*$one_height, ($i+1)*$one_width, $r[$i+1]*$one_height, $color[ 'green']);
        }
    }
    
}

?>