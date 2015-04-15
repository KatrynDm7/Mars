<?php

class Logic {

	private $provider; 
	
	public function __construct(FileProvider $provider)
	{
		$this->provider = $provider;
	}
	
	function getSide($x, $y, $d, $instruction){	
		if($instruction != ''){
			$instruction_str = str_split(trim($instruction));
			$prev = '';
			$res = [];

			foreach($instruction_str as $cmd){	
				if($d == 'N'){
					if($cmd == 'M'){
						$y += 1;
						$prev = '';
					}
					else if($cmd == 'R'){
						$d = 'E';
						$prev = 'R';
					}
					else if($cmd == 'L'){
						$d = 'W';
						$prev = 'L';
					}
				}
				else if($d == 'E'){
					if($cmd == 'M'){
						$x += 1;
						$prev = '';
					}
					else if($cmd == 'R'){
						$d = 'S';
						$prev = 'R';
					}
					else if($cmd == 'L'){
						$d = 'N';
						$prev = 'L';
					}
				}
				else if($d == 'S'){
					if($cmd == 'M'){
						$y -= 1;
						$prev = '';
					}
					else if($cmd == 'R'){
						$d = 'W';
						$prev = 'R';
					}
					else if($cmd == 'L'){
						$d = 'E';
						$prev = 'L';
					}
				}
				else if($d == 'W'){
					if($cmd == 'M'){
						$x -= 1;
						$prev = '';
					}
					else if($cmd == 'R'){
						$d = 'N';
						$prev = 'R';
					}
					else if($cmd == 'L'){
						$d = 'S';
						$prev = 'L';
					}
				}
			}
		
			array_push($res, $x, $y, $d);
			return $res;
		}
	}
	
	public function calculate($file) {
		$input = $this->provider->read($file);	
		$output = [];
		
		for($i = 1; $i < count($input); $i++){
			
			$start_info = explode(' ', $input[$i]);
				
			if($i % 2 != 0){
				$x = 0;
				$y = 0;
				$d = '';
				$position = $start_info;
				list($x, $y, $d) = $position;
				$d = trim($d);
			}
			else{
				$instruction = '';
				$instruction = $input[$i];
				array_push($output, $this->getSide($x, $y, $d, $instruction));
			}	
		}
		return $output;		
	}
}