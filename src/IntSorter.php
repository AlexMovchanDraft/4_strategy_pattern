<?php 

namespace App;

class IntSorter implements SorterInterface {
    public $data;
    private const ASC = 'ASC';
    private const DESC = 'DESC';
    public $sortingMethod;
    
    public function __construct($data, $sortingMethod) {
        $this->data = $data;
        $this->sortingMethod = $sortingMethod;
    }
 
    public function sort() {
        if($this->sortingMethod === self::ASC) {
            sort($this->data);
        } else {
            rsort($this->data);
        }

        return $this->data;
    }
}