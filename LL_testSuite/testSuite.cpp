/**
*	@file : TestSuite.cpp
*	@author :  Luke Dercher
*	@date : 4/25/16
*/
#include "testSuite.h"
using namespace std;
#include<vector>

void testSuite::run()
{

	cout<<"Running Test Suite"<<endl;
	testOne();
	testTwo();
	testThree();
	testFour();
	testFive();
	testSix();
	testSeven();
	testEight();
	testNine();
	testTen();
	testEleven();

	cout<<"End of test suite"<<endl;

}

void testSuite::testOne()
{
  LinkedList<int> LL;
	cout<<"TestOne: testing remove front: ";
	for(int i=0; i<10; i++)
	{
		LL.addFront(i);
	}
	LL.removeBack();
	std::vector<int> vec = LL.toVector();
	for(int i=0; i<vec.size();i++)
		cout<<vec[i];
	cout<<endl;
}

void testSuite::testTwo()
{
	LinkedList<int> LL;
	cout<<"TestTwo: calling addFront 10 times and verifying size is 10: ";
	for(int i=0; i<10; i++)
	{
		LL.addFront(i);
	}
	if(LL.size() == 10)
	{
		cout<<" Pass ";
	}
	else
	{
		cout<<" Fail ";
	}
	cout<<LL.size()<<" is the returned size "<<endl;
	cout<<" addFront works?: ";
	std::vector<int> vec = LL.toVector();
	for(int i=0; i<vec.size();i++)
		cout<<vec[i];
	cout<<endl;
}

void testSuite::testThree()
{
	LinkedList<int> LL;
	cout<<"TestThree: Is size one after calling addback once: ";
	LL.addBack(1);
	if(LL.size() == 1)
		cout<<" Pass ";
	else
		cout<< " Fail ";
	cout<<LL.size()<<" is the size"<<endl;
}

void testSuite::testFour()
{
  LinkedList<int> LL;
	cout<<"TestFour: Is size one after calling addFrontonce: ";
	LL.addFront(1);
	if(LL.size() == 1)
		cout<<" Pass ";
	else
		cout<<" Fail ";
	cout<<LL.size()<<" is the size"<<endl;
}

void testSuite::testFive()
{
	LinkedList<int> LL;
	cout<<"TestFive: calling addBack 10 times and verifying size is 10: ";
	for(int i=0; i<10; i++)
	{
		LL.addBack(i);
	}

	if(LL.size() == 10)
	{
		cout<<" Pass ";
	}
	else
	{
		cout<<" Fail ";
	}
	cout<<LL.size()<<" is the size"<<endl;
	bool passed = true;
	cout<<"addBack works?: ";
	std::vector<int> vec = LL.toVector();
	for(int i=0; i<vec.size();i++)
		cout<<vec[i];
	cout<<endl;
}


void testSuite::testSix()
{
  LinkedList<int> LL;
  cout<<"TestSix: search returns false when value not present in list: ";
  for(int i=0; i<10; i++)
  {
    LL.addFront(i);
  }
  if(!LL.search(-1) )
  {
    cout<<" Pass"<<endl;
  }
  else
  {
    cout<<" Fail"<<endl;
  }
}

void testSuite::testSeven()
{
  LinkedList<int> LL;
	cout<<"TestSeven: search returns true when value is in list: ";
	for(int i=0; i<10; i++)
	{
		LL.addFront(i);
	}
	if(LL.search(5))
	{
		cout<<" Pass"<<endl;
	}
	else
	{
		cout<<" Fail"<<endl;
	}
}

void testSuite::testEight()
{
  LinkedList<int> LL;
  int Size = 0;
  cout<<"TestEight: correct size after some adds and removeFronts: ";
  for(int i = 0; i < 20; i++)
  {
    if(i%2 == 0)
    {
      LL.addFront(i);
      Size++;
    }
    else if(i%3 == 0)
    {
      LL.removeFront();
      Size--;
    }
    else
    {
      LL.addBack(i);
      Size++;
    }
  }
  if(LL.size() == Size)
  {
    cout<<" Pass "<<endl;
  }
  else
  {
    cout<<" Fail  ";
    cout<<LL.size()<<" is the returned size. The returned size should be "<<Size<<endl;
  }
}


void testSuite::testNine()
{
  LinkedList<int> LL;
	int Size = 0;
	cout<<"testNine: correct size after some adds and removeBacks: ";

	for(int i = 0; i < 10; i++)
	{
		if(i%2 == 0)
		{
			LL.addFront(i);
			Size++;
		}
		else if(i%3 == 0)
		{
			LL.removeBack();
			Size--;
		}
		else
		{
			LL.addBack(i);
			Size++;
		}
	}
	if(LL.size() == Size)
	{
		cout<<" Pass"<<endl;
	}
	else
	{
		cout<<" Fail ";
		cout<<LL.size()<<" is the returned size. The returned size should be "<<Size<<endl;
	}
}


void testSuite::testTen()
{
	LinkedList<int> LL;
	cout<<"TestTen: Does removeFront work: ";
	for(int i=0; i<10; i++)
	{
		LL.addFront(i);
	}
	LL.removeFront();
	std::vector<int> vec = LL.toVector();
	for(int i=0; i<vec.size();i++)
		cout<<vec[i];
	cout<<endl;
}


void testSuite::testEleven()
{
  LinkedList<int> LL;
  cout<< "TestEleven: Size of empty list is infact zero: ";
  if(LL.size() == 0)
    cout<<" Pass ";
  else
    cout<<" Fail ";
  cout<<LL.size()<<" is the size"<<endl;
  cout<< "isEmpty returns true on empty list: ";
  if(LL.isEmpty()==true)
    cout<<"Pass"<<endl;
  else
    cout<<"Fail"<<endl;
}
