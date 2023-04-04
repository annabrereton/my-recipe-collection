<?php

class Recipe
{
    const OWNER = 'Anna Brereton';

    // Properties - same as from db
    private int $id;
    private string $name;
    private string $description;
    private string $date;
    private string $imagelink;

    public function __construct(           // Added constructor to create recipe objects
        string $name, string $description, string $date, string $imagelink, int $id = -1 // id is on the end so that it is optional
    )
    {                                                             // so that when add a recipe to database it allows
        $this->id = $id;                                          // the db to automatically assign primary key.
        $this->name = $name;                                      // Db will never assign at -1
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