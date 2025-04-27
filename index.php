<?php
require_once __DIR__ . "/bootstrap.php";

use src\main_page\MainPage;

require_once __DIR__ . "/samples/header.php";

$settings = new MainPage();

?>

<div class="main" style="text-align: center;">
    <marquee class="marquee" direction="left"><?= $settings->discount_message[array_rand($settings->discount_message)] ?></marquee>

    <p>Small System Info:</p>
    <div style="text-align: center; padding: 0">
        <p class="blinking">Site updated: <?= $settings->getCurrentDate() ?> — <?= $settings->getCurrentTime() ?></p>
        <p class="blinking">Online: <?= $settings->getActive() ?></p>
    </div>

    <h2 style="margin-bottom: -20px;">Site navigation:</h2>
    <div style="text-align: center;">
        <ul style="list-style-type: none; padding: 0; display: inline-flex; flex-direction: column; align-items: flex-start;">
            <li class="li-element">
                <img src="/assets/note.png" alt="note" class="note-element">
                <a href="/scripts/path_finder.php?q=system_and_networks">System & Networks</a>
            </li>
            <li class="li-element">
                <img src="/assets/note.png" alt="note" class="note-element">
                <a href="/scripts/path_finder.php?q=web_hosting">Web Hosting</a>
            </li>
            <li class="li-element">
                <img src="/assets/note.png" alt="note" class="note-element">
                <a href="/scripts/path_finder.php?q=equipment_and_repair">Equipment & Repair</a>
            </li>
            <li style="display: flex; align-items: center;">
                <img src="/assets/note.png" alt="note" class="note-element">
                <a href="/scripts/path_finder.php?q=contact_us">Contact us</a>
            </li>
        </ul>
    </div>

    <h2 style="margin: 5px;">Basic Price List</h2>
    <table class="table">
        <tr>
            <th style="width: 30%">Service</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>System & Networks</td>
            <td>$200/hour OR $175/hour for first-time clients</td>
        </tr>
        <tr>
            <td>Web Hosting</td>
            <td>$50/month, OR $45/month with a SPECIAL sub after the first month</td>
        </tr>
        <tr>
            <td>Equipment & Repair</td>
            <td>Starting from $150 up to $350</td>
        </tr>
        <tr>
            <td>Consultation</td>
            <td>$100/hour</td>
        </tr>
    </table>
</div>

<?php

require_once __DIR__ . "/samples/footer.php";

?>