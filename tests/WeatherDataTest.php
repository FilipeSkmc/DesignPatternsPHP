<?php

declare(strict_types=1);

use Design\Classes\NowConditionsDisplay;
use Design\Classes\TemperatureFarenKelvinDisplay;
use Design\Classes\WeatherData;
use PHPUnit\Framework\TestCase;

final class WeatherDataTest extends TestCase
{
    protected WeatherData $weatherData;
    protected NowConditionsDisplay $nowConditionsDisplay;
    protected TemperatureFarenKelvinDisplay $temperatureFarenKelvinDisplay;

    public function setUp(): void
    {
        $this->weatherData = new WeatherData();
        $this->nowConditionsDisplay = new NowConditionsDisplay($this->weatherData);
        $this->temperatureFarenKelvinDisplay = new TemperatureFarenKelvinDisplay($this->weatherData);
    }

    public function testObserversSuccess(): void
    {
        $observerCondition = "Current Time --->>> Temperature -> 0 ºC Humidity -> 90 % Pressure -> 55.5 PSI <<<----";
        $observerTemperature = "Temperature Now --->>> Celsius -> 0 ºC Fahrenheit -> 32 F Kelvin -> 273 K <<<----";
        $this->expectOutputString($observerCondition . $observerTemperature);

        $this->weatherData->setMeasurements(0, 90, 55.5);
    }

    public function testRemoveObserverSuccess(): void
    {
        $this->assertEquals(true, $this->weatherData->removeObserver($this->nowConditionsDisplay));
    }

    public function testObserversAfterRemoveSuccess(): void
    {
        $this->weatherData->removeObserver($this->nowConditionsDisplay);
        $observerTemperature = "Temperature Now --->>> Celsius -> 0 ºC Fahrenheit -> 32 F Kelvin -> 273 K <<<----";
        $this->expectOutputString($observerTemperature);

        $this->weatherData->setMeasurements(0, 90, 55.5);
    }
}
