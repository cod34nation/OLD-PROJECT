if (self.CavalryLogger) { CavalryLogger.start_js(["CTON3"]); }

__d('Jtrace',['Banzai'],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();g.start=function(h){var i=Function.prototype.call,j={};Function.prototype.call=function(k){try{if(k instanceof Object&&'functionDetails' in k){var m=arguments[1];if(typeof m==='string'&&!j[m]){j[m]=1;if(Math.random()<h.sample){var n=localStorage.jt=1+~~localStorage.jt;if(n<=h.max)c('Banzai').post('jtrace',{j:m,t:Date.now()});}}}else if(h.snap)this.call=i;}catch(l){}return i.apply(this,arguments);};};},null);
__d("XFantailLogController",["XController"],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports=c("XController").create("\/ajax\/fantail\/",{service:{type:"String",required:true}});},null);