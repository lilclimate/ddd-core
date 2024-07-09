<?php

namespace App;

class UniqueEntityId {
    private string $value;

    public function __construct($id = null) {
        $this->value = $id ?: uniqid();
    }

    public function equals($id = null): bool {
        if ($id === null) {
            return false;
        }
        return (string)$id === $this->value;
    }

    public function __toString(): string {
        return $this->value;
    }
}
?>
