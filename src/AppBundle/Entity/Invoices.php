<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoices
 *
 * @ORM\Table(name="invoices", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Invoices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_number", type="string", length=150, nullable=false)
     */
    private $invoiceNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_invoice", type="datetime", nullable=false)
     */
    private $dateOfInvoice = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sell_date", type="datetime", nullable=false)
     */
    private $sellDate = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maturity_date", type="datetime", nullable=false)
     */
    private $maturityDate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="additional_info", type="text", length=65535, nullable=true)
     */
    private $additionalInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="seller_vat_number", type="string", length=20, nullable=false)
     */
    private $sellerVatNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="seller_name", type="string", length=255, nullable=false)
     */
    private $sellerName;

    /**
     * @var string
     *
     * @ORM\Column(name="seller_address", type="string", length=255, nullable=true)
     */
    private $sellerAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="buyer_vat_number", type="string", length=20, nullable=false)
     */
    private $buyerVatNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="buyer_name", type="string", length=255, nullable=false)
     */
    private $buyerName;

    /**
     * @var string
     *
     * @ORM\Column(name="buyer_address", type="string", length=255, nullable=true)
     */
    private $buyerAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="total_price", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $totalPrice;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set invoiceNumber
     *
     * @param string $invoiceNumber
     *
     * @return Invoices
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * Get invoiceNumber
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Set dateOfInvoice
     *
     * @param \DateTime $dateOfInvoice
     *
     * @return Invoices
     */
    public function setDateOfInvoice($dateOfInvoice)
    {
        $this->dateOfInvoice = $dateOfInvoice;

        return $this;
    }

    /**
     * Get dateOfInvoice
     *
     * @return \DateTime
     */
    public function getDateOfInvoice()
    {
        return $this->dateOfInvoice;
    }

    /**
     * Set sellDate
     *
     * @param \DateTime $sellDate
     *
     * @return Invoices
     */
    public function setSellDate($sellDate)
    {
        $this->sellDate = $sellDate;

        return $this;
    }

    /**
     * Get sellDate
     *
     * @return \DateTime
     */
    public function getSellDate()
    {
        return $this->sellDate;
    }

    /**
     * Set maturityDate
     *
     * @param \DateTime $maturityDate
     *
     * @return Invoices
     */
    public function setMaturityDate($maturityDate)
    {
        $this->maturityDate = $maturityDate;

        return $this;
    }

    /**
     * Get maturityDate
     *
     * @return \DateTime
     */
    public function getMaturityDate()
    {
        return $this->maturityDate;
    }

    /**
     * Set additionalInfo
     *
     * @param string $additionalInfo
     *
     * @return Invoices
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    /**
     * Get additionalInfo
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Set sellerVatNumber
     *
     * @param string $sellerVatNumber
     *
     * @return Invoices
     */
    public function setSellerVatNumber($sellerVatNumber)
    {
        $this->sellerVatNumber = $sellerVatNumber;

        return $this;
    }

    /**
     * Get sellerVatNumber
     *
     * @return string
     */
    public function getSellerVatNumber()
    {
        return $this->sellerVatNumber;
    }

    /**
     * Set sellerName
     *
     * @param string $sellerName
     *
     * @return Invoices
     */
    public function setSellerName($sellerName)
    {
        $this->sellerName = $sellerName;

        return $this;
    }

    /**
     * Get sellerName
     *
     * @return string
     */
    public function getSellerName()
    {
        return $this->sellerName;
    }

    /**
     * Set sellerAddress
     *
     * @param string $sellerAddress
     *
     * @return Invoices
     */
    public function setSellerAddress($sellerAddress)
    {
        $this->sellerAddress = $sellerAddress;

        return $this;
    }

    /**
     * Get sellerAddress
     *
     * @return string
     */
    public function getSellerAddress()
    {
        return $this->sellerAddress;
    }

    /**
     * Set buyerVatNumber
     *
     * @param string $buyerVatNumber
     *
     * @return Invoices
     */
    public function setBuyerVatNumber($buyerVatNumber)
    {
        $this->buyerVatNumber = $buyerVatNumber;

        return $this;
    }

    /**
     * Get buyerVatNumber
     *
     * @return string
     */
    public function getBuyerVatNumber()
    {
        return $this->buyerVatNumber;
    }

    /**
     * Set buyerName
     *
     * @param string $buyerName
     *
     * @return Invoices
     */
    public function setBuyerName($buyerName)
    {
        $this->buyerName = $buyerName;

        return $this;
    }

    /**
     * Get buyerName
     *
     * @return string
     */
    public function getBuyerName()
    {
        return $this->buyerName;
    }

    /**
     * Set buyerAddress
     *
     * @param string $buyerAddress
     *
     * @return Invoices
     */
    public function setBuyerAddress($buyerAddress)
    {
        $this->buyerAddress = $buyerAddress;

        return $this;
    }

    /**
     * Get buyerAddress
     *
     * @return string
     */
    public function getBuyerAddress()
    {
        return $this->buyerAddress;
    }

    /**
     * Set totalPrice
     *
     * @param string $totalPrice
     *
     * @return Invoices
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return string
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\Users $user
     *
     * @return Invoices
     */
    public function setUser(\AppBundle\Entity\Users $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }
}
