
            <?php include('includes/header.php'); ?>
            <style>
		/* Style pour les icônes */
.icon {
	font-size: 24px;
	margin-right: 8px;
}

.faq-container {
  max-width: 800px;
  margin: 0 auto;
  margin-top: -50px;
}

/* .faq-item {
  margin-bottom: 20px;
} */

/* .faq-question {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
  cursor: pointer;
}

.faq-answer {
  font-size: 18px;
  display: none;
}

.faq-answer.active {
  display: block;
} */

.faq-section {
  width: 80%;
  margin: 100px auto;
  box-shadow: 0px 0px 35px 0px rgba(154, 154, 154, 0.15);
  border-radius: 10px;
  padding: 30px;
}

.faq-header {
  font-size: 2rem;
  color: #333;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.faq-item {
  padding: 20px 0;
  border-bottom: 1px solid #eee;
}

.faq-item:last-child {
  border-bottom: none;
}

.faq-question {
  font-size: 2.2rem;
  font-weight: bolder;
  color: #333;
  /* font-weight: 600; */
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
}

.faq-reponse{
  font-size: 2.6rem;
  color: #333;
  
  position: relative;
}

.faq-question::before {
  content: '▶'; 
  position: absolute;
  left: -25px;
  transition: all 0.3s ease;
}

.faq-question.active::before {
  transform: rotate(90deg); 
}

.faq-question:hover {
  color: #007BFF;
}

.faq-answer {
  margin-top: 10px;
  display: none;
  font-size: x-large;
}

.faq-answer.active {
  display: block;
}

/* Styles for screens smaller than 600px wide */

@media (min-width: 576px) {
  .faq-container {
    padding-right: 40px;
    padding-left: 40px;
  }
}

@media (max-width: 576px) {
  .faq-container {
    padding-right: 40px;
    padding-left: 40px;
  }
}

@media (min-width: 768px) {
  .faq-container {
    padding-right: 40px;
    padding-left: 40px;
  }
}

@media (min-width: 992px) {
  .faq-container {
    padding-right: 40px;
    padding-left: 40px;
  }
}

@media (min-width: 1200px) {
  .faq-container {
    padding-right: 40px;
    padding-left: 40px;
  }
}

	</style>

            <section class="page-title page-title-inner">
                <div class="overlay-pagetitle"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="page-title-heading">
                            <h2 class="heading">FAQ</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="home3.php">Accueil</a></li>
                                <li>FAQ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section><br><br><br>

<section>
<!-- container-fluid -->
<div class="faq-container">
  <div  class="faq-reponse">Vous avez une question ? Explorez ci-dessous les questions fréquemment posées :</div>
  <div class="faq-item">
    <div class="faq-question">Qui est Ôpadalia ?</div>
    <div class="faq-answer">Ôpadalia est un concept né d’une union entre Un Chef Cuisinier et une weeding planner ensemble ils vous ramènent le soleil lors de tous vos événements autour d’une paillote.</div>
  </div>
  <div class="faq-item">
    <div class="faq-question">Qu’est-ce que la paillote ?</div>
    <div class="faq-answer">La Paillote est notre emblème, tout ce que représente le concept d’Ôpadalia.La Paillote représente notre ile, une petite maison en paille que l’on a revisité en bar autour de laquel s’installe la convivialité, le partage entre amis ou en famille.</div>
  </div>
  <div class="faq-item">
    <div class="faq-question">D’où provienne vos produits ?</div>
    <div class="faq-answer">Nos produits sont sélectionnés et choisi avec précision par notre Chef Frantzy chez des artisans de proximité afin de travailler uniquement avec des produits frais de saison et de qualité.</div>
  </div>
  <div class="faq-item">
    <div class="faq-question">Votre cuisine est-elle pimentée ?</div>
    <div class="faq-answer">Notre cuisine n’est pas pimentée, le piment est toujours mi à coté si on le désir et chacun agrémente comme il le souhaite. </div>
  </div>
  <div class="faq-item">
    <div class="faq-question">Pour quelle occasion fait-on appel à Ôpadalia ?</div>
    <div class="faq-answer">Pour tous vos événements exceptionnels, à la maison entre amis, en famille ou bien pour vos réceptions de mariage ou cocktail d’entreprise, nous vous accompagnons sur toutes vos demandes et vos besoins. </div>
  </div>
  <div class="faq-item">
    <div class="faq-question">Que comporte vos formules ?</div>
    <div class="faq-answer">Nos formules sont clé en main et comprennent le repas, la vaisselle, l’installation et le rangement du matériel par notre équipe. </div>
  </div>
  <div class="faq-item">
    <div class="faq-question">Comment se déroule ma réception ?</div>
    <div class="faq-answer">Nous Livrons la réception directement sur place et assurons l’installation et le rangement. </div>
  </div>
  <div class="faq-item">
    <div class="faq-question">Proposez vous du personnel de service ?</div>
    <div class="faq-answer">Notre équipe se charge de vous livrer, d’installer et ranger si vous souhaitez un service à l’assiete ou autre animation vous pouvez ajouter un maitre d’hôtel.</div>
  </div>
  <!-- Ajoutez ici plus de questions et réponses -->
</div>
</section>

<script>
// Waiting for the DOM to finish loading
document.addEventListener('DOMContentLoaded', function() {
  var faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(function(item) {
    var question = item.querySelector('.faq-question');
    var answer = item.querySelector('.faq-answer');

    question.addEventListener('click', function() {
      // Toggle the 'active' class for the question and answer
      question.classList.toggle('active');
      if(answer.style.display === "" || answer.style.display === "none") {
          answer.style.display = "block";
      } else {
          answer.style.display = "none";
      }
    });
  });
});
</script>
            
<?php include('includes/footer.php'); ?>