package jp.ac.hal;

public class MyPoint {
    private int x; // X座標
    private int y; // Y座標

    // 引数なしのコンストラクタ（初期座標は0, 0）
    public MyPoint() {
        x = 0;
        y = 0;
    }

    // X座標とY座標を受け取るコンストラクタ
    public MyPoint(int x, int y) {
        this.x = x;
        this.y = y;
    }

    // X座標を設定するメソッド
    public void setX(int x) {
        this.x = x;
    }

    // Y座標を設定するメソッド
    public void setY(int y) {
        this.y = y;
    }

    // X座標を取得するメソッド
    public int getX() {
        return x;
    }

    // Y座標を取得するメソッド
    public int getY() {
        return y;
    }
}
