<?php

namespace App;

class TestAggregate extends AggregateRoot {
    public function __construct() {
        parent::__construct([]);
    }

    public function addDomainEvent(DomainEvent $domainEvent): void {
        parent::addDomainEvent($domainEvent);
    }
}
?>
