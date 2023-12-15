package org.example;

/* 3.	(改寫練習)假設有一Car類別，用來表示車子的顏色，其資料成員及成員函數如下：
class Car
{
    public String color;
    
    public Car(String str)
    {
        color=str;
    }
    public void show()
    {     
        System.out.println("車身顏色:"+color);
    }
}
(a)	試定義一個類別Truck，它繼承自Car類別，並改寫父類別的show() method，使得show() method可以印出Truck類別裡的資料成員id、owner及父類別裡的color成員。id、owner資料成員的型態皆為String。
(b)	試在Turck類別裡加入一個有引數的建構元Truck(String s1, String s2, String s3)，它可用來把color設值為s1，把id設值為s2，把owner設值為s3。
(c)	請於main() method裡加入下列敘述：
Car t1=new Truck("Blue","C2-5678","Ariel");       
t1.show();
使得執行結果如下：
車主姓名    車牌號碼   車身顏色
Ariel      C2-5678     Blue */

class Car {
    public String color;

    public Car(String str) {
        color = str;
    }

    public Car() {
    }

    public void show() {
        System.out.println("車身顏色:" + color);
    }
}

class Truck extends Car {
    /*
     * (a) 試定義一個類別Truck，它繼承自Car類別，並改寫父類別的show() method，
     * 使得show() method可以印出Truck類別裡的資料成員id、owner及父類別裡的color成員。
     * id、owner資料成員的型態皆為String。
     */
    private String id;
    private String owner;
    private String color;

    public Truck(String s1, String s2, String s3) {

        super.color = s1;
        this.id = s2;
        this.owner = s3;

    }

    public Truck() {
        super.color = "";
        this.id = "";
        this.owner = "";
    }

    public void set_data(String color) {
        this.color = color;
    }

    public void show() {
        System.out.printf("車身顏色:%s  ID:%s  擁有者:%s%n", super.color, this.id, this.owner);
    }

}

public class App10_3 {
    public static void main(String[] args) {
        Car t1 = new Truck("Blue", "C2-5678", "Ariel");
        t1.show();
        Car t2 = new Truck();
        t2.show();
        Class test = t1.getClass();
        System.out.println(t2.toString());
    }
}