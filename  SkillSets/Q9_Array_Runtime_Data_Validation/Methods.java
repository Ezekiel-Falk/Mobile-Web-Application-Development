//import java.util.Scanner; 

public class Methods
{

    //Create Methods without returning any value (without)
    public static void getRequirements()
    {
        //display operational messages
        System.out.println("Developer: Ezekiel O. Faulknor");
        System.out.println("Program loops through array of strings.");
        System.out.println("Use following values: dog, cat, bird, fish, insect.");
        System.out.println("Use following loop stuctures: for, enhanced for, while, do...while.");
        System.out.println("\nNote: Pretest loops: for, enhanced for, while. Posttest loop: do...while.");
        System.out.println(); //print blank line 
    }

    public static void arrayLoops()
    {
       /*
            Java example:
            //declare String array, with initial size of 5
            String[] animals = new String[5];

            //populate array (zero-based)
            animals[0] = "dog";
            animals[1] = "cat";
            animals[2] = "bird";
            animals[3] = "fish";
            animals[4] = "insect";
       */ 

       //Or, populate array upon creation...
       //Java style String[] animals
       //C++ style String animals[]
       String animals[] = {"dog", "cat", "bird", "fish", "insect"};

       System.out.println("for loop:");
       for(int i = 0; i < animals.length; i++)
            {
                System.out.println(animals[i]);
            }

        //Note: enhanced for loop does not require an iterator (e.g., x or i or j)
        //Loop iterates through each element of array/collection.
        System.out.println("\nEnhanced for loop:");
        for(String test: animals)
            {
                System.out.println(test);
            }

        System.out.println("\nwhile loop:");
        int i=0;
        while (i < animals.length)
            {
                System.out.println(animals[i]);
                i++;
            }

        i=0; //reassign 0 to test variable 
        System.out.println("\ndo...while loop:");
        do
            {
                System.out.println(animals[i]);
                i++;
            }
        while (i < animals.length);
    }
}