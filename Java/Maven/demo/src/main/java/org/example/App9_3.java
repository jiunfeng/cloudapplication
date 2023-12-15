/* 
 * 3. app9_11的compare() method是撰寫在CCircle類別內。試修改compare() method，使得它是類別 
 * app9_11裡的函數成員，而不是CCircle類別的函數成員。
 */

package org.example;

public class App9_3 {
    public static void main(String[] args) {
        CCircle cir1 = new CCircle(4.0);
        CCircle cir2 = new CCircle(5.0);
        CCircle obj;

        obj = compare(cir1, cir2);
        if (cir1 == obj)
            System.out.println("raduis of cir1 is larger");
        else
            System.out.println("raduis of cir2 is larger");
    }

    static CCircle compare(CCircle diff1, CCircle diff2) {
        if (diff1.radius > diff2.radius)
            return diff1;
        else
            return diff2;
    }
}

class CCircle {
    static double pi = 3.14;
    double radius;

    public CCircle(double r) {
        radius = r;
    }

    // public CCircle compare(CCircle cir) {
    // if (this.radius > cir.radius)
    // return this;
    // else
    // return cir;
    // }

}