/* 2.	ch9_2試依題意回答下列各題：
(a)	試設計類別CWin，內含cnt變數（初值設為0）與count() method，只要每建立一個物件，cnt的值便加1。也就是說，cnt可用來追蹤CWin物件建立的個數。
(b)	試設計一個建構元Cwin(String str,int w, int h)，當此建構元呼叫時，便會自動設定color=str，width=w，height=h。
(c)	請接續 (a) 的部份，請再設計一個沒有引數的建構元CWin()，使得當此建構元呼叫時，便會自動設定color="Red"，width=2，height=2。
(d)	試設計setZero() method，當此method呼叫時，cnt的值會被歸零。
(e)	試設計setValue(int n) method，當此method呼叫時，cnt的值會被設為n。
 */
package org.example;

public class App9_2 {
    public static void main(String[] args) {
        CWin win1 = new CWin("green", 5, 10);
        System.out.println(win1.cnt);
        CWin win2 = new CWin();
        System.out.println(win1.cnt);

        System.out.println(win2.cnt);
    }
}

/**
 * CWin
 */
class CWin {
    static int cnt = 0;
    String color;
    int width;
    int height;

    CWin(String str, int w, int h) {
        color = str;
        width = w;
        height = h;
        cnt++;
    }

    CWin() {
        color = "Red";
        width = 2;
        height = 2;
        cnt++;
    }

    int count() {
        return cnt;
    }

    void setZero() {
        cnt = 0;
    }

    void setValue(int n) {
        this.cnt = n;
    }
}
