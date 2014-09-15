//chris-and-area
//hackerrank
#include<stdio.h>
int main()
{
	int t,i,j,c,l;
	float area;
	char s[50];
	scanf("%d",&t);
	while(t--)
	{
		scanf("%d %d %d %d %d %d",&a1,&b1,&c1,&a2,&b2,&c2);
		area=0.5*((b1*c2-c1*b2)*(b1*c2-c1*b2)+(c1*a2-a1*c2)*(c1*a2-a1*c2)+(a1*b2-b1*a2)*(a1*b2-b1*a2));
		printf("%f",area);
	}
	return 0;
}