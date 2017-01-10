<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Test\TestCase;

class TestSuite3 implements TestSuiteInterface
{
    public function getNumber(): int
    {
        return 3;
    }

    public function getTitle(): string
    {
        return "\"Semi-Warm\" Instantiation of a small object graph (10 objects)";
    }

    public function getDescription(): string
    {
        return "";
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(1, "10 iterations, startup time included", 10, TestCase::SEMI_WARM),
            new TestCase(2, "100 iterations, startup time included", 100, TestCase::SEMI_WARM),
            new TestCase(3, "1000 iterations, startup time included", 1000, TestCase::SEMI_WARM),
        ];
    }
}
