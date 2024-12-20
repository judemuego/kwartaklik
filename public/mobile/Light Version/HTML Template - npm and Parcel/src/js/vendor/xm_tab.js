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
function XM_Tab(n) {
    var a = { triggers: "", elements: "", startOpen: 1, animation: { type: "static", speed: 0.6, easing: "ease-in-out" }, triggerActiveClass: "active", triggerEvent: "click", onTabChange: function (t) {} },
        s = {},
        e = function () {
            return 1366 <= window.innerWidth ? "desktop" : "mobile";
        },
        i = function () {
            return (s.triggers = document.querySelectorAll(a.triggers)), s.triggers.length;
        },
        r = function () {
            return (s.elements = document.querySelectorAll(a.elements)), s.elements.length;
        },
        o = function () {
            for (
                var t = function (t) {
                        var n = s.triggers[t];
                        n.addEventListener(a.triggerEvent, function () {
                            c(n) || u(t);
                        });
                    },
                    n = 0;
                n < s.triggers.length;
                n++
            )
                t(n);
        },
        l = function () {
            for (var t = 0; t < s.elements.length; t++) f(t);
        },
        c = function (t) {
            return t.classList.contains(a.triggerActiveClass);
        },
        f = function (t) {
            !(function (t) {
                t.classList.remove(a.triggerActiveClass);
            })(s.triggers[t]),
                w(s.elements[t]);
        },
        u = function (t) {
            l(),
                (function (t) {
                    t.classList.add(a.triggerActiveClass);
                })(s.triggers[t]),
                h(s.elements[t]),
                "static" !== a.animation.type
                    ? window.setTimeout(function () {
                          a.onTabChange(s.elements[t]);
                      }, 300)
                    : a.onTabChange(s.elements[t]);
        },
        y = function (t) {
            t.style.transition = "all ".concat(a.animation.speed, "s ").concat(a.animation.easing);
        },
        m = function (t) {
            t.style.transition = "none";
        },
        g = function () {
            var t = !0,
                n = !1,
                e = void 0;
            try {
                for (var i, r = s.elements[Symbol.iterator](); !(t = (i = r.next()).done); t = !0) {
                    var o = i.value;
                    p(o);
                }
            } catch (t) {
                (n = !0), (e = t);
            } finally {
                try {
                    t || null == r.return || r.return();
                } finally {
                    if (n) throw e;
                }
            }
            "static" !== a.animation.type &&
                window.setTimeout(function () {
                    !(function () {
                        var t = !0,
                            n = !1,
                            e = void 0;
                        try {
                            for (var i, r = s.elements[Symbol.iterator](); !(t = (i = r.next()).done); t = !0) {
                                var o = i.value;
                                y(o);
                            }
                        } catch (t) {
                            (n = !0), (e = t);
                        } finally {
                            try {
                                t || null == r.return || r.return();
                            } finally {
                                if (n) throw e;
                            }
                        }
                    })();
                }, 300);
        },
        v = function () {
            !(function () {
                var t = !0,
                    n = !1,
                    e = void 0;
                try {
                    for (var i, r = s.elements[Symbol.iterator](); !(t = (i = r.next()).done); t = !0) {
                        var o = i.value;
                        m(o);
                    }
                } catch (t) {
                    (n = !0), (e = t);
                } finally {
                    try {
                        t || null == r.return || r.return();
                    } finally {
                        if (n) throw e;
                    }
                }
            })();
            var t = !0,
                n = !1,
                e = void 0;
            try {
                for (var i, r = s.elements[Symbol.iterator](); !(t = (i = r.next()).done); t = !0) {
                    var o = i.value;
                    b(o);
                }
            } catch (t) {
                (n = !0), (e = t);
            } finally {
                try {
                    t || null == r.return || r.return();
                } finally {
                    if (n) throw e;
                }
            }
        },
        d = function () {
            for (var t = 0; t < s.triggers.length; t++) {
                var n = s.triggers[t];
                c(n) && (l(), u(t));
            }
        },
        p = function (t) {
            "slide-in-right" === a.animation.type && S(t, { position: "absolute", left: "0", zIndex: 1 });
        },
        b = function (t) {
            "static" === a.animation.type ? S(t, { display: "block" }) : "slide-in-right" === s.animationType && S(t, { position: "static", transform: "translate(0, 0)", opacity: 1, visibility: "visible" });
        },
        h = function (t) {
            if ("static" === a.animation.type) S(t, { display: "block" });
            else if ("slide-in-right" === a.animation.type) {
                for (var n = t; n && !(n = (n = n.previousElementSibling) || s.elements[s.elements.length - 1]).classList.contains(a.elements.substring(1)); );
                S(t, { transform: "translate(0, 0)", opacity: 1, visibility: "visible", zIndex: 2 }), w(n);
            }
        },
        w = function (t) {
            "static" === a.animation.type ? S(t, { display: "none" }) : "slide-in-right" === a.animation.type && S(t, { transform: "translate(50%, 0)", opacity: 0, visibility: "hidden", zIndex: 1 });
        },
        S = function (t, n) {
            for (var e in n) t.style[e] = n[e];
        },
        T = function t(n, e) {
            var i;
            for (var r in e)
                "object" !== _typeof(e[r]) || e[r] instanceof Date ? (e[r] instanceof Date ? (n[r] = new Date(e[r].getTime())) : (n[r] = e[r])) : ((i = e[r] instanceof Array ? [] : {}), void 0 === n[r] && (n[r] = i), t(n[r], e[r]));
        };
    return (
        (function () {
            if ((T(a, n), r() && i())) {
                (s.animationType = a.animation.type), window.innerWidth < 1366 && (a.animation.type = "static"), l(), u(a.startOpen - 1), g(), o();
                var t = e();
                window.addEventListener("resize", function () {
                    window.innerWidth < 1366 && "desktop" === t ? (v(), (a.animation.type = "static"), d(), g()) : 1366 <= window.innerWidth && "mobile" === t && (v(), (a.animation.type = s.animationType), d(), g()), (t = e());
                });
            }
        })(),
        {}
    );
}

export { XM_Tab as default };