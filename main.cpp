#include <iostream>

using namespace std;

void quick(int arr[],int left, int right){

    int i= left, j= right;
    int tmp;
    int pivot= arr[(left+right/2)];
    while (i<j){
        while (arr[i] < pivot)
            i++;
            while (arr[j]> pivot)
            j--;

    if(i<= j){
        tmp = arr[i];
        arr[i]= arr[j];
        arr[j]= tmp;
        i++;
        j--;
    };
}
if (left <j){
        quick(arr,left,j);
if (i< right){
    quick(arr,i,right);
}
}
}
int main(){
    int n, data[50];

    cout<<"Masukkan Banyak Angka : ";
    cin>>n;

    for (int a=0; a<n; a++){
        cout<<"Masukkan Angka : ";
        cin>>data[a];
    }
     cout<<"Data Sebelum diurutkan : ";
        for (int a=0; a<n; a++){
            cout<<data[a]<<" ";
        }
        quick(data,0,n);
        cout<<"\n";
        cout<<"Hasil Pengurutan : ";
        for (int a=0; a<n; a++){
            cout<<data[a]<<" ";
        }
}

