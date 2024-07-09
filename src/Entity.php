<?php

namespace App;

abstract class Entity {
    protected UniqueEntityId $id;
    public $props;

    public function __construct($props, UniqueEntityId $id = null) {
        $this->id = $id ?: new UniqueEntityId();
        $this->props = $props;
    }

    public function equals($object = null): bool {
        if ($object === null) {
            return false;
        }
        if ($this === $object) {
            return true;
        }
        return $this->id->equals($object->id);
    }
}
?>
