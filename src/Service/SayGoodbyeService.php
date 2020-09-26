<?php

namespace App\Service;

/**
 * My service who say Goodbye ... 
 */
class SayGoodbyeService implements DefaultServiceInterface {

    /**
	 * say Goodbye
	 * @return string
	 */
    public function saySomething() : string{
		return "Goodbye...";
	}
}