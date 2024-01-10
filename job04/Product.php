<?php

class Product
{
    /**
     *  @param int $id  */

    private ?int $id;

    private ?int $id_category;
    private ?string $name;

    private ?array $photos;

    private ?string $price;

    private ?string $description;

    private ?int $quantity;

    private ?DateTime $createdAt;

    private ?DateTime $updatedAt;


    public function __construct(int $id = null, string $name = null, array $photos = null, string $price = null, string $description = null, int $quantity = null, DateTime $createdAt, DateTime $updatedAt,int $id_category = null)
    {

        $this->id = $id;
        $this->name = $name;
        $this->photos = $photos;
        $this->price = $price;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->createdAt = new DateTime();
        $this->updatedAt = $updatedAt;
        $this->id_category = $id_category;
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

    public function getphotos()
    {
        return $this->photos;
    }

    public function setphotos(array $photos)
    {
        return $this->photos = $photos;
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

    /**
     * Get the value of id_category
     *
     * @return ?int
     */
    public function getIdCategory(): ?int
    {
        return $this->id_category;
    }

    /**
     * Set the value of id_category
     *
     * @param ?int $id_category
     *
     * @return self
     */
    public function setIdCategory(?int $id_category): self
    {
        $this->id_category = $id_category;

        return $this;
    }
}
