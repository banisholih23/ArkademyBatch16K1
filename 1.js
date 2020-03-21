function biodataKu(nama,umur){
  bio = {
  name:nama,
  age:umur,
  address:"bekasi",
  hobbies:["ngoding","ngedit","bulutangkis"],
  is_married:false,
  list_school:[
   { name:"SD",year_in:2004,year_out:2010,major:"NULL"},
   { name:"SMP",year_in:2010,year_out:2013,major:"NULL"},
   { name:"SMA",year_in:2013,year_out:2016,major:"NULL"}
  ],
  skills:[
   {skill_name:"ngoding",level:"beginner"},
   {skill_name:"ngedit",level:"advanced"},
   {skill_name:"bulutangkis",level:"advanced"}
  ],
  interest_in_coding:true
 };
 return bio;
}
data=biodataKu("bani",21);
console.log('biodataKu("bani",21);\n');
console.log(data);
document.writeln(JSON.stringify(data)); 