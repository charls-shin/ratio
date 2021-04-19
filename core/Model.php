<?php


namespace core;


class Model
{
	protected $oci=null;
	protected $config=[];

	public function __construct(array $config)
	{
		$this->oci='';
		$this->config = $config;
	}

	public function loadData($data)
	{
		foreach ($data as $key => $value) {
			if (property_exists($this, $key)) {
				$this->{$key} = $value;
			}
		}
	}

}