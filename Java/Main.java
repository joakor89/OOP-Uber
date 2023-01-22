package Java;

class Main{
    public static void main(String[] args) {
        System.out.println("Hello Uber Mate..!");
        UberX uberX = new UberX("AMQ123",new Account("Joaquin Romero","AND123"), "Chevrolet", "Malibu");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("AJR288", new Account("Joaquin Romero", "AND123"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();

        /*Car car2 = new Car("QWE567", new Account("Andrea Mignetti", "AND888"));
        car2.passenger = 3;
        car2.printDataCar();*/
    }
}

