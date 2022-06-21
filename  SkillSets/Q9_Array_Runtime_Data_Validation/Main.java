public class Main
{
    public static void main(String args[])
    {
        //call static methods (i.e, no objects, non-value returning)
        Methods.getRequirements();

        //Java style String[] myArray
        //C++ style String myArray[]
        //return initalized array, array size determined by user 
        int arraySize=0;
        arraySize = Methods.validateArraySize(); // java style array 

         /*
            //printing array values for testing purposes only!
            for (int i = 0; i < userArray.length; i++)
            {
                System.out.print(userArray[i]+",");
            }
        */

        //call method, passing returned array above 
        //after processing, method calls another method
        Methods.calculateNumbers(arraySize);
    }
}