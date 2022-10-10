<?php

class Car {
    private bool $start = false;
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeat;
    private string $energy;
    private int $currentLevelEnergy;

public function __construct( string $color, int $nbSeat, string $energy){
    $this->color = $color;
    $this->nbSeat = $nbSeat;
    $this->energy = $energy;
}

function getNbWheels(){
    return $this->nbWheels;
}
function setNbWheels( int $nbWheels){
    $this->nbWheels = $nbWheels;
}
function getColor(){
    return $this->color;
}
function setColor(string $color){
    $this->color = $color;
}
function getcurrentSpeed(){
    return $this->currentSpeed;
}
function setcurrentSpeed(int $currentSpeed){
$this->currentSpeed = $currentSpeed;
}
function getNbSeat(){
    return $this->nbSeat;
}
function setNbSeat(int $nbSeat){
    $this->nbSeat = $nbSeat;
}
function getEnergy(){
    return $this->energy;
}  
function setEnergy(string $energy){    
    $this->energy = $energy;
}
function getCurrentLevelEnergy(){
    return $this->currentLevelEnergy;
}
function setCurrentLevelEnergy( int $currentLevelEnergy ){
    $this->currentLevelEnergy = $currentLevelEnergy;
}

public function start() : string
{
    $this->start = true;
    return "Car started";

}

public function forward() : string
{
    $this->currentSpeed = 20;
    return "Go";
}
public function brake() : string
{
    $sentence = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
}


}