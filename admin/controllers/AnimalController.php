<?php
class AnimalController
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function display_all_animals()
    {
        $animals = $this->model->get_all_animal();

        // Thực hiện các thao tác hiển thị dữ liệu hoặc trả về cho View
        return $animals;
    }
}
