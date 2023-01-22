from account import Account

class Driver(Account):

    age = int

    def __init__(self, name, document, age):
        super().__init__(name, document)
        self.age = age
        
