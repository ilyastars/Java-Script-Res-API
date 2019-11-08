<?php
var x = {};
x.loopShapeArea = function(n) {
    var area = 1;
    for (var i = 1; i <= n; i++) {
        area += ((i * 4) - 4);
    }
    return area;
}

x.recursionShapeArea = function(n) {
    if (n === 1) {
        return 1
    } else {
        return ((n * 4) - 4) + x.recursionShapeArea(n - 1);
    }
}

x.mathShapeArea = function(n) {
    return Math.pow(n, 2) + Math.pow(n - 1, 2);
}

var shapeArea = function(n) {
    var solution = {};
    if (0 < n && n <= Math.pow(n, 4)) {
        var obj = {
            0: 'loopShapeArea',
            1: 'recursionShapeArea',
            2: 'mathShapeArea'
        }
        for (let item in obj) {
            let fx = obj[item];
            solution[fx] = {};
            solution[fx].result = {};
            let hrstart = process.hrtime();
            for (let i = 1; i <= n; i++) {
                let result = x[fx](i);
                solution[fx].result[i] = result;
            }
            var hrend = process.hrtime(hrstart);
            solution[fx].execution = {};
            solution[fx].execution.s = hrend[0];
            solution[fx].execution.ms = hrend[1] / 1000000;
        }
        return solution;
    } else {
        return Error("Not a valid number");
    }
}
?>