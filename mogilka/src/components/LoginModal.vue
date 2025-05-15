<template>
  <!-- Модальное окно входа -->
  <div class="modal-overlay" v-if="isOpen && !showRegister" @click.self="closeModal">
    <div class="modal">
      <h2 class="modal-title">ВХОД</h2>

      <div class="input-group">
        <input
            type="text"
            class="modal-input"
            placeholder="Логин/Электронная почта"
            v-model="login"
            :class="{ 'input-error': errors.login }"
            @input="clearError('login')"
        >
        <span class="error-message" v-if="errors.login">{{ errors.login }}</span>

        <input
            type="password"
            class="modal-input"
            placeholder="Пароль"
            v-model="password"
            :class="{ 'input-error': errors.password }"
            @input="clearError('password')"
        >
        <span class="error-message" v-if="errors.password">{{ errors.password }}</span>
      </div>

      <button class="modal-login-btn" @click="handleLogin">Войти</button>

      <div class="remember-forgot">
        <label class="checkbox-container">
          <input
              type="checkbox"
              v-model="rememberMe"
              @change="clearError('rememberMe')"
          >
          <span class="checkmark" :class="{ 'checkmark-error': errors.rememberMe }"></span>
          <span class="remember-text">Запомнить меня</span>
        </label>
        <span class="error-message" v-if="errors.rememberMe">{{ errors.rememberMe }}</span>
        <a href="#" class="forgot-password">Забыли пароль?</a>
      </div>

      <div class="register-group">
        <span class="no-account">Нет аккаунта?</span>
        <a href="#" class="register-link" @click.prevent="showRegister = true">Зарегистрироваться</a>
      </div>

      <div class="error-message general-error" v-if="errors.general">{{ errors.general }}</div>

      <button class="modal-close" @click="closeModal">×</button>
    </div>
  </div>

  <!-- Модальное окно регистрации -->
  <div class="modal-overlay" v-if="isOpen && showRegister" @click.self="closeModal">
    <div class="modal">
      <h2 class="modal-title">РЕГИСТРАЦИЯ</h2>

      <div class="input-group">
        <input
            type="email"
            class="modal-input"
            placeholder="Электронная почта"
            v-model="registerEmail"
            :class="{ 'input-error': registerErrors.email }"
            @input="clearRegisterError('email')"
        >
        <span class="error-message" v-if="registerErrors.email">{{ registerErrors.email }}</span>

        <input
            type="text"
            class="modal-input"
            placeholder="Логин"
            v-model="registerLogin"
            :class="{ 'input-error': registerErrors.login }"
            @input="clearRegisterError('login')"
        >
        <span class="error-message" v-if="registerErrors.login">{{ registerErrors.login }}</span>

        <input
            type="password"
            class="modal-input"
            placeholder="Пароль"
            v-model="registerPassword"
            :class="{ 'input-error': registerErrors.password }"
            @input="clearRegisterError('password')"
        >
        <span class="error-message" v-if="registerErrors.password">{{ registerErrors.password }}</span>
      </div>

      <button class="modal-login-btn" @click="handleRegister">Зарегистрироваться</button>

      <div class="remember-forgot">
        <label class="checkbox-container">
          <input
              type="checkbox"
              v-model="registerRememberMe"
              @change="clearRegisterError('rememberMe')"
          >
          <span class="checkmark" :class="{ 'checkmark-error': registerErrors.rememberMe }"></span>
          <span class="remember-text">Запомнить меня</span>
        </label>
        <span class="error-message" v-if="registerErrors.rememberMe">{{ registerErrors.rememberMe }}</span>
      </div>

      <div class="register-group">
        <span class="no-account">Уже есть аккаунт?</span>
        <a href="#" class="register-link" @click.prevent="showRegister = false">Войти</a>
      </div>

      <div class="error-message general-error" v-if="registerErrors.general">{{ registerErrors.general }}</div>

      <button class="modal-close" @click="closeModal">×</button>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
  isOpen: {
    type: Boolean,
    required: true
  }
});

const emit = defineEmits(['close']);

// Данные для входа
const login = ref('');
const password = ref('');
const rememberMe = ref(false);
const errors = ref({
  login: '',
  password: '',
  rememberMe: '',
  general: ''
});

// Данные для регистрации
const showRegister = ref(false);
const registerEmail = ref('');
const registerLogin = ref('');
const registerPassword = ref('');
const registerRememberMe = ref(false);
const registerErrors = ref({
  email: '',
  login: '',
  password: '',
  rememberMe: '',
  general: ''
});

const validateForm = () => {
  let isValid = true;
  errors.value = {
    login: '',
    password: '',
    rememberMe: '',
    general: ''
  };

  if (!login.value.trim()) {
    errors.value.login = 'Пожалуйста, введите логин или email';
    isValid = false;
  }

  if (!password.value.trim()) {
    errors.value.password = 'Пожалуйста, введите пароль';
    isValid = false;
  }

  if (!rememberMe.value) {
    errors.value.rememberMe = 'Необходимо согласие';
    isValid = false;
  }

  return isValid;
};

const validateRegisterForm = () => {
  let isValid = true;
  registerErrors.value = {
    email: '',
    login: '',
    password: '',
    rememberMe: '',
    general: ''
  };

  if (!registerEmail.value.trim()) {
    registerErrors.value.email = 'Пожалуйста, введите email';
    isValid = false;
  } else if (!/^\S+@\S+\.\S+$/.test(registerEmail.value)) {
    registerErrors.value.email = 'Пожалуйста, введите корректный email';
    isValid = false;
  }

  if (!registerLogin.value.trim()) {
    registerErrors.value.login = 'Пожалуйста, введите логин';
    isValid = false;
  }

  if (!registerPassword.value.trim()) {
    registerErrors.value.password = 'Пожалуйста, введите пароль';
    isValid = false;
  } else if (registerPassword.value.length < 6) {
    registerErrors.value.password = 'Пароль должен содержать минимум 6 символов';
    isValid = false;
  }

  if (!registerRememberMe.value) {
    registerErrors.value.rememberMe = 'Необходимо согласие';
    isValid = false;
  }

  return isValid;
};

