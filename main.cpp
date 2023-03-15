#include <iostream>
using namespace std;
int main()
{
      int  i, j, n;
      cout << "Masukkan jumlah baris:  ";
      cin >> n;
      for (i = n; i >= 1; i--)
      {
            for (j = 1; j <= i; j++)
            {
                  cout << "* ";
            }
            // ending line after each row
            cout << "\n";
      }
      return 0;
}
