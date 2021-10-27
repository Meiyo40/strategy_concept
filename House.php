<?php


class House implements BuildingStrategy
{

    public function build()
    {
        return "Congratz, you have build a new House";
    }
}