<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\DomainEventDispatcher;
use App\TestAggregate;
use App\TestEvent;

class DomainEventDispatcherTest extends TestCase {
    public function testDispatchDomainEvents() {
        $aggregate = new TestAggregate();
        $event = new TestEvent();
        $aggregate->addDomainEvent($event);

        DomainEventDispatcher::dispatchEventsForAggregate($aggregate);

        $this->assertCount(0, $aggregate->getDomainEvents());
    }
}
?>
