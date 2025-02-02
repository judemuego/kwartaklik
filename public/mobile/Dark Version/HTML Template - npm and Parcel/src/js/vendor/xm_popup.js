"use strict";
function _typeof(t) {
    return (_typeof =
        "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
            ? function (t) {
                  return typeof t;
              }
            : function (t) {
                  return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t;
              })(t);
}
function XM_Popup(t) {
    function n() {
        "static" === s.overlay.animation.type ? (r.overlay.style.display = "block") : "fade" === s.overlay.animation.type && ((r.overlay.style.opacity = 1), (r.overlay.style.visibility = "visible")),
            (r.visible = !0),
            s.sticky || (r.popupContainer.style.top = "".concat(s.offset.top + window.scrollY, "px")),
            "fade" === s.animation.type
                ? ((r.popupContainer.style.opacity = 1), (r.popupContainer.style.visibility = "visible"))
                : "translate-in" === s.animation.type || "translate-out" === s.animation.type
                ? ((r.popupContainer.style.visibility = "visible"), (r.popupContainer.style.transform = "translate(0, 0)"))
                : "zoom" === s.animation.type
                ? ((r.popupContainer.style.visibility = "visible"), (r.popupContainer.style.transform = "scale(1)"))
                : "translate-in-fade" === s.animation.type || "translate-out-fade" === s.animation.type
                ? ((r.popupContainer.style.opacity = 1), (r.popupContainer.style.visibility = "visible"), (r.popupContainer.style.transform = "translate(0, 0)"))
                : "zoom-fade" === s.animation.type && ((r.popupContainer.style.opacity = 1), (r.popupContainer.style.visibility = "visible"), (r.popupContainer.style.transform = "scale(1)")),
            (r.open = !0);
    }
    function p() {
        r.open ? f() : n();
    }
    var s = {
            overlay: { color: "0, 0, 0", opacity: 0.8, closeOnClick: !0, animation: { type: "fade", ease: "ease-in-out", speed: 0.3 } },
            align: "center",
            sticky: !1,
            offset: { top: 100 },
            animation: { type: "fade", ease: "ease-in-out", speed: 0.3, translateOffset: 100 },
            closeOnKey: 27,
        },
        r = {},
        e = function () {
            (r.overlay = document.createElement("div")), o(), document.body.appendChild(r.overlay);
        },
        o = function () {
            (r.overlay.style.width = "100%"),
                (r.overlay.style.height = "100%"),
                (r.overlay.style.backgroundColor = "rgba(".concat(s.overlay.color, ", ").concat(s.overlay.opacity, ")")),
                (r.overlay.style.position = "fixed"),
                (r.overlay.style.top = 0),
                (r.overlay.style.left = 0),
                (r.overlay.style.zIndex = 1e5),
                a(),
                i();
        },
        i = function () {
            "fade" === s.overlay.animation.type &&
                (r.overlay.style.transition = "opacity ".concat(s.overlay.animation.speed, "s ").concat(s.overlay.animation.ease, ", \n      visibility ").concat(s.overlay.animation.speed, "s ").concat(s.overlay.animation.ease));
        },
        a = function () {
            "static" === s.overlay.animation.type ? (r.overlay.style.display = "none") : "fade" === s.overlay.animation.type && ((r.overlay.style.opacity = 0), (r.overlay.style.visibility = "hidden"));
        },
        l = function () {
            if (((r.popupContainer = document.querySelector(s.container)), !r.popupContainer)) throw new Error("Couldn't find ".concat(s.container, " in the DOM"));
            y();
        },
        y = function () {
            (r.popupContainer.style.position = s.sticky ? "fixed" : "absolute"), (r.popupContainer.style.left = "50%"), (r.popupContainer.style.zIndex = 100001), f(), u();
        },
        c = function () {
            var t = window.innerHeight - r.popupContainer.offsetHeight,
                n = t < 0 ? 0 : t / 2,
                e = t < 0 ? 0 : t;
            "center" === s.align
                ? (r.popupContainer.style.top = "".concat(n, "px"))
                : "top" === s.align
                ? (r.popupContainer.style.top = "".concat(s.offset.top, "px"))
                : "bottom" === s.align && (r.popupContainer.style.top = "".concat(e, "px")),
                s.sticky || (r.visible ? (r.popupContainer.style.top = "".concat(s.offset.top + window.scrollY, "px")) : (r.popupContainer.style.top = "0")),
                (r.popupContainer.style.marginLeft = "-".concat(r.popupContainer.offsetWidth / 2, "px"));
        },
        u = function () {
            "fade" === s.animation.type
                ? (r.popupContainer.style.transition = "opacity ".concat(s.animation.speed, "s ").concat(s.animation.ease, ", \n      visibility ").concat(s.animation.speed, "s ").concat(s.animation.ease))
                : "translate-in" === s.animation.type || "translate-out" === s.animation.type || "zoom" === s.animation.type
                ? (r.popupContainer.style.transition = "transform ".concat(s.animation.speed, "s ").concat(s.animation.ease, ", \n      visibility ").concat(s.animation.speed, "s ").concat(s.animation.ease))
                : ("translate-in-fade" !== s.animation.type && "translate-out-fade" !== s.animation.type && "zoom-fade" !== s.animation.type) ||
                  (r.popupContainer.style.transition = "transform "
                      .concat(s.animation.speed, "s ")
                      .concat(s.animation.ease, ", \n      opacity ")
                      .concat(s.animation.speed, "s ")
                      .concat(s.animation.ease, ", visibility ")
                      .concat(s.animation.speed, "s ")
                      .concat(s.animation.ease));
        },
        f = function () {
            (r.visible = !1),
                "fade" === s.animation.type
                    ? ((r.popupContainer.style.opacity = 0), (r.popupContainer.style.visibility = "hidden"))
                    : "translate-in" === s.animation.type
                    ? ((r.popupContainer.style.visibility = "hidden"), (r.popupContainer.style.transform = "translate(0, -".concat(s.animation.translateOffset, "px)")))
                    : "translate-out" === s.animation.type
                    ? ((r.popupContainer.style.visibility = "hidden"), (r.popupContainer.style.transform = "translate(0, ".concat(s.animation.translateOffset, "px)")))
                    : "zoom" === s.animation.type
                    ? ((r.popupContainer.style.visibility = "hidden"), (r.popupContainer.style.transform = "scale(0)"))
                    : "translate-in-fade" === s.animation.type
                    ? ((r.popupContainer.style.opacity = 0), (r.popupContainer.style.visibility = "hidden"), (r.popupContainer.style.transform = "translate(0, -".concat(s.animation.translateOffset, "px)")))
                    : "translate-out-fade" === s.animation.type
                    ? ((r.popupContainer.style.opacity = 0), (r.popupContainer.style.visibility = "hidden"), (r.popupContainer.style.transform = "translate(0, ".concat(s.animation.translateOffset, "px)")))
                    : "zoom-fade" === s.animation.type && ((r.popupContainer.style.opacity = 0), (r.popupContainer.style.visibility = "hidden"), (r.popupContainer.style.transform = "scale(0)")),
                window.setTimeout(function () {
                    s.sticky || (r.popupContainer.style.top = "0");
                }, 1e3 * s.animation.speed),
                a(),
                (r.open = !1);
        },
        m = function () {
            var t = document.querySelectorAll(s.trigger);
            if (!t.length) throw new Error("Couldn't find ".concat(s.trigger, " in the DOM"));
            var n = !0,
                e = !1,
                o = void 0;
            try {
                for (var i, a = t[Symbol.iterator](); !(n = (i = a.next()).done); n = !0) {
                    i.value.addEventListener("click", p);
                }
            } catch (t) {
                (e = !0), (o = t);
            } finally {
                try {
                    n || null == a.return || a.return();
                } finally {
                    if (e) throw o;
                }
            }
            s.overlay.closeOnClick && r.overlay.addEventListener("click", f),
                s.closeOnKey &&
                    window.addEventListener("keydown", function (t) {
                        t.keyCode === s.closeOnKey && r.open && f();
                    });
        };
    return (
        (function t(n, e) {
            var o;
            for (var i in e)
                "object" !== _typeof(e[i]) || e[i] instanceof Date ? (e[i] instanceof Date ? (n[i] = new Date(e[i].getTime())) : (n[i] = e[i])) : ((o = e[i] instanceof Array ? [] : {}), void 0 === n[i] && (n[i] = o), t(n[i], e[i]));
        })(s, t),
        e(),
        l(),
        m(),
        c(),
        window.addEventListener("resize", c),
        r
    );
}

export { XM_Popup as default };