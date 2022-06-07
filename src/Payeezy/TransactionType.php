<?php

class Payeezy_TransactionType extends Payeezy_Transaction
{

  private $method;

  public function __construct($method, $client)
  {
    $this->method = $method;
    parent::__construct($client);
  }
  
  /**
   * Payeezy
   *
   * Authorize Transaction
   */

  public function authorize($args = array())
  {
    $args['transaction_type'] = 'authorize';
    $args['method'] = $this->method;
    return parent::doPrimaryTransaction($args);
  }

  /**
   * Payeezy
   *
   * Purchase Transaction
   */

  public function purchase($args = array())
  {
    $args['transaction_type'] = 'purchase';
    $args['method'] = $this->method;
    return parent::doPrimaryTransaction($args);
  }

  /**
   * Payeezy
   *
   * Capture Transaction
   */

  public function capture($transaction_id, $args = array())
  {
    $args['transaction_type'] = 'capture';
    $args['method'] = $this->method;
    return parent::doSecondaryTransaction($transaction_id, $args);
  }
  
  /**
   * Payeezy
   *
   * Void Transaction
   */
  
  public function void($transaction_id, $args = array())
  {
    $args['transaction_type'] = "void";
    $args['method'] = $this->method;
    return parent::doSecondaryTransaction($transaction_id, $args);
  }

  /**
   * Payeezy
   *
   * Refund Transaction
   */

  public function refund($transaction_id, $args = array())
  {
    $args['transaction_type'] = "refund";
    $args['method'] = $this->method;
    return parent::doSecondaryTransaction($transaction_id, $args);
  }

  /**
   * Payeezy
   *
   * cashout Transaction
   */

  public function cashout($args = array())
  {
    $args['transaction_type'] = "cashout";
    $args['method'] = $this->method;
    return parent::doPrimaryTransaction($args);
  }
  
  /**
   * Payeezy
   *
   * reload Transaction
   */
  
  public function reload($args = array())
  {
    $args['transaction_type'] = "reload";
    $args['method'] = $this->method;
    return parent::doPrimaryTransaction($args);
  }
  
  /**
   * Payeezy
   *
   * balance_inquiry Transaction
   */

  public function balanceInquiry($args = array())
  {
    $args['transaction_type'] = "balance_inquiry";
    $args['method'] = $this->method;
    return parent::doPrimaryTransaction($args);
  }

  /**
   * Payeezy
   *
   * deactivation Transaction
   */
  
  public function deactivation($args = array())
  {
    $args['transaction_type'] = "deactivation";
    $args['method'] = $this->method;
    return parent::doPrimaryTransaction($args);
  }

  /**
   * Payeezy
   *
   * activation Transaction
   */
  
  public function activation($args = array())
  {
    $args['transaction_type'] = "activation";
    $args['method'] = $this->method;
    return parent::doPrimaryTransaction($args);
  }

  /**
   * Payeezy
   *
   * recurring Transaction
   */

  public function recurring($args = array())
  {
    $args['transaction_type'] = 'recurring';
    $args['method'] = $this->method;
    return parent::doPrimaryTransaction($args);
  }

  /**
   * Payeezy
   *
   * Tokenize Credit Card
   * Use this method to create FDTokens when Direct API, iOS/Android SDKs are used. 
   * Note: US Merchants will be getting Transarmor multi-use tokens when this method is used.
   */
  
  public function tokenize($args = array())
  {
    $args['type'] = $this->method;
    return parent::doSecondaryTransaction('tokens', $args);
  }
}
