<?php

declare(strict_types=1);

use OpenTelemetry\Contrib\Instrumentation\Laravel\LaravelInstrumentation;
use OpenTelemetry\SDK\Sdk;

if (class_exists(Sdk::class) && Sdk::isInstrumentationDisabled(LaravelInstrumentation::NAME) === true) {
    return;
}

if (extension_loaded('opentelemetry') === true) {
    LaravelInstrumentation::register();
}