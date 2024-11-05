<?php

use src\main_page\MainPage;

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/samples/header.php";

$settings = new MainPage();

?>

<div class="main">
    <marquee class="marquee" direction="left">!WARNING! 30% discount on Windows installation !WARNING!</marquee>

    <p>Small System Info:</p>
    <p class="blinking">Site updated: <?= $settings->getCurrentDate() ?> — <?= $settings->getCurrentTime() ?></p>

    <h2 style="margin-bottom: -20px;">Site navigation:</h2>
    <div style="text-align: center;">
        <ul style="list-style-type: none; padding: 0; display: inline-flex; flex-direction: column; align-items: flex-start;">
            <li class="li-element">
                <img src="/assets/klipartz.com.png" alt="note" class="note-element">
                <a href="http://example.com" target="_blank">System & Networks</a>
            </li>
            <li class="li-element">
                <img src="/assets/klipartz.com.png" alt="note" class="note-element">
                <a href="http://example.com" target="_blank">Web Hosting</a>
            </li>
            <li class="li-element">
                <img src="/assets/klipartz.com.png" alt="note" class="note-element">
                <a href="http://example.com" target="_blank">Equipment & Repairment</a>
            </li>
            <li style="display: flex; align-items: center;">
                <img src="/assets/klipartz.com.png" alt="note" class="note-element">
                <a href="http://example.com" target="_blank">Contact us</a>
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