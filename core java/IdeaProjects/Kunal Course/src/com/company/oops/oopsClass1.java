package com.company.oops;

class students{
    int rollno;
    String name;
    float marks;
    int year=2022;

    public students(int rollno, String name, float marks, int year) {
        this.rollno = rollno;
        this.name = name;
        this.marks = marks;
        this.year = year;
    }
    //if object left empty this will be executed
    public students() {
        this.rollno=1;
        this.name=null;
        this.marks=1f;
        this.year=2022;

    }
    // the 'other' will be replaced by the name we put in the object
    public students(students other) {
        this.rollno = other.rollno;
        this.name = other.name;
        this.year = other.year;
    }
    void greeting(){
        System.out.println("Hello, this is " +name);
    }
    void changeName(String newName){
                name=newName;
    }
}
public class oopsClass1 {
    public static void main(String[] args) {
        students rishabh=new students(31, "Rishabh Chaturvedi" ,87.6f, 2023);
        students akshay= new students();
        students xyz= new students(rishabh);

        System.out.println(rishabh.name);
        System.out.println(rishabh.year);
        System.out.println(rishabh.rollno + " " + rishabh.marks +" " +akshay.name);
        rishabh.greeting();
        rishabh.changeName("Vicky");
        rishabh.greeting();


        System.out.println(akshay.rollno);
        System.out.println(akshay.name);
        akshay.changeName("Chaubey");
        akshay.greeting();

        System.out.println(xyz.name);
        System.out.println(xyz.year);

        students abc= rishabh;
        System.out.println(abc.name);
        System.out.println(abc.rollno);
    }

}
