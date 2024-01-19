package org.example;

import java.awt.*;
import java.awt.event.*;

/*
1.試設計一視窗，內含一個按鈕。開始執行時，按鈕顯示 "Original" 字樣，按鈕顏色為黃色，當按鈕按下時，按鈕上的文字變成 "Green"，
按鈕顏色為綠色，再按一次，則變回原來的 " Original" 字樣，按鈕顏色亦為黃色，依此規則循環，如下圖所示：
 */
public class App18_1 {
    static Frame frm = new Frame("Listn");
    static Button btn = new Button("Original");

    public static void main(String[] args) throws InterruptedException {

        Dimension screenSixe = Toolkit.getDefaultToolkit().getScreenSize();
        int frmSizeHeight = 500;
        int frmSizeWidth = 500;
        int frmLocatintY = ((int) screenSixe.getHeight() - frmSizeHeight) / 2;
        int frmLocatintX = ((int) screenSixe.getWidth() - frmSizeWidth) / 2;
        frm.setLayout(null);
        frm.setSize(frmSizeWidth, frmSizeHeight);
        frm.setLocation(frmLocatintX, frmLocatintY);
        frm.setVisible(true);

        btn.setBounds(100, 30, 300, 50);

        frm.add(btn);

        btn.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                Color newColor = new Color(
                        (int) (Math.random() * 256),
                        (int) (Math.random() * 256),
                        (int) (Math.random() * 256));
                btn.setLabel("R:" + newColor.getRed() + "G:" + newColor.getGreen() + "B:" + newColor.getBlue());
                System.out.println("Other Event Parameters: " + e.paramString());
                frm.setBackground(newColor);
            }
        });
        frm.addWindowListener(new WindowAdapter() {
            public void windowClosing(WindowEvent e) {
                System.exit(0);
            }

            // 監聽視窗大小

        });

    }

}
