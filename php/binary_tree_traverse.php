<?php

class BinaryTree {

    private $root;

    public function getRoot() {
        return $this->root;
    }

    /**
     * left, root, right
     */
    public function inOrder($node) {
        if (null === $node) {
            return;
        }

        $this->preOrder($node->left);
        echo "{$node->value}\n";
        $this->preOrder($node->right);
    }

    /**
     * root, left, right
     */
    public function preOrder($node) {
        if (null === $node) {
            return;
        }

        echo "{$node->value}\n";
        $this->preOrder($node->left);
        $this->preOrder($node->right);
    }

    /**
     * left, right, root
     */
    public function postOrder($node) {
        if (null === $node) {
            return;
        }

        $this->preOrder($node->left);
        $this->preOrder($node->right);
        echo "{$node->value}\n";
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

function createNode($val) {
    return new Node($val);
}

$tree = new BinaryTree();
$root = $tree->getRoot();

$root = createNode('A');
$root->left = createNode('A.l');
$root->left->right = createNode('A.l.r');
$root->right = createNode('A.r');
$root->right->right = createNode('A.r.r');
$root->right->right->right = createNode('A.r.r.r');

var_dump($tree->inOrder($root));
