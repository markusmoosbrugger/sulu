define(["text!sulusearch/components/search-totals/main.html"],function(a){"use strict";var b={instanceName:null,allIndexes:"all",indexes:{}},c="sulu.search-totals.",d=function(a){return c+(this.options.instanceName?this.options.instanceName+".":"")+a},e=function(){return d.call(this,"update")};return{initialize:function(){this.options=this.sandbox.util.extend(!0,{},b,this.options),this.mainTemplate=this.sandbox.util.template(a),this.bindCustomEvents(),this.bindDomEvents()},bindCustomEvents:function(){this.sandbox.on(e.call(this),function(a,b){this.data=a,this.activeIndex=b||this.options.allIndexes,this.render()}.bind(this))},bindDomEvents:function(){this.sandbox.dom.on(this.$el,"click",function(a){a.preventDefault(),a.stopPropagation();var b=this.sandbox.dom.find(a.currentTarget),c=this.sandbox.dom.data(b,"category");return this.sandbox.emit("sulu.dropdown-input.searchResults.set",this.options.indexes[c]),!1}.bind(this),".category-link")},render:function(){var a="";this.activeIndex===this.options.allIndexes&&this.getTotal()>0&&(a=this.mainTemplate({data:this.data,indexes:this.options.indexes,activeIndex:this.activeIndex,translate:this.sandbox.translate})),this.$el.html(a)},getTotal:function(){return _.reduce(this.data,function(a,b){return a+b},0)}}});