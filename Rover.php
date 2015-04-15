<?php

class Rover implements IRover
{
	private $media; 
	
	public function __construct(Logic $media)
	{
		$this->media = $media;
	}

	public function setInfo($media)
	{
		$this->media = $this->media->calculate($media);
	}
	
	public function getInfo()
	{		
		return $this->media;
	}
	
	public function printDetails()
	{
		$count = 0;
		
		foreach ($this->getInfo() as $rows) {
			foreach ($rows as $row) {
				$count++;
			
				echo $row;
				if ($count % 3 == 0){
					echo '<br/>';
				}
			}
		}
	}
}