package org.example;

import java.awt.*;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;

/*
1.	試在200*150的視窗裡建立一個按鈕，寬為80，高為40，標題為"Click It"，按鈕距視窗左上角的x方向距離為40，y方向為50。
 */
public class App17_2 {
    static Frame frm = new Frame("Button Frame");
    static Button btn = new Button("Click It");

    public static void main(String[] args) {
        // 打XX
        frm.addWindowListener(new WindowAdapter() {
            public void windowClosing(WindowEvent e) {
                System.exit(0);
            }
        });
        // 取得螢幕大小
        Dimension screenSize = Toolkit.getDefaultToolkit().getScreenSize();
        int screenHeight = (int) screenSize.getHeight();
        int screenWidth = (int) screenSize.getWidth();
        int frmHeight = 200;
        int frmWidth = 150;
        // 視窗放在螢幕中心
        int frmLocatintX = (screenWidth - frmWidth) / 2;
        int frmLocatintY = (screenHeight - frmHeight) / 2;
        // 設定視窗屬性
        frm.setLayout(null);
        frm.setBackground(Color.gray);
        frm.setSize(frmWidth, frmHeight);
        frm.setLocation(frmLocatintX, frmLocatintY);
        frm.setVisible(true);
        // 設定按鈕屬性
        btn.setSize(80, 40);
        btn.setLocation(40, 50);
        frm.add(btn);

    }
}
