package org.example;

/*
1.	請依下面的題意依序完成下列程式的需求。
(a)	請建立一個寬為300，高為120，底色為粉紅色的視窗物件，視窗的標題設為 "My Frame"。
(b)	於視窗中加入一個Label標籤，標籤的長度為200，寬度為20；標籤的座標為(50,60)。請利用setSize() 與setLocation() 來設定Label物件的大小及位置。
(c)	標籤的文字為 "Still water runs deep."，底色為黃色，文字靠右對齊，文字的顏色為綠色，字型為Arial，斜體，字型大小為16。

 */
import java.awt.*;
import java.awt.event.*;

public class App17_1 {
    static Frame frm = new Frame("My Frame");
    static Label lab = new Label("Still water runs deep.");

    public static void main(String[] args) throws InterruptedException {
        lab.setSize(20, 200);
        lab.setLocation(0, 0);
        lab.setForeground(Color.green);
        lab.setBackground(Color.yellow);
        lab.setAlignment(Label.RIGHT);// 取得螢幕的大小並且設定中心
        Dimension screenSize = Toolkit.getDefaultToolkit().getScreenSize();
        int frmSizeWidth = 500;
        int frmSizeHeight = 500;
        int screenWidth = (int) (screenSize.getWidth() - frmSizeWidth) / 2;
        int screenHeight = (int) (screenSize.getHeight() - frmSizeHeight) / 2;

        // 字型狀態設置
        Font fnt = new Font("Arial", Font.ITALIC, 16);
        lab.setFont(fnt);
        frm.setLayout(null);
        frm.setVisible(true);
        frm.setSize(500, 500);
        frm.setLocation(screenWidth, screenHeight);
        frm.setBackground(Color.pink);
        frm.add(lab);
        frm.addWindowListener(new WindowAdapter() {
            public void windowClosing(WindowEvent e) {
                System.exit(0);
            }
        });

    }
}
