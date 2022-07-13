class UberX extends Car{
    constructor(license,driver,passenger,brand,model){
        super(license,driver,passenger)
        this.brand = brand;
        this.model= model;
    }

    printDataCarX = function (){
        console.log(this.brand)
        console.log(this.model)
        

    }
}