/*!

Holder - client side image placeholders
Version 2.6.0+51ebp
© 2015 Ivan Malopinsky - http://imsky.co

Site:     http://holderjs.com
Issues:   https://github.com/imsky/holder/issues
License:  http://opensource.org/licenses/MIT

*/
!function(e,t){'object'==typeof exports&&'object'==typeof module?module.exports=t():'function'==typeof define&&define.amd?define(t):'object'==typeof exports?exports.Holder=t():e.Holder=t()}(this,function(){return function(e){function t(r){if(n[r])return n[r].exports;var i=n[r]={exports:{},id:r,loaded:!1};return e[r].call(i.exports,i,i.exports,t),i.loaded=!0,i.exports};var n={};return t.m=e,t.c=n,t.p='',t(0)}([function(e,t,n){(function(t){function d(e,t,n,r){var i=S(n.substr(n.lastIndexOf(e.domain)),e);i&&C({mode:null,el:r,flags:i,engineSettings:t})};function S(e,t){for(var i={theme:l(r.settings.themes.gray,null),stylesheets:t.stylesheets,holderURL:[]},d=!1,u=String.fromCharCode(11),h=e.replace(/([^\\])\//g,'$1'+u).split(u),g=/%[0-9a-f]{2}/gi,p=h.length,a=0;p>a;a++){var n=h[a];if(n.match(g))try{n=decodeURIComponent(n)}catch(s){n=h[a]};var o=!1;if(r.flags.dimensions.match(n))d=!0,i.dimensions=r.flags.dimensions.output(n),o=!0;else if(r.flags.fluid.match(n))d=!0,i.dimensions=r.flags.fluid.output(n),i.fluid=!0,o=!0;else if(r.flags.textmode.match(n))i.textmode=r.flags.textmode.output(n),o=!0;else if(r.flags.colors.match(n)){var f=r.flags.colors.output(n);i.theme=l(i.theme,f),o=!0}
else if(t.themes[n])t.themes.hasOwnProperty(n)&&(i.theme=l(t.themes[n],null)),o=!0;else if(r.flags.font.match(n))i.font=r.flags.font.output(n),o=!0;else if(r.flags.auto.match(n))i.auto=!0,o=!0;else if(r.flags.text.match(n))i.text=r.flags.text.output(n),o=!0;else if(r.flags.size.match(n))i.size=r.flags.size.output(n),o=!0;else if(r.flags.random.match(n)){null==r.vars.cache.themeKeys&&(r.vars.cache.themeKeys=Object.keys(t.themes));var c=r.vars.cache.themeKeys[0|Math.random()*r.vars.cache.themeKeys.length];i.theme=l(t.themes[c],null),o=!0};o&&i.holderURL.push(n)};return i.holderURL.unshift(t.domain),i.holderURL=i.holderURL.join('/'),d?i:!1};function C(e){var s=e.mode,t=e.el,n=e.flags,x=e.engineSettings,a=n.dimensions,d=n.theme,v=a.width+'x'+a.height;if(s=null==s?n.fluid?'fluid':'image':s,null!=n.text&&(d.text=n.text,'object'===t.nodeName.toLowerCase())){for(var h=d.text.split('\\n'),c=0;c<h.length;c++)h[c]=F(h[c]);d.text=h.join('\\n')};var m=n.holderURL,o=l(x,null);if(n.font&&(d.font=n.font,!o.noFontFallback&&'img'===t.nodeName.toLowerCase()&&r.setup.supportsCanvas&&'svg'===o.renderer&&(o=l(o,{renderer:'canvas'}))),n.font&&'canvas'==o.renderer&&(o.reRender=!0),'background'==s)null==t.getAttribute('data-background-src')&&i(t,{'data-background-src':m});else{var p={};p[r.vars.dataAttr]=m,i(t,p)};n.theme=d,t.holderData={flags:n,engineSettings:o},('image'==s||'fluid'==s)&&i(t,{alt:d.text?d.text+' ['+v+']':v});var f={mode:s,el:t,holderSettings:{dimensions:a,theme:d,flags:n},engineSettings:o};'image'==s?('html'!=o.renderer&&n.auto||(t.style.width=a.width+'px',t.style.height=a.height+'px'),'html'==o.renderer?t.style.backgroundColor=d.background:(g(f),'exact'==n.textmode&&(t.holderData.resizeUpdate=!0,r.vars.resizableImages.push(t),u(t)))):'background'==s&&'html'!=o.renderer?g(f):'fluid'==s&&(t.holderData.resizeUpdate=!0,'%'==a.height.slice(-1)?t.style.height=a.height:null!=n.auto&&n.auto||(t.style.height=a.height+'px'),'%'==a.width.slice(-1)?t.style.width=a.width:null!=n.auto&&n.auto||(t.style.width=a.width+'px'),('inline'==t.style.display||''===t.style.display||'none'==t.style.display)&&(t.style.display='block'),M(t),'html'==o.renderer?t.style.backgroundColor=d.background:(r.vars.resizableImages.push(t),u(t)))};function g(e){function h(){var t=null;switch(s.renderer){case'canvas':t=H(d,e);break;case'svg':t=j(d,e);break;default:throw'Holder: invalid renderer: '+s.renderer};return t};var o=null,u=e.mode,a=e.holderSettings,n=e.el,s=e.engineSettings;switch(s.renderer){case'svg':if(!r.setup.supportsSVG)return;break;case'canvas':if(!r.setup.supportsCanvas)return;break;default:return};var l={width:a.dimensions.width,height:a.dimensions.height,theme:a.theme,flags:a.flags},d=I(l);if(o=h(),null==o)throw'Holder: couldn\'t render placeholder';'background'==u?(n.style.backgroundImage='url('+o+')',n.style.backgroundSize=l.width+'px '+l.height+'px'):('img'===n.nodeName.toLowerCase()?i(n,{src:o}):'object'===n.nodeName.toLowerCase()&&(i(n,{data:o}),i(n,{type:'image/svg+xml'})),s.reRender&&t.setTimeout(function(){var e=h();if(null==e)throw'Holder: couldn\'t render placeholder';'img'===n.nodeName.toLowerCase()?i(n,{src:e}):'object'===n.nodeName.toLowerCase()&&(i(n,{data:e}),i(n,{type:'image/svg+xml'}))},100)),i(n,{'data-holder-rendered':!0})};function I(e){function m(e,t,n,r){t.width=n,t.height=r,e.width=Math.max(e.width,t.width),e.height+=t.height,e.add(t)};var c=r.defaults.size;switch(parseFloat(e.theme.size)?c=e.theme.size:parseFloat(e.flags.size)&&(c=e.flags.size),e.font={family:e.theme.font?e.theme.font:'Arial, Helvetica, Open Sans, sans-serif',size:E(e.width,e.height,c),units:e.theme.units?e.theme.units:r.defaults.units,weight:e.theme.fontweight?e.theme.fontweight:'bold'},e.text=e.theme.text?e.theme.text:Math.floor(e.width)+'x'+Math.floor(e.height),e.flags.textmode){case'literal':e.text=e.flags.dimensions.width+'x'+e.flags.dimensions.height;break;case'exact':if(!e.flags.exactDimensions)break;e.text=Math.floor(e.flags.exactDimensions.width)+'x'+Math.floor(e.flags.exactDimensions.height)};var s=new T({width:e.width,height:e.height}),o=s.Shape,p=new o.Rect('holderBg',{fill:e.theme.background});p.resize(e.width,e.height),s.root.add(p);var t=new o.Group('holderTextGroup',{text:e.text,align:'center',font:e.font,fill:e.theme.foreground});t.moveTo(null,null,1),s.root.add(t);var i=t.textPositionData=O(s);if(!i)throw'Holder: staging fallback not supported yet.';t.properties.leading=i.boundingBox.height;var l=null,n=null;if(i.lineCount>1){var a=0,f=0,x=e.width*r.setup.lineWrapRatio,h=0;n=new o.Group('line'+h);for(var u=0;u<i.words.length;u++){var d=i.words[u];l=new o.Text(d.text);var g='\\n'==d.text;(a+d.width>=x||g===!0)&&(m(t,n,a,t.properties.leading),a=0,f+=t.properties.leading,h+=1,n=new o.Group('line'+h),n.y=f),g!==!0&&(l.moveTo(a,0),a+=i.spaceWidth+d.width,n.add(l))};m(t,n,a,t.properties.leading);for(var v in t.children)n=t.children[v],n.moveTo((t.width-n.width)/2,null,null);t.moveTo((e.width-t.width)/2,(e.height-t.height)/2,null),(e.height-t.height)/2<0&&t.moveTo(null,0,null)}
else l=new o.Text(e.text),n=new o.Group('line0'),n.add(l),t.add(n),t.moveTo((e.width-i.boundingBox.width)/2,(e.height-i.boundingBox.height)/2,null);return s};function E(e,t,n){var i=parseInt(e,10),o=parseInt(t,10),a=Math.max(i,o),s=Math.min(i,o),l=.8*Math.min(s,a*r.defaults.scale);return Math.round(Math.max(n,l))};function u(e){var s;s=null==e||null==e.nodeType?r.vars.resizableImages:[e];for(var a=0,d=s.length;d>a;a++){var t=s[a];if(t.holderData){var n=t.holderData.flags,i=m(t);if(i){if(!t.holderData.resizeUpdate)continue;if(n.fluid&&n.auto){var o=t.holderData.fluidConfig;switch(o.mode){case'width':i.height=i.width/o.ratio;break;case'height':i.width=i.height*o.ratio}};var l={mode:'image',holderSettings:{dimensions:i,theme:n.theme,flags:n},el:t,engineSettings:t.holderData.engineSettings};'exact'==n.textmode&&(n.exactDimensions=i,l.holderSettings.dimensions=n.dimensions),g(l)}
else z(t)}}};function M(e){if(e.holderData){var r=m(e);if(r){var n=e.holderData.flags,t={fluidHeight:'%'==n.dimensions.height.slice(-1),fluidWidth:'%'==n.dimensions.width.slice(-1),mode:null,initialDimensions:r};t.fluidWidth&&!t.fluidHeight?(t.mode='width',t.ratio=t.initialDimensions.width/parseFloat(n.dimensions.height)):!t.fluidWidth&&t.fluidHeight&&(t.mode='height',t.ratio=parseFloat(n.dimensions.width)/t.initialDimensions.height),e.holderData.fluidConfig=t}
else z(e)}};function x(){for(var e,i=[],o=Object.keys(r.vars.invisibleImages),n=0,a=o.length;a>n;n++)e=r.vars.invisibleImages[o[n]],m(e)&&'img'==e.nodeName.toLowerCase()&&(i.push(e),delete r.vars.invisibleImages[o[n]]);i.length&&h.run({images:i}),t.requestAnimationFrame(x)};function D(){r.vars.visibilityCheckStarted||(t.requestAnimationFrame(x),r.vars.visibilityCheckStarted=!0)};function z(e){e.holderData.invisibleId||(r.vars.invisibleId+=1,r.vars.invisibleImages['i'+r.vars.invisibleId]=e,e.holderData.invisibleId=r.vars.invisibleId)};function o(e,t){return null==t?document.createElement(e):document.createElementNS(t,e)};function i(e,t){for(var n in t)e.setAttribute(n,t[n])};function f(e,t,n){var l,r;null==e?(e=o('svg',a),l=o('defs',a),r=o('style',a),i(r,{type:'text/css'}),l.appendChild(r),e.appendChild(l)):r=e.querySelector('style'),e.webkitMatchesSelector&&e.setAttribute('xmlns',a);for(var s=0;s<e.childNodes.length;s++)e.childNodes[s].nodeType===P&&e.removeChild(e.childNodes[s]);for(;r.childNodes.length;)r.removeChild(r.childNodes[0]);return i(e,{width:t,height:n,viewBox:'0 0 '+t+' '+n,preserveAspectRatio:'none'}),e};function A(e,n){if(t.XMLSerializer){var a=new XMLSerializer,s='',l=n.stylesheets;if(n.svgXMLStylesheet){for(var r=y(),o=l.length-1;o>=0;o--){var h=r.createProcessingInstruction('xml-stylesheet','href="'+l[o]+'" rel="stylesheet"');r.insertBefore(h,r.firstChild)};var d=r.createProcessingInstruction('xml','version="1.0" encoding="UTF-8" standalone="yes"');r.insertBefore(d,r.firstChild),r.removeChild(r.documentElement),s=a.serializeToString(r)};var i=a.serializeToString(e);return i=i.replace(/\&amp;(\#[0-9]{2,}\;)/g,'&$1'),s+i}};function y(){return t.DOMParser?(new DOMParser).parseFromString('<xml />','application/xml'):void 0};function L(e){r.vars.debounceTimer||e.call(this),r.vars.debounceTimer&&t.clearTimeout(r.vars.debounceTimer),r.vars.debounceTimer=t.setTimeout(function(){r.vars.debounceTimer=null,e.call(this)},r.setup.debounce)};function p(){L(function(){u(null)})};var b=n(1),T=n(2),s=n(3),l=s.extend,k=s.cssProps,F=s.encodeHtmlEntity,B=s.decodeHtmlEntity,N=s.imageExists,c=s.getNodeArray,m=s.dimensionCheck,a='http://www.w3.org/2000/svg',P=8,v='2.6.0',R='\nCreated with Holder.js '+v+'.\nLearn more at http://holderjs.com\n(c) 2012-2015 Ivan Malopinsky - http://imsky.co\n',h={version:v,addTheme:function(e,t){return null!=e&&null!=t&&(r.settings.themes[e]=t),delete r.vars.cache.themeKeys,this},addImage:function(e,t){var a=document.querySelectorAll(t);if(a.length)for(var n=0,d=a.length;d>n;n++){var s=o('img'),l={};l[r.vars.dataAttr]=e,i(s,l),a[n].appendChild(s)};return this},setResizeUpdate:function(e,t){e.holderData&&(e.holderData.resizeUpdate=!!t,e.holderData.resizeUpdate&&u(e))},run:function(e){e=e||{};var a={},n=l(r.settings,e);r.vars.preempted=!0,r.vars.dataAttr=n.dataAttr||r.vars.dataAttr,a.renderer=n.renderer?n.renderer:r.setup.renderer,-1===r.setup.renderers.join(',').indexOf(a.renderer)&&(a.renderer=r.setup.supportsSVG?'svg':r.setup.supportsCanvas?'canvas':'html');var L=c(n.images),m=c(n.bgnodes),z=c(n.stylenodes),k=c(n.objects);a.stylesheets=[],a.svgXMLStylesheet=!0,a.noFontFallback=n.noFontFallback?n.noFontFallback:!1;for(var i=0;i<z.length;i++){var v=z[i];if(v.attributes.rel&&v.attributes.href&&'stylesheet'==v.attributes.rel.value){var E=v.attributes.href.value,g=o('a');g.href=E;var F=g.protocol+'//'+g.host+g.pathname+g.search;a.stylesheets.push(F)}};for(i=0;i<m.length;i++)if(t.getComputedStyle){var O=t.getComputedStyle(m[i],null).getPropertyValue('background-image'),T=m[i].getAttribute('data-background-src'),f=null;f=null==T?O:T;var p=null,w='?'+n.domain+'/';if(0===f.indexOf(w))p=f.slice(1);else if(-1!=f.indexOf(w)){var I=f.substr(f.indexOf(w)).slice(1),A=I.match(/([^"]*)"?\)/);null!=A&&(p=A[1])};if(null!=p){var D=S(p,n);D&&C({mode:'background',el:m[i],flags:D,engineSettings:a})}};for(i=0;i<k.length;i++){var y=k[i],h={};try{h.data=y.getAttribute('data'),h.dataSrc=y.getAttribute(r.vars.dataAttr)}catch(x){};var R=null!=h.data&&0===h.data.indexOf(n.domain),M=null!=h.dataSrc&&0===h.dataSrc.indexOf(n.domain);R?d(n,a,h.data,y):M&&d(n,a,h.dataSrc,y)};for(i=0;i<L.length;i++){var u=L[i],s={};try{s.src=u.getAttribute('src'),s.dataSrc=u.getAttribute(r.vars.dataAttr),s.rendered=u.getAttribute('data-holder-rendered')}catch(x){};var j=null!=s.src,b=null!=s.dataSrc&&0===s.dataSrc.indexOf(n.domain),B=null!=s.rendered&&'true'==s.rendered;j?0===s.src.indexOf(n.domain)?d(n,a,s.src,u):b&&(B?d(n,a,s.dataSrc,u):!function(e,t,n,r,i){N(e,function(e){e||d(t,n,r,i)})}(s.src,n,a,s.dataSrc,u)):b&&d(n,a,s.dataSrc,u)};return this}},r={settings:{domain:'holder.js',images:'img',objects:'object',bgnodes:'body .holderjs',stylenodes:'head link.holderjs',stylesheets:[],themes:{gray:{background:'#EEEEEE',foreground:'#AAAAAA'},social:{background:'#3a5a97',foreground:'#FFFFFF'},industrial:{background:'#434A52',foreground:'#C2F200'},sky:{background:'#0D8FDB',foreground:'#FFFFFF'},vine:{background:'#39DBAC',foreground:'#1E292C'},lava:{background:'#F8591A',foreground:'#1C2846'}}},defaults:{size:10,units:'pt',scale:1/16},flags:{dimensions:{regex:/^(\d+)x(\d+)$/,output:function(e){var t=this.regex.exec(e);return{width:+t[1],height:+t[2]}}},fluid:{regex:/^([0-9]+%?)x([0-9]+%?)$/,output:function(e){var t=this.regex.exec(e);return{width:t[1],height:t[2]}}},colors:{regex:/(?:#|\^)([0-9a-f]{3,})\:(?:#|\^)([0-9a-f]{3,})/i,output:function(e){var t=this.regex.exec(e);return{foreground:'#'+t[2],background:'#'+t[1]}}},text:{regex:/text\:(.*)/,output:function(e){return this.regex.exec(e)[1].replace('\\/','/')}},font:{regex:/font\:(.*)/,output:function(e){return this.regex.exec(e)[1]}},auto:{regex:/^auto$/},textmode:{regex:/textmode\:(.*)/,output:function(e){return this.regex.exec(e)[1]}},random:{regex:/^random$/},size:{regex:/size\:(\d+)/,output:function(e){return this.regex.exec(e)[1]}}}},O=function(){var e=null,t=null,n=null;return function(s){var u=s.root;if(r.setup.supportsSVG){var v=!1,C=function(e){return document.createTextNode(e)};(null==e||e.parentNode!==document.body)&&(v=!0),e=f(e,u.properties.width,u.properties.height),e.style.display='block',v&&(t=o('text',a),n=C(null),i(t,{x:0}),t.appendChild(n),e.appendChild(t),document.body.appendChild(e),e.style.visibility='hidden',e.style.position='absolute',e.style.top='-100%',e.style.left='-100%');var S=u.children.holderTextGroup,l=S.properties;i(t,{y:l.font.size,style:k({'font-weight':l.font.weight,'font-size':l.font.size+l.font.units,'font-family':l.font.family})}),n.nodeValue=l.text;var c=t.getBBox(),g=Math.ceil(c.width/(u.properties.width*r.setup.lineWrapRatio)),h=l.text.split(' '),m=l.text.match(/\\n/g);g+=null==m?0:m.length,n.nodeValue=l.text.replace(/[ ]+/g,'');var y=t.getComputedTextLength(),w=c.width-y,b=Math.round(w/Math.max(1,h.length-1)),p=[];if(g>1){n.nodeValue='';for(var d=0;d<h.length;d++)if(0!==h[d].length){n.nodeValue=B(h[d]);var x=t.getBBox();p.push({text:h[d],width:x.width})}};return e.style.display='none',{spaceWidth:b,lineCount:g,boundingBox:c,words:p}};return!1}}(),H=function(){var t=o('canvas'),e=null;return function(n){null==e&&(e=t.getContext('2d'));var o=n.root;t.width=r.dpr(o.properties.width),t.height=r.dpr(o.properties.height),e.textBaseline='middle',e.fillStyle=o.children.holderBg.properties.fill,e.fillRect(0,0,r.dpr(o.children.holderBg.width),r.dpr(o.children.holderBg.height));{var i=o.children.holderTextGroup;i.properties};e.font=i.properties.font.weight+' '+r.dpr(i.properties.font.size)+i.properties.font.units+' '+i.properties.font.family+', monospace',e.fillStyle=i.properties.fill;for(var u in i.children){var a=i.children[u];for(var h in a.children){var s=a.children[h],l=r.dpr(i.x+a.x+s.x),d=r.dpr(i.y+a.y+s.y+i.properties.leading/2);e.fillText(s.properties.text,l,d)}};return t.toDataURL('image/png')}}(),j=function(){if(t.XMLSerializer){var r=y(),e=f(null,0,0),n=o('rect',a);return e.appendChild(n),function(t,s){var d=t.root;f(e,d.properties.width,d.properties.height);for(var m=e.querySelectorAll('g'),u=0;u<m.length;u++)m[u].parentNode.removeChild(m[u]);var E=s.holderSettings.flags.holderURL,x='holder_'+(Number(new Date)+32768+(0|32768*Math.random())).toString(16),g=o('g',a),l=d.children.holderTextGroup,h=l.properties,w=o('g',a),T=l.textPositionData,L='#'+x+' text { '+k({fill:h.fill,'font-weight':h.font.weight,'font-family':h.font.family+', monospace','font-size':h.font.size+h.font.units})+' } ',b=r.createComment('\nSource URL: '+E+R),C=r.createCDATASection(L),S=e.querySelector('style');i(g,{id:x}),e.insertBefore(b,e.firstChild),S.appendChild(C),g.appendChild(n),g.appendChild(w),e.appendChild(g),i(n,{width:d.children.holderBg.width,height:d.children.holderBg.height,fill:d.children.holderBg.properties.fill}),l.y+=.8*T.boundingBox.height;for(var M in l.children){var c=l.children[M];for(var F in c.children){var v=c.children[F],z=l.x+c.x+v.x,D=l.y+c.y+v.y,p=o('text',a),y=document.createTextNode(null);i(p,{x:z,y:D}),y.nodeValue=v.properties.text,p.appendChild(y),w.appendChild(p)}};var I='data:image/svg+xml;base64,'+btoa(unescape(encodeURIComponent(A(e,s.engineSettings))));return I}}}();for(var w in r.flags)r.flags.hasOwnProperty(w)&&(r.flags[w].match=function(e){return e.match(this.regex)});r.setup={renderer:'html',debounce:100,ratio:1,supportsCanvas:!1,supportsSVG:!1,lineWrapRatio:.9,renderers:['html','canvas','svg']},r.dpr=function(e){return e*r.setup.ratio},r.vars={preempted:!1,resizableImages:[],invisibleImages:{},invisibleId:0,visibilityCheckStarted:!1,debounceTimer:null,cache:{},dataAttr:'data-src'},function(){var i=1,s=1,n=o('canvas'),e=null;n.getContext&&-1!=n.toDataURL('image/png').indexOf('data:image/png')&&(r.setup.renderer='canvas',e=n.getContext('2d'),r.setup.supportsCanvas=!0),r.setup.supportsCanvas&&(i=t.devicePixelRatio||1,s=e.webkitBackingStorePixelRatio||e.mozBackingStorePixelRatio||e.msBackingStorePixelRatio||e.oBackingStorePixelRatio||e.backingStorePixelRatio||1),r.setup.ratio=i/s,document.createElementNS&&document.createElementNS(a,'svg').createSVGRect&&(r.setup.renderer='svg',r.setup.supportsSVG=!0)}(),D(),b&&b(function(){r.vars.preempted||h.run(),t.addEventListener?(t.addEventListener('resize',p,!1),t.addEventListener('orientationchange',p,!1)):t.attachEvent('onresize',p),'object'==typeof t.Turbolinks&&t.document.addEventListener('page:change',function(){h.run()})}),e.exports=h}).call(t,function(){return this}())},function(e){function t(e){function d(e){if(!o){if(!t.body)return i(d);for(o=!0;e=g.shift();)i(e)}};function n(e){(c||e.type===l||t[w]===b)&&(f(),d())};function f(){c?(t[p](v,n,r),e[p](l,n,r)):(t[x](m,n),e[x](S,n))};function i(e,t){setTimeout(e,+t>=0?t:1)};function h(e){o?i(e):g.push(e)};null==document.readyState&&document.addEventListener&&(document.addEventListener('DOMContentLoaded',function k(){document.removeEventListener('DOMContentLoaded',k,!1),document.readyState='complete'},!1),document.readyState='loading');var t=e.document,C=t.documentElement,l='load',r=!1,S='on'+l,b='complete',w='readyState',y='attachEvent',x='detachEvent',u='addEventListener',v='DOMContentLoaded',m='onreadystatechange',p='removeEventListener',c=u in t,a=r,o=r,g=[];if(t[w]===b)i(d);else if(c)t[u](v,n,r),e[u](l,n,r);else{t[y](m,n),e[y](S,n);try{a=null==e.frameElement&&C}catch(s){};a&&a.doScroll&&!function z(){if(!o){try{a.doScroll('left')}catch(e){return i(z,50)};f(),d()}}()};return h.version='1.4.0',h.isReady=function(){return o},h};e.exports='undefined'!=typeof window&&t(window)},function(e,t,n){var r=n(4),i=function(e){function s(e,t){for(var n in t)e[n]=t[n];return e};var t=1,n=r.defclass({constructor:function(e){t++,this.parent=null,this.children={},this.id=t,this.name='n'+t,null!=e&&(this.name=e),this.x=0,this.y=0,this.z=0,this.width=0,this.height=0},resize:function(e,t){null!=e&&(this.width=e),null!=t&&(this.height=t)},moveTo:function(e,t,n){this.x=null!=e?e:this.x,this.y=null!=t?t:this.y,this.z=null!=n?n:this.z},add:function(e){var t=e.name;if(null!=this.children[t])throw'SceneGraph: child with that name already exists: '+t;this.children[t]=e,e.parent=this}}),i=r(n,function(t){this.constructor=function(){t.constructor.call(this,'root'),this.properties=e}}),o=r(n,function(e){function t(t,n){if(e.constructor.call(this,t),this.properties={fill:'#000'},null!=n)s(this.properties,n);else if(null!=t&&'string'!=typeof t)throw'SceneGraph: invalid node name'};this.Group=r.extend(this,{constructor:t,type:'group'}),this.Rect=r.extend(this,{constructor:t,type:'rect'}),this.Text=r.extend(this,{constructor:function(e){t.call(this),this.properties.text=e},type:'text'})}),a=new i;return this.Shape=o,this.root=a,this};e.exports=i},function(e,t){(function(e){t.extend=function(e,t){var i={};for(var r in e)e.hasOwnProperty(r)&&(i[r]=e[r]);if(null!=t)for(var n in t)t.hasOwnProperty(n)&&(i[n]=t[n]);return i},t.cssProps=function(e){var n=[];for(var t in e)e.hasOwnProperty(t)&&n.push(t+':'+e[t]);return n.join(';')},t.encodeHtmlEntity=function(e){for(var r=[],n=0,t=e.length-1;t>=0;t--)n=e.charCodeAt(t),r.unshift(n>128?['&#',n,';'].join(''):e[t]);return r.join('')},t.getNodeArray=function(t){var n=null;return'string'==typeof t?n=document.querySelectorAll(t):e.NodeList&&t instanceof e.NodeList?n=t:e.Node&&t instanceof e.Node?n=[t]:e.HTMLCollection&&t instanceof e.HTMLCollection?n=t:t instanceof Array?n=t:null===t&&(n=[]),n},t.imageExists=function(e,t){var n=new Image;n.onerror=function(){t.call(this,!1)},n.onload=function(){t.call(this,!0)},n.src=e},t.decodeHtmlEntity=function(e){return e.replace(/&#(\d+);/g,function(e,t){return String.fromCharCode(t)})},t.dimensionCheck=function(e){var t={height:e.clientHeight,width:e.clientWidth};return t.height&&t.width?t:!1}}).call(t,function(){return this}())},function(e){var n=function(){},r=Array.prototype.slice,t=function(e,t){var l=n.prototype='function'==typeof e?e.prototype:e,i=new n,o=t.apply(i,r.call(arguments,2).concat(l));if('object'==typeof o)for(var s in o)i[s]=o[s];if(!i.hasOwnProperty('constructor'))return i;var a=i.constructor;return a.prototype=i,a};t.defclass=function(e){var t=e.constructor;return t.prototype=e,t},t.extend=function(e,n){return t(e,function(e){return this.uber=e,n})},e.exports=t}])});