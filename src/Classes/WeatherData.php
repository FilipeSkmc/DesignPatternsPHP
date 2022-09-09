<?php

namespace Design\Classes;

use Design\Interfaces\{Observer, Subject};

class WeatherData implements Subject
{
    private array $observers;
    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function __construct()
    {
        $this->observers = [];
    }

    public function registerObserver(Observer $o): void
    {
        array_push($this->observers, $o);
    }

    public function removeObserver(Observer $o): bool
    {
        $index = array_search($o, $this->observers);

        if ($index < 0) {
            return false;
        }

        unset($this->observers[$index]);
        return true;
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temp, float $humidity, float $pressure): void
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}
