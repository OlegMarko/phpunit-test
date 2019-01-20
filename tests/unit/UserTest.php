<?php

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected $user;

    /**
     * This method is called before each test.
     */
    public function setUp()
    {
        $this->user = new User;
    }

    public function testThatWeCanGetTheFirstName()
    {
        $this->user->setFirstName('Test');

        $this->assertEquals($this->user->getFirstName(), 'Test');
    }

    public function testThatWeCanGetTheLastName()
    {
        $this->user->setLastName('User');

        $this->assertEquals($this->user->getLastName(), 'User');
    }

    public function testFullNameIsReturned()
    {
        $this->user->setFirstName('Test');
        $this->user->setLastName('User');

        $this->assertEquals($this->user->getFullName(), 'Test User');
    }
}