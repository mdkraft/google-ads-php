<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/campaign_label.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a relationship between a campaign and a label.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.CampaignLabel</code>
 */
class CampaignLabel extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Name of the resource.
     * Campaign label resource names have the form:
     * `customers/{customer_id}/campaignLabels/{campaign_id}~{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The campaign to which the label is attached.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $campaign = null;
    /**
     * Immutable. The label assigned to the campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $label = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. Name of the resource.
     *           Campaign label resource names have the form:
     *           `customers/{customer_id}/campaignLabels/{campaign_id}~{label_id}`
     *     @type \Google\Protobuf\StringValue $campaign
     *           Immutable. The campaign to which the label is attached.
     *     @type \Google\Protobuf\StringValue $label
     *           Immutable. The label assigned to the campaign.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\CampaignLabel::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Name of the resource.
     * Campaign label resource names have the form:
     * `customers/{customer_id}/campaignLabels/{campaign_id}~{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. Name of the resource.
     * Campaign label resource names have the form:
     * `customers/{customer_id}/campaignLabels/{campaign_id}~{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Immutable. The campaign to which the label is attached.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Returns the unboxed value from <code>getCampaign()</code>

     * Immutable. The campaign to which the label is attached.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getCampaignUnwrapped()
    {
        return $this->readWrapperValue("campaign");
    }

    /**
     * Immutable. The campaign to which the label is attached.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Immutable. The campaign to which the label is attached.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setCampaignUnwrapped($var)
    {
        $this->writeWrapperValue("campaign", $var);
        return $this;}

    /**
     * Immutable. The label assigned to the campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Returns the unboxed value from <code>getLabel()</code>

     * Immutable. The label assigned to the campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getLabelUnwrapped()
    {
        return $this->readWrapperValue("label");
    }

    /**
     * Immutable. The label assigned to the campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->label = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Immutable. The label assigned to the campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setLabelUnwrapped($var)
    {
        $this->writeWrapperValue("label", $var);
        return $this;}

}

