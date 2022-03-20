package com.company.oops.class3Inheritance;

public class price extends cube{
     int cost;

    public price() {
        super();
        this.cost=-1;
    }

    public price(int l, int b, int h, int cost) {
        super(l, b, h);
        this.cost = cost;
    }
}

