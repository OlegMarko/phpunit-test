<?php

namespace App\Models;

class User
{
    /**
     * @var
     */
    protected $firstName;

    /**
     * @var
     */
    protected $lastName;

    /**
     * Set first name.
     *
     * @param $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = trim($firstName);
    }

    /**
     * Get first name.
     *
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set last name.
     *
     * @param $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = trim($lastName);
    }

    /**
     * Get last name.
     *
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Get full name.
     *
     * @return string
     */
    public function getFullName()
    {
        return "{$this->firstName} {$this->lastName}";
    }
}