package com.company.oops.class3Inheritance;

public class cube extends rectangle{
    int h;

    public cube() {
        super();
        this.h = h;
    }
    public cube(int h) {
        this.h = h;
    }

    public cube(int l, int b, int h) {
        super(l, b);
        this.h = h;
    }
    public cube(cube other) {
        super(other);
        this.h = other.h;
    }

}
