<?php
    class car{
        public $EngineNo;
        public $Model;
        public $Owner;

        function __construct($EngineNo, $Model, $Owner)
        {
            $this->EngineNo = $EngineNo;
            $this->Model = $Model;
            $this->Owner = $Owner;
        }

        function showInfo(){
            echo "Engine No : " .$this->EngineNo; 
            echo "<br>";
            echo "Model : " .$this->Model; 
            echo "<br>";
            echo "Owner : " .$this->Owner; 
            echo "<br>";
        }
    }
    $car1 = new Car("12FX", "2801L", "ALEX");
    $car1->showInfo();
?>