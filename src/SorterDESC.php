<?php 

namespace App;

class SorterDESC implements SorterInterface {
    public $data;

    public function __construct($data) {
        $this->data = $data;
    }
 
    public function sort() {
        rsort($this->data);
        return $this->data;
    }
}