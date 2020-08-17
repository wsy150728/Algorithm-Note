package code;

@SuppressWarnings("rawtypes")
public class Bubble {
    public static void sort(Comparable[] a) {
        for (int i = 0; i < a.length - 1; i++) {
            for (int j = 0; j < a.length - i - 1; j++) {
                // 查看执行次数明细
                // System.out.println(i + " " + j + " " + (j + 1));
                if (greater(a[j], a[j + 1])) {
                    exchange(a, j, j + 1);
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
