<?php

namespace Design\Interfaces;

use Design\Interfaces\Observer;
use phpDocumentor\Reflection\Types\Boolean;

interface Subject
{
    public function registerObserver(Observer $o): void;
    public function removeObserver(Observer $o): bool;

    public function notifyObservers(): void;
}
