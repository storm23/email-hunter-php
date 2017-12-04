<?php
/**
 * @Author: catalisio
 * @Date:   2016-02-27 17:26:25
 * @Last Modified by:   Julien Goldberg
 * @Last Modified time: 2016-02-27 18:21:28
 */

namespace Catalisio\EmailHunterPHP\Tests;

use Catalisio\EmailHunterPHP\Client;

class ClientTest extends \PHPUnit_Framework_TestCase {

	// Put your email hunter api_key here
	const API_KEY = getenv('HUNTER_API_KEY');

	public function testSearch() {

		$client = new Client(self::API_KEY);

		$response = $client->search('catalisio.com');
		$this->assertEquals('success', $response['status']);
	}

	public function testGenerate() {

		$client = new Client(self::API_KEY);

		$response = $client->generate('catalisio.com', 'julien', 'goldberg');
		$this->assertEquals('success', $response['status']);
	}

	public function testVerify() {

		$client = new Client(self::API_KEY);

		$response = $client->verify('julien@catalisio.com');
		$this->assertEquals('success', $response['status']);
	}

	public function testCount() {

		$client = new Client(self::API_KEY);

		$response = $client->count('catalisio.com');
		$this->assertEquals('success', $response['status']);
	}

	public function testAccount() {

		$client = new Client(self::API_KEY);

		$response = $client->account();
		$this->assertEquals('success', $response['status']);
	}
}
