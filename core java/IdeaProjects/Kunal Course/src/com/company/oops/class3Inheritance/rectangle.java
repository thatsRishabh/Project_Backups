package com.company.oops.class3Inheritance;

public class rectangle {
    int l;
    int b;

    public rectangle() {
        this.l = -1;
        this.b = -1;
    }

    public rectangle(int l, int b) {
        this.l = l;
        this.b = b;
    }

    public rectangle(rectangle other) {
        this.l = other.l;
        this.b = other.b;
    }

}
