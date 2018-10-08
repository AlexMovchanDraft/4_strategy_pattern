<?php 

namespace App;

class Sorter implements SorterInterface {
    public $data;
    public $sortingMethod = 'ASC';

    public function __construct($data, $sortingMethod) {
        $this->data = $data;
        $this->sortingMethod = $sortingMethod;
    }

    public function sort() {
        $StrategySorter = new IntSorter($this->data, $this->sortingMethod);
 
        return $StrategySorter->sort();
    }
}