const clearError = (field) => {
  if (errors.value[field]) {
    errors.value[field] = '';
  }
};

const clearRegisterError = (field) => {
  if (registerErrors.value[field]) {
    registerErrors.value[field] = '';
  }
};

const closeModal = () => {
  errors.value = {
    login: '',
    password: '',
    rememberMe: '',
    general: ''
  };
  registerErrors.value = {
    email: '',
    login: '',
    password: '',
    rememberMe: '',
    general: ''
  };
  showRegister.value = false;
  emit('close');
};

const handleLogin = () => {
  if (validateForm()) {
    console.log('Login attempt:', {
      login: login.value,
      password: password.value,
      rememberMe: rememberMe.value
    });
    closeModal();
  } else {
    errors.value.general = 'Пожалуйста, заполните все обязательные поля';
  }
};

const handleRegister = () => {
  if (validateRegisterForm()) {
    console.log('Register attempt:', {
      email: registerEmail.value,
      login: registerLogin.value,
      password: registerPassword.value,
      rememberMe: registerRememberMe.value
    });
    closeModal();
  } else {
    registerErrors.value.general = 'Пожалуйста, заполните все обязательные поля';
  }
};
</script>

<style scoped>
/* Стили остаются такими же, как в оригинальном коде */
@import url('https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600&display=swap');
.input-error {
  border: 1px solid #ff4d4f !important;
}

.checkmark-error {
  border: 2px solid #ff4d4f !important;
}

.error-message {
  color: #ff4d4f;
  font-size: 14px;
  width: 100%;
  max-width: 520px;
  text-align: left;
  padding-left: 20px;
}

.general-error {
  text-align: center;
}

.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.7);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
  overflow: hidden;
}

.modal {
  width: 690px;
  height: 770px;
  background-color: #272727;
  border-radius: 40px;
  padding: 50px;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  align-items: center;
  font-family: 'Unbounded', sans-serif;
}

.modal-title {
  color: #6BFF3E;
  font-size: 30px;
  font-weight: 600;
  margin-bottom: 60px;
  text-transform: uppercase;
}

.input-group {
  align-items: center;
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 30px;
  margin-bottom: 50px;
}

.modal-input {
  width: 520px;
  height: 80px;
  border-radius: 40px !important;
  border: none;
  padding: 0 30px;
  font-size: 18px;
  font-family: 'Unbounded', sans-serif;
  color: #272727;
}

.modal-input::placeholder {
  color: #272727;
  opacity: 0.7;
}

.modal-login-btn {
  width: 477px;
  height: 66px;
  border: 2px solid #6BFF3E;
  background: transparent;
  color: white;
  border-radius: 33px;
  font-size: 20px;
  font-weight: 500;
  font-family: 'Unbounded', sans-serif;
  cursor: pointer;
  transition: all 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
  margin-bottom: 10px;
}

.modal-login-btn::before {
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

.modal-login-btn:hover {
  color: #383737;
  border-color: transparent;
}

.modal-login-btn:hover::before {
  width: 100%;
}

.remember-forgot {
  width: 477px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 50px;
}

.checkbox-container {
  display: flex;
  align-items: center;
  cursor: pointer;
  position: relative;
  user-select: none;

}

.checkbox-container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

.checkmark {
  height: 20px;
  width: 20px;
  background-color: transparent;
  border: 2px solid #6BFF3E;
  border-radius: 4px;
  margin-right: 10px;
}

.checkbox-container input:checked ~ .checkmark {
  background-color: #6BFF3E;
}

.checkbox-container .checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.checkbox-container input:checked ~ .checkmark:after {
  display: block;
}

.checkbox-container .checkmark:after {
  left: 6px;
  top: 2px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}

.remember-text {
  color: white;
  font-size: 16px;
}

.forgot-password {
  color: white;
  font-size: 16px;
  text-decoration: none;
  transition: color 0.3s;
}

.forgot-password:hover {
  color: #6BFF3E;
}

.register-group {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
}

.no-account {
  color: white;
  font-size: 16px;
}

.register-link {
  color: #6BFF3E;
  font-size: 18px;
  font-weight: 500;
  text-decoration: none;
}

.modal-close {
  position: absolute;
  top: 20px;
  right: 20px;
  background: none;
  border: none;
  color: white;
  font-size: 30px;
  cursor: pointer;
  transition: color 0.3s;
}

.modal-close:hover {
  color: #6BFF3E;
}

@media (max-width: 768px) {
  .modal {
    width: 90%;
    height: auto;
    padding: 30px 20px;
  }

  .modal-input {
    width: 100%;
    max-width: 520px;
  }

  .modal-login-btn,
  .remember-forgot {
    width: 100%;
    max-width: 477px;
  }

  .remember-forgot {
    flex-direction: column;
    gap: 15px;
    align-items: flex-start;
  }
}

@media (max-width: 480px) {
  .modal-title {
    font-size: 24px;
    margin-bottom: 40px;
  }

  .modal-input {
    height: 60px;
    font-size: 16px;
  }

  .modal-login-btn {
    height: 50px;
    font-size: 16px;
  }

  .remember-text,
  .forgot-password,
  .no-account {
    font-size: 14px;
  }

  .register-link {
    font-size: 16px;
  }
}
@media (max-width: 768px) {
  .error-message {
    max-width: 100%;
    padding-left: 10px;
  }
}
</style>