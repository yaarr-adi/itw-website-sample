

function check() {
  document.getElementById('swipe_img').innerHTML =""
  var x=document.getElementById('swipe_img');
  x.innerHTML="<img src=\'https://source.unsplash.com/random?male\'>";

  // window.location.reload();


  document.getElementById('interest').innerHTML = ""
  var x = document.getElementById('name_age')
  console.log(getname())
  x.innerHTML = getname();
  for (let i = 0; i < 5; i++) {
    document.getElementById('interest').innerHTML += MyInterest() + "<br>";
  }
  document.getElementById('city').innerHTML = MyCity();
}

function star() {
  // window.location.reload();
}


firstname = [
  "aadi", "sanskar", "vaibhav", "shashwat"
]

lastname = ["yede", "shrisva", "chouksey", "patel"]
function getname() {
  var randomnName = firstname[Math.floor(Math.random() * firstname.length)] + "<br>" + lastname[Math.floor(Math.random() * firstname.length)]
  return randomnName
}

interest = ["Travel", "Food", "Music", "Reading", "Sports", "Movies", "Fitness", "Art", "Photography", "Gaming", "Cooking", "Fashion", "Nature", "Technology", "Writing", "Projects", "Meditation", "Yoga", "Pets", "Sociallizing", "Gardening", "Dancing", "Astronomy", "Coding", "Esports"]
function MyInterest() {

  var fav = interest[Math.floor(Math.random() * interest.length)]
  return fav
}

city = ["Munbai", "Delhi", "Kolakata", "Banglore", "Nagpur", "Amravati", "Pune", "Patna", "Goa", "Indore", "Bhopal", "Chandigarh", "Kota"]
function MyCity() {

  return city[Math.floor(Math.random() * city.length)]
}