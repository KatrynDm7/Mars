<?php

class FileProvider implements IProvider {

	private $file;
	
	protected function readFromFile($file) {
		if (file_exists($file)) {
			return $input = file($file);
		}
	}
	
	public function read($file) {
		return $this->file = $this->readFromFile($file);
	}
}