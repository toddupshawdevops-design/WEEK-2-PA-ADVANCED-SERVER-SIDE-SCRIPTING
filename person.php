<?php
/**
 * Class Person
 * Represents an individual with personal name and address details.
 * Implements encapsulation with private properties, non-static accessors/formatters,
 * and static label methods.
 */
class Person {
    // Private properties for encapsulation
    private string $firstName;
    private string $lastName;
    private string $addressLine1;
    private string $addressLine2;
    private string $city;
    private string $state;
    private string $zipCode;

    /**
     * Person Constructor
     * Initializes a new Person instance with all name and address details.
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $addressLine1
     * @param string $addressLine2 Optional/Can be empty string
     * @param string $city
     * @param string $state
     * @param string $zipCode
     */
    public function __construct(
        string $firstName,
        string $lastName,
        string $addressLine1,
        string $addressLine2,
        string $city,
        string $state,
        string $zipCode
    ) {
        $this->firstName    = $firstName;
        $this->lastName     = $lastName;
        $this->addressLine1 = $addressLine1;
        $this->addressLine2 = $addressLine2;
        $this->city         = $city;
        $this->state        = $state;
        $this->zipCode      = $zipCode;
    }

    // --- Accessor Functions (Getters) ---
    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getAddressLine1(): string {
        return $this->addressLine1;
    }

    public function getAddressLine2(): string {
        return $this->addressLine2;
    }

    public function getCity(): string {
        return $this->city;
    }

    public function getState(): string {
        return $this->state;
    }

    public function getZipCode(): string {
        return $this->zipCode;
    }

    // --- Mutator Functions (Setters) ---
    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    public function setAddressLine1(string $addressLine1): void {
        $this->addressLine1 = $addressLine1;
    }

    public function setAddressLine2(string $addressLine2): void {
        $this->addressLine2 = $addressLine2;
    }

    public function setCity(string $city): void {
        $this->city = $city;
    }

    public function setState(string $state): void {
        $this->state = $state;
    }

    public function setZipCode(string $zipCode): void {
        $this->zipCode = $zipCode;
    }

    // --- Formatting Helper Methods (Non-Static) ---

    /**
     * Assembles and returns the person's name.
     * @return string Formatted as "Last, First"
     */
    public function getFormattedName(): string {
        return $this->lastName . ", " . $this->firstName;
    }

    /**
     * Assembles and returns the address.
     * Includes a comma between lines only if Address Line 2 is present.
     * @return string Formatted address
     */
    public function getFormattedAddress(): string {
        if (!empty(trim($this->addressLine2))) {
            return $this->addressLine1 . ", " . $this->addressLine2;
        }
        return $this->addressLine1;
    }

    /**
     * Assembles and returns the city, state, and zip location.
     * @return string Formatted as "City, State Zip"
     */
    public function getFormattedLocation(): string {
        return $this->city . ", " . $this->state . " " . $this->zipCode;
    }

    // --- Static Methods for UI Labels ---

    public static function getHeaderLabel(): string {
        return "Name and Address Information";
    }

    public static function getFullNameLabel(): string {
        return "Full Name";
    }

    public static function getAddressLabel(): string {
        return "Address";
    }

    public static function getCityStateZipLabel(): string {
        return "City/State/Zip";
    }
}
?>
