<template>
  <div class="about-page">
    <h1 class="about-title">О нас</h1>

    <div class="blocks-container">
      <div class="left-blocks">
        <div class="left-block top-block">
          <h2 class="green-number">10</h2>
          <p class="white-text">лет работы в сфере ритуальных услуг, облагораживании территории, благоустройства могил</p>
        </div>

        <div class="left-block bottom-block">
          <h2 class="green-number">60 000+</h2>
          <p class="white-text">человек воспользовавшихся нашим агентством и оставивших положительный отзыв</p>
        </div>
      </div>

      <div class="right-block">
        <img src="./icons/image-Photoroom%20(1).png" alt="О нас" class="about-image">
        <p class="white-text about-description">Наша основная задача - помочь людям с этим нелегким делом, облегчить выбор во всех моментах, объяснение всех нюансов, сделать грустный момент комфортным и красивым</p>
        <button class="services-btn">услуги</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AboutPage'
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600;700&display=swap');

.about-page {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 40px 20px;
  color: white;
  max-width: 1920px;
  margin: 0 auto;
  background-color: #383737;
  min-height: 100vh;
  font-family: 'Unbounded', sans-serif;
}

.about-title {
  color: #6BFF3E;
  font-size: 2.5rem;
  margin-bottom: 60px;
  text-align: center;
  font-weight: 600;
}

.blocks-container {
  display: flex;
  justify-content: center;
  gap: 55px;
  width: 100%;
}

.left-blocks {
  display: flex;
  flex-direction: column;
  gap: 55px;
  width: 575px;
}

.left-block {
  height: 300px;
  background-color: #383737;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 20px;
  box-sizing: border-box;
  border-radius: 8px;
  border: 1px solid #4A4A4A;
}

.right-block {
  width: 540px;
  height: 650px;
  background-color: #383737;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 30px;
  box-sizing: border-box;
  border-radius: 8px;
  border: 1px solid #4A4A4A;
}

.green-number {
  color: #6BFF3E;
  font-size: 3rem;
  margin-bottom: 20px;
  text-align: center;
  font-weight: 600;
}

.white-text {
  color: white;
  text-align: center;
  font-size: 1.1rem;
  line-height: 1.5;
  font-weight: 400;
}

.about-image {
  width: 70%;
  height: auto;
  border-radius: 8px;
  object-fit: cover;
}

.about-description {
  margin-bottom: 30px;
  text-align: center;
}

.services-btn {
  background: transparent;
  border: 2px solid #6BFF3E;
  color: white;
  padding: 12px 30px;
  font-size: 1rem;
  border-radius: 25px;
  cursor: pointer;
  transition: all 0.3s ease;
  font-family: 'Unbounded', sans-serif;
  font-weight: 500;
  margin-top: auto;
}

.services-btn:hover {
  background-color: #6BFF3E;
}

/* Адаптивность */
@media (max-width: 1200px) {
  .blocks-container {
    flex-direction: column;
    align-items: center;
  }

  .left-blocks, .right-block {
    width: 100%;
    max-width: 575px;
  }

  .right-block {
    height: auto;
    padding-bottom: 40px;
  }
}

@media (max-width: 600px) {
  .about-title {
    font-size: 2rem;
  }

  .green-number {
    font-size: 2.5rem;
  }

  .white-text {
    font-size: 1rem;
  }

  .left-block {
    height: auto;
    min-height: 250px;
  }

  .blocks-container {
    gap: 30px;
  }

  .left-blocks {
    gap: 30px;
  }
}
</style>