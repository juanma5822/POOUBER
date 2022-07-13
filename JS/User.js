class User extends Account{
    constructor(name,document,email,password){
        super(name,document,email,password)
    }

    printDataUser(){
        console.log("Nombre:", this.name)
        console.log("Documento: ",this.document)
        console.log("e-mail: ",this.email)
        console.log("password: ",this.password)
    }
}