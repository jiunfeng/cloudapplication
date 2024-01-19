package org.example;

import java.awt.*;
import java.awt.event.*;

public class App17_5 extends Frame implements WindowEvent {
    static Frame frm = new Frame("Cal");

    public static void main(String[] args) {
        Dimension screenSize = Toolkit.getDefaultToolkit().getScreenSize();
        int frmSizeHeight = 500;
        int frmSizeWidth = 500;
        int frmLocatintX = ((int) screenSize.getWidth() - frmSizeWidth) / 2;
        int frmLocatintY = ((int) screenSize.getHeight() - frmSizeHeight) / 2;
        frm.setSize(frmSizeWidth, frmSizeHeight);
        frm.setLocation(frmLocatintX, frmLocatintY);
        frm.setResizable(false);
        frm.setLayout(null);
        Label labTitle = new Label("0.", Label.RIGHT);
        labTitle.setBounds(frmSizeWidth / 2 - 120 / 2, 50, 120, 30);
        labTitle.setBackground(Color.gray);
        Panel pan = new Panel(new GridLayout(4, 4));
        pan.setSize(300, 300);
        pan.setLocation(frmSizeWidth / 2 - 300 / 2, frmSizeHeight / 2 - 300 / 2);
        Button[] btnList = new Button[16];
        for (int i = 0; i < btnList.length; i++) {
            btnList[i] = new Button();
            pan.add(btnList[i]);
        }
        btnList[0].setLabel("7");
        btnList[1].setLabel("8");
        btnList[2].setLabel("9");
        btnList[3].setLabel("+");
        btnList[4].setLabel("4");
        btnList[5].setLabel("5");
        btnList[6].setLabel("6");
        btnList[7].setLabel("-");
        btnList[8].setLabel("1");
        btnList[9].setLabel("2");
        btnList[10].setLabel("3");
        btnList[11].setLabel("*");
        btnList[12].setLabel("c");
        btnList[13].setLabel("0");
        btnList[14].setLabel("=");
        btnList[15].setLabel("/");
        frm.add(labTitle);
        frm.add(pan);
        frm.setVisible(true);

    
            public void windowClosing(WindowEvent e) {
                System.exit(0);
            };
        
    }
}
