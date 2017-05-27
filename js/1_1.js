function isWithUniqueChars(s) {
    var a = new Array(256);
    for (var i = 0; i < s.length; i++) {
        var c = s.charAt(i);
        if (a[c])
            return false;
        a[c] = true;
    }
    return true;
}

console.log(
    isWithUniqueChars('dashg kjczx'),
    isWithUniqueChars('dashgh xkj czx')
);
