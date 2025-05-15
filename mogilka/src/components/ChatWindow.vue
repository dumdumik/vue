<template>
  <div class="chat-window">
    <div class="chat-header">
      <div class="user-info">
        <div class="user-name">Евгения</div>
        <div class="user-status">
          <span class="status-dot" :class="{ online: isOnline }"></span>
          <span class="status-text">{{ isOnline ? 'онлайн' : 'не в сети' }}</span>
        </div>
      </div>
      <h2 class="chat-title">ЧАТ</h2>
      <button class="close-button" @click="$emit('close')">×</button>
    </div>



    <div class="messages-container">
      <!-- Здесь будут сообщения -->
    </div>

    <div class="message-input-container">
      <input
          type="text"
          class="message-input"
          placeholder="Введите сообщение..."
      >
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const isOnline = ref(true); // Можно изменить на false для статуса "не в сети"
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600&display=swap');

.chat-window {
  position: fixed;
  right: 40px;
  bottom: 100px;
  width: 400px;
  height: 600px;
  background-color: #272727;
  border-radius: 20px;
  display: flex;
  flex-direction: column;
  font-family: 'Unbounded', sans-serif;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
  overflow: hidden;
  z-index: 999;
}

.chat-header {
  display: flex;
  gap: 70px;
  align-items: center;
  padding: 30px;
  background-color: #272727;
}

.chat-title {
  color: #6BFF3E;
  font-size: 24px;
  font-weight: 600;
  margin: 0;
  text-transform: uppercase;
}

.close-button {
  background: none;
  border: none;
  color: white;
  font-size: 30px;
  cursor: pointer;
  transition: color 0.3s;
  margin-left: 30px;
}

.close-button:hover {
  color: #6BFF3E;
}



.user-name {
  color: white;
  font-size: 12px;
  font-weight: 500;
  margin-bottom: 5px;
}

.user-status {
  display: flex;
  align-items: center;
  gap: 10px;
}

.status-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background-color: #777;
}

.status-dot.online {
  background-color: #6BFF3E;
}

.status-text {
  color: #aaa;
  font-size: 12px;
}

.messages-container {
  flex: 1;
  padding: 0 130px;
  overflow-y: auto;
}

.message-input-container {
  padding: 30px;
}

.message-input {
  width: 330px;
  height: 50px;
  border-radius: 10px;
  border: none;
  padding: 0 20px;
  font-family: 'Unbounded', sans-serif;
  font-size: 15px;
  color: #383737;
}

.message-input::placeholder {
  color: #383737;
  opacity: 0.7;
}

@media (max-width: 900px) {
  .chat-header {
    display: flex;
    justify-content: space-between;

  }
  .chat-window {
    width: 90%;
    height: 80vh;
    right: 5%;
    bottom: 100px;
  }

  .user-info,
  .messages-container {
    padding: 0 30px;
  }

  .message-input {
    width: calc(100% - 10px);
  }
}
@media (max-width: 500px) {
  .chat-header {
    display: flex;
    gap: 5%;

  }
  .message-input {
    font-size: 14px;
  }
}

</style>