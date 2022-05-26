class Main
{
    public static void main(String args[])
    {
        Methods.getRequirements();

        System.out.println("***Call static (no object) void (non-value returning) method:***");
        //call static void method (i.e., no object, non-value returning)
        Methods.largestNumber();
    }
}