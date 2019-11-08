function almostIncreasingSequence(sequence) {
    if (isIncreasingSequence(sequence)) {
        return true;
    }



    for (var i = 0; i < sequence.length > 0; i++) {
        var tmpSequence = sequence.slice(0); // copy original array

        tmpSequence.splice(i, 1);
        if (isIncreasingSequence(tmpSequence)) {
            return true;
        }
    }

    return false;
}

function isIncreasingSequence(sequence) {
    for (var i = 0; i < sequence.length - 1; i++) {
        if (sequence[i] >= sequence[i + 1]) {
            return false;
        }
    }

    return true;
}

almostIncreasingSequence([1, 3, 2, 1]); // false
almostIncreasingSequence([1, 3, 2]); // true
