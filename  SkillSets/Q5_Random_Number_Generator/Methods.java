import java.util.Scanner; 
import java.util.Random; //import class to produce pseudo-random numbers 


public class Methods
{

    //nonvalue-returning method (static requires no object)
    public static void getRequirements()
    {
        //display operational messages
        System.out.println("Developer: Ezekiel O. Faulknor");
        System.out.println("Print minimum and maximum integer values.");
        System.out.println("Program prompts user to enter desired number of pseudorandom-generated integers (min 1).");
        System.out.println("Use folloing loop structure: for, enhanced for, while, do...while\n");

        //print min/max integer values
        System.out.println("Integer.MIN_VALUE = " + Integer.MIN_VALUE);
        System.out.println("Integer.MAX_VALUE = " + Integer.MAX_VALUE);

        System.out.println(); //print blank line 
        return;//OK. However, no need to include return statement in void method. 
    }

    //value-returning method (static requires no object)
    public static int[] createArrays()
    {
        Scanner sc = new Scanner(System.in);
        int arraySize = 0;

        //prompt user for number of randomly generated numbers
        System.out.print("Enter desired number of pseudorandom integers (min 1): ");
        arraySize = sc.nextInt();

        //Java style String[] myArray
        //C++ style String myArray[]
        int yourArray[] = new int[arraySize];
        return yourArray;
    }

    //nonvalue-returning method accepts int array arg (static requires no object)
    public static void generatePseudoRandomNumber(int[] myArray)
    {





        Random r = new Random(); //instantiate random object variable 

        //create loops to randomize integer values 
        int i = 0;//initalize counter variable
        System.out.println("for loop:");
        for(i=0; i < myArray.length; i++)
          {
              //generate random integer within Integer.MIN_VALUE and Integer.MAX_VALUE 
              System.out.println(r.nextInt());
              //System.out.printin (r.nextInt(10)) + 1); //print pseudorandom number between 1 and 10, inclusive
          }
          
        System.out.println("\nEnhanced for loop:");
        for(int n: myArray)
            {
                System.out.println(r.nextInt());
            }

        System.out.println("\nwhile loop:");
        i=0; //reassign to 0
        while(i < myArray.length)
            {
                System.out.println(r.nextInt());
                i++;
            }

        i=0;//reassign to 0
        System.out.println("\ndo...while loop:");
        do
            {
                System.out.println(r.nextInt());
                i++;
            }
        while (i < myArray.length);
    }
    
}