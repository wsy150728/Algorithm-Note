package code;

@SuppressWarnings("rawtypes")

public class Selection {
    public static void sort(Comparable[] a) {
        for (int i = 0; i < a.length - 1; i++) {
            for (int j = i + 1; j < a.length; j++) {
                if (greater(a[i], a[j])) {
                    exchange(a, i, j);
                }

                // 查看执行次数明细
//                System.out.println("a[" + i + "]:" + a[i] + " a[" + j + "]:" + a[j] + " min " + a[i]);
            }
        }
    }

    public static void sort2(Comparable[] a) {
        for (int i = 0; i < a.length - 1; i++) {
            int minIndex = i;
            for (int j = i + 1; j < a.length; j++) {
                if (greater(a[i], a[j])) {
                    minIndex = j;
                }

                // 查看执行次数明细
//                System.out.println("a[" + i + "]:" + a[i] + " a[" + j + "]:" + a[j] + " min " + a[i]);
            }

            // 如果最小的index发生改变则交换
            if(i != minIndex) exchange(a, i, minIndex);
        }
    }

    private static boolean greater(Comparable x, Comparable y) {
        return x.compareTo(y) >= 0;
    }

    private static void exchange(Comparable[] a, int i, int j) {
        Comparable temp = a[i];
        a[i] = a[j];
        a[j] = temp;
    }
}
