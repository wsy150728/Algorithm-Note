/*递归算法(逆推算法)
**设年利率0.0171,若在第48个月小龙大学毕业时连本带利要取1000元，则最开始要存入多少钱?
**第47个月月末存款 = 1000/(1+0.0171/12)
**第46个月月末存款 = (第47个月月末存款+1000)/(1+0.0171/12)
**.....
**第一个月月末存款 = (第2个月月末存款+1000)/(1+0.0171/12)
*/
#include <stdio.h>
#define FETCH 1000
#define RATE 0.0171
int main(){
	double corpus[49];
	int i;
	corpus[48] = (double)FETCH;
	for(i = 47;i > 0;i--){
		corpus[i] = (corpus[i+1] + FETCH) / (1 + RATE/12);
	}
	for(i = 48;i > 0;i--){
		printf("第%d月末本利合计:%.2f\n", i, corpus[i]);
	}
	return 0;
}
