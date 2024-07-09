<?php

namespace App;

class DomainEventDispatcher {
    private static array $aggregates = [];

    public static function markAggregateForDispatch(AggregateRoot $aggregate): void {
        if (!in_array($aggregate, self::$aggregates, true)) {
            self::$aggregates[] = $aggregate;
        }
    }

    public static function dispatchEventsForAggregate(AggregateRoot $aggregate): void {
        foreach ($aggregate->getDomainEvents() as $event) {
            // Dispatch event
        }
        $aggregate->clearEvents();
    }
}
?>
