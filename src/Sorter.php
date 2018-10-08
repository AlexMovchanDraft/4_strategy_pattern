<?php 

namespace App;

class Sorter implements SorterInterface {
    private const ASC = 'ASC';
    private const DESC = 'DESC';
    
    public $data;
    public $sortingMethod = 'ASC';

    public function __construct($data, $sortingMethod) {
        $this->data = $data;
        $this->sortingMethod = $sortingMethod;
    }

    public function sort() {
        if ($this->sortingMethod === self::ASC) {
            $StrategySorter = new SorterASC($this->data);
        } else if($this->sortingMethod === self::DESC) {
            $StrategySorter = new SorterDESC($this->data);
        } else {
            echo 'Wrong sorting method';
            return false;
        }
 
        return $StrategySorter->sort();
    }
}