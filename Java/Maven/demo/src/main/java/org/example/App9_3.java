/* 
 * 3. app9_11的compare() method是撰寫在CCircle類別內。試修改compare() method，使得它是類別 app9_11裡的函數成員，而不是CCircle類別的函數成員。
 */

package org.example;

public class App9_3 {
    public static void main(String[] args) {
        CCircle cir1 = new CCircel(1.0);
        CCircle cir2 = new CCircel(1.0);
        CCircle obj;

        obj = cir1.compare(cir2);
        if (cir1 == obj)
            System.out.println("raduis of cir1 is larger");
        else
            System.out.println("raduis of cir2 is larger");
    }
}

class CCircle {
    private static double pi = 3.14;
    private double radius;

    public CCircle(double r) {
        radius = r;
    }

    public CCircle compare(CCircle cir) {
        if (this.radius > cir.radius)
            return this;
        else
            return cir;
    }

}