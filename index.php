Допустим, у нас есть несколько классов: Vehicle, Car и Motorcycle.

— Vehicle - базовый класс, который определяет общие свойства и методы для всех транспортных средств.
— Car - класс автомобилей, наследуется от Vehicle и имеет свойства и методы, специфичные для автомобилей (например, количество дверей, максимальная скорость).
— Motorcycle - класс мотоциклов, наследуется от Vehicle и имеет свойства и методы, специфичные для мотоциклов (например, тип мотоцикла, максимальная скорость).

Задача заключается в том, чтобы создать систему, которая будет моделировать использование различных видов транспорта. Например, мы можем создать объекты 
Car и Motorcycle и использовать методы start() и stop() для моделирования запуска и остановки двигателя.


class Car extends Venicle {
    private int $passengers;
    public function __construct($passengers) {
        $this->passengers = $passengers;
    }
    public function carRides() {
        echo "Легковой автомобиль c " . $this->passengers . " пассажирами мчит по дороге." . "<br>";
    }
}
class Motorcycle extends Venicle {
    public function helmetWearing($speed) {
        $speedLimit = 60;
        echo $speed <= $speedLimit ? "Хорошей дороги :)" : "Остановись и одень шлем!!! ";
    }
}

$car = new Car(2);
$car->start();
$car->drive(120);
$car->carRides();

$motorcycle = new Motorcycle();
$motorcycle->start();
$motorcycle->drive(70);
$motorcycle->helmetWearing(70);
$motorcycle->stop();
