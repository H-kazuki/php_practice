<?php
class  Category {
	protected $id;
	protected $name;
	protected $image;

	public function __construct($id, $name, $image) {
		$this->id = $id;
		$this->name = $name;
		$this->image = $image;
	}

	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}

	public function getImage() {
		return $this->image;
	}

}

class Menu {
	protected $id;
	protected $name;
	protected $price;
	protected $code;

	public function __construct($id, $name, $price, $code) {
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
		$this->code = $code;
	}

	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getCode() {
		return $this->code;
	}

}
?>