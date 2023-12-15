/* 5. 假設CData類別的定義如下：
class CData
{
   int a; 
   int b; 
}
(a)	試將CData類別撰寫在hw9_16類別裡，成為內部類別。
(b)	請接續 (a) 的部份，請再設計一個匿名內部類別CData，在匿名內部類別中加入設定資料成員a與b，同時可以計算a乘以b的sub() method，其內容為：
void sub(int x,int y)
{
a=x;
    b=y;
System.out.println(a+"*"+b+"="+(a*b));
}
(c)請計算6乘以8的結果。
 */

package org.example;

public class App9_5 {
    public App9_5() {
        Caaa aa = new Caaa();

    }

    public static void main(String[] args) {
        (new CData() {
            void sub(int x, int y) {
                a = x;
                b = y;
                System.out.println(a + "*" + b + "=" + (a * b));
            }
        }).sub(5, 6);
        App9_5 obj = new App9_5();

    }

    class Caaa {
        int num;

        void set_num(int n) {
            num = n;
            System.out.println("num = " + num);
        }
    }

    static class CData {
        int a;
        int b;
    }
}
