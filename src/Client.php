<?php
/**
 * @Author: catalisio
 * @Date:   2016-02-27 17:22:22
 * @Last Modified by:   Julien Goldberg
 * @Last Modified time: 2016-02-27 18:18:49
 */

namespace Catalisio\EmailHunterPHP;

use Catalisio\APIClient\Client as APIClient;

class Client extends APIClient {

	public function __construct($apiKey) {

		parent::__construct([ 'api_key' => $apiKey ]);
	}

	protected function getEndpoint() {

		return 'https://api.emailhunter.co/v1/';
	}

	public function search($domain) {

		$url = 'search';
		$params = [ 'domain' => $domain ];

		return $this->get($url, $params);
	}

	public function generate($domain, $firstName, $lastName) {

		$url = 'generate';
		$params = [ 'domain' => $domain, 'first_name' => $firstName, 'last_name' => $lastName ];

		return $this->get($url, $params);
	}

	public function verify($email) {

		$url = 'verify';
		$params = [ 'email' => $email ];

		return $this->get($url, $params);
	}

	public function count($domain) {

		$url = 'email-count';
		$params = [ 'domain' => $domain ];

		return $this->get($url, $params);
	}

	public function account() {

		$url = 'account';
		$params = [];

		return $this->get($url, $params);
	}
}
