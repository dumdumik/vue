<template>
  <section class="service-planning mb-5 py-4">
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
      <hr class="my-5">
    </div>
  </section>
</template>

<script>
export default {
  name: 'ServicePlanningSection'
}
</script>
<style scoped>
section{
  height: 950px;
  background-color: #383737;
  padding-top: 70px;
  padding-left: 5%;
  padding-right: 5%;
}
.container{
  height: 670px;
  width: 100%;
  border: 1px solid #6BFF3E;
  border-radius: 60px;
  padding-top: 130px;
  padding-left: 5%;
  padding-right: 5%;
  background-color: #424141;
}
h2{
  font-size: 35px;
  color: #6BFF3E;

}
p{
  font-size: 25px;
  color: white;
  margin-top: 5%;

}
.buttons{
  margin-top: 20%;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;

  height: 40%;
}
.but{
  width: 20%;
  height: 50%;
  border-radius: 20px;
  border: 1px solid #6BFF3E;
  background-color: #383737;
  color: white;
}
</style>
