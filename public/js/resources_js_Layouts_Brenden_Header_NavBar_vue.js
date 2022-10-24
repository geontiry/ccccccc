(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_Layouts_Brenden_Header_NavBar_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthAccount.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthAccount.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {},
  components: {},
  data: function data() {
    return {
      open: false,
      profileitems: [{
        icon: 'mdi-account-circle-outline',
        title: 'My Profile'
      }, {
        icon: 'mdi-account-circle-outline',
        title: 'My Shopping'
      }, {
        icon: 'mdi-account-circle-outline',
        title: 'My History'
      }, {
        icon: 'mdi-briefcase-account-outline',
        title: 'My Wallet'
      }, {
        icon: 'mdi-account-cog-outline',
        title: 'My Settings'
      }, {
        icon: 'mdi-account-cog-outline',
        title: 'My Contact'
      }]
    };
  },
  methods: {
    logout: function logout() {
      axios.post(route('logout')).then(function (response) {
        window.location.reload(); //this.dialoglogin = !this.dialoglogin
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthLogin.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthLogin.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _Mixins_formvalidation__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @/Mixins/formvalidation */ "./resources/js/Mixins/formvalidation.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {
    dialoglogin: {
      type: Boolean,
      required: true,
      "default": false
    },
    dialogsignup: {
      type: Boolean,
      required: true,
      "default": false
    }
  },
  components: {},
  mixins: [_Mixins_formvalidation__WEBPACK_IMPORTED_MODULE_0__.default],
  data: function data() {
    return {
      form: false,
      email: undefined,
      password: undefined,
      show: false,
      remember: false,
      isLoading: false,
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      userlogin: {}
    };
  },
  methods: {
    openLogin: function openLogin() {
      this.dialoglogin = true;
      this.dialogsignup = false;
    },
    openSignup: function openSignup() {
      this.dialogsignup = true;
      this.dialoglogin = false;
    },
    login: function login() {
      var _this = this;

      axios.post(route('login'), {
        email: this.email,
        password: this.password,
        remember: this.remember,
        _token: this.csrf
      }).then(function (response) {
        _this.snack = true;
        _this.snackColor = 'primary';
        _this.snackText = _this.login;
        window.location.reload(); //window.location = '/login';
      })["catch"](function (error) {
        _this.snack = true;
        _this.snackColor = 'error';
        _this.snackText = _this.login;
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthSignup.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthSignup.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _Mixins_formvalidation__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @/Mixins/formvalidation */ "./resources/js/Mixins/formvalidation.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {
    dialoglogin: {
      type: Boolean,
      required: true,
      "default": false
    },
    dialogsignup: {
      type: Boolean,
      required: true,
      "default": false
    }
  },
  components: {},
  mixins: [_Mixins_formvalidation__WEBPACK_IMPORTED_MODULE_0__.default],
  data: function data() {
    return {
      dialogsignup: false,
      dialogterms: false,
      dialogprivacy: false,
      form: false,
      name: undefined,
      email: undefined,
      password: undefined,
      cpassword: undefined,
      show: false,
      agreement: false,
      isLoading: false,
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      usersignup: {}
    };
  },
  methods: {
    signup: function signup() {
      var _this = this;

      axios.post(route('register'), {
        name: this.name,
        email: this.email,
        password: this.password,
        password_confirmation: this.cpassword,
        terms: this.agreement,
        _token: this.csrf
      }).then(function (response) {
        _this.snack = true;
        _this.snackColor = 'primary';
        _this.snackText = _this.login;
        window.location.reload(); //window.location = '/login';
      })["catch"](function (error) {
        _this.snack = true;
        _this.snackColor = 'error';
        _this.snackText = _this.login;
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavBar.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavBar.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _Layouts_Brenden_Header_AuthAccount__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @/Layouts/Brenden/Header/AuthAccount */ "./resources/js/Layouts/Brenden/Header/AuthAccount.vue");
/* harmony import */ var _Layouts_Brenden_Header_AuthLogin__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @/Layouts/Brenden/Header/AuthLogin */ "./resources/js/Layouts/Brenden/Header/AuthLogin.vue");
/* harmony import */ var _Layouts_Brenden_Header_AuthSignup__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @/Layouts/Brenden/Header/AuthSignup */ "./resources/js/Layouts/Brenden/Header/AuthSignup.vue");
/* harmony import */ var _Layouts_Brenden_Header_NavTrack__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @/Layouts/Brenden/Header/NavTrack */ "./resources/js/Layouts/Brenden/Header/NavTrack.vue");
/* harmony import */ var _Layouts_Brenden_Header_NavSupport__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @/Layouts/Brenden/Header/NavSupport */ "./resources/js/Layouts/Brenden/Header/NavSupport.vue");
/* harmony import */ var _Layouts_Brenden_Header_NavSites__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @/Layouts/Brenden/Header/NavSites */ "./resources/js/Layouts/Brenden/Header/NavSites.vue");
/* harmony import */ var _Layouts_Brenden_Header_NavLinks__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @/Layouts/Brenden/Header/NavLinks */ "./resources/js/Layouts/Brenden/Header/NavLinks.vue");
/* harmony import */ var _Layouts_Brenden_Header_NavCompare__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @/Layouts/Brenden/Header/NavCompare */ "./resources/js/Layouts/Brenden/Header/NavCompare.vue");
/* harmony import */ var _Layouts_Brenden_Header_NavFavorites__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @/Layouts/Brenden/Header/NavFavorites */ "./resources/js/Layouts/Brenden/Header/NavFavorites.vue");
/* harmony import */ var _Layouts_Brenden_Header_NavQuotations__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! @/Layouts/Brenden/Header/NavQuotations */ "./resources/js/Layouts/Brenden/Header/NavQuotations.vue");
/* harmony import */ var _Layouts_Brenden_Header_NavCart__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! @/Layouts/Brenden/Header/NavCart */ "./resources/js/Layouts/Brenden/Header/NavCart.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//











/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {},
  components: {
    AuthAccount: _Layouts_Brenden_Header_AuthAccount__WEBPACK_IMPORTED_MODULE_0__.default,
    AuthLogin: _Layouts_Brenden_Header_AuthLogin__WEBPACK_IMPORTED_MODULE_1__.default,
    AuthSignup: _Layouts_Brenden_Header_AuthSignup__WEBPACK_IMPORTED_MODULE_2__.default,
    NavTrack: _Layouts_Brenden_Header_NavTrack__WEBPACK_IMPORTED_MODULE_3__.default,
    NavSupport: _Layouts_Brenden_Header_NavSupport__WEBPACK_IMPORTED_MODULE_4__.default,
    NavSites: _Layouts_Brenden_Header_NavSites__WEBPACK_IMPORTED_MODULE_5__.default,
    NavLinks: _Layouts_Brenden_Header_NavLinks__WEBPACK_IMPORTED_MODULE_6__.default,
    NavCompare: _Layouts_Brenden_Header_NavCompare__WEBPACK_IMPORTED_MODULE_7__.default,
    NavFavorites: _Layouts_Brenden_Header_NavFavorites__WEBPACK_IMPORTED_MODULE_8__.default,
    NavQuotations: _Layouts_Brenden_Header_NavQuotations__WEBPACK_IMPORTED_MODULE_9__.default,
    NavCart: _Layouts_Brenden_Header_NavCart__WEBPACK_IMPORTED_MODULE_10__.default
  },
  data: function data() {
    return {
      //dialoglogin: false,
      //dialogsignup: false,
      drawer: false,
      group: null,
      items: [{
        link: route('home'),
        icon: 'mdi-home-outline',
        title: 'Home'
      }, {
        link: route('about'),
        icon: 'mdi-bank-outline',
        title: 'About'
      }, {
        link: route('websites'),
        icon: 'mdi-web',
        title: 'Websites'
      }, {
        link: route('design'),
        icon: 'mdi-monitor-cellphone-star',
        title: 'Design'
      }, {
        link: route('domain'),
        icon: 'mdi-television-stop',
        title: 'Domain'
      }, {
        link: route('host'),
        icon: 'mdi-desktop-tower-monitor',
        title: 'Host'
      }, {
        link: route('integrate'),
        icon: 'mdi-monitor-screenshot',
        title: 'Integrate'
      }, {
        link: route('learn'),
        icon: 'mdi-monitor-dashboard',
        title: 'Learn'
      }, {
        link: route('hire'),
        icon: 'mdi-smart-card-reader-outline',
        title: 'Hire'
      }]
    };
  },
  watch: {
    group: function group() {
      this.drawer = false;
    }
  },
  methods: {
    openLogin: function openLogin() {
      this.dialoglogin = true;
      this.dialogsignup = false;
    },
    openSignup: function openSignup() {
      this.dialogsignup = true;
      this.dialoglogin = false;
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavCart.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavCart.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {},
  components: {},
  data: function data() {
    return {
      items: [{
        header: "Cart Items"
      }, {
        action: "15 min",
        avatar: "https://cdn.vuetifyjs.com/images/lists/1.jpg",
        title: "Brunch this weekend?",
        subtitle: "<span class=\"text--primary\">Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?"
      }, {
        divider: true,
        inset: true
      }, {
        action: "2 hr",
        avatar: "https://cdn.vuetifyjs.com/images/lists/2.jpg",
        title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
        subtitle: "<span class=\"text--primary\">to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend."
      }, {
        divider: true,
        inset: true
      }, {
        action: "12 hr",
        avatar: "https://cdn.vuetifyjs.com/images/lists/3.jpg",
        title: "Oui oui",
        subtitle: '<span class="text--primary">Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?'
      }, {
        divider: true,
        inset: true
      }, {
        action: "8 hr",
        avatar: "https://cdn.vuetifyjs.com/images/lists/4.jpg",
        title: "Birthday gift",
        subtitle: '<span class="text--primary">Trevor Hansen</span> &mdash; Have any ideas about what we should get Heidi for her birthday?'
      }, {
        divider: true,
        inset: true
      }, {
        action: "2 sec",
        avatar: "https://cdn.vuetifyjs.com/images/lists/5.jpg",
        title: "Recipe to try",
        subtitle: '<span class="text--primary">Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.'
      }]
    };
  },
  methods: {}
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavCompare.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavCompare.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {},
  components: {},
  data: function data() {
    return {
      items: [{
        header: "Compare Items"
      }, {
        action: "15 min",
        avatar: "https://cdn.vuetifyjs.com/images/lists/1.jpg",
        title: "Brunch this weekend?",
        subtitle: "<span class=\"text--primary\">Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?"
      }, {
        divider: true,
        inset: true
      }, {
        action: "2 hr",
        avatar: "https://cdn.vuetifyjs.com/images/lists/2.jpg",
        title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
        subtitle: "<span class=\"text--primary\">to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend."
      }, {
        divider: true,
        inset: true
      }, {
        action: "12 hr",
        avatar: "https://cdn.vuetifyjs.com/images/lists/3.jpg",
        title: "Oui oui",
        subtitle: '<span class="text--primary">Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?'
      }, {
        divider: true,
        inset: true
      }, {
        action: "8 hr",
        avatar: "https://cdn.vuetifyjs.com/images/lists/4.jpg",
        title: "Birthday gift",
        subtitle: '<span class="text--primary">Trevor Hansen</span> &mdash; Have any ideas about what we should get Heidi for her birthday?'
      }, {
        divider: true,
        inset: true
      }, {
        action: "2 sec",
        avatar: "https://cdn.vuetifyjs.com/images/lists/5.jpg",
        title: "Recipe to try",
        subtitle: '<span class="text--primary">Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.'
      }]
    };
  },
  methods: {}
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavFavorites.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavFavorites.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {},
  components: {},
  data: function data() {
    return {
      items: [{
        header: "Favorite Items"
      }, {
        action: "15 min",
        avatar: "https://cdn.vuetifyjs.com/images/lists/1.jpg",
        title: "Brunch this weekend?",
        subtitle: "<span class=\"text--primary\">Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?"
      }, {
        divider: true,
        inset: true
      }, {
        action: "2 hr",
        avatar: "https://cdn.vuetifyjs.com/images/lists/2.jpg",
        title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
        subtitle: "<span class=\"text--primary\">to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend."
      }, {
        divider: true,
        inset: true
      }, {
        action: "12 hr",
        avatar: "https://cdn.vuetifyjs.com/images/lists/3.jpg",
        title: "Oui oui",
        subtitle: '<span class="text--primary">Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?'
      }, {
        divider: true,
        inset: true
      }, {
        action: "8 hr",
        avatar: "https://cdn.vuetifyjs.com/images/lists/4.jpg",
        title: "Birthday gift",
        subtitle: '<span class="text--primary">Trevor Hansen</span> &mdash; Have any ideas about what we should get Heidi for her birthday?'
      }, {
        divider: true,
        inset: true
      }, {
        action: "2 sec",
        avatar: "https://cdn.vuetifyjs.com/images/lists/5.jpg",
        title: "Recipe to try",
        subtitle: '<span class="text--primary">Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.'
      }]
    };
  },
  methods: {}
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavLinks.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavLinks.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {},
  components: {},
  data: function data() {
    return {
      items: [{
        link: route("home"),
        icon: "mdi-home-outline",
        title: "Home"
      }, {
        link: route("about"),
        icon: "mdi-bank-outline",
        title: "About"
      }, {
        link: route("websites"),
        icon: "mdi-web",
        title: "Websites"
      }, {
        link: route("design"),
        icon: "mdi-monitor-cellphone-star",
        title: "Design"
      }, {
        link: route("domain"),
        icon: "mdi-television-stop",
        title: "Domain"
      }, {
        link: route("host"),
        icon: "mdi-desktop-tower-monitor",
        title: "Host"
      }, {
        link: route("integrate"),
        icon: "mdi-monitor-screenshot",
        title: "Integrate"
      }, {
        link: route("learn"),
        icon: "mdi-monitor-dashboard",
        title: "Learn"
      }, {
        link: route("hire"),
        icon: "mdi-smart-card-reader-outline",
        title: "Hire"
      }]
    };
  },
  methods: {}
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavQuotations.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavQuotations.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {},
  components: {},
  data: function data() {
    return {
      items: [{
        header: "Quotation Requests"
      }, {
        action: "15 min",
        avatar: "https://cdn.vuetifyjs.com/images/lists/1.jpg",
        title: "Brunch this weekend?",
        subtitle: "<span class=\"text--primary\">Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?"
      }, {
        divider: true,
        inset: true
      }, {
        action: "2 hr",
        avatar: "https://cdn.vuetifyjs.com/images/lists/2.jpg",
        title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
        subtitle: "<span class=\"text--primary\">to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend."
      }, {
        divider: true,
        inset: true
      }, {
        action: "12 hr",
        avatar: "https://cdn.vuetifyjs.com/images/lists/3.jpg",
        title: "Oui oui",
        subtitle: '<span class="text--primary">Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?'
      }, {
        divider: true,
        inset: true
      }, {
        action: "8 hr",
        avatar: "https://cdn.vuetifyjs.com/images/lists/4.jpg",
        title: "Birthday gift",
        subtitle: '<span class="text--primary">Trevor Hansen</span> &mdash; Have any ideas about what we should get Heidi for her birthday?'
      }, {
        divider: true,
        inset: true
      }, {
        action: "2 sec",
        avatar: "https://cdn.vuetifyjs.com/images/lists/5.jpg",
        title: "Recipe to try",
        subtitle: '<span class="text--primary">Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.'
      }]
    };
  },
  methods: {}
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavSites.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavSites.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {},
  components: {},
  data: function data() {
    return {
      brenden: [{
        header: 'E-Web',
        title: 'Brenden Web',
        logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'
      }, {
        header: 'E-Cyber',
        title: 'Brenden Cyber',
        logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'
      }, {
        header: 'E-Studio',
        title: 'Brenden Studio',
        logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'
      }, {
        header: 'E-Garden',
        title: 'Brenden Garden',
        logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'
      }],
      genset: [{
        header: 'Electrical',
        title: 'GenSet Electrical',
        logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'
      }, {
        header: 'Electronic',
        title: 'GenSet Electronic',
        logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'
      }, {
        header: 'Automation',
        title: 'GenSet Automation',
        logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'
      }, {
        header: 'Construction',
        title: 'GenSet Construction',
        logo: 'https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo'
      }]
    };
  },
  methods: {}
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavSupport.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavSupport.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {},
  components: {},
  data: function data() {
    return {
      items: [{
        title: 'Customer Care',
        href: route('support')
      }, {
        title: 'Brenden Account',
        href: route('support.account')
      }, {
        title: 'Brenden Shopping',
        href: route('support.shopping')
      }, {
        title: 'Brenden Orders',
        href: route('support.orders')
      }, {
        title: 'Brenden Web Partners',
        href: route('support.partners')
      }, {
        title: 'Interested in Brenden',
        href: route('support.interest')
      }, {
        title: 'Frequently Asked Questions',
        href: route('support.faq')
      }, {
        title: 'Payment & Reward Policy',
        href: route('support.paymentoffers')
      }, {
        title: 'Shipping & Delivery Policy',
        href: route('support.shippingdelivery')
      }, {
        title: 'Return & Refund Policy',
        href: route('support.returnrefund')
      }, {
        title: 'Privacy & Cookies Policy',
        href: route('support.privacycookies')
      }, {
        title: 'Terms & Conditions',
        href: route('support.termsconditions')
      }]
    };
  },
  methods: {}
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavTrack.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavTrack.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {},
  components: {},
  data: function data() {
    return {
      messages: [{
        from: 'Order Placed',
        message: "Sure, I'll see you later.",
        time: '10:42am',
        color: 'deep-purple lighten-1'
      }, {
        from: 'Order Confirmed',
        message: 'Yeah, sure. Does 1:00pm work?',
        time: '10:37am',
        color: 'green'
      }, {
        from: 'Order Processed',
        message: 'Did you still want to grab lunch today?',
        time: '9:47am',
        color: 'deep-purple lighten-1'
      }, {
        from: 'Order Shipped',
        message: 'Did you still want to grab lunch today?',
        time: '9:47am',
        color: 'deep-purple lighten-1'
      }, {
        from: 'Order Delivered',
        message: 'Did you still want to grab lunch today?',
        time: '9:47am',
        color: 'deep-purple lighten-1'
      }]
    };
  },
  methods: {}
});

/***/ }),

