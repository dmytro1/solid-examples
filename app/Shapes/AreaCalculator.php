<?php

namespace App\Shapes;

/**
 * Class is "closed" for changes in calculation logic.
 * ->area() method is polymorphic and comes from ShapeInterface.
 * We can easily extend new shape from ShapeInterface.
 *
 * Class AreaCalculator
 * @package App\Shapes
 */
class AreaCalculator
{
    public function calculate($shapes): float
    {
        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        return round(array_sum($area), 2);
    }

}
