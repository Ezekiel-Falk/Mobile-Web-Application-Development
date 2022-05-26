import java.util.Scanner; 

public class Methods
{

    //Create Methods without returning any value (without)
    public static void getRequirements()
    {
        //display operational messages
        System.out.println("Developer: Ezekiel O. Faulknor");
        System.out.println("Program evaluates integers as even or odd.");
        System.out.println("Note: Program does *not* check for non-numeric characters.");

        System.out.println(); //print blank line 
    }

    public static void evaluateNumber()
    {
        //initilize variables, create Scanner object, capture user input
        int zeek = 0;
        System.out.print("Enter integer: ");
        Scanner sc = new Scanner(System.in);
        zeek = sc.nextInt();

        if ( zeek % 2 == 0 )
            {
                System.out.println(zeek + " is an even number.");
            }
        else
            {
                System.out.println(zeek + " is an odd number.");
            }

                 
        sc.close();

    }
}