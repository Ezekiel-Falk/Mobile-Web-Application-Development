import java.util.Scanner; 

public class Methods
{

    //nonvalue-returning method (static requires no object)
    public static void getRequirements()
    {
        //display operational messages
        System.out.println("Developer: Ezekiel O. Faulknor");
        System.out.println("Program determines whether user-entered value is alpha, numeric, or special character.");
        System.out.println("\nReferences:\n"
                        + "ASCII Background: https://en.wikipedia.org/wiki/ASCII\n"
                        + "ASCII character Table: https://www.ascii-code.com/\n"
                        + "Lookup Table: https://www.lookuptables.com/");

        System.out.println(); //print blank line 
    }

    //nonvalue-returning method (static requires no object)
    public static void determineChar()
    {
        Scanner sc = new Scanner(System.in);

        System.out.print("Enter character: ");
        //next() function returns next token
        //Token: smallest element of a program meaningful to compiler/interpreter
        //Generally, identifiers, keywords, literals, operators, and puntuations 
        //Note: White space and comments not tokens--through, separate tokens
        //Examples: "I like this" ("I" is 1st token, "like" is second token, and "this" is third token)
        char ch = sc.next().charAt(0);//capture first character from first token

        //Note: Can be resolved in different ways 
        //Here: Works with legacy Java, no need for special functions..
        //test for alpha characters
        if((ch >= 'a' && ch <= 'z') || (ch >= 'A' && ch <= 'Z'))
            {
                System.out.println(ch + " is alpha. ASCII value: " + (int) ch);//cast char to int
            }
        //test for numeric characters
        else if(ch >= '0' && ch <= '9')
            {
                System.out.println(ch + " is numeric ASCII value: " + (int) ch);
            }
        //otherwise, must be a special character
        else
            {
                System.out.println(ch + " is special character ASCII value: " + (int) ch);
            }
    }
}