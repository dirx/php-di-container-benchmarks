<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class88
{
    private $dependency;

    public function __construct(Class87 $dependency)
    {
        $this->dependency = $dependency;
    }
}
