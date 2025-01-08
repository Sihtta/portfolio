<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class KarserRecaptcha3Config implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $siteKey;
    private $secretKey;
    private $scoreThreshold;
    private $host;
    private $enabled;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function siteKey($value): static
    {
        $this->_usedProperties['siteKey'] = true;
        $this->siteKey = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function secretKey($value): static
    {
        $this->_usedProperties['secretKey'] = true;
        $this->secretKey = $value;

        return $this;
    }

    /**
     * @default 0.5
     * @param ParamConfigurator|float $value
     * @return $this
     */
    public function scoreThreshold($value): static
    {
        $this->_usedProperties['scoreThreshold'] = true;
        $this->scoreThreshold = $value;

        return $this;
    }

    /**
     * Default host is "www.google.com", if it is not reachable then use "www.recaptcha.net" instead.
     * @default 'www.google.com'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): static
    {
        $this->_usedProperties['host'] = true;
        $this->host = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'karser_recaptcha3';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('site_key', $value)) {
            $this->_usedProperties['siteKey'] = true;
            $this->siteKey = $value['site_key'];
            unset($value['site_key']);
        }

        if (array_key_exists('secret_key', $value)) {
            $this->_usedProperties['secretKey'] = true;
            $this->secretKey = $value['secret_key'];
            unset($value['secret_key']);
        }

        if (array_key_exists('score_threshold', $value)) {
            $this->_usedProperties['scoreThreshold'] = true;
            $this->scoreThreshold = $value['score_threshold'];
            unset($value['score_threshold']);
        }

        if (array_key_exists('host', $value)) {
            $this->_usedProperties['host'] = true;
            $this->host = $value['host'];
            unset($value['host']);
        }

        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['siteKey'])) {
            $output['site_key'] = $this->siteKey;
        }
        if (isset($this->_usedProperties['secretKey'])) {
            $output['secret_key'] = $this->secretKey;
        }
        if (isset($this->_usedProperties['scoreThreshold'])) {
            $output['score_threshold'] = $this->scoreThreshold;
        }
        if (isset($this->_usedProperties['host'])) {
            $output['host'] = $this->host;
        }
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }

        return $output;
    }

}
