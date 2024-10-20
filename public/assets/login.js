import axios from "axios";

// const { default: axios } = require("axios");

const form = document.querySelector("form");
const btnLogin = document.querySelector("#btn-login");
const errors = document.querySelector("#errors");

btnLogin.addEventListener("click", async function(event) {
  event.preventDefault();
  
  try {

    const formData = new FormData(form);
    const {data} = await axios.post("/login", formData);
    
    
  } catch (error) {
    //console.log(error.response.data);
    const errorsValidate = error.response?.data;

    if(errorsValidate) {
      for (const index in errorsValidate) {

        if (errorsValidate.hasOwnProperty(index)) {
          errors.innerHTML += `
            <div class="error">${errorsValidate[index]}</div>
          `;
        }

      }
      
      setTimeout(() => {
        errors.innerHTML = '';
      }, 3000);
    }

  }
  
});
