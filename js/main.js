// ================= Programming Section =================
const programmingData = [
  {
    id: 1,
    lang: "Projet programmation en C",
    recommandation: "Recommandé à 99%",
    season: "2",
    episodes: "17",
    description:
        "Dans ce projet j'ai créé un jeu du sudoku en C vous pouvez retrouver le jeu sur mon github en cliquant sur le lien ci dessous.",
    img_src: "../images/c_programming.jpg",
    is_socials: true,
    closeMobileHtml: '<span id="close-mobile" class="close-mobile">&times;</span>',
  },
  {
    id: 2,
    lang: "Projet Scrapping",
    recommandation: "Recommandé à 99%",
    season: "8",
    episodes: "15",
    description:
        "Dans ce projet j'ai créé un algo complexe.\n" +
        "Utilisé la POO en Python.\n" +
        "Créé et manié des fichiers en \n" +
        "XML\n" +
        "CSV\n" +
        "Markdown\n" +
        "Scrapper des données.\n" +
        "Compris l’approche cyber à partir du scrapping et du traitement d’information.\n" +
        "Créé un annuaire manuellement à partir de méthodes de scrapping pré-définies. \n",
    img_src: "../images/projet_python.png",
    is_socials: true,
    closeMobileHtml: '<span id="close-mobile" class="close-mobile">&times;</span>',

  },
  {
    id: 3,
    lang: "Projet HTML/CSS/JS",
    recommandation: "Recommandé à 99%",
    season: "2",
    episodes: "12",
    description:
        "Dans  ce projet j'ai créé un site web vitrine,\n" +
        "créé une feuille de style CSS,\n" +
        "désigné sous forme de code et\n" +
        "optimisé mon site pour le SEO (référencement naturel),\n",
    img_src: "../images/projet_htmlcss.png",
    is_socials: true,

  },
  {
    id: 4,
    lang: "Projet PHP/BDD",
    recommandation: "Recommandé à 99%",
    season: "5",
    episodes: "19",
    description:
        "En partant d'un site que j'avais réalisé sous Materialize. J'ai grâce à du PHP et une base de données, rendu mon site maintenable avec un panel admin permettant de modifier le contenu.\n" +
        "Voici les éléments que j'ai mis en place :\n ● Une base de données,\n"+
        "● Une interface de connexion au site,\n" +
        "● Une interface d'inscription au site,\n" +
        "● Un système de droit d'accès,\n" +
        "● Un panel admin (réservé uniquement aux utilisateurs ayants les droits\n" +
        "administrateurs) qui permet de :\n" +
        "● Voir/Modifier/Supprimer les utilisateurs,\n" +
        "● Modifier le contenu (textes et images) de la page d'accueil (pas le\n" +
        "positionnement des éléments),\n" +
        "●  Voir/Ajouter/Modifier/Supprimer les projets,\",   ",

    img_src: "../images/projet_php.png",
    is_socials: false,
    closeMobileHtml: '<span id="close-mobile" class="close-mobile">&times;</span>',


  },
];

// Get the modal
var modal = document.getElementById("myModal");
// Get the image and insert it inside the modal - use its "alt" text as a caption

var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var episodesText = document.getElementById("episodes");
var seasonText = document.getElementById("season");
var subjectText = document.getElementById("subject");
var recommendationText = document.getElementById("recommendation");
var modalSocialsText = document.getElementById("modal-socials");

// Get the <span> element that closes the modal
var closeBtn = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
closeBtn.onclick = function () {
  modal.style.display = "none";
};

const programmingCards = document.getElementById("programming-cards");
let programmingHtml = "";

const programmingReadModal = (id) => {
  modal.style.display = "flex";
  const modalData = programmingData.find((data) => data.id === id);
  modalImg.src = modalData.img_src;
  episodesText.innerHTML = `+${modalData.episodes}`;
  seasonText.innerHTML = `${modalData.season} Saison`;
  captionText.innerHTML = modalData.description;
  subjectText.innerHTML = modalData.lang;
  recommendationText.innerHTML = modalData.recommandation;
  modalData.is_socials
      ? (modalSocialsText.innerHTML = `
  <button type="button" style="padding: 10px 20px; background-color: white; color: black; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; margin: auto; margin-top: 20px; margin-bottom: 20px; display: block;" onclick="window.open('https://github.com/Oliancem', '_blank')">Lien vers mon github</button>
  `)
      : (modalSocialsText.innerHTML = ``);
};

programmingData.map((data) => {
  programmingHtml += `
  <div class="new-project-card">
    <img src=${data.img_src} alt="programmation" />
    <div class="card-overlay">
      <div class="card-overlay-text">
        <h2>${data.lang}</h2>
        <h3>Recommandé à 99%</h3>
        <div class="seasons">
          <span>+${data.episodes}</span>
          <h5>${data.season} Saison</h5>
        </div>
        <p class="des-cutoff-txt">${data.description}</p>
        <button type="button" onclick="programmingReadModal(${data.id})">read more</button>
      </div>
    </div>
  </div>`;
});
programmingCards.innerHTML = programmingHtml;

