<?php

namespace App\Service;

use App\Service\SayHelloService;
use App\Service\SayGoodbyeService;
use Psr\Container\ContainerInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;

/**
 * This service allows me to determine what I want to say
 */
class TalkService implements ServiceSubscriberInterface {

	const CASE_FRIEND_COMING = 'FRIEND_COMING';
	const CASE_FRIEND_LEAVING = 'FRIEND_LEAVING';
	
	/**
	 * TalkService constructor
	 */
	public function __construct(ContainerInterface $locator) {
		$this->locator = $locator;
	}

	/**
	 * This function allows me to determine what I should answer based on the value of $case
	 * @return string
	 */
	public function determineWhatToSay($case){
		if ($this->locator->has($case)) {
			$sayService = $this->locator->get($case);
			return $sayService->saySomething();
		}
		return "I don't know what to say";
	}

	/**
	 * getSubscribedServices allows me to determine which service should be loaded based on the value passed in the array index
	 * @return array
	 */
	public static function getSubscribedServices() {
		return [
			'FRIEND_COMING' => SayHelloService::class,
			'FRIEND_LEAVING' => SayGoodbyeService::class,
		];
	}
	
}