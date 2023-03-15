#include <iostream>

using namespace std;

int main(){

     // Deklarasi array tiga dimensi dengan nama "angka"
     // Dengan jumlah ukuran pertama / subskrip pertama = 2
     // Jumlah Ukuran kedua = 3 & jumlah ukuran ketiga = 4
     int angka [2][3][4];

     // Mendeklarasi variabel untuk indeks perulangan
     int i,j,k;

     cout<<"\t===============================";
     cout<<"\n\t== Contoh Array Tiga Dimensi ==\n";
     cout<<"\t===============================\n\n";

     // Mengisi nilai kedalam elemen-elemen array angka
     cout<<"== Masukkan elemen-elemen array angka ==\n";
     for(i=0;i<2;i++){
          for(j=0;j<3;j++){
               for(k=0;k<4;k++){
                    cout<<"angka indeks ke ["<<i<<"]["<<j<<"]["<<k<<"]"<<" = ";
                    cin>>angka[i][j][k];
               }
          }
     }

     cout<<"\n\n===============================\n";
     cout<<"== Tampil nilai elemen Array ==\n";
     cout<<"===============================\n";

     //menampilkan nilai dari setiap elemen array angka
     for(i=0;i<2;i++){
        for(j=0;j<3;j++){
           for(k=0;k<4;k++){
              cout<<"angka indeks ke ["<<i<<"]["<<j<<"]["<<k<<"]"<<" = "<<angka[i][j][k]<<endl;
           }
        }
     }

     return 0;
}
