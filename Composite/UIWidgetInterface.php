<?php
declare(strict_types=1);

namespace harlequiin\Patterns\Composite;

/**
 * Component interface: declares a common interface for all the 
 * component objects (Composites and Leaves) in the composition.
 */
interface UIWidgetInterface
{
    public function render(): string;
}
