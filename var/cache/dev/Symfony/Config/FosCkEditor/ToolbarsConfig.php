<?php

namespace Symfony\Config\FosCkEditor;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Toolbars'.\DIRECTORY_SEPARATOR.'ConfigsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Toolbars'.\DIRECTORY_SEPARATOR.'ItemsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ToolbarsConfig 
{
    private $configs;
    private $items;
    private $_usedProperties = [];
    
    public function configs(string $name, array $value = []): \Symfony\Config\FosCkEditor\Toolbars\ConfigsConfig
    {
        if (!isset($this->configs[$name])) {
            $this->_usedProperties['configs'] = true;
            $this->configs[$name] = new \Symfony\Config\FosCkEditor\Toolbars\ConfigsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "configs()" has already been initialized. You cannot pass values the second time you call configs().');
        }
    
        return $this->configs[$name];
    }
    
    public function items(string $name, array $value = []): \Symfony\Config\FosCkEditor\Toolbars\ItemsConfig
    {
        if (!isset($this->items[$name])) {
            $this->_usedProperties['items'] = true;
            $this->items[$name] = new \Symfony\Config\FosCkEditor\Toolbars\ItemsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "items()" has already been initialized. You cannot pass values the second time you call items().');
        }
    
        return $this->items[$name];
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('configs', $value)) {
            $this->_usedProperties['configs'] = true;
            $this->configs = array_map(function ($v) { return new \Symfony\Config\FosCkEditor\Toolbars\ConfigsConfig($v); }, $value['configs']);
            unset($value['configs']);
        }
    
        if (array_key_exists('items', $value)) {
            $this->_usedProperties['items'] = true;
            $this->items = array_map(function ($v) { return new \Symfony\Config\FosCkEditor\Toolbars\ItemsConfig($v); }, $value['items']);
            unset($value['items']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['configs'])) {
            $output['configs'] = array_map(function ($v) { return $v->toArray(); }, $this->configs);
        }
        if (isset($this->_usedProperties['items'])) {
            $output['items'] = array_map(function ($v) { return $v->toArray(); }, $this->items);
        }
    
        return $output;
    }

}
