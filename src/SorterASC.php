<?php 

namespace App;

class SorterASC implements SorterInterface {
    public $data;
    
    public function __construct($data) {
        $this->data = $data;
    }
 
    public function sort() {
        sort($this->data);
        return $this->data;
    }
}