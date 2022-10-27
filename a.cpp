#include <bits/stdc++.h>
using namespace std;

vector<vector<int>> fourNumberSum(vector<int> array, int targetSum)
{
    // Write your code here.
    multimap<int, pair<int, int>> twoSum;
    set<vector<int>> res;

    for (int i = 0; i < array.size() - 1; i++)
    {
        for (int j = i + 1; j < array.size(); j++)
        {

            twoSum.insert({array[i] + array[j], make_pair(array[i], array[j])});
        }
    }
    map<int, pair<int, int>>::iterator l = twoSum.begin();
    map<int, pair<int, int>>::iterator r = twoSum.begin();
    r++;

    for (l; l != twoSum.end(); l++)
    {
        for (r; r != twoSum.end(); r++)
        {
            if (l->first + r->first == targetSum)
            {
                set<int> s = {l->second.first, l->second.second,
                              r->second.first, r->second.second};
                if (s.size() == 4)
                {
                    res.insert({s.begin(), s.end()});
                }
            }
        }
    }
        //   for(auto i: twoSum){
        //     printf("%i: %i %i\n", i.first, i.second.first, i.second.second);
        //   }

        /*while(l->first <= r->first){
          if(l->first + r->first == targetSum){
            set<int> s = {l->second.first, l->second.second,
            r->second.first, r->second.second};
            if(s.size() == 4){
              res.insert({s.begin(), s.end()});
            }
            r++;
          }else if(l->first + r->first < targetSum){
            l++;
          }else{
            r++;
          }
        }*/

        vector<vector<int>> v(res.begin(), res.end());

        return v;
}

    int main()
    {
        vector<vector<int>> res = fourNumberSum({-2, -1, 1, 2, 3, 4, 5, 6, 7, 8, 9}, 4);
        for (int i = 0; i < res.size(); i++)
        {
            for (int j = 0; j < res[i].size(); j++)
            {
                cout << res[i][j] << " ";
            }
            cout << endl;
        }
        return 0;
    }