// ================= Network Section =================

const networkData = [
  {
    id: 1,
    lang: "Création réseau d'entreprise",
    recommandation: "Recommandé à 99%",
    season: "1",
    episodes: "18",
    description:
        "Dans ce projet, j'ai crée un réseau d'entreprise séparé en plusieurs zones réseaux, sécuriser les communications entre les différentes zones réseaux, exposer des services internes (par exemple un serveur WEB). Configurer des services réseaux tel que : serveur DHCP, DNS.",
    img_src: "../images/projet_reseau.png",
    is_socials: true,
    closeMobileHtml: '<span id="close-mobile" class="close-mobile">&times;</span>',
  },
];

const networkCards = document.getElementById("network-cards");
let networkHtml = "";

const networkReadModal = (id) => {
  modal.style.display = "flex";
  const modalData = networkData.find((data) => data.id === id);
  modalImg.src = modalData.img_src;
  episodesText.innerHTML = `+${modalData.episodes}`;
  seasonText.innerHTML = `${modalData.season} Saison`;
  captionText.innerHTML = modalData.description;
  subjectText.innerHTML = modalData.lang;
  recommendationText.innerHTML = modalData.recommandation;
  modalData.is_socials
      ? (modalSocialsText.innerHTML = `
    <a href="https://github.com/">
    <i class="fab fa-github logo"></i>
    </a>
    <a href="https://www.linkedin.com/">
      <i class="fab fa-linkedin logo"></i>
    </a>
    <a href="https://tryhackme.com/">
      <i class="fas fa-cloud logo"></i>
    </a>
  `)
      : (modalSocialsText.innerHTML = ``);
};

networkData.map((data) => {
  networkHtml += `
  <div class="new-project-card">
    <img src=${data.img_src} alt="programmation" />
    <div class="card-overlay">
      <div class="card-overlay-text">
        <h2>${data.lang}</h2>
        <h3>Recommandé à 99%</h3>
        <div class="seasons">
          <span>+${data.episodes}</span>
          <h5>${data.season} Saison</h5>
        </div>
        <p class="des-cutoff-txt">${data.description}</p>
        <button type="button" onclick="networkReadModal(${data.id})">read more</button>
      </div>
    </div>
  </div>`;
});
networkCards.innerHTML = networkHtml;

// ================= Cybersecurity Section =================

const cybersecurityData = [
  {
    id: 1,
    lang: "Création mindmap cyber",
    recommandation: "Recommandé à 99%",
    season: "1",
    episodes: "18",
    description:
        "Face à l'augmentation sans précédent des cyberattaques, la demande en professionnels de la cybersécurité n'a jamais été aussi forte. C'est pourquoi grace a ce projet d'introduction a la cybersécurité, j'ai crée une mindmap qui va nous aider a comprendre la source des menaces et donner des réponses concrètes et permettre une anticipation réactive pour éviter, ou du moins, retarder d’autres attaques.",
    img_src: "../images/projet_cyber.png",
    is_socials: true,
    closeMobileHtml: '<span id="close-mobile" class="close-mobile">&times;</span>',
  },
];

const cybersecurityCards = document.getElementById("cybersecurity-cards");
let cybersecurityHtml = "";

const cybersecurityReadModal = (id) => {
  modal.style.display = "flex";
  const modalData = cybersecurityData.find((data) => data.id === id);
  modalImg.src = modalData.img_src;
  episodesText.innerHTML = `+${modalData.episodes}`;
  seasonText.innerHTML = `${modalData.season} Saison`;
  captionText.innerHTML = modalData.description;
  subjectText.innerHTML = modalData.lang;
  recommendationText.innerHTML = modalData.recommandation;
  modalData.is_socials
      ? (modalSocialsText.innerHTML = `
  <button type="button" style="padding: 10px 20px; background-color: white; color: black; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; margin: auto; margin-top: 20px; margin-bottom: 20px; display: block;" onclick="window.open('https://www.linkedin.com/posts/eliott-blanchard-b2b11b220_mindmap-cybers%C3%A9curit%C3%A9-activity-7049090506009497601-C3S9?utm_source=share&utm_medium=member_desktop', '_blank')">Lien vers la mindmap</button>
  `)
      : (modalSocialsText.innerHTML = ``);
};

cybersecurityData.map((data) => {
  cybersecurityHtml += `
  <div class="new-project-card">
    <img src=${data.img_src} alt="programmation" />
    <div class="card-overlay">
      <div class="card-overlay-text">
        <h2>${data.lang}</h2>
        <h3>Recommandé à 99%</h3>
        <div class="seasons">
          <span>+${data.episodes}</span>
          <h5>${data.season} Saison</h5>
        </div>
        <p class="des-cutoff-txt">${data.description}</p>
        <button type="button" onclick="cybersecurityReadModal(${data.id})">read more</button>
      </div>
      </div>
    </div>
  </div>`;
});
cybersecurityCards.innerHTML = cybersecurityHtml;

var closeMobileBtn = document.getElementById("close-mobile");

closeMobileBtn.onclick = function () {
  modal.style.display = "none";
};

