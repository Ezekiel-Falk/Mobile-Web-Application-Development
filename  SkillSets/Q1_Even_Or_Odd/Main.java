/* 
Note: No need to import files (or package) whne files resides in same directory!
Package (e.g., folder in file directory):
used to group related classes and interfaces, and avoid name conflicts 
*/

public class Main
{
    public static void main(String[] args)
    {
        //call static methods (i.e, no objects)
        Methods.getRequirements();
        Methods.evaluateNumber();
    }
}