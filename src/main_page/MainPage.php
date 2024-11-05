<?php

namespace src\main_page;
class MainPage
{
	private string $current_date;
	private string $current_time;

	public function __construct()
	{
		$this->current_date = date("m/d") . "/1992";
		$this->current_time = date("h:i A");
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