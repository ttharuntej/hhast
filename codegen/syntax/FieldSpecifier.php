<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<d9aa71ec9b2f8c8e605951d7e7b70829>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class FieldSpecifier extends EditableSyntax {

  private EditableSyntax $_question;
  private EditableSyntax $_name;
  private EditableSyntax $_arrow;
  private EditableSyntax $_type;

  public function __construct(
    EditableSyntax $question,
    EditableSyntax $name,
    EditableSyntax $arrow,
    EditableSyntax $type,
  ) {
    parent::__construct('field_specifier');
    $this->_question = $question;
    $this->_name = $name;
    $this->_arrow = $arrow;
    $this->_type = $type;
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $question = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['field_question'],
      $position,
      $source,
    );
    $position += $question->getWidth();
    $name = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['field_name'],
      $position,
      $source,
    );
    $position += $name->getWidth();
    $arrow = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['field_arrow'],
      $position,
      $source,
    );
    $position += $arrow->getWidth();
    $type = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['field_type'],
      $position,
      $source,
    );
    $position += $type->getWidth();
    return new self($question, $name, $arrow, $type);
  }

  <<__Override>>
  public function getChildren(): KeyedTraversable<string, EditableSyntax> {
    yield 'question' => $this->_question;
    yield 'name' => $this->_name;
    yield 'arrow' => $this->_arrow;
    yield 'type' => $this->_type;
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $question = $this->_question->rewrite($rewriter, $parents);
    $name = $this->_name->rewrite($rewriter, $parents);
    $arrow = $this->_arrow->rewrite($rewriter, $parents);
    $type = $this->_type->rewrite($rewriter, $parents);
    if (
      $question === $this->_question &&
      $name === $this->_name &&
      $arrow === $this->_arrow &&
      $type === $this->_type
    ) {
      return $this;
    }
    return new self($question, $name, $arrow, $type);
  }

  public function getQuestionUNTYPED(): EditableSyntax {
    return $this->_question;
  }

  public function withQuestion(EditableSyntax $value): this {
    if ($value === $this->_question) {
      return $this;
    }
    return new self($value, $this->_name, $this->_arrow, $this->_type);
  }

  public function hasQuestion(): bool {
    return !$this->_question->isMissing();
  }

  public function getQuestion(): ?QuestionToken {
    if ($this->_question->isMissing()) {
      return null;
    }
    return TypeAssert::isInstanceOf(QuestionToken::class, $this->_question);
  }

  public function getQuestionx(): QuestionToken {
    return TypeAssert::isInstanceOf(QuestionToken::class, $this->_question);
  }

  public function getNameUNTYPED(): EditableSyntax {
    return $this->_name;
  }

  public function withName(EditableSyntax $value): this {
    if ($value === $this->_name) {
      return $this;
    }
    return new self($this->_question, $value, $this->_arrow, $this->_type);
  }

  public function hasName(): bool {
    return !$this->_name->isMissing();
  }

  public function getName(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_name);
  }

  public function getArrowUNTYPED(): EditableSyntax {
    return $this->_arrow;
  }

  public function withArrow(EditableSyntax $value): this {
    if ($value === $this->_arrow) {
      return $this;
    }
    return new self($this->_question, $this->_name, $value, $this->_type);
  }

  public function hasArrow(): bool {
    return !$this->_arrow->isMissing();
  }

  public function getArrow(): EqualGreaterThanToken {
    return TypeAssert::isInstanceOf(EqualGreaterThanToken::class, $this->_arrow);
  }

  public function getTypeUNTYPED(): EditableSyntax {
    return $this->_type;
  }

  public function withType(EditableSyntax $value): this {
    if ($value === $this->_type) {
      return $this;
    }
    return new self($this->_question, $this->_name, $this->_arrow, $value);
  }

  public function hasType(): bool {
    return !$this->_type->isMissing();
  }

  public function getType(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_type);
  }
}