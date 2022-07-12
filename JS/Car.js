class Car{
    constructor(license, driver, passenger){
        this.id;
        this.license = license;
        this.driver = driver;
        this.passenger = passenger;
    }

    printDataCar = function (){
        console.table(this.driver)
        console.log(this.driver.name)
        console.log(this.driver.document)
        console.log(this.driver.email)  
        console.log(this.passenger)
    }
}