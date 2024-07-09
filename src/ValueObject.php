<?php

namespace App;

abstract class ValueObject {
    public $props;

    public function __construct($props) {
        $this->props = $props;
    }

    public function equals($vo = null): bool {
        if ($vo === null) {
            return false;
        }
        return json_encode($this->props) === json_encode($vo->props);
    }
}
?>
