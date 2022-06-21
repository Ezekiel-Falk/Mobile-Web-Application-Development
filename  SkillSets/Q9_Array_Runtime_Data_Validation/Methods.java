import java.util.Scanner; 

public class Methods
{
    //create global Scanner object, used in more than one method  
    //Note: using "final" prevents object variable from being modified
    static final Scanner sc = new Scanner(System.in);

    //nonvalue-returning method (static requires no object)
    public static void getRequirements()
    {
        //display operational messages
        System.out.println("Developer: Ezekiel O. Faulknor");
        System.out.println("1) Program creates array size at run-time.");
        System.out.println("2) Program displays array size .");
        System.out.println("3) Program rounds sum and avarage of numbers to two decimal places.");
        System.out.println("4) Numbers *must* be float data type, not double.");

        System.out.println(); //print blank line 
    }

    //value-returning method (static requires no object)
    public static int validateArraySize()
    {
       //declare variables and create Scanner object
       //Scanner sc = new Scanner(System.in);
       int arraySize = 0;

       //prompt user for array size
       System.out.print("Please enter array size: ");
       while (!sc.hasNextInt())
            {
                System.out.println("Not valid integer!\n");
                sc.next();//Important! If omitted, will go into infinite loop on invalid input!
                System.out.print("Please try again. Enter array size: ");
            }
        arraySize = sc.nextInt();
        System.out.println(); //print blank line

        //return array size to calling environment 
        return arraySize;
    }

    //nonvalue-returning method (static requires no object)
    public static void calculateNumbers(int arraySize)
    {
        float sum = 0.0f;
        float avarage = 0.0F;

        //indicate number of values required, based upon user input
        System.out.print("Please enter " + arraySize + "number.\n");

        //create array for storing user input, based upon user-entered array size
        float numsArray[] = new float[arraySize];

        //validate data entry
        for(int i = 0; i < arraySize; i++)
            {
                System.out.print("Enter num " + (i + 1) + ":");

                while(!sc.hasNextFloat())
                    {
                        System.out.println("Not valid integer!\n");
                        sc.next();//Important! If omitted, will go into infinite loop on invalid input!
                        System.out.print("Please try again. Enter num " + (i + 1) + ": ");
                    }
                numsArray[i] = sc.nextFloat(); //captures validated user input 
                sum = sum + numsArray[i]; //process data entry 
            }           
        avarage = sum / arraySize;

        //print numbers entered 
        System.out.print("\nNumbers entered: ");
        for (int i = 0; i < numsArray.length; i++)
            System.out.print(numsArray[i]+" ");

        //call method to print and format numbers
        printNumbers(sum, avarage);
    }
    
    //nonvalue-returning method (static requires no object)
    public static void printNumbers(float sum, float avarage)
    {
        //System.out.println(); //print blank line or..
        System.out.println("\nSum: " + String.format("%.2f", sum));
        System.out.println("Average: " + String.format("%.2f", avarage));
    }
}