/* 
1.	於下面的程式碼中，請設計一子類別Cbbb，繼承自Caaa類別，並加入set_num() 與show() method，
可用來設定從父類別繼承而來的成員x與y，及顯示x和y的值，並測試您的程式：

01   //hw10_1, 繼承的練習
02   class Caaa
03   {
04      public int x;
05      public int y;   
06      
07      public void sub()
08      {
09          System.out.println(x+"*"+y+"="+x*y);
10      }
11   }
12   //請於此處設計子類別Cbbb
13   public class hw10_1
14   {
15      public static void main(String args[])
16      {
17         Cbbb bb=new Cbbb();
18         bb.set_num(5,10);
19         bb.show();
20         bb.sub();
21      }
22   }

 */

/* 
 * 2.	接續習題1，並逐步完成下面的程式設計：
(a)	試在Caaa類別裡加入一個沒有引數的建構元Caaa()，它可用來把x和y設定初值為5。
(b)	試在Caaa類別裡加入另一個有引數的建構元Caaa(int a, int b)，它可用來把x設值為a，把y設值為b。
(c)	試在Cbbb類別內裡加入建構元Cbbb(int a, int b)，可用來呼叫父類別的建構元Caaa(int a, int b)。
在main() method裡撰寫程式碼，並測試 (a)~(c) 的結果。

 */

package org.example;

class Caaa10_1 {
    public Caaa10_1() {
        x = 5;
        y = 5;
    }

    public Caaa10_1(int a, int b) {
        x = a;
        y = b;
    }

    public int x;
    public int y;

    public void sub() {
        System.out.println(x + "*" + y + "=" + x * y);
    }
}

class Cbbb10_1 extends Caaa10_1 {
    void set_num(int a, int b) {
        x = a;
        y = b;
    }

    void show() {
        System.out.printf("X=%d,Y=%d", x, y);
    }

    public Cbbb10_1() {
    }

    // 呼叫父類別建構元
    public Cbbb10_1(int a, int b) {
        super(a, b);

    }
}

public class App10_1 {
    public static void main(String[] args) {
        Cbbb10_1 bb = new Cbbb10_1();
        bb.set_num(5, 10);
        bb.show();
        bb.sub();
        System.err.println("----------以下為呼叫父建構元-------------");
        Cbbb10_1 bb2 = new Cbbb10_1(12, 13);

        bb2.show();
        bb2.sub();

    }
}
