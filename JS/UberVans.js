class UberVans extends Car{
    constructor(license,driver,passenger,typeAcceptedCar,SeatsMaterial){
        super(license,driver,passenger)
        this.brand = typeAcceptedCar;
        this.model= SeatsMaterial;
    }

}