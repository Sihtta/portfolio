<?php

namespace Symfony\Config\FosCkEditor;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TemplatesConfig'.\DIRECTORY_SEPARATOR.'TemplatesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TemplatesConfig 
{
    private $imagesPath;
    private $templates;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function imagesPath($value): static
    {
        $this->_usedProperties['imagesPath'] = true;
        $this->imagesPath = $value;
    
        return $this;
    }
    
    public function templates(array $value = []): \Symfony\Config\FosCkEditor\TemplatesConfig\TemplatesConfig
    {
        $this->_usedProperties['templates'] = true;
    
        return $this->templates[] = new \Symfony\Config\FosCkEditor\TemplatesConfig\TemplatesConfig($value);
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('imagesPath', $value)) {
            $this->_usedProperties['imagesPath'] = true;
            $this->imagesPath = $value['imagesPath'];
            unset($value['imagesPath']);
        }
    
        if (array_key_exists('templates', $value)) {
            $this->_usedProperties['templates'] = true;
            $this->templates = array_map(function ($v) { return new \Symfony\Config\FosCkEditor\TemplatesConfig\TemplatesConfig($v); }, $value['templates']);
            unset($value['templates']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['imagesPath'])) {
            $output['imagesPath'] = $this->imagesPath;
        }
        if (isset($this->_usedProperties['templates'])) {
            $output['templates'] = array_map(function ($v) { return $v->toArray(); }, $this->templates);
        }
    
        return $output;
    }

}
