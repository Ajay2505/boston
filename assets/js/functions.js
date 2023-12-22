/** include HTML */
function includeHTML() {
  var t, e, n, i, s;
  for (t = document.getElementsByTagName("*"), e = 0; e < t.length; e++)
    if ((i = (n = t[e]).getAttribute("boston-html")))
      return (
        ((s = new XMLHttpRequest()).onreadystatechange = function () {
          4 == this.readyState &&
            (200 == this.status && (n.innerHTML = this.responseText),
            404 == this.status && (n.innerHTML = "Page not found."),
            n.removeAttribute("boston-html"),
            includeHTML());
        }),
        s.open("GET", i, !0),
        void s.send()
      );
}
/** Mobile Detection */
let isMobile = !1;
/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
  navigator.userAgent
) && (isMobile = !0);
/** lazyload */
!(function (t, e) {
  "object" == typeof exports && "undefined" != typeof module
    ? (module.exports = e())
    : "function" == typeof define && define.amd
    ? define(e)
    : (t.lozad = e());
})(this, function () {
  "use strict";
  var t = "undefined" != typeof document && document.documentMode,
    e = {
      rootMargin: "0px",
      threshold: 0,
      load: function (e) {
        if ("picture" === e.nodeName.toLowerCase()) {
          var r = e.querySelector("img"),
            a = !1;
          null === r && ((r = document.createElement("img")), (a = !0)),
            t &&
              e.getAttribute("data-iesrc") &&
              (r.src = e.getAttribute("data-iesrc")),
            e.getAttribute("data-alt") && (r.alt = e.getAttribute("data-alt")),
            a && e.append(r);
        }
        if (
          "video" === e.nodeName.toLowerCase() &&
          !e.getAttribute("data-src") &&
          e.children
        ) {
          for (var o = e.children, i = void 0, n = 0; n <= o.length - 1; n++)
            (i = o[n].getAttribute("data-src")) && (o[n].src = i);
          e.load();
        }
        e.getAttribute("data-poster") &&
          (e.poster = e.getAttribute("data-poster")),
          e.getAttribute("data-src") && (e.src = e.getAttribute("data-src")),
          e.getAttribute("data-srcset") &&
            e.setAttribute("srcset", e.getAttribute("data-srcset"));
        var d = ",";
        if (
          (e.getAttribute("data-background-delimiter") &&
            (d = e.getAttribute("data-background-delimiter")),
          e.getAttribute("data-background-image"))
        )
          e.style.backgroundImage =
            "url('" +
            e.getAttribute("data-background-image").split(d).join("'),url('") +
            "')";
        else if (e.getAttribute("data-background-image-set")) {
          var u = e.getAttribute("data-background-image-set").split(d),
            g = u[0].substr(0, u[0].indexOf(" ")) || u[0];
          (g = -1 === g.indexOf("url(") ? "url(" + g + ")" : g),
            1 === u.length
              ? (e.style.backgroundImage = g)
              : e.setAttribute(
                  "style",
                  (e.getAttribute("style") || "") +
                    "background-image: " +
                    g +
                    "; background-image: -webkit-image-set(" +
                    u +
                    "); background-image: image-set(" +
                    u +
                    ")"
                );
        }
        e.getAttribute("data-toggle-class") &&
          e.classList.toggle(e.getAttribute("data-toggle-class"));
      },
      loaded: function () {},
    };
  function r(t) {
    t.setAttribute("data-loaded", !0);
  }
  var a = function (t) {
      return "true" === t.getAttribute("data-loaded");
    },
    o = function (t) {
      var e =
        1 < arguments.length && void 0 !== arguments[1]
          ? arguments[1]
          : document;
      return t instanceof Element
        ? [t]
        : t instanceof NodeList
        ? t
        : e.querySelectorAll(t);
    };
  return function () {
    var t,
      i,
      n =
        0 < arguments.length && void 0 !== arguments[0]
          ? arguments[0]
          : ".lozad",
      d = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {},
      u = Object.assign({}, e, d),
      g = u.root,
      s = u.rootMargin,
      c = u.threshold,
      l = u.load,
      b = u.loaded,
      f = void 0;
    "undefined" != typeof window &&
      window.IntersectionObserver &&
      (f = new IntersectionObserver(
        ((t = l),
        (i = b),
        function (e, o) {
          e.forEach(function (e) {
            (0 < e.intersectionRatio || e.isIntersecting) &&
              (o.unobserve(e.target),
              a(e.target) || (t(e.target), r(e.target), i(e.target)));
          });
        }),
        { root: g, rootMargin: s, threshold: c }
      ));
    for (var A, m = o(n, g), v = 0; v < m.length; v++)
      (A = m[v]).getAttribute("data-placeholder-background") &&
        (A.style.background = A.getAttribute("data-placeholder-background"));
    return {
      observe: function () {
        for (var t = o(n, g), e = 0; e < t.length; e++)
          a(t[e]) || (f ? f.observe(t[e]) : (l(t[e]), r(t[e]), b(t[e])));
      },
      triggerLoad: function (t) {
        a(t) || (l(t), r(t), b(t));
      },
      observer: f,
    };
  };
});
const observer = lozad(".lozad", { threshold: 0, enableAutoReload: !0 });
observer.observe();
/** covid notice */
closeNotice = (event) => {
  event.preventDefault();
  jQuery("#covid-notice").fadeOut(300);
};
/** tab drawer */
tabDrawer = (event, type) => {
  event.preventDefault();
  const tabDrawer = jQuery("#tab-drawer");
  if (type === "open") {
    if (event.srcElement.dataset.tab === "first") {
      tabFunction(event, "nights");
      tabDrawer.find(".nights").addClass("active");
    } else if (event.srcElement.dataset.tab === "second") {
      tabFunction(event, "community");
      tabDrawer.find(".community").addClass("active");
    } else if (event.srcElement.dataset.tab === "third") {
      tabFunction(event, "entreprise");
      tabDrawer.find(".entreprise").addClass("active");
    }
    tabDrawer.addClass("active");
  } else if (type === "close") {
    tabDrawer.removeClass("active");
  }
};

