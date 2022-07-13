from car import Car

class UberVans(Car):
    typeCarAccepted = []
    SeatsMaterial = []

    def __init__(self, license, driver,typeCarAccepted,SeatsMaterial) -> None:
        super.__init__(license, driver)
        self.typeCarAccepted = typeCarAccepted
        self.SeatsMaterial = SeatsMaterial