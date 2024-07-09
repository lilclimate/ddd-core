<?php

namespace App;

class TestEvent extends DomainEvent {
    public function getAggregateId(): string {
        return 'test-id';
    }
}
?>
