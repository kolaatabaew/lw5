<?php

namespace PizzaLib;

abstract class Pizza
{
    public string $name;
    public string $sauce;
    /** @var string[] */
    public array $toppings;

    public function prepare(): void
    {
        echo "Началась готовка пиццы {$this->name}\n";
        echo "Добавлен соус {$this->sauce}\n";
        echo "Добавлены топики: " . implode(", ", $this->toppings) . "\n";
    }

    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали\n";
    }
}
