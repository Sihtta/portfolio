<?php

namespace Symfony\Config\FosCkEditor\TemplatesConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TemplatesConfig 
{
    private $title;
    private $image;
    private $description;
    private $html;
    private $template;
    private $templateParameters;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function title($value): static
    {
        $this->_usedProperties['title'] = true;
        $this->title = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function image($value): static
    {
        $this->_usedProperties['image'] = true;
        $this->image = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function description($value): static
    {
        $this->_usedProperties['description'] = true;
        $this->description = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function html($value): static
    {
        $this->_usedProperties['html'] = true;
        $this->html = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function template($value): static
    {
        $this->_usedProperties['template'] = true;
        $this->template = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function templateParameters(string $name, mixed $value): static
    {
        $this->_usedProperties['templateParameters'] = true;
        $this->templateParameters[$name] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('title', $value)) {
            $this->_usedProperties['title'] = true;
            $this->title = $value['title'];
            unset($value['title']);
        }
    
        if (array_key_exists('image', $value)) {
            $this->_usedProperties['image'] = true;
            $this->image = $value['image'];
            unset($value['image']);
        }
    
        if (array_key_exists('description', $value)) {
            $this->_usedProperties['description'] = true;
            $this->description = $value['description'];
            unset($value['description']);
        }
    
        if (array_key_exists('html', $value)) {
            $this->_usedProperties['html'] = true;
            $this->html = $value['html'];
            unset($value['html']);
        }
    
        if (array_key_exists('template', $value)) {
            $this->_usedProperties['template'] = true;
            $this->template = $value['template'];
            unset($value['template']);
        }
    
        if (array_key_exists('template_parameters', $value)) {
            $this->_usedProperties['templateParameters'] = true;
            $this->templateParameters = $value['template_parameters'];
            unset($value['template_parameters']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['title'])) {
            $output['title'] = $this->title;
        }
        if (isset($this->_usedProperties['image'])) {
            $output['image'] = $this->image;
        }
        if (isset($this->_usedProperties['description'])) {
            $output['description'] = $this->description;
        }
        if (isset($this->_usedProperties['html'])) {
            $output['html'] = $this->html;
        }
        if (isset($this->_usedProperties['template'])) {
            $output['template'] = $this->template;
        }
        if (isset($this->_usedProperties['templateParameters'])) {
            $output['template_parameters'] = $this->templateParameters;
        }
    
        return $output;
    }

}
