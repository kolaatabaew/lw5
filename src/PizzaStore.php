<?php
namespace PizzaLib;

class PizzaStore {
    // Убрали abstract, добавили базовую логику
    protected function createPizza(string $type): Pizza {
        return new Pizza();
    }

    public function orderPizza(string $type): Pizza {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}
