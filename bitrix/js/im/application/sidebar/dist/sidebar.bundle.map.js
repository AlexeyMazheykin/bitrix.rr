{"version":3,"sources":["sidebar.bundle.js"],"names":["this","BX","Messenger","exports","im_application_core","ui_vue","ui_vue_vuex","im_lib_logger","im_const","im_lib_utils","Vue","component","data","created","computed","babelHelpers","objectSpread","Vuex","mapState","recent","state","collection","general","pinned","recentData","concat","toConsumableArray","methods","getController","$root","$bitrixController","getStore","store","onScroll","event","oneScreenRemaining","loadMore","onClick","openOldDialog","onRightClick","openOldContextMenu","target","scrollTop","clientHeight","scrollHeight","template","SidebarApplication","_this","params","arguments","length","undefined","classCallCheck","inited","initPromise","Promise","rootNode","node","document","createElement","templateTemp","rootNodeTemp","nodeTemp","eventBus","VueVendorV2","initCore","then","initParams","initComponent","initComplete","createClass","key","value","_this2","resolve","reject","Core","ready","controller","_this3","createVue","el","vue","requestData","drawPlaceholders","getRecentData","promise","emit","eventName","$emit","listen","callback","$on","Application","Lib","Const"],"mappings":"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","file":"sidebar.bundle.map.js"}