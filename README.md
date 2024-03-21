# Array-Sorting-Problem

Algorithm:

1. Sorted the array in ascending order using PHP's builtin function called "sort".
2. Used a "flag" variable to track any changes.
3. If the target number is present in the array, returned it's index number and changed the flag status.
4. If the target number in not present in the array and the array has bigger number than the target number, returned the index number of the first bigger number as the index number of the target number supposed to be that if it was present in the array and the flag status will be changed.
5. If the target number in not present (checked using flag) in the array and the array has no bigger number than the target number, returned "array size + 1" as the index number of the target number supposed to be that if it was present in the array.
