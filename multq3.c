#include<stdio.h>
#include<malloc.h>
int main()
{
	long int a,b,n,q,x*;
	scanf("%ld %ld",&n,&q);
	x=(int*)malloc(n*sizeof(int));
	for(a=0;a<n;a++,x[i]=0);
	while(q--)
	{
		scanf("%ld %ld %ld",&n,&a,&b);
		if(n==0)
			for(;a<=b;x[a++]++);
		else
			for(n=0;a<=b;(x[a++]%3==0)?n++:n)
	}
	return 0;
}