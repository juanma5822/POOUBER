class UberVans extends Car{
    Map<String,Map<String,Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;

    public UberVans(String license, Account driver,Map<String,ArrayList<String,Integer>> typeCarAccepted,ArrayList<String> seatsMaterial){
        super(license,driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial;
    }
}