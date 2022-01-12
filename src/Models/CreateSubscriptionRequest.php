<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;
use PagarmeCoreApiLib\Utils\DateTimeHelper;

/**
 *Request for creating a subcription
 */
class CreateSubscriptionRequest implements JsonSerializable
{
    /**
     * Customer
     * @required
     * @var \PagarmeCoreApiLib\Models\CreateCustomerRequest $customer public property
     */
    public $customer;

    /**
     * Card
     * @required
     * @var \PagarmeCoreApiLib\Models\CreateCardRequest $card public property
     */
    public $card;

    /**
     * Subscription code
     * @required
     * @var string $code public property
     */
    public $code;

    /**
     * Payment method
     * @required
     * @maps payment_method
     * @var string $paymentMethod public property
     */
    public $paymentMethod;

    /**
     * Billing type
     * @required
     * @maps billing_type
     * @var string $billingType public property
     */
    public $billingType;

    /**
     * Statement descriptor for credit card subscriptions
     * @required
     * @maps statement_descriptor
     * @var string $statementDescriptor public property
     */
    public $statementDescriptor;

    /**
     * Subscription description
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * Currency
     * @required
     * @var string $currency public property
     */
    public $currency;

    /**
     * Interval
     * @required
     * @var string $interval public property
     */
    public $interval;

    /**
     * Interval count
     * @required
     * @maps interval_count
     * @var integer $intervalCount public property
     */
    public $intervalCount;

    /**
     * Subscription pricing scheme
     * @required
     * @maps pricing_scheme
     * @var \PagarmeCoreApiLib\Models\CreatePricingSchemeRequest $pricingScheme public property
     */
    public $pricingScheme;

    /**
     * Subscription items
     * @required
     * @var \PagarmeCoreApiLib\Models\CreateSubscriptionItemRequest[] $items public property
     */
    public $items;

    /**
     * Shipping
     * @required
     * @var \PagarmeCoreApiLib\Models\CreateShippingRequest $shipping public property
     */
    public $shipping;

    /**
     * Discounts
     * @required
     * @var \PagarmeCoreApiLib\Models\CreateDiscountRequest[] $discounts public property
     */
    public $discounts;

    /**
     * Metadata
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * Setup data
     * @required
     * @var \PagarmeCoreApiLib\Models\CreateSetupRequest $setup public property
     */
    public $setup;

    /**
     * Plan id
     * @maps plan_id
     * @var string|null $planId public property
     */
    public $planId;

    /**
     * Customer id
     * @maps customer_id
     * @var string|null $customerId public property
     */
    public $customerId;

    /**
     * Card id
     * @maps card_id
     * @var string|null $cardId public property
     */
    public $cardId;

    /**
     * Billing day
     * @maps billing_day
     * @var integer|null $billingDay public property
     */
    public $billingDay;

    /**
     * Number of installments
     * @var integer|null $installments public property
     */
    public $installments;

    /**
     * Subscription start date
     * @maps start_at
     * @factory \PagarmeCoreApiLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $startAt public property
     */
    public $startAt;

    /**
     * Subscription minimum price
     * @maps minimum_price
     * @var integer|null $minimumPrice public property
     */
    public $minimumPrice;

    /**
     * Number of cycles
     * @var integer|null $cycles public property
     */
    public $cycles;

    /**
     * Card token
     * @maps card_token
     * @var string|null $cardToken public property
     */
    public $cardToken;

    /**
     * Gateway Affiliation code
     * @maps gateway_affiliation_id
     * @var string|null $gatewayAffiliationId public property
     */
    public $gatewayAffiliationId;

    /**
     * Quantity
     * @var integer|null $quantity public property
     */
    public $quantity;

    /**
     * Days until boleto expires
     * @maps boleto_due_days
     * @var integer|null $boletoDueDays public property
     */
    public $boletoDueDays;

    /**
     * Increments
     * @required
     * @var \PagarmeCoreApiLib\Models\CreateIncrementRequest[] $increments public property
     */
    public $increments;

    /**
     * @todo Write general description for this property
     * @var \PagarmeCoreApiLib\Models\CreatePeriodRequest|null $period public property
     */
    public $period;

    /**
     * SubMerchant
     * @var \PagarmeCoreApiLib\Models\CreateSubMerchantRequest|null $submerchant public property
     */
    public $submerchant;

    /**
     * Subscription's split
     * @var \PagarmeCoreApiLib\Models\CreateSubscriptionSplitRequest|null $split public property
     */
    public $split;

