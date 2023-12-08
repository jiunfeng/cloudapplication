/* 
ch8_1.設類別Caaa的定義為：
class Caaa
{
   int a;
   int b;
   int sum;
}
試在程式碼裡完成下列各敘述：
(a)	試在main() method裡建立一個Caaa類別型態的變數obj。
(b)	將obj資料成員a的值設為5，b的值設為8。
(c)	計算a+b之後設給成員sum。
(d)印出a、b與sum的值。
 */

package org.example;

public class App8_1 {
    public static void main(String[] args) {
        Caaa obj = new Caaa();
        obj.a = 5;
        obj.b = 8;
        int sum = obj.a + obj.b;
        System.out.printf("a=%d,b=%d,sum=%d%n", obj.a, obj.b, sum);
    }
}

class Caaa {
    int a;
    int b;
    int sum;
}