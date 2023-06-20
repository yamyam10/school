package jp.ac.hal;

public class Main {
    private static void printPoint(MyPoint point) {
        System.out.println("X座標: " + point.getX());
        System.out.println("Y座標: " + point.getY());
    }

    private static void distance(MyPoint point1, MyPoint point2) {
        int xDistance = Math.abs(point2.getX() - point1.getX());
        int yDistance = Math.abs(point2.getY() - point1.getY());

        System.out.print("X座標間距離: " + xDistance);
        System.out.println(" Y座標間距離: " + yDistance);
    }

    private static void distance(MyPoint[] points) {
        for (int i = 0; i < points.length - 1; i++) {
            distance(points[i], points[i + 1]);
        }
    }

    public static void main(String[] args) {
        MyPoint[] points = new MyPoint[3];
        points[0] = new MyPoint(10, 20);
        points[1] = new MyPoint(100, 200);
        points[2] = new MyPoint(5, 30);

        for (MyPoint point : points) {
            printPoint(point);
        }

        distance(points);
    }
}
