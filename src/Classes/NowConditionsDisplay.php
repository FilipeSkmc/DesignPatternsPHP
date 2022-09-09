<?php

namespace Design\Classes;

use Design\Interfaces\{DisplayElement, Observer, Subject};

class NowConditionsDisplay implements Observer, DisplayElement
{
    private float $temperature;
    private float $humidity;
    private float $pressure;

    protected Subject $weatherData;

    public function __construct(Subject $newWeatherData)
    {
        $this->weatherData = $newWeatherData;
        $newWeatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->display();
    }

    public function display(): void
    {
        echo "Current Time --->>> Temperature -> $this->temperature ºC Humidity -> $this->humidity % Pressure -> $this->pressure PSI <<<----";
    }
}
