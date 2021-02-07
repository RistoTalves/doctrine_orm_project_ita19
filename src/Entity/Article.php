<?php

namespace App\Entity;
/**
* @Entity
*/
use DateTime;
class Article {
	/**
	* @Column(type="integer")
	*@Id
	*GeneratedValue
	*/
	private $id;
	/**
	* @Column(type="string")
	*/
	private $name;
	/**
	* @Column(type="string", unique=true)
	*/
	private $slug;
	/**
	* @Column(type="string")
	*/
	private $image;
	/**
	* @Column(type="text")
	*/
	private $body;
	/**
	* @Column(type="datetime")
	*/
	private $published;

	public function getId(){
		return $this->id;
	}
	public function setId($value){
		$this->id = $value;
	}
	public function getName(){
		return $this->name;
	}
	public function setName($value){
		$this->name = $value;
	}
	public function getSlug(){
		return $this->Slug;
	}
	public function setSlug($value){
		$this->Slug = $value;
	}
	public function getImage(){
		return $this->image;
	}
	public function setImage($value){
		$this->image = $value;
	}
	public function getBody(){		
		return $this->Body;
	}
	public function setBody($value){
		$this->Body = $value;
	}
	public function getPublished(){
		return $this->Published;
	}
	
	public function setPublished(DateTime $value = null){
		$this->published = $value;
	}
	
	
	
}