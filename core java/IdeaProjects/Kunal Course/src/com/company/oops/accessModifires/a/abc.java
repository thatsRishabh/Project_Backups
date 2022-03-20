package com.company.oops.accessModifires.a;

import com.company.oops.accessModifires.b.xyz;

public class abc {
  protected int b1;
  private   int b2;
            int b3;

    public int getB2() {
        return b2;
    }

    public abc(int b1, int b2, int b3) {
        this.b1 = b1;
        this.b2 = b2;
        this.b3 = b3;
    }

    public static void main(String[] args) {
        abc obj1 =new abc(11,22,33);
        System.out.println(obj1.b2);//accessible in same class
    }
}
class abc2 extends abc {
    public abc2(int b1, int b2, int b3) {
        super(b1, b2, b3);
    }

    public static void main(String[] args) {
        abc obj2 = new abc(44, 55, 66);
//       System.out.println(obj2.b2);// not accessible in other class
        System.out.println(obj2.getB2()); //we are able to access via using get method
    }
}
