<?php

$routes = [
	"system_and_networks" => "/scripts/path_finder.php?q=system_and_networks",
	"web_hosting" => "/scripts/path_finder.php?q=web_hosting",
	"equipment_and_repair" => "/scripts/path_finder.php?q=equipment_and_repair",
	"contact_us" => "/scripts/path_finder.php?q=contact_us"
];

$redirect = [
	"system_and_networks" => "/services/sys_n_netw.php",
	"web_hosting" => "/services/web.php",
	"equipment_and_repair" => "/services/equip_n_repair.php",
	"contact_us" => "/services/contact.php"
];

$query = "";

if (isset($_GET["q"]))
	$query = $_GET["q"];

switch ($query)
{
	case "system_and_networks":
	{
		$path = "
			<p>PS C:\<a href='/index.php'>main</a>&#8594;<a href='" . $routes[$query] . "'>system_and_networks</a>\</p>
		";

		header("Location: " . $redirect[$query] . "?path=" . urlencode($path));

		exit;
	}

	case "web_hosting":
	{
		$path = "
			<p>PS C:\<a href='/index.php'>main</a>&#8594;<a href='" . $routes[$query] . "'>web_hosting</a>\</p>
		";

		header("Location: " . $redirect[$query] . "?path=" . urlencode($path));

		exit;
	}

	case "equipment_and_repair":
	{
		$path = "
			<p>PS C:\<a href='/index.php'>main</a>&#8594;<a href='" . $routes[$query] . "'>equipment_and_repair</a>\</p>
		";

		header("Location: " . $redirect[$query] . "?path=" . urlencode($path));

		exit;
	}

	case "contact_us":
	{
		$path = "
			<p>PS C:\<a href='/index.php'>main</a>&#8594;<a href='" . $routes[$query] . "'>contact_us</a>\</p>
		";

		header("Location: " . $redirect[$query] . "?path=" . urlencode($path));

		exit;
	}

	default:
	{
		$path = "
			<p>PS C:\<a href='/index.php'>main</a>\</p>
		";

		header("Location: /index.php");

		exit;
	}
}
