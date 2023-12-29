// 4.	(介面的延伸)下面的程式中，我們先宣告一個介面 Data，再宣告另一個介面Test繼承它。
// 01   // hw11_12,
// 02   interface Data
// 03   {   
// 04      public void best();			// 判斷那一科成績較高
// 05      public void failed();  		// 判斷那一科成績低於60分
// 06   }
// 07   interface Test extends Data
// 08   {
// 09      public void showData();		// 顯示學生的資料及平均成績
// 10      public double average();		// 計算數學和英文的平均成績
// 11   }
// 12   class CStu implements Test
// 13   {
// 14      protected String name;  		// 姓名 
// 15      protected int math;     		// 數學成績
// 16      protected int english;  		// 英文成績
// 17          
// 18      // 請完成這個部分的程式
// 19   }
// 20   
// 21   public class hw11_12
// 22   {
// 23      public static void main(String args[])
// 24      {
// 25         CStu stu=new CStu("Judy",58,91);          
// 26         stu.show();
// 27      }
// 28   }
// 請在CStu類別裡撰寫所有method的定義，再於CStu類別中加入一個show() method，用來呼叫best()、failed()、showData()與average()等method。使得程式執行後的結果如下：
// /* output---------
// 姓名:Judy
// 數學成績:58
// 英文成績:91
// 平均成績:74.5
// Judy的英文比數學好
// Judy的數學當掉了
// -----------------*/

package org.example;

interface Data {
    public void best(); // 判斷那一科成績較高

    public void failed(); // 判斷那一科成績低於60分
}

interface Test extends Data {
    public void showData(); // 顯示學生的資料及平均成績

    public double average(); // 計算數學和英文的平均成績
}

class CStu implements Test {
    protected String name; // 姓名
    protected int math; // 數學成績
    protected int english; // 英文成績

    // 請完成這個部分的程式
    public CStu(String n, int m, int e) {
        name = n;
        math = m;
        english = e;
    }

    public void best() {
        if (math > english) {
            System.out.println("數學比英文好");
        } else {
            System.out.println("英文比數學好");
        }
    }

    public void failed() {
        if (math < 60) {
            System.out.println("數學GG");
        }
        if (english < 60) {
            System.out.println("英文GG");
        }
    }

    public void showData() {

        System.out.println("姓名:" + name);
        System.out.println("數學成績:" + math);
        System.out.println("英文成績:" + english);
    }

    public double average() {
        return (math + english) / 2;
    }

    public void show() {
        this.showData();
        System.out.println("平均成績:" + this.average());
        this.best();
        this.failed();
    }
}

public class App11_4 {
    public static void main(String args[]) {
        CStu stu = new CStu("Judy", 60, 11);
        stu.show();

    }
}