<template>
  <footer class="footer">
    <div class="footer-container">
      <!-- Левый блок -->
      <div class="footer-left">
        <img src="./icons/image-Photoroom%20(1).png" alt="Логотип" class="footer-logo">
        <p class="footer-text">Наше ритуальное агентство призвано облегчить тяжелый жизненный момент и провести комфортное и красивое прощание</p>
        <p class="copyright">©2025 Все права защищены</p>
      </div>

      <!-- Центральный блок -->
      <div class="footer-center">
        <nav class="footer-nav">
          <a href="#" class="nav-link">Кладбища</a>
          <a href="#" class="nav-link">Услуги</a>
          <a href="#" class="nav-link">Пожертвования</a>
          <a href="#" class="nav-link">Отзывы</a>
          <a href="#" class="nav-link">Карты</a>
        </nav>
        <a href="tel:+79526832797" class="footer-phone">+7 952 683 2797</a>
      </div>

      <!-- Правый блок -->
      <div class="footer-right">
        <button class="contact-btn">Связаться</button>
        <a href="mailto:mogilkaryadom@gmail.com" class="footer-email">mogilkaryadom@gmail.com</a>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'FooterSection'
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600&display=swap');

.footer {
  background-color: #272727;
  color: white;
  padding: 50px 40px;
  font-family: 'Unbounded', sans-serif;
}

.footer-container {
  max-width: 1920px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 100px;
}

.footer-left,
.footer-center,
.footer-right {
  flex: 1;
  min-width: 250px;
  display: flex;
  flex-direction: column;
}
.footer-right{
  align-items: end;
}
.footer-logo {
  width: 100px;
  height: auto;
  margin-bottom: 20px;
}

.footer-text {
  color: white;
  font-size: 14px;
  line-height: 1.5;
  margin-bottom: 30px;
}

.copyright {
  color: white;
  font-size: 12px;
  opacity: 0.7;
  margin-top: auto;
}

.footer-nav {
  display: flex;

  gap: 15px;
  margin-bottom: 30px;
}

.nav-link {
  color: white;
  text-decoration: none;
  font-size: 16px;
  transition: color 0.3s;
}

.nav-link:hover {
  color: #6BFF3E;
}

.footer-phone {
  color: #6BFF3E;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  margin-top: auto;
  text-align: center;
}

.contact-btn {
  width: 180px;
  height: 45px;
  border: 1px solid #6BFF3E;
  background: transparent;
  color: white;
  border-radius: 25px;
  font-family: 'Unbounded', sans-serif;
  font-size: 16px;
  font-weight: 500;
  cursor: pointer;
  transition: all 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
  margin-bottom: 30px;
}

.contact-btn::before {
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

.contact-btn:hover {
  color: #272727;
  border-color: transparent;
}

.contact-btn:hover::before {
  width: 100%;
}

.footer-email {
  color: white;
  text-decoration: none;
  font-size: 14px;
  margin-top: auto;
  transition: color 0.3s;
}

.footer-email:hover {
  color: #6BFF3E;
}

/* Адаптивность */
@media (max-width: 1200px) {
  .footer-nav {
    flex-direction: column;
  }
}
@media (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    gap: 30px;
  }

  .footer-left,
  .footer-center,
  .footer-right {
    min-width: 100%;
  }

  .footer-nav {
    flex-direction: row;
    flex-wrap: wrap;
  }

  .footer-phone {
    margin-top: 20px;
  }

  .contact-btn {
    width: 160px;
    height: 40px;
  }
}

@media (max-width: 480px) {
  .footer {
    padding: 30px 15px;
  }

  .footer-nav {
    gap: 10px;
  }

  .nav-link {
    font-size: 14px;
  }

  .footer-phone {
    font-size: 16px;
  }

  .contact-btn {
    width: 140px;
    height: 36px;
    font-size: 14px;
  }
}
</style>