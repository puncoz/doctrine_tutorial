<?php

/**
 * @Entity @Table(name="dojos")
 **/
class Starter {
	/** @Id @Column(type="integer") @GeneratedValue **/
	protected $id;
	/** @Column (type="string") **/
	protected $name;
	/** @Column (type="integer") **/
	protected $dojo;
	
	public function getId() {
		return $this->id;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
	}
	
	public function getDojo() {
		return $this->dojo;
	}
	
	public function setDojo($dojo) {
		$this->dojo = $dojo;
	}
}

?>