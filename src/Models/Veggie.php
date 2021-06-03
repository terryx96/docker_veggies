<?php 

class Veggie {
    
    private string $name;
    private string $color;

    function __construct(
        string $name,
        string $color
    ) {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName() {
        return $this->name;
    }

    public function getColor() {
        return $this->color;
    }
}