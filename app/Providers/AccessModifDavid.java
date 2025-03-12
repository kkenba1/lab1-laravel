// Enum to represent different types of cars
enum CarType {
    SEDAN,
    SUV,
    TRUCK
}

// Base class Car
class Car {
    // Private variables for brand and speed
    private String brand;
    private int speed;
    
    // Final constant for maximum speed
    public static final int MAX_SPEED = 200;

    // Constructor to initialize the car brand
    public Car(String brand) {
        this.brand = brand;
        this.speed = 0; // Initial speed is 0
    }

    // Public method to display car details
    public void displayDetails() {
        System.out.println("Car Brand: " + brand);
        System.out.println("Current Speed: " + speed + " km/h");
    }

    // Protected method to modify speed (accessible in child classes)
    protected void modifySpeed(int increment) {
        if (speed + increment <= MAX_SPEED) {
            speed += increment;
        } else {
            speed = MAX_SPEED; // Cap speed at MAX_SPEED
        }
    }
}

// Child class SportsCar that extends Car
class SportsCar extends Car {
    // Constructor to initialize the sports car brand
    public SportsCar(String brand) {
        super(brand);
    }

    // Method to activate turbo boost for a specific car type
    public void activateTurboBoost(CarType carType) {
        if (carType == CarType.SEDAN) {
            System.out.println("Turbo Boost Activated for SEDAN!");
            modifySpeed(30); // Increase speed by 30 km/h
        }
    }

    // Method to accelerate the sports car
    public void accelerate() {
        modifySpeed(50); // Increase speed by 50 km/h
        System.out.println(getBrand() + " accelerated. New Speed: " + getSpeed() + " km/h");
    }

    // Public method to get the brand (needed for displaying)
    public String getBrand() {
        return super.brand; // Accessing the private brand variable
    }

    // Public method to get the speed (needed for displaying)
    public int getSpeed() {
        return super.speed; // Accessing the private speed variable
    }
}

// Main class to demonstrate the functionality
public class Main {
    public static void main(String[] args) {
        // Create instances of Car and SportsCar
        Car toyota = new Car("Toyota");
        SportsCar ferrari = new SportsCar("Ferrari");

        // Display details of the cars
        toyota.displayDetails();
        ferrari.displayDetails();

        // Activate turbo boost for the sedan type
        ferrari.activateTurboBoost(CarType.SEDAN);

        // Accelerate the Ferrari
        ferrari.accelerate();

        // Display details again to see the updated speed
        toyota.displayDetails();
        ferrari.displayDetails();
    }
}