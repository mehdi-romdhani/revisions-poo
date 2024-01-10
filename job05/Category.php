<?php

class Category
{
    private ?int $id;

    private ?PDO $pdo;
    private ?string $name;
    private ?string $description;
    private ?DateTime $createdAt;
    private ?Datetime $updatedAt;


    public function __construct(int $id = null, string $name = null, string $description = null, DateTime $createdAt = null, DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->createdAt = new DateTime();
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get the value of id
     *
     * @return ?int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param ?int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setPDO(PDO $pdo)
    {
        $this->pdo = $pdo;
        return $this;
    }

    /**
     * Get the value of name
     *
     * @return ?string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param ?string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return ?string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param ?string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
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
     * @return Datetime
     */
    public function getUpdatedAt(): Datetime
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of updatedAt
     *
     * @param Datetime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(Datetime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getProducts()
    {
        $query = "SELECT * FROM category INNER JOIN product ON category.id = product.category_id WHERE category.id = :id ";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($result);
        $products = [];
        $i=0;
        foreach ($result as $product) {

            $products[$i] =  new Product($product['id'], $product['name'], json_decode($product['picture']), $product['price'], $product['description'], $product['quantity'], new DateTime($product['createdAt']), new DateTime($product['updatedAt']), $product['category_id']);
            $i++;
        }
        return $products;
    }
}
