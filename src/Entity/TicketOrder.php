<?php

namespace App\Entity;

use App\Repository\TicketOrderRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TicketOrderRepository::class)]
class TicketOrder implements TicketOrderInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $event_id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $event_date = null;

    #[ORM\Column]
    private ?int $ticket_adult_price = null;

    #[ORM\Column]
    private ?int $ticket_adult_quantity = null;

    #[ORM\Column]
    private ?int $ticket_kid_price = null;

    #[ORM\Column]
    private ?int $ticket_kid_quantity = null;

    #[ORM\Column(length: 120)]
    private ?string $barcode = null;

    #[ORM\Column]
    private ?int $equal_price = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEventId(): ?int
    {
        return $this->event_id;
    }

    public function setEventId(int $event_id): static
    {
        $this->event_id = $event_id;

        return $this;
    }

    public function getEventDate(): ?\DateTimeInterface
    {
        return $this->event_date;
    }

    public function setEventDate(\DateTimeInterface $event_date): static
    {
        $this->event_date = $event_date;

        return $this;
    }

    public function getTicketAdultPrice(): ?int
    {
        return $this->ticket_adult_price;
    }

    public function setTicketAdultPrice(int $ticket_adult_price): static
    {
        $this->ticket_adult_price = $ticket_adult_price;

        return $this;
    }

    public function getTicketAdultQuantity(): ?int
    {
        return $this->ticket_adult_quantity;
    }

    public function setTicketAdultQuantity(int $ticket_adult_quantity): static
    {
        $this->ticket_adult_quantity = $ticket_adult_quantity;

        return $this;
    }

    public function getTicketKidPrice(): ?int
    {
        return $this->ticket_kid_price;
    }

    public function setTicketKidPrice(int $ticket_kid_price): static
    {
        $this->ticket_kid_price = $ticket_kid_price;

        return $this;
    }

    public function getTicketKidQuantity(): ?int
    {
        return $this->ticket_kid_quantity;
    }

    public function setTicketKidQuantity(int $ticket_kid_quantity): static
    {
        $this->ticket_kid_quantity = $ticket_kid_quantity;

        return $this;
    }

    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    public function setBarcode(string $barcode): static
    {
        $this->barcode = $barcode;

        return $this;
    }

    public function getEqualPrice(): ?int
    {
        return $this->equal_price;
    }

    public function setEqualPrice(int $equal_price): static
    {
        $this->equal_price = $equal_price;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): static
    {
        $this->created = $created;

        return $this;
    }
}
