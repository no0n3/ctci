<?php

class Tree {

    private $root;

    public function delete($value) {
        
    }

    public function add($value) {
        
    }

    public function exists($value) {
        
    }

    public function get($value) {
        
    }

}

class Node {

    public $value;
    public $left;
    public $right;

    public function __construct($value) {
        $this->value = $value;
    }

}

function isBalanced(Node $node) {
    return 1 >= (maxDepth($node) - minDepth($node));
}

function maxDepth($node) {
    if (null === $node) {
        return 0;
    }
    return 1 + max(maxDepth($node->left), maxDepth($node->right));
}

function minDepth($node) {
    if (null === $node) {
        return 0;
    }
    return 1 + min(minDepth($node->left), minDepth($node->right));
}

function createNode($val) {
    return new Node($val);
}

$root = createNode('A');
$root->left = createNode('A.l');
$root->right = createNode('A.r');
$root->right->right = createNode('A.r.r');
$root->right->right->right = createNode('A.r.r.r');

var_dump(isBalanced($root));
