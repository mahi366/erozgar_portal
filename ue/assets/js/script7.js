(async function(){
  const msg = document.getElementById("msg");
  const studentBox = document.getElementById("studentBox");
  const adminBox = document.getElementById("adminBox");
  const studentInfo = document.getElementById("studentInfo");
  const btnMyDownload = document.getElementById("btnMyDownload");

  function setMsg(t, ok){
    msg.style.color = ok ? "#148a2b" : "#c62828";
    msg.textContent = t || "";
  }

  // URL message
  const p = new URLSearchParams(location.search);
  if(p.get("ok")) setMsg(p.get("ok"), true);
  if(p.get("err")) setMsg(p.get("err"), false);

  // check login
  const res = await fetch("backend/me.php");
  const me = await res.json();

  if(!me.logged_in){
    location.href = "login.html?err=Please login first";
    return;
  }

  // show role sections
  if(me.role === "admin"){
    adminBox.style.display = "block";
    studentBox.style.display = "none";
  }else{
    adminBox.style.display = "none";
    studentBox.style.display = "block";
    studentInfo.textContent = `Logged in as: ${me.full_name || ""} (${me.email || ""})`;
  }

  // student download
  btnMyDownload?.addEventListener("click", () => {
    window.location.href = "backend/certificate_download.php"; // downloads latest issued
  });
})();
