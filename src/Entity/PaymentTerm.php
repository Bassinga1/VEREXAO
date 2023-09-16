<?php

namespace App\Entity;

use App\Repository\PaymentTermRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentTermRepository::class)]
class PaymentTerm
{
    // ====================================================== //
    // ===================== PROPRIETES ===================== //
    // ====================================================== //
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $term = null;

    #[ORM\Column]
    private ?bool $method = null;

    #[ORM\ManyToOne(inversedBy: 'paymentTerms')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Service $service = null;

    // ====================================================== //
    // =================== GETTERS/SETTERS ================== //
    // ====================================================== //
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTerm(): ?string
    {
        return $this->term;
    }

    public function setTerm(string $term): static
    {
        $this->term = $term;

        return $this;
    }

    public function isMethod(): ?bool
    {
        return $this->method;
    }

    public function setMethod(bool $method): static
    {
        $this->method = $method;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): static
    {
        $this->service = $service;

        return $this;
    }
    
}
