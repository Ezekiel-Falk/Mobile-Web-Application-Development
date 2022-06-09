import java.util.Scanner; 

public class Methods
{

    //Create Methods without returning any value (without object)
    public static void getRequirements()
    {
        //display operational messages
        System.out.println("Developer: Ezekiel O. Faulknor");
        System.out.println("Program prompts user for first name and age, than prints results.");
        System.out.println("Create four methods from the following requirements:");
        System.out.println("1) getRequirements(): Void method displays program requirements.");
        System.out.println("2) getUserInputs(): Void method prompts for user input, \n\tthan calls two methods: myVoidMethod() and myValueReturningMetho().");
        System.out.println("3) myVoidMethod():\n" +
                           "\ta. Accepts two arguments: String and int. \n" +
                           "\tb. Print user's first name and age.");
        System.out.println("4) myValueReturningMethod(): String and int. \n" +
                           "\ta. Accepts two arguments: String and int. \n" +
                           "\tb. Returns String containing first name and age.");

        System.out.println(); //print blank line 
    }

    public static void getUserInput()
    {
        // initalize variables, create Scanner object, capture user input
        String firstName="";
        int userAge = 0;
        String myStr="";
        Scanner sc = new Scanner(System.in);

        //input
        System.out.print("Enter first name: ");
        firstName = sc.next();

        System.out.print("Enter age: ");
        userAge = sc.nextInt();

        System.out.println();// print blank line
        
        //Note: done for symplicity--method/function calls *should* go back ro their calling environment 
        //call void method
        System.out.print("void method call: ");
        myVoidMethod(firstName, userAge);

        //call value-returning method
        System.out.print("value-returning method call: ");
        myStr = myValueReturningMethod(firstName, userAge);
        //myValueReturningMethod(firstNamem userAge); //Work, but discarded! 
        System.out.println(myStr); 
    }

    //Note: both methods use *same* named parameters--which are *local* variables!
    //Also, both methods are static--that is, can be used w/o instantiating objects 
    public static void myVoidMethod(String first, int age)
    {
        System.out.println(first + " is " + age);
        return;// Ok, with or without return statement 
    }

    public static String myValueReturningMethod(String first, int age)
    {
        //note: implicit string conversion of age (int)
        return first + " is " + age;
            //return age; //Error! Attrmpts to return different data type (int) than defined (String)!
    }
}