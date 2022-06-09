import java.util.Arrays;//Note: only needed for Arrays.toString() method demo below 

class Main
{
    public static void main(String args[])
    {
        //call static void methods (i.e, no objects, non-value returning)
        Methods.getRequirements();//*Only* way to call void method: in stand-alone statenebt!

        //String myStr = Methods.getRequirements(); //error!
        //System.out.print(Methods.getRequirements()); //error!

        //Java style String[] myArray 
        //C++ style String my Array[]

        //call static createArray() value-returning method (i.e., static = with or w/o object)
        //returns initialized array, array size determined by user
        //Note: three ways to call value-returning method
        //1. assignment
        //2. argument in another method call 
        //3. print() statement (same as 2 above)
        int[] userArray = Methods.createArrays();//Java style array 

        //Note: "can" use value-returning method in stand-alone statement (just discards value)
        //Methods.createArray();

        //used as argument in another method call (here, coverting int array to String)
        //Note: returns array with zeros, becuase Java initializes int array to zero(0)
        //System.out.println(Arrays.toString(userArray));

        //call void generatePseudoRandomNumber() method, passing returned array above
        //print pseudo-randomly generated numbers, determined by number user input
        Methods.generatePseudoRandomNumber(userArray);//pass array         
    }
}