/***/ "./resources/js/Mixins/formvalidation.js":
/*!***********************************************!*\
  !*** ./resources/js/Mixins/formvalidation.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
var formvalidation = {
  data: function data() {
    var _this = this;

    return {
      rules: {
        required: function required(v) {
          return !!v || 'Cannot be empty!';
        },
        length: function length(len) {
          return function (v) {
            return (v || '').length >= len || "Invalid character length, required ".concat(len);
          };
        },
        min: function min(len) {
          return function (v) {
            return (v || '').length >= len || "Use ".concat(len, " characters or more");
          };
        },
        max: function max(len) {
          return function (v) {
            return (v || '').length <= len || "Cannot exceed ".concat(len, " characters");
          };
        },
        email: function email(v) {
          return !!(v || '').match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) || 'Please enter a valid email';
        },
        password: function password(v) {
          return !!(v || '').match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/) || 'Use 8 - 20 characters with a capital letter, small letter, a number and a special character';
        },
        confirm: function confirm(v) {
          return !!(v || '') === _this.password || 'Password does not match';
        }
      },
      specialRules: [function (v) {
        return !!v || 'Name is required';
      }, function (v) {
        return v.length >= 10 || 'Name must be less than 10 characters';
      }, function (v) {
        return /.+@.+/.test(v) || 'E-mail must be valid';
      }],
      wordsRules: [function (v) {
        return v.trim().split(' ').length <= 5 || 'Max 5 words';
      }]
    };
  },
  computed: {},
  created: function created() {},
  watch: {},
  methods: {}
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (formvalidation);

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/AuthAccount.vue":
/*!*************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/AuthAccount.vue ***!
  \*************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _AuthAccount_vue_vue_type_template_id_7eba5ce2_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AuthAccount.vue?vue&type=template&id=7eba5ce2&scoped=true& */ "./resources/js/Layouts/Brenden/Header/AuthAccount.vue?vue&type=template&id=7eba5ce2&scoped=true&");
