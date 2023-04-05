<?php

class Recipe
{
    // Properties - same as from db
    private int $id;
    private string $name;
    private string $description;
    private string $date;
    private string $imagelink;

    public function __construct(
        string $name, string $description, string $date, string $imagelink, int $id = -1
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->date = $date;
        $this->imagelink = $imagelink;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param float $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getImagelink(): string
    {
        return $this->imagelink;
    }

    /**
     * @param string $imagelink
     */
    public function setImagelink(string $imagelink): void
    {
        $this->imagelink = $imagelink;
    }

}
