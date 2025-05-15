<template>
  <div class="chat-container">
    <button class="chat-button" @click="toggleChat">
      <span class="chat-text">ЧАТ</span>
    </button>
    <ChatWindow v-if="isChatOpen" @close="toggleChat" />
  </div>
</template>

<script setup>
import {ref} from 'vue';
import ChatWindow from './ChatWindow.vue';

const isChatOpen = ref(false);

const toggleChat = () => {
  isChatOpen.value = !isChatOpen.value;
};
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600&display=swap');

.chat-container {
  position: fixed;
  right: 40px;
  bottom: 40px;
  z-index: 1000;
}

.chat-button {
  position: fixed;
  right: 40px;
  bottom: 40px;
  padding: 12px 25px;
  background-color: #6BFF3E;
  color: white;
  border: none;
  border-radius: 30px;
  font-family: 'Unbounded', sans-serif;
  font-weight: 500;
  font-size: 18px;
  cursor: pointer;
  box-shadow: 0 4px 15px rgba(107, 255, 62, 0.3);
  z-index: 999;
  transition: all 0.3s ease;
  text-transform: uppercase;
}

.chat-text {
  text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

.chat-button:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 15px rgba(107, 255, 62, 0.4);
}
.chat-button:active {
  transform: translateY(1px);
}

@media (max-width: 768px) {
  .chat-container {
    right: 20px;
    bottom: 20px;
  }

  .chat-button {
    padding: 12px 24px;
    font-size: 16px;
  }
}
</style>