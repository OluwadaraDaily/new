#include <iostream>
using namespace std;
int main(){
	int A[100], i=0, j=0,n;
	cout<<"Enter the decimal number: ";
	cin>>n;
	while(n>0){
		A[i]=n%2;
		i++;
		n=n/2;
	}	
	cout<<"The binary number is: ";
	for(j=i-1;j>=0;j--){
		cout<< A[j];
	}
	return 0;
}
