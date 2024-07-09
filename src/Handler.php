<?php

namespace App;

interface Handler {
    public function handle($event): void;
}
?>
