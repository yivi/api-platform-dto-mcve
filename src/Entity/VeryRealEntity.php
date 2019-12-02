<?php

declare(strict_types=1);

namespace App\Entity;

class VeryRealEntity
{

    private string $name;
    private string $more_name;
    private string $yet_another_name;
    private int $very_large_number;
    private int $small_number;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return VeryRealEntity
     */
    public function setName(string $name): VeryRealEntity
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getMoreName(): string
    {
        return $this->more_name;
    }

    /**
     * @param string $more_name
     *
     * @return VeryRealEntity
     */
    public function setMoreName(string $more_name): VeryRealEntity
    {
        $this->more_name = $more_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getYetAnotherName(): string
    {
        return $this->yet_another_name;
    }

    /**
     * @param string $yet_another_name
     *
     * @return VeryRealEntity
     */
    public function setYetAnotherName(string $yet_another_name): VeryRealEntity
    {
        $this->yet_another_name = $yet_another_name;

        return $this;
    }

    /**
     * @return int
     */
    public function getVeryLargeNumber(): int
    {
        return $this->very_large_number;
    }

    /**
     * @param int $very_large_number
     *
     * @return VeryRealEntity
     */
    public function setVeryLargeNumber(int $very_large_number): VeryRealEntity
    {
        $this->very_large_number = $very_large_number;

        return $this;
    }

    /**
     * @return int
     */
    public function getSmallNumber(): int
    {
        return $this->small_number;
    }

    /**
     * @param int $small_number
     *
     * @return VeryRealEntity
     */
    public function setSmallNumber(int $small_number): VeryRealEntity
    {
        $this->small_number = $small_number;

        return $this;
    }


}
