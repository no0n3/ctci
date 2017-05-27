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

    public $v;
    public $left;
    public $right;

    public function __construct($value) {
        $this->v = $value;
    }

}

function isBst(Node $n) {
    if (null !== $n->left) {
        if ($n->v < $n->left->v) {
            return false;
        } else {
            return isBst($n->left);
        }
    }
    if (null !== $n->right) {
        if ($n->v > $n->right->v) {
            return false;
        } else {
            return isBst($n->right);
        }
    }

    return true;
}

function createNode($val) {
    return new Node($val);
}

$root = createNode(11);
$root->left = createNode(9);
$root->left->right = createNode(7);
$root->right = createNode(13);
$root->right->right = createNode(16);
$root->right->right->right = createNode(19);

var_dump(isBst($root));
