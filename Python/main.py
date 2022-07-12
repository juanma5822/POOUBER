from user import User
from uberX import UberX
from car import Car
from account import Account


if __name__ == "__main__":
    print("Hola mundo")
    car = Car("CPC07E", Account("Juan Romero", 1053844388,"juan@gmail.com",5456465))
    print(vars(car))
    print(vars(car.driver))

    car2 = Car("VQB11C", Account("Laura Merchan",1053863398,"laura@gmail.com",45646545))
    print(vars(car2))
    print(vars(car2.driver))

    uberx= UberX("JHG752",Account("Manuel Sánchez",1053844388,"manuel@gmail.com",4564646),"Chevrolet","Onix")
    print("El nuevo vehiculo agregado es: ",vars(uberx))
    print("Los datos del driver son: ",vars(uberx.driver))

    user1= User("Sofia Romero",10254512,"sofia@gmail.com",1546513514)
    print("Los datos del nuevo usuario son: ",vars(user1))
    
