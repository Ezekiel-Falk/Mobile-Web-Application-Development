//Note: Program does *NOT* data validation! BAD! :(

import java.util.Scanner;

public class Methods
{

    //nonvalue-returning method (without object - static)
    public static void getRequirements()
    {
        //display operational messages
        System.out.println("Developer: Ezekiel O. Faulknor");
        System.out.println("Program evaluates largest of two integers.");
        System.out.println("Note: Program does *not* check for non-numeric characters or non-integer values.");

        System.out.println(); // print blank line
    }

    //nonvalue-returning method (without object - static)
    public static void largestNumber()
    {
        //declare variables and create Scanner object 
        int num1, num2;
        Scanner sc = new Scanner(System.in);

        System.out.print("Enter first integer: ");
        num1 = sc.nextInt();

            System.out.print("Enter second integer: ");
            num2 = sc.nextInt();

            System.out.println(); // print blank line 
            if (num1 > num2)
            System.out.println(num1 + " is larger than " + num2);
            else if (num2 > num1)
            System.out.println(num2 + " is larger than " + num1);
            else
            System.out.println("Integers are equal.");

        sc.close();
    }

    
}
