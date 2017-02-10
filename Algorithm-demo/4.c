/*递归算法
**求阶乘
*/
#include <stdio.h>
int main(){
	int i;
	printf("请输入要求阶乘的数:"); 
	scanf("%d",&i);
	printf("%d的阶乘结果为:%d\n",i,fact(i));
}

int fact(int n){
	if(n<=1)
		return 1;
	else
		return n*fact(n-1);
}
