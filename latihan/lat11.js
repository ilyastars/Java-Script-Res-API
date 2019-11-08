function isLucky(n) {
    var l = n.toString().length;
    var a = 0, b = 0;
    if(l % 2 != 0) return false;
    for(var i = 0; i < l/2;i++){
        a += n%10;
        n = Math.floor(n/10);
    }
    for(var i = 0; i < l/2;i++){
        b += n%10;
        n = Math.floor(n/10);
    }
    return b == a? true: false;
}