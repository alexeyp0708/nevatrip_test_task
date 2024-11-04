<?php

namespace App\Entity;

/**
 * The entity of the ticket  orders  stack
 *
 * - Table : `ticket_order`
 * - Repository : {@link TicketOrderRepository}
 */

interface TicketOrderInterface
{
    public function getId(): ?int;

    public function getEventId(): ?int;

    public function setEventId(int $event_id): static;

    public function getEventDate(): ?\DateTimeInterface;

    public function setEventDate(\DateTimeInterface $event_date): static;

    public function getTicketAdultPrice(): ?int;

    public function setTicketAdultPrice(int $ticket_adult_price): static;

    public function getTicketAdultQuantity(): ?int;

    public function setTicketAdultQuantity(int $ticket_adult_quantity): static;

    public function getTicketKidPrice(): ?int;

    public function setTicketKidPrice(int $ticket_kid_price): static;

    public function getTicketKidQuantity(): ?int;

    public function setTicketKidQuantity(int $ticket_kid_quantity): static;

    public function getBarcode(): ?string;

    public function setBarcode(string $barcode): static;

    public function getEqualPrice(): ?int;

    public function setEqualPrice(int $equal_price): static;

    public function getCreated(): ?\DateTimeInterface;

    public function setCreated(\DateTimeInterface $created): static;
}