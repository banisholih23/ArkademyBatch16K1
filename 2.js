function is_username_valid(nama){
  re=/^([a-z]{5,7})$/;
  rs=nama.match(re);
  return re.test(nama);
}
function is_password_valid(password){
  pat=/([a-zA-Z0-9\@]){9}/;
  return pat.test(password);
}


username="diandra";
is_valid=is_username_valid(username);
console.log(username+"="+is_valid);

username="Ebi";
is_valid=is_username_valid(username);
console.log(username+"="+is_valid);

password="Kint4m@ni";
pass_valid=is_password_valid(password);
console.log(password+"="+pass_valid);

password="p@ssW0rd!";
pass_valid=is_password_valid(password)
console.log(password+"="+pass_valid);