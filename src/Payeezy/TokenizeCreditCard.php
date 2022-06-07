<?php

class Payeezy_TokenizeCreditCard extends Payeezy_TransactionType
{

  public function __construct($client)
  {
    parent::__construct('FDToken', $client);
  }
}
