/*递归算法(顺推算法)
**斐波那契数列
*/
#include <stdio.h>
#define NUM 13
int main(){
	int i;
	long fib[NUM] = {1,1};
	for(i = 2;i < NUM;i++){
		fib[i] = fib[i-1] + fib[i-2];
	}
	for(i = 0;i < NUM;i++){
		printf("i等于%d时:%d\n",i,fib[i]);
	}
	return 0;
}
