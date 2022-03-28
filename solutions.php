<?php
    class Difference{
    public $elements=array();
    public $maximumDifference;

// Write your code here

    public function __construct($arr)
    {
            $this->elements = $arr; 
    }

    public function ComputeDifference()
    {
        $val = array();
        $big = 0;
        $cnt= 0; 
        $cnt = count($this->elements);
        for ($i=0; $i < $cnt; $i++) { 
            
            for ($j=$i; $j < $cnt; $j++) { 
                $big = abs($this->elements[$i] - $this->elements[$j]);
                $val[] = $big;
            }
        }
        $this->maximumDifference = max($val); // setting Max Absolute difference from array.
        
    }
} //End of Difference class  
     

$N=3;
$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);
?>
