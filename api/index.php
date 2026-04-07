```html id="u9c1kx"
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Portfolio - Maroua Kana</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

<style>
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #FFEDCE, #234f78, #339cbf, #4090aa);
  color: #1f2937;
}

/* Header */
header {
  text-align: center;
  padding: 30px;
  font-size: 26px;
  font-weight: 700;
  color: white;
}

/* Profile */
.profile {
  text-align: center;
  color: white;
  margin-bottom: 20px;
}

.profile h2 {
  margin: 5px;
}

/* Buttons */
.buttons {
  text-align: center;
  margin: 20px;
}

.buttons button {
  background: white;
  color: #FF3737;
  border: none;
  padding: 12px 25px;
  margin: 10px;
  border-radius: 30px;
  cursor: pointer;
  font-weight: 500;
  transition: 0.3s;
}

.buttons button:hover {
  background: #ffe4d6;
  transform: scale(1.05);
}

/* Container */
.container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px,1fr));
  gap: 20px;
  padding: 20px;
}

/* Card */
.card {
  background: white;
  padding: 25px;
  border-radius: 20px;
  text-align: center;
  cursor: pointer;
  transition: 0.3s;
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.card:hover {
  transform: translateY(-8px);
}

/* Icon */
.icon {
  font-size: 35px;
  margin-bottom: 10px;
}

/* Footer */
footer {
  text-align: center;
  padding: 15px;
  color: white;
}

/* Animation */
.fade {
  animation: fade 0.5s ease-in-out;
}

@keyframes fade {
  from {opacity:0;}
  to {opacity:1;}
}
</style>

</head>

<body>

<header>🎓 Portfolio - Maroua Kana</header>

<div class="profile">
  <h2>Maroua Kana</h2>
  <p>Étudiante | Développement Web</p>
</div>

<div class="buttons">
  <button onclick="showAtelier(1)">Atelier 1</button>
  <button onclick="showAtelier(2)">Atelier 2</button>
</div>

<div id="content" class="container"></div>

<footer>© 2026 - Maroua Kana</footer>

<script>
function showAtelier(num) {
  let content = document.getElementById("content");

  if (num === 1) {
    content.innerHTML = `
      <div class="card fade">
        <div class="icon">📘</div>
        Exercice 1
      </div>
      <div class="card fade">
        <div class="icon">📄</div>
        Rapport 1
      </div>
      <div class="card fade">
        <div class="icon">📘</div>
        Exercice 2
      </div>
      <div class="card fade">
        <div class="icon">📄</div>
        Rapport 2
      </div>
    `;
  } else {
    content.innerHTML = `
      <div class="card fade">
        <div class="icon">📘</div>
        Exercice 3
      </div>
      <div class="card fade">
        <div class="icon">📄</div>
        Rapport 3
      </div>
      <div class="card fade">
        <div class="icon">📘</div>
        Exercice 4
      </div>
      <div class="card fade">
        <div class="icon">📄</div>
        Rapport 4
      </div>
    `;
  }
}

/* Default */
window.onload = () => showAtelier(1);
</script>

</body>
</html>
```