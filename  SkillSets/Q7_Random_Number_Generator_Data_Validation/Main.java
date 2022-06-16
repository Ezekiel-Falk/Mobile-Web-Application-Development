// Javadoc: documentation generator for generating 
// API documentation in HTML format from Java source code 
// 

class Main
{
    public static void main(String args[])
    {
        //call static methods (i.e, no objects, non-value returning)
        Methods.getRequirements();

        int[] userArray = Methods.createArray(); //Java style array

        //call generatePseudoRandomNumber() method, passing returned array above
        //prints pseudo-randomly generated numbers, determined by number user inputs
        Methods.generatePseudoRandomNumber(userArray);//pass array 
    }
}