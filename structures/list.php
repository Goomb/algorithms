<?php

require_once 'list-node.php';

class LinkedList implements Iterator
{
    private $firstNode = null;
    private $totalNode = 0;
    private $currentNode = null;
    private $currentPosition = 0;

    public function insert($data = null)
    {
        $node = new ListNode($data);

        if ($this->firstNode === null) {
            $this->firstNode = &$node;
        } else {
            $currentNode = $this->firstNode;
            
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }
            
            $currentNode->next = $node;
        }

        $this->totalNode++;

        return true;
    }

    public function insertAtFirst($data = null)
    {
        $node = new ListNode($data);
        if ($this->firstNode === null) {
            $this->firstNode = &$node;
        } else {
            $currentFirstNode = $this->firstNode;
            $this->firstNode = &$node;
            $this->firstNode->next = $currentFirstNode;
        }

        $this->totalNode++;

        return true;
    }

    public function insertBefore($data = null, $query = null)
    {
        $node = new ListNode($data);
        if (!$this->firstNode) {
            return false;
        }

        $previous = null;
        $currentNode = $this->firstNode;
        while ($currentNode !== null) {
            if ($currentNode->data === $query) {
                $node->next = $currentNode;
                if ($previous !== null) {
                    $previous->next = $node;
                }
                $this->totalNode++;
                break;
            }
            $previous = $currentNode;
            $currentNode = $currentNode->next;
        }
    }

    public function insertAfter($data = null, $query = null)
    {
        $node = new ListNode($data);
        if (!$this->firstNode) {
            return false;
        }

        $next = null;
        $currentNode = $this->firstNode;
        while ($currentNode !== null) {
            if ($currentNode->data === $query) {
                if ($next !== null) {
                    $node->next = $next;
                }
                $currentNode->next = $node;
                $this->totalNode++;
                break;
            }
            $currentNode = $currentNode->next;
            $next = $currentNode->next;
        }
    }

    public function key(): mixed
    {
        return $this->currentPosition;
    }

    public function current(): mixed
    {
        return $this->currentNode->data;
    }

    public function next(): void
    {
        $this->currentPosition++;
        $this->currentNode = $this->currentNode->next;
    }

    public function rewind(): void
    {
        $this->currentPosition = 0;
        $this->currentNode = $this->firstNode;
    }

    public function valid(): bool
    {
        return $this->currentNode !== null;
    }
}

