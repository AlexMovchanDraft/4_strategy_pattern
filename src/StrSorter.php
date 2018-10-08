<?php 

namespace App;

class StrSorter implements SorterInterface {
    public $data;
    public $sortingMethod = 'ASC';

    public function __construct($data) {
        $this->data = $data;
    }
 
    public function sort() {
        if(sortingMethod) {
            return sort($data);
        } else {
            return rsort($data);
        }
    }
}