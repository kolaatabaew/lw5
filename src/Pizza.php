<?php
namespace PizzaLib;

abstract class Pizza {
    protected string $name;
    protected string $sauce;
    protected array $toppings = [];

    public function prepare(): void {
        echo "--- Подготовка {$this->name} ---\n";
        echo "Добавление соуса: {$this->sauce}...\n";
        echo "Добавление добавок: " . implode(", ", $this->toppings) . "\n";
    }

    public function bake(): void { echo "Выпекание: 25 мин при 350°\n"; }
    public function cut(): void { echo "Нарезка: по диагонали\n"; }
    public function box(): void { echo "Упаковка: в фирменную коробку\n"; }
    public function getName(): string { return $this->name; }
}
