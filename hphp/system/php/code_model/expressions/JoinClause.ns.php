<?php
// Copyright 2004-present Facebook. All Rights Reserved.
// This file is @generated by
// fbcode/hphp/facebook/tools/code_model/Generate.sh

namespace HH\CodeModel {

/**
 *  join [identifier in] collection
 *    [[on left equals right] [into group]]
 */
class JoinClause /*implements IJoinClause*/ {
  use QueryClause;
  use Node;

  private /*?string*/ $identifier;
  private /*?IExpression*/ $collection;
  private /*?IExpression*/ $left;
  private /*?IExpression*/ $right;
  private /*?string*/ $group;

  /**
   *  join [identifier in] collection
   *    [[on left equals right] [into group]]
   */
  public function getIdentifier() /*: ?string*/ {
    return $this->identifier;
  }
  /**
   *  join [identifier in] collection
   *    [[on left equals right] [into group]]
   */
  public function setIdentifier(/*?string*/ $value) /*: this*/ {
    $this->identifier = $value;
    return $this;
  }

  /**
   *  join [identifier in] collection
   *    [[on left equals right] [into group]]
   */
  public function getCollection() /*: IExpression*/ {
    if ($this->collection === null) {
      throw new \Exception("Collection is not initialized");
    }
    return $this->collection;
  }
  /**
   *  join [identifier in] collection
   *    [[on left equals right] [into group]]
   */
  public function setCollection(/*IExpression*/ $value) /*: this*/ {
    $this->collection = $value;
    return $this;
  }

  /**
   *  join [identifier in] collection
   *    [[on left equals right] [into group]]
   */
  public function getLeft() /*: ?IExpression*/ {
    return $this->left;
  }
  /**
   *  join [identifier in] collection
   *    [[on left equals right] [into group]]
   */
  public function setLeft(/*?IExpression*/ $value) /*: this*/ {
    $this->left = $value;
    return $this;
  }

  /**
   *  join [identifier in] collection
   *    [[on left equals right] [into group]]
   */
  public function getRight() /*: ?IExpression*/ {
    return $this->right;
  }
  /**
   *  join [identifier in] collection
   *    [[on left equals right] [into group]]
   */
  public function setRight(/*?IExpression*/ $value) /*: this*/ {
    $this->right = $value;
    return $this;
  }

  /**
   *  join [identifier in] collection
   *    [[on left equals right] [into group]]
   */
  public function getGroup() /*: ?string*/ {
    return $this->group;
  }
  /**
   *  join [identifier in] collection
   *    [[on left equals right] [into group]]
   */
  public function setGroup(/*?string*/ $value) /*: this*/ {
    $this->group = $value;
    return $this;
  }

  /**
   * Returns $visitor->visitJoinClause($this) if
   * such a method exists on $visitor.
   * Otherwise returns $visitor->visitExpression($this) if
   * such a method exists on $visitor.
   * Otherwise returns $visitor->visitNode($this) if
   */
  public function accept(/*mixed*/ $visitor) /*: mixed*/ {
    if (method_exists($visitor, "visitJoinClause")) {
      // UNSAFE
      return $visitor->visitJoinClause($this);
    } else if (method_exists($visitor, "visitExpression")) {
      // UNSAFE
      return $visitor->visitExpression($this);
    } else {
      return $visitor->visitNode($this);
    }
  }

  /**
   * Yields a list of nodes that are children of this node.
   * A node has exactly one parent, so doing a depth
   * first traversal of a node graph using getChildren will
   * traverse a spanning tree.
   */
  public function getChildren() /*: Continuation<INode>*/ {
    if ($this->collection !== null) {
      yield $this->collection;
    }
    if ($this->left !== null) {
      yield $this->left;
    }
    if ($this->right !== null) {
      yield $this->right;
    }
  }
}
}
