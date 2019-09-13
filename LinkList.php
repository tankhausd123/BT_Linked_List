<?php

include "Node.php";
class LinkList
{
private $firstNode;
private $lastNode;
private $count;
function __construct()
{
    $this->firstNode = NULL;
    $this->lastNode = NULL;
    $this->count = 0;
}
public function insertFirst($data){
    $links = new Note($data);
    $links->next = $this->firstNode;
    $this->firstNode = $links;
    if ($this->lastNode == NULL){
        $this->lastNode = $links;
    }
    $this->count++;
}
public function insertLast($data){
    if ($this->firstNode != NULL){
        $links = new Note($data);
        $this->lastNode->next = $links;
        $this->next = NULL;
        $this->lastNode = $links;
        $this->count ++;
    }else{
        $this->insertFirst($data);
    }
}
public function insertIndex($key, $data){
    if ($key == 0){
        $this->insertFirst($data);
    }else{
        $links = new Note($data);
        $current = $this->firstNode;
        $previous = $this->firstNode;
        for($i = 0; $i < $key; $i++){
            $previous = $current;
            $current = $current->next;

        }
        $links->next = $current;
        $previous->next = $links;
        $this->count++;
    }
}
}