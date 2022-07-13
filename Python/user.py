from account import Account

class User(Account):

    def __init__(self, name, document, email, password) -> None:
        super().__init__(name, document, email, password)