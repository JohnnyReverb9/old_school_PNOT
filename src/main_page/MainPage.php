<?php

namespace src\main_page;
class MainPage
{
	private string $current_date;
	private string $current_time;
	public array $discount_message;
	private string $active;

	public function __construct()
	{
		$this->current_date = date("m/d") . "/1992";
		$this->current_time = date("h:i A");
		$this->discount_message = [
			"!WARNING! 30% discount on Windows installation !WARNING!",
			"WARNING: Massive 50% DISCOUNT on ALL System Upgrades! Act NOW!",
			"ATTENTION! 20% OFF on Every Device Tune-Up – Don’t Miss Out!",
			"ALERT! Unbeatable Deals on Software Licensing - Up to 60% OFF!",
			"LIMITED OFFER! Half-Price Windows Optimization - Grab Yours!",
			"NOTICE: Exclusive 35% OFF on Complete System Setups - While Supplies Last!",
			"HURRY! Save BIG on Premium Software Packages - LIMITED STOCK!",
			"HOT DEAL! 45% OFF Professional PC Maintenance Services!",
			"SYSTEM ALERT! 30% OFF on All Installation Services! TODAY ONLY!",
			"FINAL WARNING! Last Chance to Save 50% on Performance Boosts!"
		];

		try
		{
			$this->active = (string)(1864 + random_int(203, 354));
		}
		catch (\Exception $e)
		{
			$this->active = "3032 - incredibly many users today!";
		}
	}

	public function getActive(): string
	{
		return $this->active;
	}

	public function setActive(string $active): void
	{
		$this->active = $active;
	}

	public function getCurrentDate(): string
	{
		return $this->current_date;
	}

	public function setCurrentDate(string $current_date): void
	{
		$this->current_date = $current_date;
	}

	public function getCurrentTime(): string
	{
		return $this->current_time;
	}

	public function setCurrentTime(string $current_time): void
	{
		$this->current_time = $current_time;
	}
}