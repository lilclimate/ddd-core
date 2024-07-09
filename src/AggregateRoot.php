<?php

namespace App;

abstract class AggregateRoot extends Entity {
    private array $domainEvents = [];

    protected function addDomainEvent(DomainEvent $domainEvent): void {
        $this->domainEvents[] = $domainEvent;
        DomainEventDispatcher::markAggregateForDispatch($this);
    }

    public function clearEvents(): void {
        $this->domainEvents = [];
    }

    public function getDomainEvents(): array {
        return $this->domainEvents;
    }
}
?>
