package org.example;

import java.awt.*;
import java.awt.event.*;

/*
請依下面的題意依序完成下列程式的需求。
(a)	試設計一視窗，其標題為 "TextField class"，顏色為黃色。視窗的大小與位置請自行設定。
(b)	在視窗中建立txf1與txf2兩個文字方塊，其預設的文字分別為 "Speech is si1ver" 與 "silence is gold"。文字方塊的大小與位置請自行設定。
(c)	使得txf1、txf2文字方塊內的文字分別為藍色與紅色。
(d)	請用println() 印出txf1、txf2文字方塊內的內容。

 */
public class App17_4 {
    static Frame frm = new Frame("TextField");

    public static void main(String[] args) {
        Dimension screenSize = Toolkit.getDefaultToolkit().getScreenSize();
        int frmSizeHeight = 500;
        int frmSizeWidth = 500;
        int frmLocatintX = ((int) screenSize.getWidth() - frmSizeWidth) / 2;
        int frmLocatintY = ((int) screenSize.getHeight() - frmSizeHeight) / 2;
        frm.setSize(frmSizeWidth, frmSizeHeight);
        frm.setLocation(frmLocatintX, frmLocatintY);
        frm.setLayout(new GridLayout(5, 1, 50, 50));
        Image iconImage = Toolkit.getDefaultToolkit().getImage(
                "C:\\Users\\marucs\\Documents\\cloudapplication\\Java\\Maven\\demo\\src\\main\\java\\org\\example\\gem_green.png");
        if (iconImage == null) {
            System.out.println("Error: Failed to load image.");
        }
        System.out.println(iconImage);
        frm.setIconImage(iconImage);
        frm.setVisible(true);

        TextField txf1 = new TextField("TextField Demo");
        TextField txf2 = new TextField();
        TextField txf3 = new TextField();
        TextField txf4 = new TextField();
        Button btn = new Button("send");
        frm.add(txf1);
        frm.add(txf2);
        frm.add(txf3);
        frm.add(txf4);
        frm.add(btn);
        txf1.setBackground(Color.gray);

        frm.addWindowListener(new WindowAdapter() {
            public void windowClosing(WindowEvent e) {
                System.exit(0);
            }
        });
        btn.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                System.out.println("txf1" + txf1.getText());
                System.out.println("txf2" + txf2.getText());
                System.out.println("txf2-select" + txf2.getSelectedText());
                System.out.println("txf3" + txf3.getText());
                System.out.println("txf4" + txf4.getText());
                System.out.println("-----------------------------------");
            }
        });
    }
}
