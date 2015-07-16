<?php
// src/Bug.php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity(repositoryClass="BugRepository") @Table(name="bugs")
 */
class Bug {
	/**
	 * @Id @Column(type="integer") @GeneratedValue
	 * @var int
	 */
	protected $id;
	
	/**
	 * @Column(type="string")
	 * @var string
	 */
	protected $description;
	
	/**
	 * @Column(type="datetime")
	 * @var DateTime
	 */
	protected $created;
	
	/**
	 * @Column(type="string")
	 * @var string
	 */
	protected $status;

	/**
	 * @ManyToMany (targetEntity="Product")
	 */
	protected $products;

	/**
	 * @ManyToOne (targetEntity="User", inversedBy="reportedBugs")
	 */
	protected $engineer;

	/**
	 * @ManyToMany (targetEntity="User", inversedBy="reportedBugs")
	 */
	protected $reporter;

	public function __construct() {
		$this->products = new ArrayCollection();
	}

	public function getId() {
		return $this->id;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function getCreated() {
		return $this->created;
	}
	
	public function setCreated(DateTime $created) {
		$this->created = $created;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status-> $status;
	}

	public function setEngineer($engineer) {
		$engineer->assignedToBug($this);
		$this->engineer = $engineer;
	}

	public function getEngineer() {
		return $this->engineer;
	}

	public function setReporter($reporter) {
		$reporter->addReportedBug($this);
		$this->reporter = $reporter;
	}

	public function getReporter() {
		return $this->reporter;
	}

	public function assignToProduct($products) {
		$this->products[] = $products;
	}

	public function getProducts() {
		return $this->products;
	}

}

?>