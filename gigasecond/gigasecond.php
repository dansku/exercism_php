<?php

function from($date) {
    return $date->modify('+1000000000 second');
}