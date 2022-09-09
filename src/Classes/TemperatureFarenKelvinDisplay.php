<?php

namespace Design\Classes;

use Design\Interfaces\{DisplayElement, Observer, Subject};

class TemperatureFarenKelvinDisplay implements Observer, DisplayElement
{
    private float $kelvin;
    private float $faren;
    private float $temperature;
    private Subject $weatherData;

    public function __construct(Subject $newWeatherData)
    {
        $this->weatherData = $newWeatherData;
        $newWeatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->temperature = $temp;
        $this->setFarenKelvin($temp);
        $this->display();
    }

    public function setFarenKelvin(float $temp): void
    {
        $this->faren = 1.8*$temp + 32;
        $this->kelvin = $temp + 273;
    }

    public function display(): void
    {
        echo "Temperature Now --->>> Celsius -> $this->temperature ºC Fahrenheit -> $this->faren F Kelvin -> $this->kelvin K <<<----"; 
    }
}