<?php

class Node {
    public $v;
    public $children = [];

    public function __construct($value) {
        $this->v = $value;
    }
}

$root = createNode(1);
$root->children[] = createNode(2);
$root->children[] = createNode(3);
$root->children[] = createNode(31);


$root->children[0]->children[] = createNode(4);
$root->children[0]->children[] = createNode(5);

$root->children[1]->children[] = createNode(6);
$root->children[1]->children[] = createNode(7);

$root->children[2]->children[] = createNode(71);
$root->children[2]->children[] = createNode(72);

$root->children[0]->children[0]->children[] = createNode(8);

function createNode($val) {
    return new Node($val);
}

function dfs(Node $n) {
    if (null === $n) {
        return;
    }
    echo $n->v . ", ";
    foreach ($n->children as $i) {
        dfs($i);
    }
}

dfs($root);
