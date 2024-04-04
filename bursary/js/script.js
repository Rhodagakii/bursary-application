var data = {
    subcounties: [
      {
        subcounty: "Kilifi-North",
        wards: ["Sokoni",
                "Kibarani",
                "Mnarani",
                "Matsangoni",
                "Tezo",
                "Dabaso",
                "Watamu"
            ],
      },
      {
        subcounty: "Kilifi-South",
        wards: [
          "Junju",
          "Chasimba",
          "Shimo-La-tewa",
          "Mwarakaya",
          "Mtepeni"
        ],
      },
      {
        subcounty: "Ganze",
        wards: [
          "Dungicha",
          "Bamba",
          "Jaribuni",
          "Sokoke"
        ],
      },
      {
        subcounty: "Kaloleni",
        wards: [
          "Mariakani",
          "Kayafungo",
          "Kaloleni",
          "Mwanamwinga"
        ],
      },
      {
        subcounty: "Rabai",
        wards: [
          "Mwawesa",
          "Ruruma",
          "Jibana",
          "Rabai/Kisurutuni"
        ],
      },
      {
        subcounty: "Malindi",
        wards: [
          "Jilore",
          "Kakuyuni",
          "Ganda",
          "Malindi Town",
          "Shella"
        ],
      },
      {
        subcounty: "Magarini",
        wards: [
          "Marafa",
          "Magarini",
          "Gongoni",
          "Adu",
          "Sabaki"
        ],
      }
    ],
};

var bursaries = ["Mwalimu","Elimu","Sisi"];
window.onload = function () {
  const bursary = document. getElementById("bursary");
  const selectSubcounty = document.getElementById("subcounty");
  const selectWard = document.getElementById("ward");
  selectWard.disabled = true;

  bursaries.forEach((value) => {
    bursary.appendChild(createOption(value, value));
  });
  //Add subcounty Value to subcounty Select option
  data.subcounties.forEach((value) => {
    selectSubcounty.appendChild(createOption(value.subcounty, value.subcounty));
  });

  selectSubcounty.addEventListener("change", function (e) {
    if(e.target.value ==0){
        selectWard.innerHTML = "";
        selectWard.disabled = true;
    }else{

    }
    selectWard.disabled = false;
    data.subcounties.forEach((detail, index) => {
      //console.log(data.subcounties[index].wards);
      if (detail.subcounty == e.target.value) {
        selectWard.innerHTML = "";
        selectWard.append(createOption("Select Ward", ""));
        data.subcounties[index].wards.forEach((ward) => {
          selectWard.append(createOption(ward, ward));
        });
      }
    });
  });

  //Create New Option Tag With Value
  function createOption(displayMember, valueMember) {
    const newOption = document.createElement("option");
    newOption.value = valueMember;
    newOption.text = displayMember;
    return newOption;
  }
};




var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}