<?php

namespace App;

abstract class DomainEvent {
    public \DateTime $occurredOn;

    public function __construct() {
        $this->occurredOn = new \DateTime();
    }

    abstract public function getAggregateId(): string;
}
?>
