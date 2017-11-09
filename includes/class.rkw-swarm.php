<?php
class SwarmAPI {

	protected $apiURL = 'https://swarm.com';

	protected $user;

	public function __construct( $user )
	{
		$this->user = $user;
	}
}