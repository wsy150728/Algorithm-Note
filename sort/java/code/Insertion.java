package code;

public class Insertion {
    public static void sort(Comparable[] a) {
        for (int i = 1; i < a.length; i++) {
            // 当前元素为a[i],依次和前面的元素比较，找到一个小于等于a[i]的元素则结束
            for (int j = i; j > 0; j--) {
                if (greater(a[j - 1], a[j])) {
                    exchange(a, j - 1, j);
                }else{
                    break;
                }
            }
        }
    }

    private static boolean greater(Comparable x, Comparable y) {
        return x.compareTo(y) > 0;
    }

    private static void exchange(Comparable[] a, int i, int j) {
        Comparable temp = a[i];
        a[i] = a[j];
        a[j] = temp;
    }
}
