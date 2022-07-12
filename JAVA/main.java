class main{
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        UberX uberX1  = new UberX("AMQ123", new Account("Andres Herrera", 1053844388 ),"Chevrolet","Onix");
        uberX1.setPassengers(4);
        uberX1.printDataCar();

        /*Car car2 = new Car("QWE567",new Account("Laura Merchan", 1053863398));
        car2.passenger = 3;
        car2.printDataCar();*/
        
    }
    
}