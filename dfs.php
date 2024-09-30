<?php

class TreeNode
{
    public $data = null;
    public $children = [];
    
    public function __construct($data = null)
    {
        $this->data = $data;
    }

    public function addChildren(TreeNode $node)
    {
        $this->children[] = $node;
    }
}

class Tree
{
    public $root = null;
    public $visited;

    public function __construct(TreeNode $node)
    {
        $this->root = $node;
        $this->visited = new SplQueue;
    }

    public function DFS(TreeNode $node)
    {
        $this->visited->enqueue($node);

        if ($node->children) {
            foreach ($node->children as $child) {
                $this->DFS($child);
            }
        }
    }
}

try {

    $root = new TreeNode("0");
    $node1 = new TreeNode("1");
    $node2 = new TreeNode("2");
    $node3 = new TreeNode("3");
    $node4 = new TreeNode("4");
    $node5 = new TreeNode("5");
    $node6 = new TreeNode("6");
    $node7 = new TreeNode("7");
    
    $tree = new Tree($root);
    $root->addChildren($node1);
    $root->addChildren($node2);
    $root->addChildren($node3);
    $node1->addChildren($node4);
    $node4->addChildren($node5);
    $node5->addChildren($node6);
    $node5->addChildren($node7);
    $node5->addChildren($node3);
    
    $tree->DFS($tree->root);

    $visited = $tree->visited;
    while (!$visited->isEmpty()) {
	    echo $visited->dequeue()->data . "\n";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}