/** FAQs */
function runFaqs() {
  var acc = jQuery(".accordion"),
    saveIndex;
  jQuery(acc).click(function (event) {
    event.preventDefault();
    acc.removeClass("active").next().slideUp(100);
    acc.find("span").html("+");
    if (saveIndex === jQuery(this).parent().index()) {
      jQuery(this).removeClass("active").next().slideUp(100);
      jQuery(this).find("span").html("+");
      saveIndex = "";
    } else {
      jQuery(this).toggleClass("active").next().slideToggle(100);
      jQuery(this).find("span").html("-");
      saveIndex = jQuery(this).parent().index();
    }
  });
}
/** TABS */
function tabFunction(evt, id) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("_tab-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(id).style.display = "block";
  evt.currentTarget.className += " active";
}
/** Waves */
function createWaves($class, $color) {
  var cvs, ctx;
  //var nodes = 5;
  var waves = [];
  var waveHeight = 40; //height of the wave peak
  var colours = [$color];

  function init() {
    cvs = document.querySelector("." + $class);
    ctx = cvs.getContext("2d");

    var temp = new wave($color, 8);
    setInterval(update, 15); //time of wave formation
  }

  function update(array) {
    ctx.fillRect(0, 0, cvs.width, cvs.height);
    ctx.globalCompositeOperation = "copy";
    for (var i = 0; i < waves.length; i++) {
      for (var j = 0; j < waves[i].nodes.length; j++) {
        bounce(waves[i].nodes[j]);
      }
      drawWave(waves[i]);
    }
  }

  function wave(colour, nodes) {
    // body...
    this.colour = colour;
    this.nodes = [];
    var tick = 1;
    for (var i = 0; i <= nodes + 2; i++) {
      var temp = [((i - 1) * cvs.width) / nodes, 0, i * 100, 0.5]; //this.speed*plusOrMinus//last parameter i.e. 0.5 indicates speed of wave animation
      this.nodes.push(temp);
    }
    waves.push(this);
  }

  function bounce(node) {
    node[1] = (waveHeight / 2) * Math.sin(node[2] / 20) + cvs.height / 2;
    node[2] = node[2] + node[3];
  }

  function drawWave(obj) {
    var diff = function (a, b) {
      return (b - a) / 2 + a;
    };
    ctx.fillStyle = obj.colour;
    ctx.beginPath();
    ctx.moveTo(0, cvs.height - 55);
    for (var i = 0; i < obj.nodes.length; i++) {
      if (obj.nodes[i + 1]) {
        ctx.quadraticCurveTo(
          obj.nodes[i][0],
          obj.nodes[i][1],
          diff(obj.nodes[i][0], obj.nodes[i + 1][0]),
          diff(obj.nodes[i][1], obj.nodes[i + 1][1])
        );
      } else {
        ctx.lineTo(obj.nodes[i][0], obj.nodes[i][1]);
        ctx.lineTo(cvs.width, cvs.height - 55);
      }
    }
    ctx.closePath();
    ctx.fill();
  }

  document.addEventListener("DOMContentLoaded", init, false);
}

/** ===============================
 * initial execution */
var getImg = document.getElementsByTagName("img");
for ($i = 0; $i < getImg.length; $i++) {
  var imgLists = getImg[$i];
  for ($a = 0; $a < imgLists.classList.length; $a++) {
    if (imgLists.classList[$a] == "lozad") {
      getImg[$i].setAttribute(
        "src",
        `data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20${getImg[$i].clientWidth}%20${getImg[$i].clientHeight}'%3E%3C/svg%3E`
      );
      getImg[$i].setAttribute("width", getImg[$i].clientWidth);
      getImg[$i].setAttribute("height", getImg[$i].clientHeight);
    }
    if (imgLists.classList[$a] == "img-responsive") {
      getImg[$i].setAttribute("width", getImg[$i].clientWidth);
      getImg[$i].setAttribute("height", getImg[$i].clientHeight);
    }
  }
}
/** footer waves */
createWaves("black-waves", "#000");
/** copyright year */
const year = document.querySelector(".year");
const d = new Date();
const n = d.getFullYear();
year.innerHTML = n;
/** mobile header */
if (isMobile) {
  const header = document.querySelector("header");
  document.querySelector("body").style.paddingTop = `${header.clientHeight}px`;
  document.querySelector("#menu").style.paddingTop = `${
    header.clientHeight + 30
  }px`;
}
/** share button */
shareButton = () => {
  var share = jQuery("._social-share"),
    url = jQuery(location).attr("href"),
    title = jQuery("title").text();
  share.find("._icons").html(`
        <a href="https://www.facebook.com/sharer/sharer.php?u=${url}&t=${title}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" target="_blank" title="Share on Facebook" class="fb">Facebook</a>
        <a href="https://twitter.com/intent/tweet?text=${title}&url=${url}" class="tweet" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" target="_blank" title="Share on Twitter">Twitter</a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=${url}&title=${title}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" target="_blank" title="Share on Linkedin" class="ln">Linkedin</a>
    `);
};

// Get the modal
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("btnclose")[0];

if (btn) {
  btn.onclick = function () {
    modal.style.display = "block";
  };
}

if (span) {
  span.onclick = function () {
    modal.style.display = "none";
  };  
}

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};