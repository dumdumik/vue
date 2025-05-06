<template>
  <div class="cemetery-app">
    <HeaderSection/>
    <WelcomeSection />
    <ServicePlanningSection />
    <CompanyInfoSection />
    <FooterSection />
  </div>
</template>

<script>
import HeaderSection from './components/HeaderSection.vue';
import WelcomeSection from './components/WelcomeSection.vue';
import ServicePlanningSection from './components/ServicePlanningSection.vue';
import CompanyInfoSection from './components/CompanyInfoSection.vue';
import FooterSection from './components/FooterSection.vue';

export default {
  name: 'App',
  components: {
    HeaderSection,
    WelcomeSection,
    ServicePlanningSection,
    CompanyInfoSection,
    FooterSection
  }
}
</script>

<style>
.cemetery-app {
  font-family: Arial, sans-serif;
  color: #333;
  max-width: 1920px;
  margin: 0 auto;

}
</style>