/* harmony import */ var _AuthAccount_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AuthAccount.vue?vue&type=script&lang=js& */ "./resources/js/Layouts/Brenden/Header/AuthAccount.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _AuthAccount_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _AuthAccount_vue_vue_type_template_id_7eba5ce2_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _AuthAccount_vue_vue_type_template_id_7eba5ce2_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "7eba5ce2",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Layouts/Brenden/Header/AuthAccount.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/AuthLogin.vue":
/*!***********************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/AuthLogin.vue ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _AuthLogin_vue_vue_type_template_id_5d98c75e_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AuthLogin.vue?vue&type=template&id=5d98c75e&scoped=true& */ "./resources/js/Layouts/Brenden/Header/AuthLogin.vue?vue&type=template&id=5d98c75e&scoped=true&");
/* harmony import */ var _AuthLogin_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AuthLogin.vue?vue&type=script&lang=js& */ "./resources/js/Layouts/Brenden/Header/AuthLogin.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _AuthLogin_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _AuthLogin_vue_vue_type_template_id_5d98c75e_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _AuthLogin_vue_vue_type_template_id_5d98c75e_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "5d98c75e",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Layouts/Brenden/Header/AuthLogin.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/AuthSignup.vue":
/*!************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/AuthSignup.vue ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _AuthSignup_vue_vue_type_template_id_bc4bdd1a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AuthSignup.vue?vue&type=template&id=bc4bdd1a&scoped=true& */ "./resources/js/Layouts/Brenden/Header/AuthSignup.vue?vue&type=template&id=bc4bdd1a&scoped=true&");
/* harmony import */ var _AuthSignup_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AuthSignup.vue?vue&type=script&lang=js& */ "./resources/js/Layouts/Brenden/Header/AuthSignup.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _AuthSignup_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _AuthSignup_vue_vue_type_template_id_bc4bdd1a_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _AuthSignup_vue_vue_type_template_id_bc4bdd1a_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "bc4bdd1a",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Layouts/Brenden/Header/AuthSignup.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavBar.vue":
/*!********************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavBar.vue ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _NavBar_vue_vue_type_template_id_23b8f3fa_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NavBar.vue?vue&type=template&id=23b8f3fa&scoped=true& */ "./resources/js/Layouts/Brenden/Header/NavBar.vue?vue&type=template&id=23b8f3fa&scoped=true&");
/* harmony import */ var _NavBar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NavBar.vue?vue&type=script&lang=js& */ "./resources/js/Layouts/Brenden/Header/NavBar.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _NavBar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _NavBar_vue_vue_type_template_id_23b8f3fa_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _NavBar_vue_vue_type_template_id_23b8f3fa_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "23b8f3fa",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Layouts/Brenden/Header/NavBar.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavCart.vue":
/*!*********************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavCart.vue ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _NavCart_vue_vue_type_template_id_41e81fe0_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NavCart.vue?vue&type=template&id=41e81fe0&scoped=true& */ "./resources/js/Layouts/Brenden/Header/NavCart.vue?vue&type=template&id=41e81fe0&scoped=true&");
/* harmony import */ var _NavCart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NavCart.vue?vue&type=script&lang=js& */ "./resources/js/Layouts/Brenden/Header/NavCart.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _NavCart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _NavCart_vue_vue_type_template_id_41e81fe0_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _NavCart_vue_vue_type_template_id_41e81fe0_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "41e81fe0",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Layouts/Brenden/Header/NavCart.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavCompare.vue":
/*!************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavCompare.vue ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _NavCompare_vue_vue_type_template_id_065f3c56_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NavCompare.vue?vue&type=template&id=065f3c56&scoped=true& */ "./resources/js/Layouts/Brenden/Header/NavCompare.vue?vue&type=template&id=065f3c56&scoped=true&");
/* harmony import */ var _NavCompare_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NavCompare.vue?vue&type=script&lang=js& */ "./resources/js/Layouts/Brenden/Header/NavCompare.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _NavCompare_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _NavCompare_vue_vue_type_template_id_065f3c56_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _NavCompare_vue_vue_type_template_id_065f3c56_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "065f3c56",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Layouts/Brenden/Header/NavCompare.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavFavorites.vue":
/*!**************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavFavorites.vue ***!
  \**************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _NavFavorites_vue_vue_type_template_id_5a80b047_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NavFavorites.vue?vue&type=template&id=5a80b047&scoped=true& */ "./resources/js/Layouts/Brenden/Header/NavFavorites.vue?vue&type=template&id=5a80b047&scoped=true&");
/* harmony import */ var _NavFavorites_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NavFavorites.vue?vue&type=script&lang=js& */ "./resources/js/Layouts/Brenden/Header/NavFavorites.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _NavFavorites_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _NavFavorites_vue_vue_type_template_id_5a80b047_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _NavFavorites_vue_vue_type_template_id_5a80b047_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "5a80b047",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Layouts/Brenden/Header/NavFavorites.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavLinks.vue":
/*!**********************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavLinks.vue ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _NavLinks_vue_vue_type_template_id_dd777eae_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NavLinks.vue?vue&type=template&id=dd777eae&scoped=true& */ "./resources/js/Layouts/Brenden/Header/NavLinks.vue?vue&type=template&id=dd777eae&scoped=true&");
/* harmony import */ var _NavLinks_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NavLinks.vue?vue&type=script&lang=js& */ "./resources/js/Layouts/Brenden/Header/NavLinks.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _NavLinks_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _NavLinks_vue_vue_type_template_id_dd777eae_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _NavLinks_vue_vue_type_template_id_dd777eae_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "dd777eae",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Layouts/Brenden/Header/NavLinks.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavQuotations.vue":
/*!***************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavQuotations.vue ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _NavQuotations_vue_vue_type_template_id_8b0af0b2_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NavQuotations.vue?vue&type=template&id=8b0af0b2&scoped=true& */ "./resources/js/Layouts/Brenden/Header/NavQuotations.vue?vue&type=template&id=8b0af0b2&scoped=true&");
/* harmony import */ var _NavQuotations_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NavQuotations.vue?vue&type=script&lang=js& */ "./resources/js/Layouts/Brenden/Header/NavQuotations.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _NavQuotations_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _NavQuotations_vue_vue_type_template_id_8b0af0b2_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _NavQuotations_vue_vue_type_template_id_8b0af0b2_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "8b0af0b2",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Layouts/Brenden/Header/NavQuotations.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavSites.vue":
/*!**********************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavSites.vue ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _NavSites_vue_vue_type_template_id_5b68cd08_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NavSites.vue?vue&type=template&id=5b68cd08&scoped=true& */ "./resources/js/Layouts/Brenden/Header/NavSites.vue?vue&type=template&id=5b68cd08&scoped=true&");
/* harmony import */ var _NavSites_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NavSites.vue?vue&type=script&lang=js& */ "./resources/js/Layouts/Brenden/Header/NavSites.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _NavSites_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _NavSites_vue_vue_type_template_id_5b68cd08_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _NavSites_vue_vue_type_template_id_5b68cd08_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "5b68cd08",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Layouts/Brenden/Header/NavSites.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavSupport.vue":
/*!************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavSupport.vue ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _NavSupport_vue_vue_type_template_id_b1e7c082_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NavSupport.vue?vue&type=template&id=b1e7c082&scoped=true& */ "./resources/js/Layouts/Brenden/Header/NavSupport.vue?vue&type=template&id=b1e7c082&scoped=true&");
/* harmony import */ var _NavSupport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NavSupport.vue?vue&type=script&lang=js& */ "./resources/js/Layouts/Brenden/Header/NavSupport.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _NavSupport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _NavSupport_vue_vue_type_template_id_b1e7c082_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _NavSupport_vue_vue_type_template_id_b1e7c082_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "b1e7c082",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Layouts/Brenden/Header/NavSupport.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavTrack.vue":
/*!**********************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavTrack.vue ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _NavTrack_vue_vue_type_template_id_1c89c93b_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NavTrack.vue?vue&type=template&id=1c89c93b&scoped=true& */ "./resources/js/Layouts/Brenden/Header/NavTrack.vue?vue&type=template&id=1c89c93b&scoped=true&");
/* harmony import */ var _NavTrack_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NavTrack.vue?vue&type=script&lang=js& */ "./resources/js/Layouts/Brenden/Header/NavTrack.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _NavTrack_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _NavTrack_vue_vue_type_template_id_1c89c93b_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _NavTrack_vue_vue_type_template_id_1c89c93b_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "1c89c93b",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Layouts/Brenden/Header/NavTrack.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/AuthAccount.vue?vue&type=script&lang=js&":
/*!**************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/AuthAccount.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthAccount_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AuthAccount.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthAccount.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthAccount_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/AuthLogin.vue?vue&type=script&lang=js&":
/*!************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/AuthLogin.vue?vue&type=script&lang=js& ***!
  \************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthLogin_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AuthLogin.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthLogin.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthLogin_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/AuthSignup.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/AuthSignup.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthSignup_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AuthSignup.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthSignup.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthSignup_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavBar.vue?vue&type=script&lang=js&":
/*!*********************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavBar.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavBar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavBar.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavBar.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavBar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavCart.vue?vue&type=script&lang=js&":
/*!**********************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavCart.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavCart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavCart.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavCart.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavCart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavCompare.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavCompare.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavCompare_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavCompare.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavCompare.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavCompare_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavFavorites.vue?vue&type=script&lang=js&":
/*!***************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavFavorites.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavFavorites_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavFavorites.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavFavorites.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavFavorites_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavLinks.vue?vue&type=script&lang=js&":
/*!***********************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavLinks.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavLinks_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavLinks.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavLinks.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavLinks_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavQuotations.vue?vue&type=script&lang=js&":
/*!****************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavQuotations.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavQuotations_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavQuotations.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavQuotations.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavQuotations_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavSites.vue?vue&type=script&lang=js&":
/*!***********************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavSites.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavSites_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavSites.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavSites.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavSites_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavSupport.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavSupport.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavSupport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavSupport.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavSupport.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavSupport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavTrack.vue?vue&type=script&lang=js&":
/*!***********************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavTrack.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavTrack_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavTrack.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavTrack.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavTrack_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/AuthAccount.vue?vue&type=template&id=7eba5ce2&scoped=true&":
/*!********************************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/AuthAccount.vue?vue&type=template&id=7eba5ce2&scoped=true& ***!
  \********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthAccount_vue_vue_type_template_id_7eba5ce2_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
/* harmony export */   "staticRenderFns": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthAccount_vue_vue_type_template_id_7eba5ce2_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthAccount_vue_vue_type_template_id_7eba5ce2_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AuthAccount.vue?vue&type=template&id=7eba5ce2&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthAccount.vue?vue&type=template&id=7eba5ce2&scoped=true&");


/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/AuthLogin.vue?vue&type=template&id=5d98c75e&scoped=true&":
/*!******************************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/AuthLogin.vue?vue&type=template&id=5d98c75e&scoped=true& ***!
  \******************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthLogin_vue_vue_type_template_id_5d98c75e_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
/* harmony export */   "staticRenderFns": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthLogin_vue_vue_type_template_id_5d98c75e_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthLogin_vue_vue_type_template_id_5d98c75e_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AuthLogin.vue?vue&type=template&id=5d98c75e&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthLogin.vue?vue&type=template&id=5d98c75e&scoped=true&");


/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/AuthSignup.vue?vue&type=template&id=bc4bdd1a&scoped=true&":
/*!*******************************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/AuthSignup.vue?vue&type=template&id=bc4bdd1a&scoped=true& ***!
  \*******************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthSignup_vue_vue_type_template_id_bc4bdd1a_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
/* harmony export */   "staticRenderFns": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthSignup_vue_vue_type_template_id_bc4bdd1a_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AuthSignup_vue_vue_type_template_id_bc4bdd1a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AuthSignup.vue?vue&type=template&id=bc4bdd1a&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthSignup.vue?vue&type=template&id=bc4bdd1a&scoped=true&");


