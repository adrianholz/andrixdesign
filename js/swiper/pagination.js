import{c as classesToSelector}from"./classes-to-selector.min.js";import{c as createElementIfNotDefined}from"./create-element-if-not-defined.min.js";import{f as elementOuterSize,g as elementIndex,a as elementParents}from"./utils.min.js";function Pagination(e){let{swiper:a,extendParams:l,on:s,emit:t}=e;const i="swiper-pagination";let n;l({pagination:{el:null,bulletElement:"span",clickable:!1,hideOnClick:!1,renderBullet:null,renderProgressbar:null,renderFraction:null,renderCustom:null,progressbarOpposite:!1,type:"bullets",dynamicBullets:!1,dynamicMainBullets:1,formatFractionCurrent:e=>e,formatFractionTotal:e=>e,bulletClass:`${i}-bullet`,bulletActiveClass:`${i}-bullet-active`,modifierClass:`${i}-`,currentClass:`${i}-current`,totalClass:`${i}-total`,hiddenClass:`${i}-hidden`,progressbarFillClass:`${i}-progressbar-fill`,progressbarOppositeClass:`${i}-progressbar-opposite`,clickableClass:`${i}-clickable`,lockClass:`${i}-lock`,horizontalClass:`${i}-horizontal`,verticalClass:`${i}-vertical`,paginationDisabledClass:`${i}-disabled`}}),a.pagination={el:null,bullets:[]};let r=0;const o=e=>(Array.isArray(e)||(e=[e].filter((e=>!!e))),e);function p(){return!a.params.pagination.el||!a.pagination.el||Array.isArray(a.pagination.el)&&0===a.pagination.el.length}function c(e,l){const{bulletActiveClass:s}=a.params.pagination;e&&(e=e[("prev"===l?"previous":"next")+"ElementSibling"])&&(e.classList.add(`${s}-${l}`),(e=e[("prev"===l?"previous":"next")+"ElementSibling"])&&e.classList.add(`${s}-${l}-${l}`))}function d(e){const l=e.target.closest(classesToSelector(a.params.pagination.bulletClass));if(!l)return;e.preventDefault();const s=elementIndex(l)*a.params.slidesPerGroup;if(a.params.loop){if(a.realIndex===s)return;const e=a.getSlideIndexByData(s),l=a.getSlideIndexByData(a.realIndex);e>a.slides.length-a.loopedSlides&&a.loopFix({direction:e>l?"next":"prev",activeSlideIndex:e,slideTo:!1}),a.slideToLoop(s)}else a.slideTo(s)}function u(){const e=a.rtl,l=a.params.pagination;if(p())return;let s,i,d=a.pagination.el;d=o(d);const u=a.virtual&&a.params.virtual.enabled?a.virtual.slides.length:a.slides.length,g=a.params.loop?Math.ceil(u/a.params.slidesPerGroup):a.snapGrid.length;if(a.params.loop?(i=a.previousRealIndex||0,s=a.params.slidesPerGroup>1?Math.floor(a.realIndex/a.params.slidesPerGroup):a.realIndex):void 0!==a.snapIndex?(s=a.snapIndex,i=a.previousSnapIndex):(i=a.previousIndex||0,s=a.activeIndex||0),"bullets"===l.type&&a.pagination.bullets&&a.pagination.bullets.length>0){const t=a.pagination.bullets;let o,p,u;if(l.dynamicBullets&&(n=elementOuterSize(t[0],a.isHorizontal()?"width":"height",!0),d.forEach((e=>{e.style[a.isHorizontal()?"width":"height"]=n*(l.dynamicMainBullets+4)+"px"})),l.dynamicMainBullets>1&&void 0!==i&&(r+=s-(i||0),r>l.dynamicMainBullets-1?r=l.dynamicMainBullets-1:r<0&&(r=0)),o=Math.max(s-r,0),p=o+(Math.min(t.length,l.dynamicMainBullets)-1),u=(p+o)/2),t.forEach((e=>{const a=[...["","-next","-next-next","-prev","-prev-prev","-main"].map((e=>`${l.bulletActiveClass}${e}`))].map((e=>"string"==typeof e&&e.includes(" ")?e.split(" "):e)).flat();e.classList.remove(...a)})),d.length>1)t.forEach((e=>{const t=elementIndex(e);t===s?e.classList.add(...l.bulletActiveClass.split(" ")):a.isElement&&e.setAttribute("part","bullet"),l.dynamicBullets&&(t>=o&&t<=p&&e.classList.add(...`${l.bulletActiveClass}-main`.split(" ")),t===o&&c(e,"prev"),t===p&&c(e,"next"))}));else{const e=t[s];if(e&&e.classList.add(...l.bulletActiveClass.split(" ")),a.isElement&&t.forEach(((e,a)=>{e.setAttribute("part",a===s?"bullet-active":"bullet")})),l.dynamicBullets){const e=t[o],a=t[p];for(let e=o;e<=p;e+=1)t[e]&&t[e].classList.add(...`${l.bulletActiveClass}-main`.split(" "));c(e,"prev"),c(a,"next")}}if(l.dynamicBullets){const s=Math.min(t.length,l.dynamicMainBullets+4),i=(n*s-n)/2-u*n,r=e?"right":"left";t.forEach((e=>{e.style[a.isHorizontal()?r:"top"]=`${i}px`}))}}d.forEach(((e,i)=>{if("fraction"===l.type&&(e.querySelectorAll(classesToSelector(l.currentClass)).forEach((e=>{e.textContent=l.formatFractionCurrent(s+1)})),e.querySelectorAll(classesToSelector(l.totalClass)).forEach((e=>{e.textContent=l.formatFractionTotal(g)}))),"progressbar"===l.type){let t;t=l.progressbarOpposite?a.isHorizontal()?"vertical":"horizontal":a.isHorizontal()?"horizontal":"vertical";const i=(s+1)/g;let n=1,r=1;"horizontal"===t?n=i:r=i,e.querySelectorAll(classesToSelector(l.progressbarFillClass)).forEach((e=>{e.style.transform=`translate3d(0,0,0) scaleX(${n}) scaleY(${r})`,e.style.transitionDuration=`${a.params.speed}ms`}))}"custom"===l.type&&l.renderCustom?(e.innerHTML=l.renderCustom(a,s+1,g),0===i&&t("paginationRender",e)):(0===i&&t("paginationRender",e),t("paginationUpdate",e)),a.params.watchOverflow&&a.enabled&&e.classList[a.isLocked?"add":"remove"](l.lockClass)}))}function g(){const e=a.params.pagination;if(p())return;const l=a.virtual&&a.params.virtual.enabled?a.virtual.slides.length:a.slides.length;let s=a.pagination.el;s=o(s);let i="";if("bullets"===e.type){let s=a.params.loop?Math.ceil(l/a.params.slidesPerGroup):a.snapGrid.length;a.params.freeMode&&a.params.freeMode.enabled&&s>l&&(s=l);for(let l=0;l<s;l+=1)e.renderBullet?i+=e.renderBullet.call(a,l,e.bulletClass):i+=`<${e.bulletElement} ${a.isElement?'part="bullet"':""} class="${e.bulletClass}"></${e.bulletElement}>`}"fraction"===e.type&&(i=e.renderFraction?e.renderFraction.call(a,e.currentClass,e.totalClass):`<span class="${e.currentClass}"></span> / <span class="${e.totalClass}"></span>`),"progressbar"===e.type&&(i=e.renderProgressbar?e.renderProgressbar.call(a,e.progressbarFillClass):`<span class="${e.progressbarFillClass}"></span>`),a.pagination.bullets=[],s.forEach((l=>{"custom"!==e.type&&(l.innerHTML=i||""),"bullets"===e.type&&a.pagination.bullets.push(...l.querySelectorAll(classesToSelector(e.bulletClass)))})),"custom"!==e.type&&t("paginationRender",s[0])}function m(){a.params.pagination=createElementIfNotDefined(a,a.originalParams.pagination,a.params.pagination,{el:"swiper-pagination"});const e=a.params.pagination;if(!e.el)return;let l;"string"==typeof e.el&&a.isElement&&(l=a.el.querySelector(e.el)),l||"string"!=typeof e.el||(l=[...document.querySelectorAll(e.el)]),l||(l=e.el),l&&0!==l.length&&(a.params.uniqueNavElements&&"string"==typeof e.el&&Array.isArray(l)&&l.length>1&&(l=[...a.el.querySelectorAll(e.el)],l.length>1&&(l=l.filter((e=>elementParents(e,".swiper")[0]===a.el))[0])),Array.isArray(l)&&1===l.length&&(l=l[0]),Object.assign(a.pagination,{el:l}),l=o(l),l.forEach((l=>{"bullets"===e.type&&e.clickable&&l.classList.add(e.clickableClass),l.classList.add(e.modifierClass+e.type),l.classList.add(a.isHorizontal()?e.horizontalClass:e.verticalClass),"bullets"===e.type&&e.dynamicBullets&&(l.classList.add(`${e.modifierClass}${e.type}-dynamic`),r=0,e.dynamicMainBullets<1&&(e.dynamicMainBullets=1)),"progressbar"===e.type&&e.progressbarOpposite&&l.classList.add(e.progressbarOppositeClass),e.clickable&&l.addEventListener("click",d),a.enabled||l.classList.add(e.lockClass)})))}function b(){const e=a.params.pagination;if(p())return;let l=a.pagination.el;l&&(l=o(l),l.forEach((l=>{l.classList.remove(e.hiddenClass),l.classList.remove(e.modifierClass+e.type),l.classList.remove(a.isHorizontal()?e.horizontalClass:e.verticalClass),e.clickable&&l.removeEventListener("click",d)}))),a.pagination.bullets&&a.pagination.bullets.forEach((a=>a.classList.remove(...e.bulletActiveClass.split(" "))))}s("changeDirection",(()=>{if(!a.pagination||!a.pagination.el)return;const e=a.params.pagination;let{el:l}=a.pagination;l=o(l),l.forEach((l=>{l.classList.remove(e.horizontalClass,e.verticalClass),l.classList.add(a.isHorizontal()?e.horizontalClass:e.verticalClass)}))})),s("init",(()=>{!1===a.params.pagination.enabled?f():(m(),g(),u())})),s("activeIndexChange",(()=>{void 0===a.snapIndex&&u()})),s("snapIndexChange",(()=>{u()})),s("snapGridLengthChange",(()=>{g(),u()})),s("destroy",(()=>{b()})),s("enable disable",(()=>{let{el:e}=a.pagination;e&&(e=o(e),e.forEach((e=>e.classList[a.enabled?"remove":"add"](a.params.pagination.lockClass))))})),s("lock unlock",(()=>{u()})),s("click",((e,l)=>{const s=l.target,i=o(a.pagination.el);if(a.params.pagination.el&&a.params.pagination.hideOnClick&&i&&i.length>0&&!s.classList.contains(a.params.pagination.bulletClass)){if(a.navigation&&(a.navigation.nextEl&&s===a.navigation.nextEl||a.navigation.prevEl&&s===a.navigation.prevEl))return;const e=i[0].classList.contains(a.params.pagination.hiddenClass);t(!0===e?"paginationShow":"paginationHide"),i.forEach((e=>e.classList.toggle(a.params.pagination.hiddenClass)))}}));const f=()=>{a.el.classList.add(a.params.pagination.paginationDisabledClass);let{el:e}=a.pagination;e&&(e=o(e),e.forEach((e=>e.classList.add(a.params.pagination.paginationDisabledClass)))),b()};Object.assign(a.pagination,{enable:()=>{a.el.classList.remove(a.params.pagination.paginationDisabledClass);let{el:e}=a.pagination;e&&(e=o(e),e.forEach((e=>e.classList.remove(a.params.pagination.paginationDisabledClass)))),m(),g(),u()},disable:f,render:g,update:u,init:m,destroy:b})}export{Pagination};
//# sourceMappingURL=pagination.js.map