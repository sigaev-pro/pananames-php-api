<?php

/**
 * AccountApi
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Api;

class AccountApi extends ApiClient
{
	/**
	 * Function getBalance
	 *
	 * Get current balance.
	 *
	 * @return \Pananames\Model\BalanceResponse
	 */
	public function getBalance()
	{
		$url = '/account/balance';

		$returnType = '\Pananames\Model\BalanceResponse';

		return $this->sendRequest('GET', $url, [], $this->settings, $returnType);
	}
}
