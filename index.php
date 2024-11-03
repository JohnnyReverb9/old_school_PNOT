<?php
$background_color = "#c0c0c0";
$background_color_test = "#bbbfbe";
$text_color = "#000080";

$current_date = date("m/d") . "/1992";
$current_time = date("h:i A");;


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PNOT Ltd. | Technical Solutions</title>
	<style>
        body {
            background-color: <?= $background_color_test ?>;
            font-family: Arial, sans-serif;
            color: <?= $text_color ?>;
            text-align: center;
        }

        h1 {
            color: #ff0000;
            font-size: 3em;
        }

        hr {
            border: 1px solid #000;
        }

        a {
            color: #0000ff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .blinking {
            animation: blinker 1s step-start infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        .marquee {
            font-size: 1.5em;
            color: #ff0000;

        }

        .table {
            margin: auto;
            border: 1px solid #000;
            width: 40%;
            background-color: #ffffff;
        }

        .table td,
        .table th {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }

        .li-element {
            margin-bottom: -10px;
            display: flex;
            align-items: center;
        }

        .note-element {
            margin-right: 8px;
        }
	</style>
</head>
<body>
<img src="/logo_pixelated.jpeg" alt="logo" height="300" width="auto">
<!--<h1>--><?php //= $welcome_message ?><!--</h1>-->
<hr>

<marquee class="marquee" direction="left">!WARNING! 30% discount on Windows installation !WARNING!</marquee>

<p>Small System Info:</p>
<p class="blinking">Site updated: <?= $current_date ?> — <?= $current_time ?></p>

<h2 style="margin-bottom: -20px;">Site navigation:</h2>
<div style="text-align: center;">
    <ul style="list-style-type: none; padding: 0; display: inline-flex; flex-direction: column; align-items: flex-start;">
        <li class="li-element">
            <img src="/klipartz.com.png" alt="note" class="note-element">
            <a href="http://example.com" target="_blank">System & Networks</a>
        </li>
        <li class="li-element">
            <img src="/klipartz.com.png" alt="note" class="note-element">
            <a href="http://example.com" target="_blank">Web Hosting</a>
        </li>
        <li class="li-element">
            <img src="/klipartz.com.png" alt="note" class="note-element">
            <a href="http://example.com" target="_blank">Equipment & Repairment</a>
        </li>
        <li style="display: flex; align-items: center;">
            <img src="/klipartz.com.png" alt="note" class="note-element">
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

<p>All rights reserved &copy; 1991</p>
</body>
</html>