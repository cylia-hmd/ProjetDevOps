
const display = document.getElementById("showshoes");



// Get all shoes using ajax request
const fetchAllUsers = async () => {


  const data = await fetch("route.php?index=1", {
    method: "GET",
  });
  const response = await data.text();
  display.innerHTML = response;

};


// this fonction always get called when on load
fetchAllUsers();

