<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'FosCkEditor'.\DIRECTORY_SEPARATOR.'ConfigsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'FosCkEditor'.\DIRECTORY_SEPARATOR.'PluginsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'FosCkEditor'.\DIRECTORY_SEPARATOR.'StylesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'FosCkEditor'.\DIRECTORY_SEPARATOR.'TemplatesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'FosCkEditor'.\DIRECTORY_SEPARATOR.'ToolbarsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FosCkEditorConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $enable;
    private $async;
    private $autoInline;
    private $inline;
    private $autoload;
    private $jquery;
    private $requireJs;
    private $inputSync;
    private $basePath;
    private $jsPath;
    private $jqueryPath;
    private $defaultConfig;
    private $configs;
    private $plugins;
    private $styles;
    private $templates;
    private $filebrowsers;
    private $toolbars;
    private $_usedProperties = [];
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enable($value): static
    {
        $this->_usedProperties['enable'] = true;
        $this->enable = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function async($value): static
    {
        $this->_usedProperties['async'] = true;
        $this->async = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoInline($value): static
    {
        $this->_usedProperties['autoInline'] = true;
        $this->autoInline = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function inline($value): static
    {
        $this->_usedProperties['inline'] = true;
        $this->inline = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoload($value): static
    {
        $this->_usedProperties['autoload'] = true;
        $this->autoload = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function jquery($value): static
    {
        $this->_usedProperties['jquery'] = true;
        $this->jquery = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function requireJs($value): static
    {
        $this->_usedProperties['requireJs'] = true;
        $this->requireJs = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function inputSync($value): static
    {
        $this->_usedProperties['inputSync'] = true;
        $this->inputSync = $value;
    
        return $this;
    }
    
    /**
     * @default 'bundles/fosckeditor/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function basePath($value): static
    {
        $this->_usedProperties['basePath'] = true;
        $this->basePath = $value;
    
        return $this;
    }
    
    /**
     * @default 'bundles/fosckeditor/ckeditor.js'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function jsPath($value): static
    {
        $this->_usedProperties['jsPath'] = true;
        $this->jsPath = $value;
    
        return $this;
    }
    
    /**
     * @default 'bundles/fosckeditor/adapters/jquery.js'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function jqueryPath($value): static
    {
        $this->_usedProperties['jqueryPath'] = true;
        $this->jqueryPath = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultConfig($value): static
    {
        $this->_usedProperties['defaultConfig'] = true;
        $this->defaultConfig = $value;
    
        return $this;
    }
    
    public function configs(string $name, array $value = []): \Symfony\Config\FosCkEditor\ConfigsConfig
    {
        if (!isset($this->configs[$name])) {
            $this->_usedProperties['configs'] = true;
            $this->configs[$name] = new \Symfony\Config\FosCkEditor\ConfigsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "configs()" has already been initialized. You cannot pass values the second time you call configs().');
        }
    
        return $this->configs[$name];
    }
    
    public function plugins(string $name, array $value = []): \Symfony\Config\FosCkEditor\PluginsConfig
    {
        if (!isset($this->plugins[$name])) {
            $this->_usedProperties['plugins'] = true;
            $this->plugins[$name] = new \Symfony\Config\FosCkEditor\PluginsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "plugins()" has already been initialized. You cannot pass values the second time you call plugins().');
        }
    
        return $this->plugins[$name];
    }
    
    public function styles(string $name, array $value = []): \Symfony\Config\FosCkEditor\StylesConfig
    {
        if (!isset($this->styles[$name])) {
            $this->_usedProperties['styles'] = true;
            $this->styles[$name] = new \Symfony\Config\FosCkEditor\StylesConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "styles()" has already been initialized. You cannot pass values the second time you call styles().');
        }
    
        return $this->styles[$name];
    }
    
    public function templates(string $name, array $value = []): \Symfony\Config\FosCkEditor\TemplatesConfig
    {
        if (!isset($this->templates[$name])) {
            $this->_usedProperties['templates'] = true;
            $this->templates[$name] = new \Symfony\Config\FosCkEditor\TemplatesConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "templates()" has already been initialized. You cannot pass values the second time you call templates().');
        }
    
        return $this->templates[$name];
    }
    
    /**
     * @return $this
     */
    public function filebrowsers(string $name, mixed $value): static
    {
        $this->_usedProperties['filebrowsers'] = true;
        $this->filebrowsers[$name] = $value;
    
        return $this;
    }
    
    /**
     * @default {"configs":[],"items":[]}
    */
    public function toolbars(array $value = []): \Symfony\Config\FosCkEditor\ToolbarsConfig
    {
        if (null === $this->toolbars) {
            $this->_usedProperties['toolbars'] = true;
            $this->toolbars = new \Symfony\Config\FosCkEditor\ToolbarsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "toolbars()" has already been initialized. You cannot pass values the second time you call toolbars().');
        }
    
        return $this->toolbars;
    }
    
    public function getExtensionAlias(): string
    {
        return 'fos_ck_editor';
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('enable', $value)) {
            $this->_usedProperties['enable'] = true;
            $this->enable = $value['enable'];
            unset($value['enable']);
        }
    
        if (array_key_exists('async', $value)) {
            $this->_usedProperties['async'] = true;
            $this->async = $value['async'];
            unset($value['async']);
        }
    
        if (array_key_exists('auto_inline', $value)) {
            $this->_usedProperties['autoInline'] = true;
            $this->autoInline = $value['auto_inline'];
            unset($value['auto_inline']);
        }
    
        if (array_key_exists('inline', $value)) {
            $this->_usedProperties['inline'] = true;
            $this->inline = $value['inline'];
            unset($value['inline']);
        }
    
        if (array_key_exists('autoload', $value)) {
            $this->_usedProperties['autoload'] = true;
            $this->autoload = $value['autoload'];
            unset($value['autoload']);
        }
    
        if (array_key_exists('jquery', $value)) {
            $this->_usedProperties['jquery'] = true;
            $this->jquery = $value['jquery'];
            unset($value['jquery']);
        }
    
        if (array_key_exists('require_js', $value)) {
            $this->_usedProperties['requireJs'] = true;
            $this->requireJs = $value['require_js'];
            unset($value['require_js']);
        }
    
        if (array_key_exists('input_sync', $value)) {
            $this->_usedProperties['inputSync'] = true;
            $this->inputSync = $value['input_sync'];
            unset($value['input_sync']);
        }
    
        if (array_key_exists('base_path', $value)) {
            $this->_usedProperties['basePath'] = true;
            $this->basePath = $value['base_path'];
            unset($value['base_path']);
        }
    
        if (array_key_exists('js_path', $value)) {
            $this->_usedProperties['jsPath'] = true;
            $this->jsPath = $value['js_path'];
            unset($value['js_path']);
        }
    
        if (array_key_exists('jquery_path', $value)) {
            $this->_usedProperties['jqueryPath'] = true;
            $this->jqueryPath = $value['jquery_path'];
            unset($value['jquery_path']);
        }
    
        if (array_key_exists('default_config', $value)) {
            $this->_usedProperties['defaultConfig'] = true;
            $this->defaultConfig = $value['default_config'];
            unset($value['default_config']);
        }
    
        if (array_key_exists('configs', $value)) {
            $this->_usedProperties['configs'] = true;
            $this->configs = array_map(function ($v) { return new \Symfony\Config\FosCkEditor\ConfigsConfig($v); }, $value['configs']);
            unset($value['configs']);
        }
    
        if (array_key_exists('plugins', $value)) {
            $this->_usedProperties['plugins'] = true;
            $this->plugins = array_map(function ($v) { return new \Symfony\Config\FosCkEditor\PluginsConfig($v); }, $value['plugins']);
            unset($value['plugins']);
        }
    
        if (array_key_exists('styles', $value)) {
            $this->_usedProperties['styles'] = true;
            $this->styles = array_map(function ($v) { return new \Symfony\Config\FosCkEditor\StylesConfig($v); }, $value['styles']);
            unset($value['styles']);
        }
    
        if (array_key_exists('templates', $value)) {
            $this->_usedProperties['templates'] = true;
            $this->templates = array_map(function ($v) { return new \Symfony\Config\FosCkEditor\TemplatesConfig($v); }, $value['templates']);
            unset($value['templates']);
        }
    
        if (array_key_exists('filebrowsers', $value)) {
            $this->_usedProperties['filebrowsers'] = true;
            $this->filebrowsers = $value['filebrowsers'];
            unset($value['filebrowsers']);
        }
    
        if (array_key_exists('toolbars', $value)) {
            $this->_usedProperties['toolbars'] = true;
            $this->toolbars = new \Symfony\Config\FosCkEditor\ToolbarsConfig($value['toolbars']);
            unset($value['toolbars']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enable'])) {
            $output['enable'] = $this->enable;
        }
        if (isset($this->_usedProperties['async'])) {
            $output['async'] = $this->async;
        }
        if (isset($this->_usedProperties['autoInline'])) {
            $output['auto_inline'] = $this->autoInline;
        }
        if (isset($this->_usedProperties['inline'])) {
            $output['inline'] = $this->inline;
        }
        if (isset($this->_usedProperties['autoload'])) {
            $output['autoload'] = $this->autoload;
        }
        if (isset($this->_usedProperties['jquery'])) {
            $output['jquery'] = $this->jquery;
        }
        if (isset($this->_usedProperties['requireJs'])) {
            $output['require_js'] = $this->requireJs;
        }
        if (isset($this->_usedProperties['inputSync'])) {
            $output['input_sync'] = $this->inputSync;
        }
        if (isset($this->_usedProperties['basePath'])) {
            $output['base_path'] = $this->basePath;
        }
        if (isset($this->_usedProperties['jsPath'])) {
            $output['js_path'] = $this->jsPath;
        }
        if (isset($this->_usedProperties['jqueryPath'])) {
            $output['jquery_path'] = $this->jqueryPath;
        }
        if (isset($this->_usedProperties['defaultConfig'])) {
            $output['default_config'] = $this->defaultConfig;
        }
        if (isset($this->_usedProperties['configs'])) {
            $output['configs'] = array_map(function ($v) { return $v->toArray(); }, $this->configs);
        }
        if (isset($this->_usedProperties['plugins'])) {
            $output['plugins'] = array_map(function ($v) { return $v->toArray(); }, $this->plugins);
        }
        if (isset($this->_usedProperties['styles'])) {
            $output['styles'] = array_map(function ($v) { return $v->toArray(); }, $this->styles);
        }
        if (isset($this->_usedProperties['templates'])) {
            $output['templates'] = array_map(function ($v) { return $v->toArray(); }, $this->templates);
        }
        if (isset($this->_usedProperties['filebrowsers'])) {
            $output['filebrowsers'] = $this->filebrowsers;
        }
        if (isset($this->_usedProperties['toolbars'])) {
            $output['toolbars'] = $this->toolbars->toArray();
        }
    
        return $output;
    }

}
