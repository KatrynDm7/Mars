<?php

class Rover {
	
	function __construct($x = 0, $y = 0, $dir = 'N') {
        $this->x = $x;
        $this->y = $y;
        $this->dir = $dir;
    }
	
	function doInstructions($instructions) {
        foreach (str_split($instructions) as $cmd) {
			switch ($cmd) {
				case 'M':  # Move one step
					switch ($this->dir) {
						case 'N': $this->y++; break;
						case 'W': $this->x--; break;          
						case 'E': $this->x++; break;
						case 'S': $this->y--; break;
					}
					break;
				case 'L':  # Turn left 90 degrees
					switch ($this->dir) {
						case 'N': $this->dir = 'W'; break;
						case 'W': $this->dir = 'S'; break;    
						case 'E': $this->dir = 'N'; break;
						case 'S': $this->dir = 'E'; break;
					}
					break;
				case 'R':  # Turn right 90 degrees
					switch ($this->dir) {
						case 'N': $this->dir = 'E'; break;
						case 'W': $this->dir = 'N'; break;    
						case 'E': $this->dir = 'S'; break;
						case 'S': $this->dir = 'W'; break;
					}
					break;
			}
		}
	}
	
	function processFile($filename) {
        $rovers = array();	
        $lines = file($filename);

        for ($i = 1; $i + 1 < count($lines); $i += 2) { 
            list($x, $y, $dir) = explode(' ', $lines[$i]); 
			$rover = new Rover(intval($x), intval($y), trim($dir));
			$rovers[] = $rover;
            $rover->doInstructions($lines[$i + 1]);
        }     
		
        return $rovers;             
    }           
}