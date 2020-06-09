const data = {
  name: [
    "Malu",
    "Fabiana",
    "Evelyn",
    "Gael",
    "Cauê",
    "Pedro",
    "Henrique",
    "Ramos",
    "Mirella",
    "Paulo",
    "Bento",
    "Otávio",
    "Sara",
    "Regina",
  ],
  middleName: [
    "Ferreira",
    "Cavalcanti",
    "Cruz",
    "Melo",
    "Tereza",
    "Liz",
    "Aparício",
    "Peixoto",
    "Viana",
  ],
  lastName: [
    "Santos",
    "Silva",
    "Oliveira",
    "Souza",
    "Rodrigues",
    "Alves",
    "Lima",
    "Gomes",
    "Costa",
  ],
  mail: ["@gmail.com", "@hotmail.com", "@yahoo.com", "@pm.me"],
};

const query = (id) => document.querySelector(id);

function addUser(mode, { name, phone, cpf, mail }) {
  if (mode == 0) {
    return;
  }
  query("#name").value = name;
  query("#phone").value = phone;
  query("#cpf").value = cpf;
  query("#mail").value = mail;
}

function getRandomNumber(min, size) {
  return Math.floor(Math.random() * size + min);
}

function getRandomNumberBetwen(min, max) {
  const size = max + 1 - min;
  return Math.floor(Math.random() * size + min);
}

function getOneInArray(name) {
  return data[name][getRandomNumber(0, data[name].length)];
}

const getData = {
  name: getOneInArray("name"),
  middleName: getOneInArray("middleName"),
  lastName: getOneInArray("lastName"),
};

addUser(1, {
  phone: "9" + getRandomNumber(0, 99999) + getRandomNumber(0, 9999),
  cpf: getRandomNumberBetwen(00000000000, 99999999999),
  name: getData.name + " " + getData.middleName + " " + getData.lastName,
  mail:
    (
      getData.name +
      "." +
      getData.middleName +
      "." +
      getData.lastName
    ).toLowerCase() + getOneInArray("mail"),
});
