lab7: main.o testSuite.o
	g++ -g -std=c++11 -Wall -o lab7 main.o testSuite.o

main.o: main.cpp testSuite.h Node.h LinkedList.h
	g++ -std=c++11 -g -Wall -c main.cpp testSuite.h Node.h LinkedList.h

testSuite.o: testSuite.h testSuite.cpp
	g++ -std=c++11 -g -Wall -c testSuite.cpp

clean:
	rm *.o lab7
	clean done
