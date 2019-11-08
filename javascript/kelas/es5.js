var hewan = "     kambing      "

console.log(hewan.trim());

var numbers = [1, 2, 3, 4, 5]

console.log("perulangan js 5")
// perulangan for di js 5
for (var i = 0; i < numbers.length; i++) {
    console.log(numbers[1])

}

// console.log(numbers.length);  

console.log("perulangan es5")
// perulangan for each dalam js 5
numbers.forEach(function (value, index, array) {
    console.log(value + " dari index " + index + " dari index array" + array);

})

console.log("pengulangan es5 memakai map");
numbers.map(function(value) {
    //console.log(value); //ini untuk nampilin doang
    console.log('${value * 2} index ${index}'); //ini untuk nampilin bila valuenya aritmatika (+*/-)
})


console.log("perulangan sekaligus memfilter");
console.log(numbers.filter(function(value) {
    return value > 2
}))
//biasa digunakan salah satunya untuk memfilter mencari data di mode (search data di database)

console.log("menghitung total data didalam array")
console.log(numbers.reduce(function(total, value){
    return total + value;    
}));
// biasa penggunaan untung mengsum database

console.log("mengecek setiap data di array");
console.log(numbers.every(function(value){
    return value > 5;
}))
//pemanggilan data arrray dengan ditampilkan boolean
//jika ada salah satu data yang tidak memenuhi kondisi maka akan false
console.log("mengecek setiap data di array");
console.log(numbers.some(function(value){
    return value > 5;
}))
//sama kaya diatas cuman hanya salah satu aja
//jika ada salah satu data yang memenuhi kondisi maka akan true

console.log("menampilkan data index dari array");
// number yang ke 3 itu berada pada index ke berapa
console.log(numbers.indexOf(3));
console.log(numbers.lastIndexOf());

console.log("merubah data json string menjadi json obejk");
//json string
var bioStr = '{"name" : "Adip", "age" : "17","city": "purwosari"}'
console.log(JSON.parse(bioStr))
//jason objek
var bioObj ={
    "nama" : "Adip",
    "age": 17,
    "city": "purwosari"
}
console.log("JSON object menjadi json string");
console.log(JSON.stringify(bioObj));

//prototype
//sebuah metode untuk menambahkan data pada object
console.log("sebelum ditambah");
console.log(bioObj);
//tambah prototype
console.log("setelah ditambah prototype");
bioObj.marga="A"
console.log(bioObj);
console.log("setelah ditambah prototype2");
bioObj.grupMargaA = [{
    name : "Ari",
    citacita : "Presiden"
},
{
    name: "Aji",
    citacita:"menjadi seperti tegar"
}]
console.log(bioObj);

// console.log(numbers.length);

//leter sama sector