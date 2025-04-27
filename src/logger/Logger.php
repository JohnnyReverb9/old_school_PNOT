<?php

namespace src\logger;

class Logger
{
	protected $log_dir;
	protected $min_log_level;
	protected $levels;

	public function __construct($min_log_level = "debug")
	{
		$this->min_log_level = $min_log_level;
		$this->log_dir = __DIR__ . "/logs/";
		$this->levels = [
			"debug" => 100,
			"info" => 200,
			"warning" => 300,
			"error" => 400,
		];

		if (!is_dir($this->log_dir))
		{
			mkdir($this->log_dir, 0777, true);
		}
	}

	public function log($level, $message, array $context = [])
	{
		if ($this->levels[$level] < $this->levels[$this->min_log_level])
		{
			return;
		}

		$date = date("Y-m-d H:i:s");
		$context = !empty($context) ? json_encode($context) : "";
		$log_msg = "[$date] [$level] $message $context" . PHP_EOL;

		$file_path = $this->log_dir . date("Y-m-d") . ".log";
		file_put_contents($file_path, $log_msg, FILE_APPEND);
	}
	
	public function error($message, array $context = [])
	{
		$this->log("error", $message, $context);
	}

	public function warning($message, array $context = [])
	{
		$this->log("warning", $message, $context);
	}

	public function info($message, array $context = [])
	{
		$this->log("info", $message, $context);
	}

	public function debug($message, array $context = [])
	{
		$this->log("debug", $message, $context);
	}
	
	protected function registerHandlers()
	{
		set_error_handler([$this, "handleError"]);
		set_exception_handler([$this, "handleException"]);
		register_shutdown_function([$this, "handleShutdown"]);
	}

	public function handleError($errno, $errstr, $errfile, $errline)
	{
		$this->error("PHP Error [$errno]: $errstr in $errfile on line $errline");
	}

	public function handleException($exception)
	{
		$this->error("Uncaught Exception: " . $exception->getMessage(), [
			"file" => $exception->getFile(),
			"line" => $exception->getLine(),
			"trace" => $exception->getTraceAsString()
		]);

		http_response_code(500);
		require __DIR__ . '/../../error_500.php';
		exit;
	}

	public function handleShutdown()
	{
		$error = error_get_last();
		if ($error && in_array($error["type"], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
			$this->error("Fatal Error: " . $error["message"], [
				"file" => $error["file"],
				"line" => $error["line"]
			]);

			http_response_code(500);
			require __DIR__ . '/../../error_500.php';
			exit;
		}
	}
}