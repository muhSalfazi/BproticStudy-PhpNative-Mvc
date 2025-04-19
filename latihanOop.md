# Latihan Studi Kasus OOP dalam PHP

## 1. Membuat Kelas dan Objek

**Soal:**
Buatlah kelas `Car` dengan properti sebagai berikut:
- Properti: `brand`, `model`, `year`.
- Method: `getDetails()` yang mengembalikan detail mobil dalam format: `"Brand: {brand}, Model: {model}, Year: {year}"`.

**Code:**
```php
class Car {
    public $brand;
    public $model;
    public $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getDetails() {
        return "Brand: $this->brand, Model: $this->model, Year: $this->year";
    }
}

$car = new Car("Toyota", "Corolla", 2020);
echo $car->getDetails();
