const number = (input) => {
  input = input.split("")
  let kumpulan = ""
  for (let i = 0; i < input.length; i++){
    if (input[i] != '-' && input[i] != ' '){
      kumpulan += input[i]
    }
  }
  Min(kumpulan)
}

const Min = (kumpulan) => {
  const data = kumpulan.split("")
  let fixData = ""
  let id = 0
  data.forEach((item, index) => {
    if (data[index+3]){
      if (id != 2){
        fixData += item
        id += 1
        } else {
          fixData += `${item}-`
          id = 0
        }
    } else {
      if (id != 2){
        if (data[index+1]){
          fixData += `${item}-`
        } else {
          fixData += `${item}`
        }
        id += 1
      } else {
        fixData += item
        id = 0
      }
    }
  })
  console.log("Output Benar = " +fixData);
}
number("993141 -1 1323 14-232");