<template>
  <header class="welcome-section">
    <div class="welcome-content">
      <h1>Добро пожаловать в мир городских кладбищ</h1>
      <p>Здесь вы найдёте информацию о различных кладбищах, их истории, услугах,<br>
        а также сможете узнать о захоронениях и памятных мероприятиях</p>
    </div>
    <button class="welcome-button" @click="$emit('showBurials')">
      Посмотреть захоронения
    </button>
  </header>
</template>

<script>
export default {
  name: 'WelcomeSection'
}
</script>

<style scoped>
header{
  height: 750px;
  background-image: url("../components/icons/fon.png");
  background-color: #383737;

}
:root {
  --green: #6BFF3E;
  --section-height: calc(100vh - 2rem); /* Пример адаптивной высоты */
}

.welcome-section {
  width: 100%;
  min-height: 750px; /* Минимальная высота */
  height: var(--section-height);
  max-height: 100vh;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 2rem;
  box-sizing: border-box;
}

.welcome-content {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
  transform: translateY(-5%); /* Адаптивное позиционирование */
}

.welcome-content h1 {
  font-family: 'Unbounded', sans-serif;
  font-size: clamp(1.5rem, 5vw, 2rem); /* Резиновый размер */
  color: #6BFF3E;
  margin: 0;
  line-height: 1.3;
  text-wrap: balance; /* Красивое выравнивание текста */
}

.welcome-content p {
  font-family: 'Unbounded', sans-serif;
  font-size: clamp(1rem, 3vw, 1.5rem);
  color: white;
  margin: clamp(3rem, 8vw, 5rem) auto 0;
  line-height: 1.6;
  max-width: 900px;
}

.welcome-button {
  font-family: 'Unbounded', sans-serif;
  font-size: clamp(0.9rem, 2vw, 1.2rem);
  color: white;
  padding: clamp(0.6rem, 1.5vw, 1rem) clamp(1.5rem, 4vw, 2rem);
  border: 2px solid var(--green);
  border-radius: 999px;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  margin: clamp(2rem, 6vw, 4rem) auto 0;
  display: block;
}

.welcome-button:hover {
  background-color: rgba(107, 255, 62, 0.1);
}

@media (max-width: 768px) {
  .welcome-content {
    transform: none;
  }
  .welcome-content p br {
    display: none;
  }
}

</style>