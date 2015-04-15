<?php

class Data implements IData
{
	private $media; 
	
	public function __construct(Rover $media)
	{
		$this->media = $media;
	}

	public function setInfo($media)
	{
		$this->media = $this->media->processFile($media);
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