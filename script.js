

let profile = document.getElementById("heading").style.display="none";


 let a = setTimeout(() => {
    document.getElementById("heading").style.display="block";
    document.getElementById("heading").style.backgroundColor="green";
  }, 3000,200);


  setInterval(()=>{
    document.getElementById("heading").style.backgroundColor="red";
  },1000)
