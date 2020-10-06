<?php

/**
 * Client
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Api;

use Pananames\Api\AccountApi;
use Pananames\Api\DomainsApi;
use Pananames\Api\NameServersApi;
use Pananames\Api\OtherApi;
use Pananames\Api\RedirectApi;
use Pananames\Api\TransferInApi;
use Pananames\Api\TransferOutApi;
use Pananames\Api\WHOISApi;

/**
 * Pananames API Client
 * @property AccountApi $account
 * @property DomainsApi $domains
 * @property NameServersApi $nameservers
 * @property OtherApi $other
 * @property RedirectApi $redirect
 * @property TransferInApi $transferIn
 * @property TransferOutApi $transferOut
 * @property WHOISApi $whois
 */
class Client
{
    public $account;
    public $domains;
    public $nameservers;
    public $other;
    public $redirect;
    public $transferIn;
    public $transferOut;
    public $whois;

    public function __construct($signature, $sandbox, $debug = false, $proxy = null)
    {
        $this->account = new AccountApi($signature, $sandbox, $debug, $proxy);
        $this->domains = new DomainsApi($signature, $sandbox, $debug, $proxy);
        $this->nameservers = new NameServersApi($signature, $sandbox, $debug, $proxy);
        $this->other = new OtherApi($signature, $sandbox, $debug, $proxy);
        $this->redirect = new RedirectApi($signature, $sandbox, $debug, $proxy);
        $this->transferIn = new TransferInApi($signature, $sandbox, $debug, $proxy);
        $this->transferOut = new TransferOutApi($signature, $sandbox, $debug, $proxy);
        $this->whois = new WHOISApi($signature, $sandbox, $debug, $proxy);
    }
}
