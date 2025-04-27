<?php

require_once __DIR__ . "/../bootstrap.php";

use src\system_and_networks\SystemNetworks;

require_once __DIR__ . "/../samples/header.php";

$sys = new SystemNetworks();
$services = $sys->getServices();

?>

<div class="main">
	<div class="container">
		<h1>Our Services & Pricing</h1>
		<p>Discover our range of professional services to enhance your network and system infrastructure. We offer reliable, secure, and scalable solutions to meet the demands of modern businesses.</p>

		<table class="price-table" border="1" cellspacing="0" cellpadding="10">
			<thead>
			<tr>
				<th>Service</th>
				<th>Description</th>
				<th>Price</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($services as $service): ?>
				<tr>
					<td><?php echo $service["name"]; ?></td>
					<td><?php echo $service["description"]; ?></td>
					<td><?php echo $service["price"]; ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<?php

require_once __DIR__ . "/../samples/footer.php";

?>