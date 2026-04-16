<?php
namespace PizzaLib;

abstract class PizzaStore {
    abstract protected function createPizza(string $type): Pizza;

    public function orderPizza(string $type): Pizza {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}
