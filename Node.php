<?php


class Node
{
public $data;
public $link;
public function __construct($data)
{
    $this->data = $data;
    $this->link = NULL;
}
public function readNoe(){
    return $this->data;
}
}