bool checkPalindrome(string inputString) {
    int len = inputString.Length;
    for(int i=0; i<len/2; i++ ){
        if(inputString[i]!= inputString[len - i - 1])
            return false;
    }
    return true;
}