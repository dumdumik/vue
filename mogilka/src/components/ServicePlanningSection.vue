<template>
  <section class="service-planning">
    <div class="container">
      <h2 class="text-center">5 доступных пакетов услуг</h2>
      <p class="text-center">
        С которыми вы можете ознакомится перейдя на вкладку услуги, заказ доступен в чате с менеджером где вы сможете уточнить информацию, определится с местом, датой, обсудить услуги в пакете и заказать дополнительные!
      </p>
      <div class="buttons">
        <button class="but">Посмотреть кладбища</button>
        <button class="but">Посмотреть пакеты услуг</button>
        <button class="but">Посмотреть отзывы</button>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'ServicePlanningSection'
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600;700&display=swap');

section {
  height: 850px;
  background-color: #383737;
  padding-top: 70px;
  padding-left: 5%;
  padding-right: 5%;
  font-family: 'Unbounded', sans-serif;
}

.container {
  height: 670px;
  width: 100%;
  border: 1px solid #4A4A4A;
  border-radius: 60px;
  padding-top: 130px;
  padding-left: 5%;
  padding-right: 5%;
  background-color: #424141;
  font-family: 'Unbounded', sans-serif;
}

h2 {
  font-size: 35px;
  color: #6BFF3E;
  font-weight: 600;
}

p {
  font-size: 25px;
  color: white;
  margin-top: 5%;
  font-weight: 400;
  line-height: 1.4;
}

.buttons {
  margin-top: 20%;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  height: 40%;
  gap: 20px;
}

.but {
  width: 20%;
  height: 50%;
  border-radius: 20px;
  border: 1px solid #4A4A4A;
  background-color: #383737;
  color: white;
  font-family: 'Unbounded', sans-serif;
  font-weight: 500;
  font-size: 18px;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  z-index: 1;
}

.but::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  background-color: #6BFF3E;
  transition: width 0.3s ease;
  z-index: -1;
}

.but:hover {
  color: #383737;
  border-color: transparent;
}

.but:hover::before {
  width: 100%;
}

/* Адаптивность для кнопок */
@media (max-width: 1200px) {
  .buttons {
    flex-direction: column;
    align-items: center;
    gap: 30px;
  }

  .but {
    width: 50%;
    height: 80px;
  }
}

@media (max-width: 768px) {
  section {
    height: auto;
    padding-bottom: 70px;
  }

  .container {
    height: auto;
    padding-top: 70px;
    padding-bottom: 70px;
  }

  h2 {
    font-size: 28px;
  }

  p {
    font-size: 18px;
  }

  .but {
    width: 80%;
    font-size: 16px;
  }
}
</style>