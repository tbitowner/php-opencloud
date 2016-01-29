<?php

namespace Rackspace\Test\ObjectStore\v1;

use OpenStack\ObjectStore\v1\Api;
use OpenStack\Test\TestCase;
use Rackspace\ObjectStore\v1\Models\Account;

class AccountTest extends TestCase
{
    private $account;

    public function setUp()
    {
        parent::setUp();

        $this->rootFixturesDir = dirname(__DIR__);

        $this->account = new Account($this->client->reveal(), new Api());
    }

    public function test_extends_openstack()
    {
        $this->assertInstanceOf(\OpenStack\ObjectStore\v1\Models\Account::class, $this->account);
    }
}