<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Lab10</title>
    <style>
    /* Общие стили */
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f8f3f3; /* Бежевый фон */
        color: #4d0000; /* Красный текст */
    }

    /* Шапка */
    .up-header {
        background: #f6e4e4; /* Бежевый фон шапки */
        text-align: center;
        padding: 20px 0;
        font-size: 24px;
        border-bottom: 1px solid #e0c7c7; /* Бежевая граница */
    }

    .up-header img {
        width: 80px;
        margin-right: 10px;
        vertical-align: middle;
    }

    /* Навигационное меню */
    .navbar {
        background-color: #ffcccc; /* Красный фон навигации */
        padding: 15px 20px; /* Увеличил внутренний отступ справа */
        text-align: right; /* Выравнивание по правому краю */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar a {
        color: #4d0000; /* Красный текст ссылок */
        text-decoration: none;
        padding: 10px 20px;
        margin: 0 5px;
        border-radius: 5px;
        border: 2px solid #4d0000; /* Красная рамка */
    }

    .navbar a:hover {
        background-color: #ff9999; /* Более яркий красный при наведении */
    }

    /* Основное содержимое */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        font-size: 28px;
        margin-top: 0;
        margin-bottom: 20px;
        color: #4d0000; /* Красный заголовок */
    }

    /* Карточки */
    .card {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }

    .card img {
        max-width: 100%;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .card h2 {
        font-size: 22px;
        margin-top: 0;
        margin-bottom: 10px;
    }

    .card p {
        font-size: 16px;
        line-height: 1.5;
        color: #4d0000; /* Красный текст */
    }

    /* Подвал */
    footer {
        background-color: #4d0000; /* Красный фон подвала */
        color: #fff;
        text-align: center;
        padding: 20px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    </style>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Сайт объявлений "Интересные истории"</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
      <div class="navbar">
        <section class="app__header">
        </section>
            <a href="#about">Обо мне</a>
            <a href="#contact">Контакты</a>
            <a href="#filter" id="filter-link">Фильтр</a>
              <div class="filter-menu" id="filter-menu">
            </div>
        </div>
      <div class = "up-header">
        <header>Сайт объявлений "Интересные истории"</header>
      </div>
      <h1>Интересные истории</h1>
      <div class="grid-container">
        <div class="card" data-category="history">
            <img src="img/images.jpg" alt="История №1">
            <h3>Потерянный артефакт</h3>
            <p>Уникальный артефакт, который некогда принадлежал знаменитому исследователю, вдруг исчез из музея...</p>
            <button class="details-btn">Продолжение</button>
        </div>

        <div class="card" data-category="history">
            <img src="img/images.jpg" alt="История №2">
            <h3>Таинственное письмо</h3>
            <p>В почтовом ящике обычного дома обнаружили древнее письмо, которое выглядит так, будто оно было написано в прошлом веке...</p>
            <button class="details-btn">Продолжение</button>
        </div>

        <div class="card" data-category="history">
            <img src="img/images.jpg" alt="История №3">
            <h3>Старинный дневник</h3>
            <p>Молодой парень нашел старый дневник, в котором описываются удивительные события, произошедшие в его доме много лет назад...</p>
            <button class="details-btn">Продолжение</button>
        </div>

        <div class="card" data-category="history">
            <img src="img/images.jpg" alt="История №4">
            <h3>Таинственный остров</h3>
            <p>Группа путешественников отправилась на остров, о котором ходят легенды, и обнаружила там нечто, что они не ожидали увидеть...</p>
            <button class="details-btn">Продолжение</button>
        </div>

        <div class="card" data-category="history">
            <img src="img/images.jpg" alt="История №5">
            <h3>Забытый город</h3>
            <p>Исследователи обнаружили заброшенный город в глуши леса, где осталось множество загадок и тайн...</p>
            <button class="details-btn">Продолжение</button>
        </div>

      <footer>
        © 2024 Все права защищены.
      </footer>
    </body>
    </html>

        &copy; Прокофьева 10 лаб | <a href="#contact">Контакты</a>
    </footer>
  <script>
      document.addEventListener("DOMContentLoaded", function() {
          const lightModeButton = document.getElementById('light-mode-button');
          const darkModeButton = document.getElementById('dark-mode-button');
          const itemBlock = document.querySelector('.up-header');
          const filterLink = document.getElementById('filter-link');
          const filterMenu = document.getElementById('filter-menu');
          const cards = document.querySelectorAll('.card');
          const filterMenuLinks = document.querySelectorAll('.filter-menu-link');

          lightModeButton.addEventListener('click', setLightTheme);
          darkModeButton.addEventListener('click', setDarkTheme);

          function setLightTheme() {
              document.body.style.backgroundColor = '#f6f6f6';
              document.body.style.color = 'black';
              itemBlock.style.color = '#141414';
          }

          function setDarkTheme() {
              document.body.style.backgroundColor = '#141414';
              document.body.style.color = 'white';
              itemBlock.style.color = '#f6f6f6';
          }

          function filterCards(category) {
              cards.forEach(card => {
                  const cardCategory = card.getAttribute('data-category');
                  card.style.display = (category === 'all' || cardCategory === category) ? 'block' : 'none';
              });
          }

          filterMenuLinks.forEach(link => {
              link.addEventListener('click', function(event) {
                  event.preventDefault();
                  const category = this.textContent.toLowerCase();
                  filterCards(category);
                  filterMenu.style.display = 'none';
              });
          });

          filterLink.addEventListener('click', function(event) {
              event.preventDefault();
              toggleFilterMenu();
          });

          filterMenu.addEventListener('click', function(event) {
              event.stopPropagation();
          });

          document.addEventListener('click', function(event) {
              if (event.target !== filterLink) {
                  filterMenu.style.display = 'none';
              }
          });

          function toggleFilterMenu() {
              filterMenu.style.display = filterMenu.style.display === 'block' ? 'none' : 'block';
          }
      });


  </script>
</body>
</html>