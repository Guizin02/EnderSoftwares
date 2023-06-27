const addressForm = document.querySelector("#address-form");
const cepInput = document.querySelector("#cep");
const estadoInput = document.querySelector("#estado");
const cidadeInput = document.querySelector("#cidade");
const paisInput = document.querySelector("#pais");
const formInputs = document.querySelectorAll("[data-input]");

//Validação Cep

cepInput.addEventListener("keypress", (e) => {
    const onlyNumbers = /[0-9]|\./;
    const key = String.fromCharCode(e.keyCode);

    if(!onlyNumbers.test(key)) {
        e.preventDefault();
        return;
    }
});

cepInput.addEventListener("keyup", (e) => {
    const inputValue = e.target.value;

    if(inputValue.length === 8){
        getAddress(inputValue);
    }
});

const getAddress = async (cep) => {

    console.log(cep);

    cepInput.blur();

    const apiUrl = `https://viacep.com.br/ws/${cep}/json/`;

    const response = await fetch(apiUrl);
  
    const data = await response.json();

    console.log(data);
  console.log(formInputs);
  console.log(data.erro);
    
  
//     if (!paisInput.hasAttribute("disabled")) {
//          toggleDisabled();
//        }
  
//       addressForm.reset();
//       toggleLoader();
//        toggleMessage("CEP Inválido, tente novamente.");
//        return;
// }

// const toggleDisabled = () => {
//     if (estadoInput.hasAttribute("disabled")) {
//       formInputs.forEach((input) => {
//         input.removeAttribute("disabled");
//       });
//     }~



estadoInput.value = data.uf;
cidadeInput.value = data.localidade;


}
