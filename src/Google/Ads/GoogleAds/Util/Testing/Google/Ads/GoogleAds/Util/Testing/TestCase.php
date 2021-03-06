<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Google/Ads/GoogleAds/Util/Testing/tester.proto

namespace Google\Ads\GoogleAds\Util\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.ads.googleads.util.testing.TestCase</code>
 */
class TestCase extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string description = 1;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>.google.ads.googleads.util.testing.Resource original_resource = 2;</code>
     */
    protected $original_resource = null;
    /**
     * Generated from protobuf field <code>.google.ads.googleads.util.testing.Resource modified_resource = 3;</code>
     */
    protected $modified_resource = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.FieldMask expected_mask = 4;</code>
     */
    protected $expected_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $description
     *     @type \Google\Ads\GoogleAds\Util\Testing\Resource $original_resource
     *     @type \Google\Ads\GoogleAds\Util\Testing\Resource $modified_resource
     *     @type \Google\Protobuf\FieldMask $expected_mask
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\Util\Testing\Tester::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string description = 1;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.ads.googleads.util.testing.Resource original_resource = 2;</code>
     * @return \Google\Ads\GoogleAds\Util\Testing\Resource
     */
    public function getOriginalResource()
    {
        return isset($this->original_resource) ? $this->original_resource : null;
    }

    public function hasOriginalResource()
    {
        return isset($this->original_resource);
    }

    public function clearOriginalResource()
    {
        unset($this->original_resource);
    }

    /**
     * Generated from protobuf field <code>.google.ads.googleads.util.testing.Resource original_resource = 2;</code>
     * @param \Google\Ads\GoogleAds\Util\Testing\Resource $var
     * @return $this
     */
    public function setOriginalResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\Util\Testing\Resource::class);
        $this->original_resource = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.ads.googleads.util.testing.Resource modified_resource = 3;</code>
     * @return \Google\Ads\GoogleAds\Util\Testing\Resource
     */
    public function getModifiedResource()
    {
        return isset($this->modified_resource) ? $this->modified_resource : null;
    }

    public function hasModifiedResource()
    {
        return isset($this->modified_resource);
    }

    public function clearModifiedResource()
    {
        unset($this->modified_resource);
    }

    /**
     * Generated from protobuf field <code>.google.ads.googleads.util.testing.Resource modified_resource = 3;</code>
     * @param \Google\Ads\GoogleAds\Util\Testing\Resource $var
     * @return $this
     */
    public function setModifiedResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\Util\Testing\Resource::class);
        $this->modified_resource = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.FieldMask expected_mask = 4;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getExpectedMask()
    {
        return isset($this->expected_mask) ? $this->expected_mask : null;
    }

    public function hasExpectedMask()
    {
        return isset($this->expected_mask);
    }

    public function clearExpectedMask()
    {
        unset($this->expected_mask);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.FieldMask expected_mask = 4;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setExpectedMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->expected_mask = $var;

        return $this;
    }

}

