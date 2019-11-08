function sortByHeight(a) {
    var newArray = [];
    var heights = [];
    for(var i = 0; i < a.length; i++) {
      if(a[i] === -1) {
          newArray.push(i);
      } else {
          heights.push(a[i]);
      }
    }
    var sortedHeights = heights.sort(function(aa, bb) {
        return aa - bb;
    });
    for(var j = 0; j < a.length; j++) {
      if(newArray.indexOf(j) !== - 1) {
        sortedHeights.splice(j, 0, -1);
      }
    }
    return sortedHeights;
}