package org.example;
/* output----------------
13.3 拋出例外 
3.試修改習題1，將6~13行的程式碼寫在一個可拋出ArithemeticException的 test() method內，並在main() method內撰寫程式碼來捕捉由test() 所拋出的例外（請參考app13_6的寫法）。
除數為 0
12/1=12
12/2=6
12/3=4
12/4=3
12/5=2
end of main() method !!
-----------------------*/

public class App13_3 {
    static void test() throws ArithmeticException {
        double ans;
        int num = 12;

        for (int i = 0; i <= 5; i++) {
            // try {
            ans = num / i;
            System.out.println(num + "/" + i + "=" + num / i);
            // } catch (ArithmeticException e) {
            // System.out.println("出事了!");
            // System.out.println(e);
            // }
        }
    }

    public static void main(String[] args) {
        try {
            test();

        } catch (ArithmeticException e) {
            System.err.println(e + " throws");
        }
    }
}
