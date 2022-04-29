// CAOS TUT 1.1; time computation
#include <stdio.h> // header file for printf,...
#include <time.h> // header file for various time functions
int main() //returns integer 0 value
{
    clock_t t, d; // t variable is of type clock_t
    t=clock(); // call clock function to calculate time taken by a process
    //instructions 
    printf("Hello World\n");
    printf("Hello World\n");    
    d=clock()-t;
    double time_taken=((double)d)/CLOCKS_PER_SEC; // double is type for  nos with decimal poi
    double time_taken=((double)d)/CLOCKS_PER_SEC; // double is type for  nos with decimal points
    printf("time taken is %f seconds", time_taken); //no. of clock ticks per second to get processor time
    return 0; // returns zero
}