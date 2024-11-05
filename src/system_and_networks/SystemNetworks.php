<?php

namespace src\system_and_networks;

class SystemNetworks
{
	private array $services = [
		[
			"name" => "Network Setup & Configuration",
			"description" => "Complete setup of secure and efficient network infrastructure for small to large organizations.",
			"price" => "$500"
		],
		[
			"name" => "Cybersecurity Assessment",
			"description" => "Detailed vulnerability assessment and implementation of security protocols to protect network data.",
			"price" => "$750"
		],
		[
			"name" => "Cloud Migration Services",
			"description" => "Assistance with seamless migration of systems and applications to cloud platforms.",
			"price" => "$1200"
		],
		[
			"name" => "System Virtualization",
			"description" => "Virtualize servers and applications to improve scalability and resource optimization.",
			"price" => "$950"
		],
		[
			"name" => "Data Backup & Recovery Solutions",
			"description" => "Regular backup management and quick recovery solutions for critical data.",
			"price" => "$650"
		]
	];

	public function getServices(): array
	{
		return $this->services;
	}
}