/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavBar.vue?vue&type=template&id=23b8f3fa&scoped=true&":
/*!***************************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavBar.vue?vue&type=template&id=23b8f3fa&scoped=true& ***!
  \***************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavBar_vue_vue_type_template_id_23b8f3fa_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
/* harmony export */   "staticRenderFns": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavBar_vue_vue_type_template_id_23b8f3fa_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavBar_vue_vue_type_template_id_23b8f3fa_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavBar.vue?vue&type=template&id=23b8f3fa&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavBar.vue?vue&type=template&id=23b8f3fa&scoped=true&");


/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavCart.vue?vue&type=template&id=41e81fe0&scoped=true&":
/*!****************************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavCart.vue?vue&type=template&id=41e81fe0&scoped=true& ***!
  \****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavCart_vue_vue_type_template_id_41e81fe0_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
/* harmony export */   "staticRenderFns": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavCart_vue_vue_type_template_id_41e81fe0_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavCart_vue_vue_type_template_id_41e81fe0_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavCart.vue?vue&type=template&id=41e81fe0&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavCart.vue?vue&type=template&id=41e81fe0&scoped=true&");


/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavCompare.vue?vue&type=template&id=065f3c56&scoped=true&":
/*!*******************************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavCompare.vue?vue&type=template&id=065f3c56&scoped=true& ***!
  \*******************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavCompare_vue_vue_type_template_id_065f3c56_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
/* harmony export */   "staticRenderFns": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavCompare_vue_vue_type_template_id_065f3c56_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavCompare_vue_vue_type_template_id_065f3c56_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavCompare.vue?vue&type=template&id=065f3c56&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavCompare.vue?vue&type=template&id=065f3c56&scoped=true&");


/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavFavorites.vue?vue&type=template&id=5a80b047&scoped=true&":
/*!*********************************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavFavorites.vue?vue&type=template&id=5a80b047&scoped=true& ***!
  \*********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavFavorites_vue_vue_type_template_id_5a80b047_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
/* harmony export */   "staticRenderFns": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavFavorites_vue_vue_type_template_id_5a80b047_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavFavorites_vue_vue_type_template_id_5a80b047_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavFavorites.vue?vue&type=template&id=5a80b047&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavFavorites.vue?vue&type=template&id=5a80b047&scoped=true&");


/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavLinks.vue?vue&type=template&id=dd777eae&scoped=true&":
/*!*****************************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavLinks.vue?vue&type=template&id=dd777eae&scoped=true& ***!
  \*****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavLinks_vue_vue_type_template_id_dd777eae_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
/* harmony export */   "staticRenderFns": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavLinks_vue_vue_type_template_id_dd777eae_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavLinks_vue_vue_type_template_id_dd777eae_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavLinks.vue?vue&type=template&id=dd777eae&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavLinks.vue?vue&type=template&id=dd777eae&scoped=true&");


/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavQuotations.vue?vue&type=template&id=8b0af0b2&scoped=true&":
/*!**********************************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavQuotations.vue?vue&type=template&id=8b0af0b2&scoped=true& ***!
  \**********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavQuotations_vue_vue_type_template_id_8b0af0b2_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
/* harmony export */   "staticRenderFns": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavQuotations_vue_vue_type_template_id_8b0af0b2_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavQuotations_vue_vue_type_template_id_8b0af0b2_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavQuotations.vue?vue&type=template&id=8b0af0b2&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavQuotations.vue?vue&type=template&id=8b0af0b2&scoped=true&");


/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavSites.vue?vue&type=template&id=5b68cd08&scoped=true&":
/*!*****************************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavSites.vue?vue&type=template&id=5b68cd08&scoped=true& ***!
  \*****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavSites_vue_vue_type_template_id_5b68cd08_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
/* harmony export */   "staticRenderFns": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavSites_vue_vue_type_template_id_5b68cd08_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavSites_vue_vue_type_template_id_5b68cd08_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavSites.vue?vue&type=template&id=5b68cd08&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavSites.vue?vue&type=template&id=5b68cd08&scoped=true&");


/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavSupport.vue?vue&type=template&id=b1e7c082&scoped=true&":
/*!*******************************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavSupport.vue?vue&type=template&id=b1e7c082&scoped=true& ***!
  \*******************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavSupport_vue_vue_type_template_id_b1e7c082_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
/* harmony export */   "staticRenderFns": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavSupport_vue_vue_type_template_id_b1e7c082_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavSupport_vue_vue_type_template_id_b1e7c082_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavSupport.vue?vue&type=template&id=b1e7c082&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavSupport.vue?vue&type=template&id=b1e7c082&scoped=true&");


/***/ }),

/***/ "./resources/js/Layouts/Brenden/Header/NavTrack.vue?vue&type=template&id=1c89c93b&scoped=true&":
/*!*****************************************************************************************************!*\
  !*** ./resources/js/Layouts/Brenden/Header/NavTrack.vue?vue&type=template&id=1c89c93b&scoped=true& ***!
  \*****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavTrack_vue_vue_type_template_id_1c89c93b_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
/* harmony export */   "staticRenderFns": () => /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavTrack_vue_vue_type_template_id_1c89c93b_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavTrack_vue_vue_type_template_id_1c89c93b_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NavTrack.vue?vue&type=template&id=1c89c93b&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavTrack.vue?vue&type=template&id=1c89c93b&scoped=true&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthAccount.vue?vue&type=template&id=7eba5ce2&scoped=true&":
/*!***********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthAccount.vue?vue&type=template&id=7eba5ce2&scoped=true& ***!
  \***********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* binding */ render,
