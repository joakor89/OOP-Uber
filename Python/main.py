from car import Car
from account import Account
from User import *
from Driver import *

if __name__ == '__main__':
    print("Hello world...!")
    
    car = Car("JRS333", Account("JOAQUIN ROMERO", "JR7303"))
    print(vars(car))
    print(vars(car.driver))
    
    user1 = User("Rosa lugo","33133",45,"Litoral central ")
    print(vars(user1))

    driver1 = Driver("Daniel Busset", "8050", 15)
    print(vars(driver1)) 
