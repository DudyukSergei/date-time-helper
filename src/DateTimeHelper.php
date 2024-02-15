<?php

namespace DudyukSergei\DateTimeHelper;

class DateTimeHelper
{
    public function __construct(
        private \DateTime $dateTime
    )
    {

    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->dateTime->format('d');
    }

    /**
     * @return string
     */
    public function getMonth(): string
    {
        return $this->dateTime->format('m');
    }

    /**
     * @return string
     */
    public function getYear(): string
    {
        return $this->dateTime->format('Y');
    }

    /**
     * @return string
     */
    public function getHour(): string
    {
        return $this->dateTime->format('H');
    }

    /**
     * @return string
     */
    public function getMinutes(): string
    {
        return $this->dateTime->format('i');
    }

    /**
     * @return string
     */
    public function getSeconds(): string
    {
        return $this->dateTime->format('s');
    }
}