<?php

namespace App\Service;

/**
 * Interface to use on my service
 */
interface DefaultServiceInterface {

    /**
	 * say something (depending to the service implementation)
	 * @return string
	 */
    public function saySomething() : string;
}