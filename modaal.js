const modaalContent = document.querySelectorAll('.modaalContent');

for(let i=0; i<modaalContent.length; i++){
  let nodeNumber = modaalContent[i];
  nodeNumber.parentNode.removeChild(nodeNumber);
}

const modaleKnoppen = document.querySelectorAll('.modaalKnop');
const modaleKnoppenArray = [];

let modaalAchtergrond = document.createElement('div');
modaalAchtergrond.className = 'modaal_achtergrond';
let modaalView = document.createElement('div');
modaalView.className = 'modaalView modaalTrigger';
let sluitKnop = document.createElement('button');
sluitKnop.className = 'sluitKnop';
sluitKnop.innerHTML = '&#x00D7;';

const inhoudToevoegen = (event) => {
  const teller = modaleKnoppenArray.indexOf(event.target);
  modaalView.appendChild(sluitKnop);
  modaalView.appendChild(modaalContent[teller]);
  modaalAchtergrond.appendChild(modaalView);
  document.body.appendChild(modaalAchtergrond);
}

const sluitModaal = () => {
  modaalView.innerHTML ='';
  modaalAchtergrond.innerHTML ='';
  document.body.removeChild(modaalAchtergrond);
}

sluitKnop.addEventListener('click', sluitModaal);

for(let i=0; i<modaleKnoppen.length; i++) {
  modaleKnoppenArray.push(modaleKnoppen[i]);
  modaleKnoppen[i].addEventListener('click', inhoudToevoegen)
}
