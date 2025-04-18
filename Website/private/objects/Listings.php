<?php
enum CategoryEnums: string {
    case Plants = 'Plants';
    case Toys = 'Toys';
    case Outdoorfurniture = 'Outdoor furniture';
    case Indoorfurniture = 'Indoor Furniture';
    case Clothing = 'Clothing';
    case Books = 'Books';
    case Cars = 'Cars';
}

require_once '/private/objects/User.php'; 

class Listing {
    private string $listingTitle;
    private string $listingDesc;
    private float $listingPrice;
    private CategoryEnums $listingCategory;
    private string $listingPostedBy;  
    private string $listingDate;

    // Constructor - now accepts a User object
    public function __construct(string $listingTitle, string $listingDesc, float $listingPrice, CategoryEnums $listingCategory, User $user) {
        $this->listingTitle = $listingTitle;
        $this->listingDesc = $listingDesc;
        $this->listingPrice = $listingPrice;
        $this->listingCategory = $listingCategory;
        $this->listingPostedBy = $user->getUserName();
        $this->listingDate = date("d/m/y");  // Sets date of posting
    }

    // Getters
    public function getListingTitle(): string {
        return $this->listingTitle;
    }

    public function getListingDesc(): string {
        return $this->listingDesc;
    }

    public function getListingPrice(): float {
        return $this->listingPrice;
    }

    public function getListingCategory(): string {
        return $this->listingCategory->value; 
    }

    public function getListingPostedBy(): string {
        return $this->listingPostedBy;
    }

    public function getListingDate(): string {
        return $this->listingDate;
    }

    // Setters
    public function setListingTitle(string $listingTitle): void {
        $this->listingTitle = $listingTitle;
    }

    public function setListingDesc(string $listingDesc): void {
        $this->listingDesc = $listingDesc;
    }

    public function setListingPrice(float $listingPrice): void {
        $this->listingPrice = $listingPrice;
    }

    public function setListingCategory(CategoryEnums $listingCategory): void {
        $this->listingCategory = $listingCategory;
    }
}
?>
