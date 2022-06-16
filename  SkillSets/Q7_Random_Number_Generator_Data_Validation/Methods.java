import java.util.Scanner;
import java.util.Random; //import class to produce pseudo-random numbers 

public class Methods
{

    //nonvalue-returning method (static requires no object )
    public static void getRequirements()
    {
        //display operational messages
        System.out.println("Developer: Ezekiel O. Faulknor");
        System.out.println("Print minimum and maximum integer values.");
        System.out.println("Program prompts user to enter desired number of pseudorandom-generated integers (min 1).");
        System.out.println("Program vaildates user input for integers greater than 0.");
        System.out.println("User following loop structures: for, enhanced for, while, do...while.\n");

        //print min/max integer values
        System.out.println("Integer.MIN_VALUE = " + Integer.MIN_VALUE);
        System.out.println("Integer.MAX_VALUE = " + Integer.MAX_VALUE);

        System.out.println(); //print blank line 
    }

    //value-returning method (static requires no object)
    public static int[] createArray()
    {
        Scanner sc = new Scanner(System.in);
        int arraySize = 0; 

        //prompt user for number of randomly generated numbers 
        System.out.print("Enter desired number of pseudo-random integer (min 1): ");
        while(!sc.hasNextInt())
            {
                System.out.println("Not valid integer!\n");
                sc.next();//Importent! If omitted, will go into infinite loop on invalid input!
                System.out.print("Please try again. Enter valid integer (min 1): ");
                
            }
           arraySize = sc.nextInt(); //valid int

        while(arraySize < 1)
            {
                //include data validation
                System.out.print("\nNumber must be greater than 0. Please enter integer greater than 0: ");
                while(!sc.hasNextInt())
                    {
                        System.out.print("\nNumber must be integer: ");
                        sc.next();
                        System.out.print("Please try again. Enter integer value greater than 0: ");
                        
                    }
                  arraySize = sc.nextInt(); //valid int greater than 0
                  
            }

        //Java style String[] myArray
        //C++ style String myArray[]
        int yourArray[] = new int[arraySize];
        return yourArray;
    }


    //nonvalue-returning method accepts int array arg (static requires no object)
    public static void generatePseudoRandomNumber(int [] myArray)
    {
        Random r = new Random(); //instantiate random object variable 
        int i = 0;
        System.out.println("for loop:");
        for(i=0; i < myArray.length; i++)
            {
                System.out.println(r.nextInt());
                //System.out.println(r.nextInt(10) + 1); // print pseudorandom number 1 and 10, inclusive
            }

        System.out.println("\nEnhanced for loop:");
        for(int n: myArray)
            {
                System.out.println(r.nextInt());    
            }
        
        System.out.println("\nwhile loop:");
        i=0;//reassign to 0
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