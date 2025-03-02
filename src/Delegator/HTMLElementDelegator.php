<?php

namespace Html\Delegator;

use BackedEnum;
use BadMethodCallException;
use DOM\Document;
use DOM\HtmlElement;
use Html\Interface\HTMLElementDelegatorInterface;
use InvalidArgumentException;
use ReflectionClass;

/**
 * @property ?string $namespaceURI
 * @property ?string $prefix
 * @property string $localName
 * @property string $tagName
 * @property string $id
 * @property string $className
 */
class HTMLElementDelegator implements HTMLElementDelegatorInterface
{
    // public const string SELF_CLOSING = self::SELF_CLOSING; // Self-referential 'abstract' declaration

    public HtmlElement $htmlElement;

    public static bool $unique = false; // Default value, change as needed

    public static bool $uniquePerParent = false; // Default value, change as needed

    public static array $childOf = []; // Default value, change as needed

    public static array $parentOf = []; // Default value, change as needed

    public function __construct(HTMLElement $htmlElement)
    {
        $this->htmlElement = $htmlElement;
    }

    public function __call($name, $arguments)
    {
        $reflection = new ReflectionClass($this->htmlElement);
        if ($reflection->hasMethod($name)) {
            $method = $reflection->getMethod($name);
            $method->setAccessible(true);
            return $method->invokeArgs($this->htmlElement, $arguments);
        }
        throw new BadMethodCallException(
            "Method {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }

    public function __get($name)
    {

        $reflection = new ReflectionClass($this->htmlElement);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            return $property->getValue($this->htmlElement);
        }
        throw new InvalidArgumentException(
            "Property {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }

    public function __set($name, $value): void
    {
        if ($name === 'class') {
            $name = 'className';
        }
        if (! \property_exists($this, $name)) {
            if (! \property_exists($this->htmlElement, $name)) {
                // var_dump($name);
                if ($this->isBackedEnum($value)) {
                    $value  = $value->value;
                }
                $this->htmlElement->setAttribute($name, $value); // the DOM element needs to be updated
                return;
            }
            // var_dump($name);
            $this->htmlElement->{$name} = $value; // the DOM element needs to be updated
            return;
        }

        $this->{$name} = $value; // the instance of HTML\Element needs to be updated
        // skip enums here
        if ($this->isBackedEnum($value)) {
            $this->htmlElement->setAttribute($name, $value->value); // the DOM element needs to be updated
            return;
        }
        $this->htmlElement->setAttribute($name, $value); // the DOM element needs to be updated
    }

    /**
     * this is what I wrote all this for, in order to being able to add functionality, like cutsom methods
     */
    public function __toString(): string
    {
        /** @var Document $ownerDocument */
        return (string) $this->htmlElement->ownerDocument->saveHtml($this->htmlElement);
    }

    // two ways to set an attribute via HTML\Element::$property or HTML\Element->setAttribute()
    public function setAttribute(string $qualifiedName, mixed $value): void
    {
        if (property_exists($this, $qualifiedName)) {
            $this->{$qualifiedName} = $value; // here we allow Enums
        }
        if (\is_subclass_of($value, BackedEnum::class)) {
            $value = $value->value;
        }
        if (!is_string($value)) {
            throw new InvalidArgumentException("Value for {$qualifiedName} must be a string or a BackedEnum"); // ensure value is a string
        }
        $this->htmlElement->setAttribute($qualifiedName, $value); // here we require string
    }

    public function setAttributes(array $attributes): void
    {
        // sort attributes by key name - id and class will still be first
        \ksort($attributes);
        foreach ($attributes as $name => $value) {
            $this->setAttribute($name, $value);
        }
    }

    // Generic static factory method
    public static function create(HTMLDocumentDelegator $dom): self
    {
        $className = static::class;
        $qualifiedName = $className::getQualifiedName();
        $elementNode = $dom->htmlDocument->createElement($qualifiedName);
        return new $className($elementNode);
    }

    /**
     * If the parent element can have multiple children of this type
     */
    public static function isUniquePerParent(): bool
    {
        return static::$uniquePerParent;
    }

    /**
     * If an HTML document can only have one element of this type
     */
    public static function isUnique(): bool
    {
        return static::$unique;
    }

    /**
     * If the element is self closing (does not require a closing tag)
     */
    public static function isSelfClosing(): bool
    {
        return static::SELF_CLOSING;
    }

    /**
     * Get the qualified name of the element
     */
    public static function getQualifiedName(): string
    {
        return static::QUALIFIED_NAME;
    }

    /**
     * Get the list if allowed parent elements of this element type. Empty array means: no restriction
     */
    public static function childOf(): array
    {
        return static::$childOf;
    }

    /**
     * Get the list if allowed parent elements of this element type. Empty array means: no restriction
     */
    public static function parentOf(): array
    {
        return static::$parentOf;
    }

    /** Helper method */
    private function isBackedEnum($value): bool
    {
        return is_object($value) && is_subclass_of($value, BackedEnum::class);
    }
}
