<?php



class Bicycle extends Vehicle implements LightableInterface
{
   

    public function switchOn()
    {
        if($this->currentSpeed >=10) {
            return 'true';
        }else{
            return 'false';
        }
    }

    public function switchOff()
    {
        return 'false';
    }
}