/* harmony export */   "staticRenderFns": () => /* binding */ staticRenderFns
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "v-menu",
        {
          attrs: { "offset-y": "", transition: "scale-transition", bottom: "" },
          scopedSlots: _vm._u([
            {
              key: "activator",
              fn: function(ref) {
                var on = ref.on
                var attrs = ref.attrs
                return [
                  _c(
                    "v-btn",
                    _vm._g(
                      _vm._b(
                        {
                          attrs: { text: "", small: "" },
                          on: {
                            click: function($event) {
                              _vm.open = !_vm.open
                            }
                          }
                        },
                        "v-btn",
                        attrs,
                        false
                      ),
                      on
                    ),
                    [
                      _c("v-avatar", { attrs: { size: "30" } }, [
                        _c("img", {
                          attrs: {
                            src: _vm.$page.props.user.profile_photo_url,
                            alt: _vm.$page.props.user.name
                          }
                        })
                      ]),
                      _vm._v(" "),
                      _c(
                        "span",
                        { staticClass: "hidden-xs-only" },
                        [
                          _vm._v(_vm._s(_vm.$page.props.user.name) + " "),
                          _c("v-icon", [
                            _vm._v(
                              _vm._s(
                                _vm.open ? "mdi-chevron-up" : "mdi-chevron-down"
                              )
                            )
                          ])
                        ],
                        1
                      )
                    ],
                    1
                  )
                ]
              }
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "v-list",
            { attrs: { dense: "" } },
            [
              _vm._l(_vm.profileitems, function(profileitem, index) {
                return _c(
                  "v-list-item",
                  { key: index },
                  [
                    _c("v-list-item-title", [
                      _c(
                        "a",
                        { attrs: { href: _vm.route("profile.show") } },
                        [
                          _c("v-icon", [_vm._v(_vm._s(profileitem.icon))]),
                          _vm._v(_vm._s(profileitem.title))
                        ],
                        1
                      )
                    ])
                  ],
                  1
                )
              }),
              _vm._v(" "),
              _c("v-divider"),
              _vm._v(" "),
              _c(
                "v-list-item",
                [
                  _c("v-list-item-title", [
                    _c(
                      "a",
                      {
                        on: {
                          click: function($event) {
                            $event.stopPropagation()
                            return _vm.logout()
                          }
                        }
                      },
                      [
                        _c("v-icon", [_vm._v("mdi-account-off-outline")]),
                        _vm._v("Logout")
                      ],
                      1
                    )
                  ])
                ],
                1
              )
            ],
            2
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthLogin.vue?vue&type=template&id=5d98c75e&scoped=true&":
/*!*********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthLogin.vue?vue&type=template&id=5d98c75e&scoped=true& ***!
  \*********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* binding */ render,
/* harmony export */   "staticRenderFns": () => /* binding */ staticRenderFns
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      [
        _c(
          "v-btn",
          {
            attrs: { color: "primary", dark: "", rounded: "", small: "" },
            on: {
              click: function($event) {
                $event.stopPropagation()
                _vm.dialoglogin = true
              }
            }
          },
          [
            _c("v-icon", { attrs: { left: "" } }, [
              _vm._v("mdi-account-circle")
            ]),
            _c("span", [_vm._v("Login")])
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "v-dialog",
          {
            attrs: { persistent: "", width: "430" },
            model: {
              value: _vm.dialoglogin,
              callback: function($$v) {
                _vm.dialoglogin = $$v
              },
              expression: "dialoglogin"
            }
          },
          [
            _c(
              "v-card",
              { staticClass: "elevation-16" },
              [
                _c(
                  "v-card-title",
                  { staticClass: "headline" },
                  [
                    _c(
                      "v-btn",
                      { attrs: { small: "", text: "", color: "primary" } },
                      [
                        _c("v-icon", { attrs: { left: "" } }, [
                          _vm._v("mdi-account-circle")
                        ]),
                        _vm._v("Login")
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c("span", [_vm._v("or")]),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        attrs: {
                          small: "",
                          text: "",
                          plain: "",
                          color: "grey"
                        },
                        on: {
                          click: function($event) {
                            $event.stopPropagation()
                            _vm.dialogsignup = true
                          }
                        }
                      },
                      [
                        _c("v-icon", { attrs: { left: "" } }, [
                          _vm._v("mdi-account-plus")
                        ]),
                        _vm._v("Signup")
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c("v-spacer"),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        staticClass: "mx-0",
                        attrs: { icon: "" },
                        on: {
                          click: function($event) {
                            _vm.dialoglogin = false
                          }
                        }
                      },
                      [_c("v-icon", [_vm._v("mdi-close-circle-outline")])],
                      1
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-card-text",
                  { staticClass: "mb-0 pb-0" },
                  [
                    _c(
                      "p",
                      {
                        staticClass:
                          "grey--text text--lighten-2 text-subtitle-2 ma-0 pa-0"
                      },
                      [
                        _vm._v(
                          "Please login to enjoy our awesome shopping experience!"
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "v-form",
                      {
                        ref: "form",
                        staticClass: "pa-2",
                        model: {
                          value: _vm.form,
                          callback: function($$v) {
                            _vm.form = $$v
                          },
                          expression: "form"
                        }
                      },
                      [
                        _c("v-text-field", {
                          staticClass: "mx-auto my-1",
                          attrs: {
                            outlined: "",
                            dense: "",
                            required: "",
                            clearable: "",
                            type: "email",
                            rules: [_vm.rules.email],
                            label: "Email",
                            "clear-icon": "mdi-close-circle",
                            "prepend-icon": "mdi-email"
                          },
                          model: {
                            value: _vm.email,
                            callback: function($$v) {
                              _vm.email = $$v
                            },
                            expression: "email"
                          }
                        }),
                        _vm._v(" "),
                        _c("v-text-field", {
                          staticClass: "mx-auto my-1",
                          attrs: {
                            outlined: "",
                            dense: "",
                            required: "",
                            clearable: "",
                            type: _vm.show ? "text" : "password",
                            rules: [
                              _vm.rules.password,
                              _vm.rules.min(8),
                              _vm.rules.max(20)
                            ],
                            counter: "20",
                            label: "Password",
                            "clear-icon": "mdi-close-circle",
                            "append-icon": _vm.show ? "mdi-eye" : "mdi-eye-off",
                            "prepend-icon": "mdi-lock"
                          },
                          on: {
                            "click:append": function($event) {
                              _vm.show = !_vm.show
                            }
                          },
                          model: {
                            value: _vm.password,
                            callback: function($$v) {
                              _vm.password = $$v
                            },
                            expression: "password"
                          }
                        }),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "d-flex justify-space-between" },
                          [
                            _c("v-checkbox", {
                              staticClass: "mt-0 ml-1 pa-0",
                              attrs: { dense: "", color: "primary" },
                              scopedSlots: _vm._u([
                                {
                                  key: "label",
                                  fn: function() {
                                    return [_vm._v("Remember me?")]
                                  },
                                  proxy: true
                                }
                              ]),
                              model: {
                                value: _vm.remember,
                                callback: function($$v) {
                                  _vm.remember = $$v
                                },
                                expression: "remember"
                              }
                            }),
                            _vm._v(" "),
                            _c(
                              "v-btn",
                              {
                                staticClass: "white--text float-right",
                                attrs: {
                                  small: "",
                                  disabled: !_vm.form,
                                  loading: _vm.isLoading,
                                  color: "primary",
                                  depressed: ""
                                },
                                on: {
                                  click: function($event) {
                                    $event.stopPropagation()
                                    return _vm.login()
                                  }
                                }
                              },
                              [_vm._v("Login")]
                            )
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "d-flex justify-space-between" },
                          [
                            _c("span", [
                              _c("a", { attrs: { href: "" } }, [
                                _vm._v("Forgot ")
                              ]),
                              _vm._v(" password?")
                            ]),
                            _vm._v(" "),
                            _c("span", [
                              _vm._v("Help! I Need "),
                              _c(
                                "a",
                                {
                                  on: {
                                    click: function($event) {
                                      $event.stopPropagation()
                                      _vm.dialogsignup = true
                                    }
                                  }
                                },
                                [_vm._v(" an account?")]
                              )
                            ])
                          ]
                        )
                      ],
                      1
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-card-text",
                  {
                    staticClass:
                      "text-center text--lighten-2 text-subtitle-2 ma-0 pa-0"
                  },
                  [_vm._v("Alternatively Login with: ")]
                ),
                _vm._v(" "),
                _c("v-divider"),
                _vm._v(" "),
                _c(
                  "v-card-actions",
                  { staticClass: "justify-space-between " },
                  [
                    _c(
                      "v-btn",
                      {
                        staticClass: "text-capitalize",
                        attrs: { small: "", dark: "", color: "blue darken-1" }
                      },
                      [
                        _c("v-icon", { attrs: { dense: "" } }, [
                          _vm._v("mdi-google")
                        ]),
                        _vm._v("Google")
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        staticClass: "text-capitalize",
                        attrs: { small: "", dark: "", color: "blue darken-1" }
                      },
                      [
                        _c("v-icon", { attrs: { dense: "" } }, [
                          _vm._v("mdi-facebook")
                        ]),
                        _vm._v("Facebook")
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        staticClass: "text-capitalize",
                        attrs: { small: "", dark: "", color: "blue darken-1" }
                      },
                      [
                        _c("v-icon", { attrs: { dense: "" } }, [
                          _vm._v("mdi-twitter")
                        ]),
                        _vm._v("Twitter")
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        staticClass: "text-capitalize",
                        attrs: { small: "", dark: "", color: "blue darken-1" }
                      },
                      [
                        _c("v-icon", { attrs: { dense: "" } }, [
                          _vm._v("mdi-linkedin")
                        ]),
                        _vm._v("LinkedIn")
                      ],
                      1
                    )
                  ],
                  1
                )
              ],
              1
            )
          ],
          1
        )
      ]
    ],
    2
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthSignup.vue?vue&type=template&id=bc4bdd1a&scoped=true&":
/*!**********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/AuthSignup.vue?vue&type=template&id=bc4bdd1a&scoped=true& ***!
  \**********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* binding */ render,
/* harmony export */   "staticRenderFns": () => /* binding */ staticRenderFns
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      [
        _c(
          "v-btn",
          {
            attrs: { color: "primary", dark: "", rounded: "", small: "" },
            on: {
              click: function($event) {
                $event.stopPropagation()
                _vm.dialogsignup = true
              }
            }
          },
          [
            _c("v-icon", { attrs: { left: "" } }, [_vm._v("mdi-account-plus")]),
            _c("span", [_vm._v("Signup")])
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "v-dialog",
          {
            attrs: { persistent: "", width: "430" },
            model: {
              value: _vm.dialogsignup,
              callback: function($$v) {
                _vm.dialogsignup = $$v
              },
              expression: "dialogsignup"
            }
          },
          [
            _c(
              "v-card",
              { staticClass: "elevation-16" },
              [
                _c(
                  "v-card-title",
                  { staticClass: "headline" },
                  [
                    _c(
                      "v-btn",
                      {
                        attrs: {
                          small: "",
                          text: "",
                          plain: "",
                          color: "grey"
                        },
                        on: {
                          click: function($event) {
                            $event.stopPropagation()
                            _vm.dialoglogin = true
                          }
                        }
                      },
                      [
                        _c("v-icon", { attrs: { left: "" } }, [
                          _vm._v("mdi-account-circle")
                        ]),
                        _vm._v("Login")
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c("span", [_vm._v("or")]),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      { attrs: { small: "", text: "", color: "primary" } },
                      [
                        _c("v-icon", { attrs: { left: "" } }, [
                          _vm._v("mdi-account-plus")
                        ]),
                        _vm._v("Signup")
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c("v-spacer"),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        staticClass: "mx-0",
                        attrs: { icon: "" },
                        on: {
                          click: function($event) {
                            _vm.dialogsignup = false
                          }
                        }
                      },
                      [_c("v-icon", [_vm._v("mdi-close-circle-outline")])],
                      1
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-card-text",
                  { staticClass: "mb-0 pb-0" },
                  [
                    _c(
                      "p",
                      {
                        staticClass:
                          "grey--text text--lighten-2 text-subtitle-2 ma-0 pa-0"
                      },
                      [
                        _vm._v(
                          "Just few minutes and create a Brenden account for free!"
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "v-form",
                      {
                        ref: "form",
                        staticClass: "pa-2",
                        model: {
                          value: _vm.form,
                          callback: function($$v) {
                            _vm.form = $$v
                          },
                          expression: "form"
                        }
                      },
                      [
                        _c("v-text-field", {
                          staticClass: "mx-auto my-1",
                          attrs: {
                            outlined: "",
                            dense: "",
                            required: "",
                            clearable: "",
                            rules: [_vm.rules.required],
                            label: "Username",
                            "clear-icon": "mdi-close-circle",
                            "prepend-icon": "mdi-account"
                          },
                          model: {
                            value: _vm.name,
                            callback: function($$v) {
                              _vm.name = $$v
                            },
                            expression: "name"
                          }
                        }),
                        _vm._v(" "),
                        _c("v-text-field", {
                          staticClass: "mx-auto my-1",
                          attrs: {
                            outlined: "",
                            dense: "",
                            required: "",
                            clearable: "",
                            type: "email",
                            rules: [_vm.rules.email],
                            label: "Email",
                            "clear-icon": "mdi-close-circle",
                            "prepend-icon": "mdi-email"
                          },
                          model: {
                            value: _vm.email,
                            callback: function($$v) {
                              _vm.email = $$v
                            },
                            expression: "email"
                          }
                        }),
                        _vm._v(" "),
                        _c("v-text-field", {
                          staticClass: "mx-auto my-1",
                          attrs: {
                            outlined: "",
                            dense: "",
                            required: "",
                            clearable: "",
                            type: _vm.show ? "text" : "password",
                            rules: [
                              _vm.rules.password,
                              _vm.rules.min(8),
                              _vm.rules.max(20)
                            ],
                            counter: "20",
                            label: "Password",
                            "clear-icon": "mdi-close-circle",
                            "append-icon": _vm.show ? "mdi-eye" : "mdi-eye-off",
                            "prepend-icon": "mdi-lock"
                          },
                          on: {
                            "click:append": function($event) {
                              _vm.show = !_vm.show
                            }
                          },
                          model: {
                            value: _vm.password,
                            callback: function($$v) {
                              _vm.password = $$v
                            },
                            expression: "password"
                          }
                        }),
                        _vm._v(" "),
                        _c("v-text-field", {
                          staticClass: "mx-auto my-1",
                          attrs: {
                            outlined: "",
                            dense: "",
                            required: "",
                            clearable: "",
                            type: "password",
                            counter: "20",
                            label: "Confirm Password",
                            "clear-icon": "mdi-close-circle",
                            "prepend-icon": "mdi-lock"
                          },
                          model: {
                            value: _vm.cpassword,
                            callback: function($$v) {
                              _vm.cpassword = $$v
                            },
                            expression: "cpassword"
                          }
                        }),
                        _vm._v(" "),
                        _c("v-checkbox", {
                          staticClass: " d-flex mt-0 mb-0 ml-1 pa-0",
                          attrs: {
                            dense: "",
                            rules: [_vm.rules.required],
                            color: "primary"
                          },
                          scopedSlots: _vm._u([
                            {
                              key: "label",
                              fn: function() {
                                return [
                                  _c(
                                    "span",
                                    { staticClass: "text-subtitle-2" },
                                    [
                                      _vm._v(" I agree to the "),
                                      _c(
                                        "a",
                                        {
                                          attrs: { href: "#" },
                                          on: {
                                            click: function($event) {
                                              $event.stopPropagation()
                                              $event.preventDefault()
                                              _vm.dialogterms = true
                                            }
                                          }
                                        },
                                        [_vm._v("Terms of Service")]
                                      ),
                                      _vm._v(" and "),
                                      _c(
                                        "a",
                                        {
                                          attrs: { href: "#" },
                                          on: {
                                            click: function($event) {
                                              $event.stopPropagation()
                                              $event.preventDefault()
                                              _vm.dialogprivacy = true
                                            }
                                          }
                                        },
                                        [_vm._v("Privacy Policy")]
                                      ),
                                      _vm._v("*")
                                    ]
                                  )
                                ]
                              },
                              proxy: true
                            }
                          ]),
                          model: {
                            value: _vm.agreement,
                            callback: function($$v) {
                              _vm.agreement = $$v
                            },
                            expression: "agreement"
                          }
                        }),
                        _vm._v(" "),
                        _c(
                          "p",
                          { staticClass: "my-1" },
                          [
                            _c(
                              "v-btn",
                              {
                                staticClass: "white--text",
                                attrs: {
                                  small: "",
                                  disabled: !_vm.form,
                                  loading: _vm.isLoading,
                                  color: "primary",
                                  depressed: ""
                                },
                                on: {
                                  click: function($event) {
                                    $event.stopPropagation()
                                    return _vm.signup()
                                  }
                                }
                              },
                              [_vm._v("Signup")]
                            )
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "d-flex justify-space-between" },
                          [
                            _c("span", [
                              _c("a", { attrs: { href: "" } }, [
                                _vm._v("Forgot ")
                              ]),
                              _vm._v(" password?")
                            ]),
                            _vm._v(" "),
                            _c("span", [
                              _vm._v("Already have "),
                              _c(
                                "a",
                                {
                                  on: {
                                    click: function($event) {
                                      $event.stopPropagation()
                                      _vm.dialoglogin = true
                                    }
                                  }
                                },
                                [_vm._v(" an account?")]
                              )
                            ])
                          ]
                        )
                      ],
                      1
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-card-text",
                  {
                    staticClass:
                      "text-center text--lighten-2 text-subtitle-2 ma-0 pa-0"
                  },
                  [_vm._v("Alternatively Signup with: ")]
                ),
                _vm._v(" "),
                _c("v-divider"),
                _vm._v(" "),
                _c(
                  "v-card-actions",
                  { staticClass: "justify-space-between " },
                  [
                    _c(
                      "v-btn",
                      {
                        staticClass: "text-capitalize",
                        attrs: { small: "", dark: "", color: "blue darken-1" }
                      },
                      [
                        _c("v-icon", { attrs: { dense: "" } }, [
                          _vm._v("mdi-google")
                        ]),
                        _vm._v("Google")
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        staticClass: "text-capitalize",
                        attrs: { small: "", dark: "", color: "blue darken-1" }
                      },
                      [
                        _c("v-icon", { attrs: { dense: "" } }, [
                          _vm._v("mdi-facebook")
                        ]),
                        _vm._v("Facebook")
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        staticClass: "text-capitalize",
                        attrs: { small: "", dark: "", color: "blue darken-1" }
                      },
                      [
                        _c("v-icon", { attrs: { dense: "" } }, [
                          _vm._v("mdi-twitter")
                        ]),
                        _vm._v("Twitter")
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        staticClass: "text-capitalize",
                        attrs: { small: "", dark: "", color: "blue darken-1" }
                      },
                      [
                        _c("v-icon", { attrs: { dense: "" } }, [
                          _vm._v("mdi-linkedin")
                        ]),
                        _vm._v("LinkedIn")
                      ],
                      1
                    )
                  ],
                  1
                )
              ],
              1
            )
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "v-dialog",
          {
            attrs: { absolute: "", "max-width": "400", persistent: "" },
            model: {
              value: _vm.dialogterms,
              callback: function($$v) {
                _vm.dialogterms = $$v
              },
              expression: "dialogterms"
            }
          },
          [
            _c(
              "v-card",
              [
                _c("v-card-title", { staticClass: "headline grey lighten-3" }, [
                  _vm._v("Terms of Service")
                ]),
                _vm._v(" "),
                _c("v-card-text", [
                  _vm._v(
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. \n              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \n              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non \n              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n            "
                  )
                ]),
                _vm._v(" "),
                _c("v-divider"),
                _vm._v(" "),
                _c(
                  "v-card-actions",
                  [
                    _c(
                      "v-btn",
                      {
                        attrs: { text: "" },
                        on: {
                          click: function($event) {
                            ;(_vm.agreement = false), (_vm.dialogterms = false)
                          }
                        }
                      },
                      [_vm._v("No")]
                    ),
                    _vm._v(" "),
                    _c("v-spacer"),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        staticClass: "white--text",
                        attrs: { color: "primary accent-4" },
                        on: {
                          click: function($event) {
                            ;(_vm.agreement = true), (_vm.dialogterms = false)
                          }
                        }
                      },
                      [_vm._v("Yes")]
                    )
                  ],
                  1
                )
              ],
              1
            )
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "v-dialog",
          {
            attrs: { absolute: "", "max-width": "400", persistent: "" },
            model: {
              value: _vm.dialogprivacy,
              callback: function($$v) {
                _vm.dialogprivacy = $$v
              },
              expression: "dialogprivacy"
            }
          },
          [
            _c(
              "v-card",
              [
                _c("v-card-title", { staticClass: "headline grey lighten-3" }, [
                  _vm._v("Privacy Policy")
                ]),
                _vm._v(" "),
                _c("v-card-text", [
                  _vm._v(
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. \n              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \n              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non \n              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n            "
                  )
                ]),
                _vm._v(" "),
                _c("v-divider"),
                _vm._v(" "),
                _c(
                  "v-card-actions",
                  [
                    _c(
                      "v-btn",
                      {
                        attrs: { text: "" },
                        on: {
                          click: function($event) {
                            ;(_vm.agreement = false),
                              (_vm.dialogprivacy = false)
                          }
                        }
                      },
                      [_vm._v("No")]
                    ),
                    _vm._v(" "),
                    _c("v-spacer"),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        staticClass: "white--text",
                        attrs: { color: "primary accent-4" },
                        on: {
                          click: function($event) {
                            ;(_vm.agreement = true), (_vm.dialogprivacy = false)
                          }
                        }
                      },
                      [_vm._v("Yes")]
                    )
                  ],
                  1
                )
              ],
              1
            )
          ],
          1
        )
      ]
    ],
    2
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavBar.vue?vue&type=template&id=23b8f3fa&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavBar.vue?vue&type=template&id=23b8f3fa&scoped=true& ***!
  \******************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* binding */ render,
/* harmony export */   "staticRenderFns": () => /* binding */ staticRenderFns
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "v-app-bar",
        {
          attrs: {
            color: "deep-purple accent-4",
            dense: "",
            extended: "",
            dark: "",
            src: "https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg"
          },
          scopedSlots: _vm._u([
            {
              key: "extension",
              fn: function() {
                return [
                  _vm.$vuetify.breakpoint.smAndUp ? _c("nav-links") : _vm._e(),
                  _vm._v(" "),
                  _c("v-spacer", { staticClass: "hidden-xs-only" }),
                  _c("nav-support", { staticClass: "hidden-sm-and-up" }),
                  _vm._v(" "),
                  _c("v-spacer", { staticClass: "hidden-sm-and-up" }),
                  _vm.$vuetify.breakpoint.xsOnly ? _c("nav-track") : _vm._e(),
                  _vm._v(" "),
                  _c("v-spacer", { staticClass: "hidden-sm-and-up" }),
                  _c("nav-compare"),
                  _vm._v(" "),
                  _c("v-spacer", { staticClass: "hidden-sm-and-up" }),
                  _c("nav-favorites"),
                  _vm._v(" "),
                  _c("v-spacer", { staticClass: "hidden-sm-and-up" }),
                  _c("nav-quotations"),
                  _vm._v(" "),
                  _c("v-spacer", { staticClass: "hidden-sm-and-up" }),
                  _c("nav-cart")
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _c("v-app-bar-nav-icon", {
            staticClass: "hidden-sm-and-up",
            on: {
              click: function($event) {
                $event.stopPropagation()
                _vm.drawer = !_vm.drawer
              }
            }
          }),
          _vm._v(" "),
          _c(
            "v-avatar",
            { staticClass: "hidden-xs-only", attrs: { size: "36" } },
            [
              _c("a", { attrs: { href: _vm.route("home") } }, [
                _c("img", {
                  attrs: {
                    src:
                      "https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo",
                    alt: "John"
                  }
                })
              ])
            ]
          ),
          _vm._v(" "),
          _c("v-app-bar-title", { staticClass: "hidden-xs-only" }, [
            _c(
              "a",
              {
                staticClass: "white--text",
                attrs: { href: _vm.route("home") }
              },
              [_vm._v("Brenden Web")]
            )
          ]),
          _vm._v(" "),
          _c("v-spacer"),
          _vm._v(" "),
          _c(
            "v-text-field",
            {
              attrs: {
                "append-icon": "mdi-microphone",
                flat: "",
                "hide-details": "",
                label: "Search",
                "prepend-inner-icon": "mdi-magnify",
                "solo-inverted": "",
                dense: ""
              }
            },
            [
              _c(
                "v-avatar",
                {
                  staticClass: "hidden-sm-and-up",
                  attrs: { slot: "prepend", size: "36" },
                  slot: "prepend"
                },
                [
                  _c("a", { attrs: { href: _vm.route("home") } }, [
                    _c("img", {
                      attrs: {
                        src:
                          "https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo",
                        alt: "John"
                      }
                    })
                  ])
                ]
              ),
              _vm._v(" "),
              _c(
                "v-app-bar-title",
                {
                  staticClass: "hidden-sm-and-up",
                  attrs: { slot: "" },
                  slot: "default"
                },
                [
                  _c(
                    "a",
                    {
                      staticClass: "white--text",
                      attrs: { href: _vm.route("home") }
                    },
                    [_vm._v("Brenden Web")]
                  )
                ]
              )
            ],
            1
          ),
          _vm._v(" "),
          _c("v-spacer", { staticClass: "hidden-xs-only" }),
          _vm._v(" "),
          _vm.$page.props.user && _vm.$vuetify.breakpoint.smAndUp
            ? _c("auth-account")
            : _vm._e(),
          _vm._v(" "),
          !_vm.$page.props.user && _vm.$vuetify.breakpoint.smAndUp
            ? _c("auth-login", {
                staticClass: "mx-1",
                attrs: {
                  dialoglogin: _vm.dialoglogin,
                  dialogsignup: _vm.dialogsignup
                }
              })
            : _vm._e(),
          _vm._v(" "),
          !_vm.$page.props.user && _vm.$vuetify.breakpoint.smAndUp
            ? _c("auth-signup", {
                staticClass: "mx-1",
                attrs: {
                  dialogsignup: _vm.dialogsignup,
                  dialoglogin: _vm.dialoglogin
                }
              })
            : _vm._e(),
          _vm._v(" "),
          _c("nav-track", { staticClass: "hidden-xs-only" }),
          _vm._v(" "),
          _c("nav-support", { staticClass: "hidden-xs-only" }),
          _vm._v(" "),
          _c("nav-sites")
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavCart.vue?vue&type=template&id=41e81fe0&scoped=true&":
/*!*******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavCart.vue?vue&type=template&id=41e81fe0&scoped=true& ***!
  \*******************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* binding */ render,
/* harmony export */   "staticRenderFns": () => /* binding */ staticRenderFns
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "v-menu",
        {
          attrs: {
            bottom: "",
            left: "",
            "offset-y": "",
            transition: "scale-transition",
            origin: "center center"
          },
          scopedSlots: _vm._u([
            {
              key: "activator",
              fn: function(ref) {
                var on = ref.on
                var attrs = ref.attrs
                return [
                  _c(
                    "v-btn",
                    _vm._g(
                      _vm._b(
                        { attrs: { text: "", small: "", dark: "" } },
                        "v-btn",
                        attrs,
                        false
                      ),
                      on
                    ),
                    [
                      _c(
                        "v-badge",
                        {
                          attrs: {
                            bordered: "",
                            top: "",
                            color: "deep-purple accent-4",
                            "offset-x": "7",
                            "offset-y": "6",
                            content: "5"
                          }
                        },
                        [_c("v-icon", [_vm._v("mdi-cart-outline")])],
                        1
                      ),
                      _c("span", [_vm._v("Cart")])
                    ],
                    1
                  )
                ]
              }
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "v-card",
            { attrs: { "max-width": "450", "max-height": "300" } },
            [
              _c(
                "v-list",
                { attrs: { "three-line": "", dense: "" } },
                [
                  _vm._l(_vm.items, function(item, index) {
                    return [
                      item.header
                        ? _c("v-subheader", {
                            key: item.header,
                            domProps: { textContent: _vm._s(item.header) }
                          })
                        : item.divider
                        ? _c("v-divider", {
                            key: index,
                            attrs: { inset: item.inset }
                          })
                        : _c(
                            "v-list-item",
                            { key: item.title },
                            [
                              _c(
                                "v-list-item-avatar",
                                [_c("v-img", { attrs: { src: item.avatar } })],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-list-item-content",
                                [
                                  _c("v-list-item-title", {
                                    domProps: { innerHTML: _vm._s(item.title) }
                                  }),
                                  _c("v-list-item-subtitle", {
                                    domProps: {
                                      innerHTML: _vm._s(item.subtitle)
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-list-item-action",
                                [
                                  _c("v-list-item-action-text", {
                                    domProps: {
                                      textContent: _vm._s(item.action)
                                    }
                                  })
                                ],
                                1
                              )
                            ],
                            1
                          )
                    ]
                  })
                ],
                2
              )
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavCompare.vue?vue&type=template&id=065f3c56&scoped=true&":
/*!**********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavCompare.vue?vue&type=template&id=065f3c56&scoped=true& ***!
  \**********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* binding */ render,
/* harmony export */   "staticRenderFns": () => /* binding */ staticRenderFns
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "v-menu",
        {
          attrs: {
            bottom: "",
            left: "",
            "offset-y": "",
            transition: "scale-transition",
            origin: "center center"
          },
          scopedSlots: _vm._u([
            {
              key: "activator",
              fn: function(ref) {
                var menu = ref.on
                var attrs = ref.attrs
                return [
                  _c(
                    "v-tooltip",
                    {
                      attrs: { bottom: "" },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "activator",
                            fn: function(ref) {
                              var tooltip = ref.on
                              return [
                                _c(
                                  "v-btn",
                                  _vm._g(
                                    _vm._b(
                                      {
                                        attrs: {
                                          text: "",
                                          small: "",
                                          fab: "",
                                          dark: ""
                                        }
                                      },
                                      "v-btn",
                                      attrs,
                                      false
                                    ),
                                    Object.assign({}, tooltip, menu)
                                  ),
                                  [
                                    _c(
                                      "v-badge",
                                      {
                                        attrs: {
                                          bordered: "",
                                          top: "",
                                          color: "deep-purple accent-4",
                                          "offset-x": "7",
                                          "offset-y": "7",
                                          content: "5"
                                        }
                                      },
                                      [_c("v-icon", [_vm._v("mdi-compare")])],
                                      1
                                    )
                                  ],
                                  1
                                )
                              ]
                            }
                          }
                        ],
                        null,
                        true
                      )
                    },
                    [_vm._v(" "), _c("span", [_vm._v("Compare")])]
                  )
                ]
              }
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "v-card",
            { attrs: { "max-width": "450", "max-height": "300" } },
            [
              _c(
                "v-list",
                { attrs: { "three-line": "", dense: "" } },
                [
                  _vm._l(_vm.items, function(item, index) {
                    return [
                      item.header
                        ? _c("v-subheader", {
                            key: item.header,
                            domProps: { textContent: _vm._s(item.header) }
                          })
                        : item.divider
                        ? _c("v-divider", {
                            key: index,
                            attrs: { inset: item.inset }
                          })
                        : _c(
                            "v-list-item",
                            { key: item.title },
                            [
                              _c(
                                "v-list-item-avatar",
                                [_c("v-img", { attrs: { src: item.avatar } })],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-list-item-content",
                                [
                                  _c("v-list-item-title", {
                                    domProps: { innerHTML: _vm._s(item.title) }
                                  }),
                                  _c("v-list-item-subtitle", {
                                    domProps: {
                                      innerHTML: _vm._s(item.subtitle)
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-list-item-action",
                                [
                                  _c("v-list-item-action-text", {
                                    domProps: {
                                      textContent: _vm._s(item.action)
                                    }
                                  })
                                ],
                                1
                              )
                            ],
                            1
                          )
                    ]
                  })
                ],
                2
              )
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavFavorites.vue?vue&type=template&id=5a80b047&scoped=true&":
/*!************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavFavorites.vue?vue&type=template&id=5a80b047&scoped=true& ***!
  \************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* binding */ render,
/* harmony export */   "staticRenderFns": () => /* binding */ staticRenderFns
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "v-menu",
        {
          attrs: {
            bottom: "",
            left: "",
            "offset-y": "",
            transition: "scale-transition",
            origin: "center center"
          },
          scopedSlots: _vm._u([
            {
              key: "activator",
              fn: function(ref) {
                var menu = ref.on
                var attrs = ref.attrs
                return [
                  _c(
                    "v-tooltip",
                    {
                      attrs: { bottom: "" },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "activator",
                            fn: function(ref) {
                              var tooltip = ref.on
                              return [
                                _c(
                                  "v-btn",
                                  _vm._g(
                                    _vm._b(
                                      {
                                        attrs: {
                                          text: "",
                                          small: "",
                                          fab: "",
                                          dark: ""
                                        }
                                      },
                                      "v-btn",
                                      attrs,
                                      false
                                    ),
                                    Object.assign({}, tooltip, menu)
                                  ),
                                  [
                                    _c(
                                      "v-badge",
                                      {
                                        attrs: {
                                          bordered: "",
                                          top: "",
                                          color: "deep-purple accent-4",
                                          "offset-x": "7",
                                          "offset-y": "7",
                                          content: "5"
                                        }
                                      },
                                      [
                                        _c("v-icon", [
                                          _vm._v("mdi-heart-flash")
                                        ])
                                      ],
                                      1
                                    )
                                  ],
                                  1
                                )
                              ]
                            }
                          }
                        ],
                        null,
                        true
                      )
                    },
                    [_vm._v(" "), _c("span", [_vm._v("Favorites")])]
                  )
                ]
              }
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "v-card",
            { attrs: { "max-width": "450", "max-height": "300" } },
            [
              _c(
                "v-list",
                { attrs: { "three-line": "", dense: "" } },
                [
                  _vm._l(_vm.items, function(item, index) {
                    return [
                      item.header
                        ? _c("v-subheader", {
                            key: item.header,
                            domProps: { textContent: _vm._s(item.header) }
                          })
                        : item.divider
                        ? _c("v-divider", {
                            key: index,
                            attrs: { inset: item.inset }
                          })
                        : _c(
                            "v-list-item",
                            { key: item.title },
                            [
                              _c(
                                "v-list-item-avatar",
                                [_c("v-img", { attrs: { src: item.avatar } })],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-list-item-content",
                                [
                                  _c("v-list-item-title", {
                                    domProps: { innerHTML: _vm._s(item.title) }
                                  }),
                                  _c("v-list-item-subtitle", {
                                    domProps: {
                                      innerHTML: _vm._s(item.subtitle)
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-list-item-action",
                                [
                                  _c("v-list-item-action-text", {
                                    domProps: {
                                      textContent: _vm._s(item.action)
                                    }
                                  })
                                ],
                                1
                              )
                            ],
                            1
                          )
                    ]
                  })
                ],
                2
              )
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavLinks.vue?vue&type=template&id=dd777eae&scoped=true&":
/*!********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavLinks.vue?vue&type=template&id=dd777eae&scoped=true& ***!
  \********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* binding */ render,
/* harmony export */   "staticRenderFns": () => /* binding */ staticRenderFns
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    _vm._l(_vm.items, function(item) {
      return _c(
        "v-btn",
        _vm._g(
          {
            key: item.title,
            staticClass: "pl-2 pr-2",
            attrs: { text: "", small: "", flat: "", href: item.link }
          },
          _vm.on
        ),
        [
          _c("v-icon", { attrs: { dense: "" } }, [_vm._v(_vm._s(item.icon))]),
          _vm._v(" " + _vm._s(item.title))
        ],
        1
      )
    }),
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavQuotations.vue?vue&type=template&id=8b0af0b2&scoped=true&":
/*!*************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavQuotations.vue?vue&type=template&id=8b0af0b2&scoped=true& ***!
  \*************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* binding */ render,
/* harmony export */   "staticRenderFns": () => /* binding */ staticRenderFns
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "v-menu",
        {
          attrs: {
            bottom: "",
            left: "",
            "offset-y": "",
            transition: "scale-transition",
            origin: "center center"
          },
          scopedSlots: _vm._u([
            {
              key: "activator",
              fn: function(ref) {
                var menu = ref.on
                var attrs = ref.attrs
                return [
                  _c(
                    "v-tooltip",
                    {
                      attrs: { bottom: "" },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "activator",
                            fn: function(ref) {
                              var tooltip = ref.on
                              return [
                                _c(
                                  "v-btn",
                                  _vm._g(
                                    _vm._b(
                                      {
                                        attrs: {
                                          text: "",
                                          small: "",
                                          fab: "",
                                          dark: ""
                                        }
                                      },
                                      "v-btn",
                                      attrs,
                                      false
                                    ),
                                    Object.assign({}, tooltip, menu)
                                  ),
                                  [
                                    _c(
                                      "v-badge",
                                      {
                                        attrs: {
                                          bordered: "",
                                          top: "",
                                          color: "deep-purple accent-4",
                                          "offset-x": "10",
                                          "offset-y": "7",
                                          content: "5"
                                        }
                                      },
                                      [
                                        _c("v-icon", [
                                          _vm._v("mdi-file-document-outline")
                                        ])
                                      ],
                                      1
                                    )
                                  ],
                                  1
                                )
                              ]
                            }
                          }
                        ],
                        null,
                        true
                      )
                    },
                    [_vm._v(" "), _c("span", [_vm._v("Quotations")])]
                  )
                ]
              }
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "v-card",
            { attrs: { "max-width": "450", "max-height": "300" } },
            [
              _c(
                "v-list",
                { attrs: { "three-line": "", dense: "" } },
                [
                  _vm._l(_vm.items, function(item, index) {
                    return [
                      item.header
                        ? _c("v-subheader", {
                            key: item.header,
                            domProps: { textContent: _vm._s(item.header) }
                          })
                        : item.divider
                        ? _c("v-divider", {
                            key: index,
                            attrs: { inset: item.inset }
                          })
                        : _c(
                            "v-list-item",
                            { key: item.title },
                            [
                              _c(
                                "v-list-item-avatar",
                                [_c("v-img", { attrs: { src: item.avatar } })],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-list-item-content",
                                [
                                  _c("v-list-item-title", {
                                    domProps: { innerHTML: _vm._s(item.title) }
                                  }),
                                  _c("v-list-item-subtitle", {
                                    domProps: {
                                      innerHTML: _vm._s(item.subtitle)
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-list-item-action",
                                [
                                  _c("v-list-item-action-text", {
                                    domProps: {
                                      textContent: _vm._s(item.action)
                                    }
                                  })
                                ],
                                1
                              )
                            ],
                            1
                          )
                    ]
                  })
                ],
                2
              )
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavSites.vue?vue&type=template&id=5b68cd08&scoped=true&":
/*!********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavSites.vue?vue&type=template&id=5b68cd08&scoped=true& ***!
  \********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* binding */ render,
/* harmony export */   "staticRenderFns": () => /* binding */ staticRenderFns
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "v-menu",
        {
          attrs: {
            bottom: "",
            left: "",
            transition: "scale-transition",
            origin: "center center"
          },
          scopedSlots: _vm._u([
            {
              key: "activator",
              fn: function(ref) {
                var on = ref.on
                var attrs = ref.attrs
                return [
                  _c(
                    "v-btn",
                    _vm._g(
                      _vm._b(
                        { attrs: { text: "", small: "", fab: "", dark: "" } },
                        "v-btn",
                        attrs,
                        false
                      ),
                      on
                    ),
                    [_c("v-icon", [_vm._v("mdi-apps")])],
                    1
                  )
                ]
              }
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "v-card",
            { attrs: { "max-width": "200" } },
            [
              _c("v-subheader", [_vm._v("Brenden Technology")]),
              _vm._v(" "),
              _c(
                "v-row",
                _vm._l(_vm.brenden, function(item, index) {
                  return _c(
                    "v-col",
                    { key: index, attrs: { cols: "3" } },
                    [
                      _c(
                        "v-tooltip",
                        {
                          scopedSlots: _vm._u(
                            [
                              {
                                key: "activator",
                                fn: function(ref) {
                                  var on = ref.on
                                  var attrs = ref.attrs
                                  return [
                                    _c(
                                      "v-card",
                                      [
                                        _c(
                                          "v-img",
                                          _vm._g(
                                            _vm._b(
                                              {
                                                attrs: {
                                                  height: "20",
                                                  src: item.logo
                                                }
                                              },
                                              "v-img",
                                              attrs,
                                              false
                                            ),
                                            on
                                          ),
                                          [
                                            _c(
                                              "v-card-title",
                                              {
                                                staticClass: "text-subtitle-2"
                                              },
                                              [_vm._v(_vm._s(item.header))]
                                            )
                                          ],
                                          1
                                        )
                                      ],
                                      1
                                    )
                                  ]
                                }
                              }
                            ],
                            null,
                            true
                          )
                        },
                        [
                          _vm._v(" "),
                          _c("span", { staticClass: "text-caption" }, [
                            _vm._v(_vm._s(item.title))
                          ])
                        ]
                      )
                    ],
                    1
                  )
                }),
                1
              ),
              _vm._v(" "),
              _c("v-subheader", [_vm._v("GenSet Engineering")]),
              _vm._v(" "),
              _vm._l(_vm.genset, function(item, index) {
                return _c(
                  "v-tooltip",
                  {
                    key: index,
                    attrs: { bottom: "" },
                    scopedSlots: _vm._u(
                      [
                        {
                          key: "activator",
                          fn: function(ref) {
                            var on = ref.on
                            var attrs = ref.attrs
                            return [
                              _c(
                                "v-btn",
                                _vm._g(
                                  _vm._b(
                                    {
                                      staticClass: "text-capitalize",
                                      attrs: { small: "", text: "" }
                                    },
                                    "v-btn",
                                    attrs,
                                    false
                                  ),
                                  on
                                ),
                                [
                                  _c("v-avatar", { attrs: { size: "18" } }, [
                                    _c("img", {
                                      attrs: {
                                        src:
                                          "https://lh3.googleusercontent.com/ogw/ADGmqu9UCU3n9k33v_0q4u98Q5trO1L5pBBCokQVUpINkg=s32-c-mo",
                                        alt: "John"
                                      }
                                    })
                                  ]),
                                  _vm._v(" "),
                                  _c(
                                    "span",
                                    { staticClass: "text-subtitle-2" },
                                    [_vm._v(_vm._s(item.header))]
                                  )
                                ],
                                1
                              )
                            ]
                          }
                        }
                      ],
                      null,
                      true
                    )
                  },
                  [
                    _vm._v(" "),
                    _c("span", { staticClass: "text-caption" }, [
                      _vm._v(_vm._s(item.title))
                    ])
                  ]
                )
              })
            ],
            2
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavSupport.vue?vue&type=template&id=b1e7c082&scoped=true&":
/*!**********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavSupport.vue?vue&type=template&id=b1e7c082&scoped=true& ***!
  \**********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* binding */ render,
/* harmony export */   "staticRenderFns": () => /* binding */ staticRenderFns
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "v-menu",
        {
          attrs: {
            bottom: "",
            left: "",
            "offset-y": "",
            transition: "scale-transition",
            origin: "center center"
          },
          scopedSlots: _vm._u([
            {
              key: "activator",
              fn: function(ref) {
                var menu = ref.on
                var attrs = ref.attrs
                return [
                  _c(
                    "v-tooltip",
                    {
                      attrs: { bottom: "" },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "activator",
                            fn: function(ref) {
                              var tooltip = ref.on
                              return [
                                _c(
                                  "v-btn",
                                  _vm._g(
                                    _vm._b(
                                      {
                                        attrs: {
                                          text: "",
                                          small: "",
                                          fab: "",
                                          dark: ""
                                        }
                                      },
                                      "v-btn",
                                      attrs,
                                      false
                                    ),
                                    Object.assign({}, tooltip, menu)
                                  ),
                                  [
                                    _c("v-icon", [
                                      _vm._v("mdi-help-circle-outline")
                                    ])
                                  ],
                                  1
                                )
                              ]
                            }
                          }
                        ],
                        null,
                        true
                      )
                    },
                    [_vm._v(" "), _c("span", [_vm._v("Support Center")])]
                  )
                ]
              }
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "v-list",
            { attrs: { dense: "" } },
            _vm._l(_vm.items, function(item, index) {
              return _c(
                "v-list-item",
                { key: index, attrs: { href: item.href } },
                [
                  _c(
                    "v-list-item-title",
                    [
                      _c("v-icon", { attrs: { color: "primary", dense: "" } }, [
                        _vm._v("mdi-help-circle-outline")
                      ]),
                      _vm._v(" " + _vm._s(item.title))
                    ],
                    1
                  )
                ],
                1
              )
            }),
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavTrack.vue?vue&type=template&id=1c89c93b&scoped=true&":
/*!********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Layouts/Brenden/Header/NavTrack.vue?vue&type=template&id=1c89c93b&scoped=true& ***!
  \********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* binding */ render,
/* harmony export */   "staticRenderFns": () => /* binding */ staticRenderFns
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "v-menu",
        {
          attrs: {
            bottom: "",
            left: "",
            "offset-y": "",
            transition: "scale-transition",
            origin: "center center"
          },
          scopedSlots: _vm._u([
            {
              key: "activator",
              fn: function(ref) {
                var menu = ref.on
                var attrs = ref.attrs
                return [
                  _c(
                    "v-tooltip",
                    {
                      attrs: { bottom: "" },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "activator",
                            fn: function(ref) {
                              var tooltip = ref.on
                              return [
                                _c(
                                  "v-btn",
                                  _vm._g(
                                    _vm._b(
                                      {
                                        attrs: {
                                          text: "",
                                          small: "",
                                          fab: "",
                                          dark: ""
                                        }
                                      },
                                      "v-btn",
                                      attrs,
                                      false
                                    ),
                                    Object.assign({}, tooltip, menu)
                                  ),
                                  [
                                    _c(
                                      "v-badge",
                                      {
                                        attrs: {
                                          bordered: "",
                                          top: "",
                                          color: "red accent-4",
                                          dot: "",
                                          "offset-x": "10",
                                          "offset-y": "6"
                                        }
                                      },
                                      [
                                        _c("v-icon", [_vm._v("mdi-truck-fast")])
                                      ],
                                      1
                                    )
                                  ],
                                  1
                                )
                              ]
                            }
                          }
                        ],
                        null,
                        true
                      )
                    },
                    [_vm._v(" "), _c("span", [_vm._v("Track Order")])]
                  )
                ]
              }
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "v-card",
            { attrs: { width: "400", "max-height": "600" } },
            [
              _c("p", [_vm._v("Track Order")]),
              _vm._v(" "),
              _c("v-text-field", {
                attrs: { label: "Order Number", solo: "" },
                model: {
                  value: _vm.first,
                  callback: function($$v) {
                    _vm.first = $$v
                  },
                  expression: "first"
                }
              }),
              _vm._v(" "),
              _c(
                "v-card-text",
                [
                  _c("p", { staticClass: "font-weight-bold mb-2" }, [
                    _vm._v("Tracking Details")
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-timeline",
                    { attrs: { "align-top": "", dense: "" } },
                    _vm._l(_vm.messages, function(message) {
                      return _c(
                        "v-timeline-item",
                        {
                          key: message.time,
                          attrs: { color: message.color, small: "" }
                        },
                        [
                          _c(
                            "div",
                            { staticClass: "font-weight-normal d-flex" },
                            [
                              _c("strong", [_vm._v(_vm._s(message.from))]),
                              _c("v-spacer"),
                              _vm._v(" @" + _vm._s(message.time))
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c("div", [_vm._v(_vm._s(message.message))])
                        ]
                      )
                    }),
                    1
                  )
                ],
                1
              )
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);