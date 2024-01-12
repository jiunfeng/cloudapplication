package org.example;

/**
 * 1. 試依下面的步驟逐步完成程式的需求：
 * (a) 試撰寫一個CTest類別，繼承自Thread類別。請在CTest類別裡建立CTest(String str)
 * 建構元，用來設定CTest類別的資料成員id之值為str。
 * (b) 請在CTest類別內設計run() method，其內容如下：
 * public void run()
 * {
 * for(int i=1;i<=5;i++)
 * {
 * for(int j=0;j<100000000;j++);
 * System.out.println(id+" "+i);
 * }
 * }
 * 
 * (c) 請在main() method中，宣告2個CTest類別的物件hi，id為 "Hello"；另一個物件bye，id為 "Good
 * bye"。並分別利用這2個物件呼叫run() method。
 * (d) 試修改上面程式碼，使得它可以同時啟動多個執行緒。
 * 
 */
class CTest01 extends Thread {
    protected String id;

    CTest01(String str) {
        id = str;
    }

    public void run() {
        for (int i = 1; i <= 5; i++) {
            for (int j = 0; j < 100000000; j++)
                ;
            System.out.println(id + " " + i);
        }
    }

}

public class App15_1 {
    public static void main(String[] args) {
        CTest01 hi = new CTest01("hello");
        CTest01 bye = new CTest01("Good");
        hi.start();
        bye.start();
    }
}
