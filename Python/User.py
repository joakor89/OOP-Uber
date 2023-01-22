from account import Account

class User(Account):

    age = int
    address = str

    def __init__(self, name, document,age, address):
        super().__init__(name, document)
        self.age = age
        self.address = address
        
