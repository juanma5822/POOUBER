class Car{
    private Integer id;
    private String license;
    private Account driver;
    private Integer passengers;

    public Car (String license, Account driver ) {
        this.license = license;
        this.driver = driver;
       
        
    }

    void printDataCar(){
        System.out.println("License: " + license + "Name Driver: " + driver.name + "Passengers" + passengers)
    }


    public Integer  getPassengers(){
        return passengers;
    }

    public void setPassengers(Integer passengers){
        if(passenger==4){
            this.passengers = passengers;
        }else{
            System.out.println("Necesitas asignar 4 puestos");
        }
    }

    

}