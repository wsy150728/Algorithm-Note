/*枚举算法
**一个五位数的各项分别为a,b,c,d,e ,求满足条件abcde * a = eeeeee 的数。
*/
#include <stdio.h>
int main(){
	int i1,i2,i3,i4,i5;
	long a,c;
	for(i1 = 1;i1 < 10;i1++){
		for(i2 = 0;i2 < 10;i2++){
			for(i3 = 0;i3 < 10;i3++){
				for(i4 = 0;i4 < 10;i4++){
					for(i5 = 0;i5 < 10;i5++){
						a = i5+i4*10+i3*100+i2*1000+i1*10000;
						c = i5*111111;
						if(a*i1 == c){
							printf("这个数是:%d\n",a);
						}
					}
				}
			}
		}
	}
	return 0;
}
