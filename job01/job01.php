<?php 

class Product
{
    /**
     *  @param int $id  */ 

    public ?int $id;
    public ?string $name;

    public ?string $picture;

    public ?string $price;

    public ?string $description;

    public ?int $quantity;

    public DateTime $createdAt;

    public DateTime $updatedAt;


    public function construct(int $id = null, string $name = null, string $picture = null, string $price = null, string $description = null, int $quantity = null, DateTime $createdAt = null, DateTime $updatedAt = null){
        
        $this->id = $id;
        $this->name = $name;
        $this->picture = $picture; 
        $this->price = $price;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;


    }

    /* All Getters & Setters */ 

    public function getId()
    {
        return $this->id;

    }

    public function setId(int $id)
    {
        return $this->id = $id;
    }

    public function getName()
    {
        return  $this->name;
    }

    public function setName(string $name)
    {
        return $this->name = $name;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture(string $picture)
    {
        return $this->picture = $picture;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(string $price)
    {
        return $this->price = $price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        return $this->description = $description;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity)
    {
        return $this->quantity = $quantity;
    }

    


    /**
     * Get the value of createdAt
     *
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @param DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of updatedAt
     *
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of updatedAt
     *
     * @param DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}