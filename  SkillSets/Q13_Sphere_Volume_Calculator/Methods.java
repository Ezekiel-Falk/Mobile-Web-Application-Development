import java.util.Scanner; 

public class Methods
{
    //nonvalue-returning method (static requires no object)
    public static void getRequirements()
    {
        System.out.println("Temperature Conversion Program\n");
        //display operational messages
        System.out.println("Developer: Ezekiel O. Faulknor");
        System.out.println("Program calulates sphere volume in liquid U.S. gallons from user-entered diameter value in inches, and rounds to two decimal places.\n");
        System.out.println("Must use Java's *built-in* PI and pow() capabilities.");
        System.out.println("Program checks for non-integrs and non-numeric values.");
        System.out.println("Program continues to prompt for user entry until no longer requested. Prompt accepts upper or lower case letters.");

        System.out.println(); //print blank line 
    }

    //value-returning method (static requires no object)
    public static void getSphereVolume()
    {
        //initialize variables and create Scanner object
        int diameter = 0;
        double volume = 0.0;
        double gallons = 0.0;
        char choice = ' ';//initialize to space character
        Scanner sc = new Scanner(System.in);

        //Note: do...while will *always* execute at least *once*!
        do 
            {
                System.out.print("Please enter diameter in inches: ");
                while (!sc.hasNextInt())
                    {
                        System.out.print("Not a valid integer!\n");
                        sc.next();//Important! If omitted, will go into infinite loop on invalid input!
                        System.out.print("Plase try again. Enter diameter in inches: ");
                    }
                diameter = sc.nextInt();

                System.out.println(); // print blank line

                //Note: *must* use floating point values, otherwise, integer division (i.e., incorrect result)!
                volume = ((4.0/3.0) * Math.PI * Math.pow(diameter/2.0, 3)); //returns cubic inches
                gallons = volume/231; //convert cubic inches into gallons
                System.out.println("Sphere volume: " + String.format("%,.2f", gallons) + " liquid U.S. gallons");

                System.out.print("\nDo you want to calculate another sphere volume (y or n)? ");
                choice = sc.next().charAt(0);
                choice = Character.toLowerCase(choice);
            }
        while (choice == 'y');

        System.out.println("\nThank you for using our Sphere Volume Calculator!");
    }
}