    /**
     * Constructor to set initial or default values of member properties
     * @param CreateCustomerRequest           $customer             Initialization value for $this->customer
     * @param CreateCardRequest               $card                 Initialization value for $this->card
     * @param string                          $code                 Initialization value for $this->code
     * @param string                          $paymentMethod        Initialization value for $this->paymentMethod
     * @param string                          $billingType          Initialization value for $this->billingType
     * @param string                          $statementDescriptor  Initialization value for $this-
     *                                                                >statementDescriptor
     * @param string                          $description          Initialization value for $this->description
     * @param string                          $currency             Initialization value for $this->currency
     * @param string                          $interval             Initialization value for $this->interval
     * @param integer                         $intervalCount        Initialization value for $this->intervalCount
     * @param CreatePricingSchemeRequest      $pricingScheme        Initialization value for $this->pricingScheme
     * @param array                           $items                Initialization value for $this->items
     * @param CreateShippingRequest           $shipping             Initialization value for $this->shipping
     * @param array                           $discounts            Initialization value for $this->discounts
     * @param array                           $metadata             Initialization value for $this->metadata
     * @param CreateSetupRequest              $setup                Initialization value for $this->setup
     * @param string                          $planId               Initialization value for $this->planId
     * @param string                          $customerId           Initialization value for $this->customerId
     * @param string                          $cardId               Initialization value for $this->cardId
     * @param integer                         $billingDay           Initialization value for $this->billingDay
     * @param integer                         $installments         Initialization value for $this->installments
     * @param \DateTime                       $startAt              Initialization value for $this->startAt
     * @param integer                         $minimumPrice         Initialization value for $this->minimumPrice
     * @param integer                         $cycles               Initialization value for $this->cycles
     * @param string                          $cardToken            Initialization value for $this->cardToken
     * @param string                          $gatewayAffiliationId Initialization value for $this-
     *                                                                >gatewayAffiliationId
     * @param integer                         $quantity             Initialization value for $this->quantity
     * @param integer                         $boletoDueDays        Initialization value for $this->boletoDueDays
     * @param array                           $increments           Initialization value for $this->increments
     * @param CreatePeriodRequest             $period               Initialization value for $this->period
     * @param CreateSubMerchantRequest        $submerchant          Initialization value for $this->submerchant
     * @param CreateSubscriptionSplitRequest  $split                Initialization value for $this->split
     */
    public function __construct()
    {
        if (32 == func_num_args()) {
            $this->customer             = func_get_arg(0);
            $this->card                 = func_get_arg(1);
            $this->code                 = func_get_arg(2);
            $this->paymentMethod        = func_get_arg(3);
            $this->billingType          = func_get_arg(4);
            $this->statementDescriptor  = func_get_arg(5);
            $this->description          = func_get_arg(6);
            $this->currency             = func_get_arg(7);
            $this->interval             = func_get_arg(8);
            $this->intervalCount        = func_get_arg(9);
            $this->pricingScheme        = func_get_arg(10);
            $this->items                = func_get_arg(11);
            $this->shipping             = func_get_arg(12);
            $this->discounts            = func_get_arg(13);
            $this->metadata             = func_get_arg(14);
            $this->setup                = func_get_arg(15);
            $this->planId               = func_get_arg(16);
            $this->customerId           = func_get_arg(17);
            $this->cardId               = func_get_arg(18);
            $this->billingDay           = func_get_arg(19);
            $this->installments         = func_get_arg(20);
            $this->startAt              = func_get_arg(21);
            $this->minimumPrice         = func_get_arg(22);
            $this->cycles               = func_get_arg(23);
            $this->cardToken            = func_get_arg(24);
            $this->gatewayAffiliationId = func_get_arg(25);
            $this->quantity             = func_get_arg(26);
            $this->boletoDueDays        = func_get_arg(27);
            $this->increments           = func_get_arg(28);
            $this->period               = func_get_arg(29);
            $this->submerchant          = func_get_arg(30);
            $this->split                = func_get_arg(31);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['customer']               = $this->customer;
        $json['card']                   = $this->card;
        $json['code']                   = $this->code;
        $json['payment_method']         = $this->paymentMethod;
        $json['billing_type']           = $this->billingType;
        $json['statement_descriptor']   = $this->statementDescriptor;
        $json['description']            = $this->description;
        $json['currency']               = $this->currency;
        $json['interval']               = $this->interval;
        $json['interval_count']         = $this->intervalCount;
        $json['pricing_scheme']         = $this->pricingScheme;
        $json['items']                  = $this->items;
        $json['shipping']               = $this->shipping;
        $json['discounts']              = $this->discounts;
        $json['metadata']               = $this->metadata;
        $json['setup']                  = $this->setup;
        $json['plan_id']                = $this->planId;
        $json['customer_id']            = $this->customerId;
        $json['card_id']                = $this->cardId;
        $json['billing_day']            = $this->billingDay;
        $json['installments']           = $this->installments;
        $json['start_at']               = isset($this->startAt) ?
            DateTimeHelper::toRfc3339DateTime($this->startAt) : null;
        $json['minimum_price']          = $this->minimumPrice;
        $json['cycles']                 = $this->cycles;
        $json['card_token']             = $this->cardToken;
        $json['gateway_affiliation_id'] = $this->gatewayAffiliationId;
        $json['quantity']               = $this->quantity;
        $json['boleto_due_days']        = $this->boletoDueDays;
        $json['increments']             = $this->increments;
        $json['period']                 = $this->period;
        $json['submerchant']            = $this->submerchant;
        $json['split']                  = $this->split;

        return $json;
    }
}
