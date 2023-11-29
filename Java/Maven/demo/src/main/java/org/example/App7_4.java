// 1.	試撰寫min() method的多載，其中min引數的型態為int，
//且可以有兩個或三個引數，method的傳回值為這些引數的最小值，傳回值的型態也是int。
// /* output-----
// min(8,2)=2
// min(1,5,9)=1
// -------------*/

package org.example;

public class App7_4 {
    public static void main(String[] args) {
        System.out.printf("兩個數最大值為%d%n", min(3, 5));
        System.out.printf("三個數最大值為%d%n", min(10, 5, 100));
    }

    public static int min(int a, int b) {
        if (a > b) {
            return a;
        } else
            return b;
    }

    public static int min(int a, int b, int c) {
        if (a > b) {
            if (a > c) {
                return a;
            }
        } else if (b > c) {
            return b;
        }
        return c;
    }
}
