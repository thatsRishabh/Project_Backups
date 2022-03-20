    class Student{
     String college;
     String branch;
     float height;
     public void printInfo() {
         System.out.println("College name is " + college);
         System.out.println("Branch of student is " + branch);
     }
         public float displayHeight(){
             return height;
         }
     }



public class creatingOwnClass {
        public static void main(String[] args) {
        Student Akshay=new Student();
        Student Sudhir=new Student();
        Student Vivek=new Student();

        Akshay.college="SathyBhama";
        Akshay.branch= "electrical";
        Akshay.height= 5.9f;

        Vivek.college="IITkgp";
        Vivek.branch= "CS";
        Vivek.height= 5.5f;

        Akshay.printInfo();
        Vivek.printInfo();
        float height= Akshay.displayHeight();
            System.out.println(height);



    }
}
