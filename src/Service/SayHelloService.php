<?php

namespace App\Service;

/**
 * My service who say Hello ! 
 */
class SayHelloService implements DefaultServiceInterface {

    /**
	 * say Hello
	 * @return string
	 */
    public function saySomething() : string{
		return "Hello !";
	}
}