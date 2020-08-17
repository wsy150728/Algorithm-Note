package code;

public class Shell {
    public static void sort(Comparable[] a) {
        // 确定增长量
        int h = 1;
        while (h < a.length / 2) {
            h = 2 * h + 1;
        }
        h=5;
        // 希尔排序
        while (h >= 1) {
            // 排序
            for (int i = h; i < a.length - 1; i++) {
                for (int j = i; j >= h; j -= h) {
                    if (greater(a[j - h], a[j])) {
                        exchange(a, j - h, j);
                    } else {
                        break;
                    }
                }
            }

            // 减小h值
            h = h / 2;
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
