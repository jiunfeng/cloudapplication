/* 1.
ch9_1假設CBox類別的定義如下：
class CBox
{
   int length; 
   int width; 
int height; 
}
(a)	試設計一個建構元CBox(int l,int w, int h)，當此建構元呼叫時，便會自動設定length=l，width=w，height=h。
(b)	請接續 (a) 的部份，請再設計一個沒有引數的建構元CBox()，使得當此建構元呼叫時，便會自動設定length=6，width=10，height=8 （請勿使用this() 來設定）。
(c)	同 (b) 小題，但length、width與height的值請用this() 來設定。
 */

package org.example;

public class App9_1 {
    public static void main(String[] args) {
        CBox cbox1 = new CBox(5, 6, 7);
        CBox cbox2 = new CBox();
        System.out.println(cbox1.length + "" + cbox1.width + "" + cbox1.height);
        System.out.println(cbox2.length + "" + cbox2.width + "" + cbox2.height);
    }
}

class CBox {
    int length;
    int width;
    int height;

    CBox(int l, int w, int h) {
        length = l;
        width = w;
        height = h;
    }

    CBox() {
        this.length = 6;
        this.width = 10;
        this.height = 8;
    }
}